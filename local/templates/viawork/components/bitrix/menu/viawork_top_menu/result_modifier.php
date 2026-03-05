<?
if (!CModule::IncludeModule("iblock")) {
    die("Модуль информационных блоков не установлен");
}
$iblockId = 2;
if (!function_exists('getIBlockSectionTree')) {
    function getIBlockSectionTree($iblockId) {
    $sections = array();
    $dbSections = CIBlockSection::GetList(
        array('LEFT_MARGIN' => 'ASC'),
        array(
            'IBLOCK_ID' => $iblockId,
            'ACTIVE' => 'Y',
            "!ID" => [32]
        ),
        false,
        array('ID', 'NAME', 'SECTION_PAGE_URL', 'DEPTH_LEVEL', 'IBLOCK_SECTION_ID', 'UF_ICON', 'UF_SHOW_IN_MENU', 'UF_LINK')
    );
    
    while ($arSection = $dbSections->GetNext()) {
        if ($arSection['ID'] == 248) {
            continue;
        }
        if (!empty($arSection['UF_ICON'])) {
           $arSection['ICON'] = CFile::GetFileArray($arSection['UF_ICON']);
        }
        $sections[] = $arSection;
    }

    $tree = array();
    foreach ($sections as $section) {
        if ($section['IBLOCK_SECTION_ID'] == 0) {
            
            if ($section['ID'] == 6 ) {
               $tree[$section['ID']] = array(
                    'NAME' => $section['NAME'],
                    'URL' => $section['UF_LINK'],
                    'ICON' => $section['ICON']['SRC'],
                    'SUB_SECTIONS' => array()
                ); 
            }else{
                $tree[$section['ID']] = array(
                    'NAME' => $section['NAME'],
                    'URL' => $section['SECTION_PAGE_URL'],
                    'ICON' => $section['ICON']['SRC'],
                    'SUB_SECTIONS' => array()
                );
            }
            
        }
    }
    
    foreach ($sections as $section) {
        if ($section['IBLOCK_SECTION_ID'] > 0 && isset($tree[$section['IBLOCK_SECTION_ID']])) {
            if ($section['UF_SHOW_IN_MENU'] == 1) {
                if ($section['IBLOCK_SECTION_ID'] == 6) {
                     $tree[$section['IBLOCK_SECTION_ID']]['SUB_SECTIONS'][] = array(
                        'NAME' => $section['NAME'],
                        'URL' => $section['UF_LINK']
                    );
                }else{
                    $tree[$section['IBLOCK_SECTION_ID']]['SUB_SECTIONS'][] = array(
                        'NAME' => $section['NAME'],
                        'URL' => $section['SECTION_PAGE_URL']
                    );
                }
            }
            
        }
    }
    return array_values($tree);
}}


$res = CIBlockElement::GetList(
    array("SORT" => "ASC"),
    array(
        "IBLOCK_ID" => $iblockId,
        "SECTION_ID" => 5,
        "ACTIVE" => "Y"
    ),
    false,
    false,
    array(
        "ID",
        "NAME", 
        "CODE",
        "DETAIL_PAGE_URL",
        "PROPERTY_SHOW_IN_MENU",
    )
);

$elementsArray = array();

while($ob = $res->getNext()) {
              
    if ($ob['PROPERTY_SHOW_IN_MENU_VALUE'] == 'Y') {
        $elementData = array(
            'NAME' => $ob['NAME'],
            'URL' => $ob['DETAIL_PAGE_URL']
        );
        $elementsArray[] = $elementData;
    }
 
}

$sectionTree = getIBlockSectionTree(2);
$arResult['CATALOG_SECTIONS'] = $sectionTree;
if (!empty($elementsArray)) {
    $arResult['CATALOG_SECTIONS'][0]["SUB_SECTIONS"] = $elementsArray;
}
?>