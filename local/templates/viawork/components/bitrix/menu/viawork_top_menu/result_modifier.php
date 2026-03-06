<?
if (!CModule::IncludeModule("iblock")) {
    die("Модуль информационных блоков не установлен");
}

$iblockId = 2;
$menuElementSectionId = 5;

if (!function_exists('buildCatalogMenuUrl')) {
    function buildCatalogMenuUrl($sectionCodePath = '', $elementCode = '')
    {
        $parts = array('/all-products');

        if ($sectionCodePath !== '') {
            $parts[] = trim($sectionCodePath, '/');
        }

        if ($elementCode !== '') {
            $parts[] = trim($elementCode, '/');
        }

        return implode('/', $parts) . '/';
    }
}

if (!function_exists('buildSectionCodePath')) {
    function buildSectionCodePath($sectionId, array &$sectionsById, array &$cache = array())
    {
        if (isset($cache[$sectionId])) {
            return $cache[$sectionId];
        }

        if (!isset($sectionsById[$sectionId])) {
            return '';
        }

        $section = $sectionsById[$sectionId];
        $parts = array();

        if ((int)$section['IBLOCK_SECTION_ID'] > 0) {
            $parentPath = buildSectionCodePath((int)$section['IBLOCK_SECTION_ID'], $sectionsById, $cache);
            if ($parentPath !== '') {
                $parts[] = $parentPath;
            }
        }

        if ($section['CODE'] !== '') {
            $parts[] = $section['CODE'];
        }

        $cache[$sectionId] = implode('/', $parts);

        return $cache[$sectionId];
    }
}

if (!function_exists('getIBlockSectionTree')) {
    function getIBlockSectionTree($iblockId)
    {
        $sectionsById = array();
        $codePathCache = array();

        $dbSections = CIBlockSection::GetList(
            array('LEFT_MARGIN' => 'ASC'),
            array(
                'IBLOCK_ID' => $iblockId,
                'ACTIVE' => 'Y',
                '!ID' => array(32, 248),
            ),
            false,
            array('ID', 'NAME', 'CODE', 'DEPTH_LEVEL', 'IBLOCK_SECTION_ID', 'UF_ICON', 'UF_SHOW_IN_MENU')
        );

        while ($arSection = $dbSections->GetNext()) {
            $arSection['ICON'] = null;
            if (!empty($arSection['UF_ICON'])) {
                $arSection['ICON'] = CFile::GetFileArray($arSection['UF_ICON']);
            }

            $sectionsById[(int)$arSection['ID']] = $arSection;
        }

        $tree = array();
        foreach ($sectionsById as $sectionId => $section) {
            $codePath = buildSectionCodePath($sectionId, $sectionsById, $codePathCache);
            $sectionUrl = $codePath !== '' ? buildCatalogMenuUrl($codePath) : '/all-products/';

            if ((int)$section['IBLOCK_SECTION_ID'] === 0) {
                $tree[$sectionId] = array(
                    'ID' => $sectionId,
                    'NAME' => $section['NAME'],
                    'URL' => $sectionUrl,
                    'ICON' => $section['ICON'] ? $section['ICON']['SRC'] : '',
                    'SUB_SECTIONS' => array(),
                );
                continue;
            }

            $parentId = (int)$section['IBLOCK_SECTION_ID'];
            if ((int)$section['UF_SHOW_IN_MENU'] === 1 && isset($tree[$parentId])) {
                $tree[$parentId]['SUB_SECTIONS'][] = array(
                    'NAME' => $section['NAME'],
                    'URL' => $sectionUrl,
                );
            }
        }

        return array($tree, $sectionsById, $codePathCache);
    }
}

list($sectionTree, $sectionsById, $codePathCache) = getIBlockSectionTree($iblockId);

$res = CIBlockElement::GetList(
    array('SORT' => 'ASC'),
    array(
        'IBLOCK_ID' => $iblockId,
        'SECTION_ID' => $menuElementSectionId,
        'ACTIVE' => 'Y',
    ),
    false,
    false,
    array(
        'ID',
        'NAME',
        'CODE',
        'IBLOCK_SECTION_ID',
        'DETAIL_PAGE_URL',
        'PROPERTY_SHOW_IN_MENU',
    )
);

$elementsArray = array();
while ($ob = $res->GetNext()) {
    if ($ob['PROPERTY_SHOW_IN_MENU_VALUE'] !== 'Y') {
        continue;
    }

    $sectionId = (int)$ob['IBLOCK_SECTION_ID'];
    $sectionCodePath = $sectionId > 0 ? buildSectionCodePath($sectionId, $sectionsById, $codePathCache) : '';
    $elementUrl = ($sectionCodePath !== '' && $ob['CODE'] !== '')
        ? buildCatalogMenuUrl($sectionCodePath, $ob['CODE'])
        : $ob['DETAIL_PAGE_URL'];

    $elementsArray[] = array(
        'NAME' => $ob['NAME'],
        'URL' => $elementUrl,
    );
}

if (!empty($elementsArray) && isset($sectionTree[$menuElementSectionId])) {
    $sectionTree[$menuElementSectionId]['SUB_SECTIONS'] = $elementsArray;
}

$arResult['CATALOG_SECTIONS'] = array_values($sectionTree);
?>
