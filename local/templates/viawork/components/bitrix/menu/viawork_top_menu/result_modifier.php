<?
if (!CModule::IncludeModule("iblock")) return;

$iblockId = 2;
$ID_PRODUCTS = 5; 
$ID_PARTNERS = 6; 
$ID_SUBSECTIONS = [7, 8]; 

if (!function_exists('buildCatalogMenuUrl')) {
    function buildCatalogMenuUrl($sectionCodePath = '', $elementCode = '') {
        $parts = array('/all-products');
        if ($sectionCodePath !== '') $parts[] = trim($sectionCodePath, '/');
        if ($elementCode !== '') $parts[] = trim($elementCode, '/');
        return implode('/', $parts) . '/';
    }
}

if (!function_exists('buildSectionCodePath')) {
    function buildSectionCodePath($sectionId, array &$sectionsById, array &$cache = array()) {
        if (isset($cache[$sectionId])) return $cache[$sectionId];
        if (!isset($sectionsById[$sectionId])) return '';
        $section = $sectionsById[$sectionId];
        $parts = array();
        if ((int)$section['IBLOCK_SECTION_ID'] > 0) {
            $parentPath = buildSectionCodePath((int)$section['IBLOCK_SECTION_ID'], $sectionsById, $cache);
            if ($parentPath !== '') $parts[] = $parentPath;
        }
        if ($section['CODE'] !== '') $parts[] = $section['CODE'];
        $cache[$sectionId] = implode('/', $parts);
        return $cache[$sectionId];
    }
}

$sectionsById = array();
$codePathCache = array();
$dbSections = CIBlockSection::GetList(
    array('SORT' => 'ASC'),
    array('IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y', '!ID' => array(32, 248, 253, 254)),
    false,
    array('ID', 'NAME', 'CODE', 'IBLOCK_SECTION_ID', 'UF_ICON', 'UF_SHOW_IN_MENU', 'UF_LINK')
);

while ($arSect = $dbSections->GetNext()) {
    $arSect['ICON_SRC'] = '';
    if (!empty($arSect['UF_ICON'])) {
        $file = CFile::GetFileArray($arSect['UF_ICON']);
        $arSect['ICON_SRC'] = $file['SRC'];
    }
    $sectionsById[(int)$arSect['ID']] = $arSect;
}

// Элементы для раздела 5
$elementsFor5 = [];
$resElements = CIBlockElement::GetList(
    array('SORT' => 'ASC'),
    array('IBLOCK_ID' => $iblockId, 'SECTION_ID' => $ID_PRODUCTS, 'ACTIVE' => 'Y', 'PROPERTY_SHOW_IN_MENU_VALUE' => 'Y'),
    false, false,
    array('ID', 'NAME', 'CODE', 'IBLOCK_SECTION_ID', 'DETAIL_PAGE_URL')
);
while ($obEl = $resElements->GetNext()) {
    $sCodePath = buildSectionCodePath((int)$obEl['IBLOCK_SECTION_ID'], $sectionsById, $codePathCache);
    $elementsFor5[] = [
        'NAME' => $obEl['NAME'],
        'URL' => buildCatalogMenuUrl($sCodePath, $obEl['CODE'])
    ];
}

$arResult['CATALOG_DROPDOWN'] = [];
foreach ($sectionsById as $id => $sect) {
    if ((int)$sect['IBLOCK_SECTION_ID'] == 0) {
        $subItems = [];
        if ($id == $ID_PRODUCTS) $subItems = $elementsFor5;
        
        if ($id == $ID_PARTNERS || in_array($id, $ID_SUBSECTIONS)) {
            foreach ($sectionsById as $subId => $subSect) {
                if ((int)$subSect['IBLOCK_SECTION_ID'] == $id && $subSect['UF_SHOW_IN_MENU'] == 1) {
                    $sCode = buildSectionCodePath($subId, $sectionsById, $codePathCache);
                    // Ссылка подраздела (для 6-го раздела берем UF_LINK)
                    $url = ($id == $ID_PARTNERS && !empty($subSect['UF_LINK'])) ? $subSect['UF_LINK'] : buildCatalogMenuUrl($sCode);
                    $subItems[] = ['NAME' => $subSect['NAME'], 'URL' => $url, 'TARGET' => ($id == $ID_PARTNERS) ? '_blank' : ''];
                }
            }
        }

        // Ссылка САМОГО раздела (для 6-го раздела берем UF_LINK)
        $rootUrl = ($id == $ID_PARTNERS && !empty($sect['UF_LINK'])) 
                   ? $sect['UF_LINK'] 
                   : buildCatalogMenuUrl(buildSectionCodePath($id, $sectionsById, $codePathCache));

        $arResult['CATALOG_DROPDOWN'][] = [
            'ID' => $id,
            'NAME' => $sect['NAME'],
            'URL' => $rootUrl,
            'ICON' => $sect['ICON_SRC'],
            'SUB_SECTIONS' => $subItems,
            'TARGET' => ($id == $ID_PARTNERS) ? '_blank' : ''
        ];
    }
}
?>