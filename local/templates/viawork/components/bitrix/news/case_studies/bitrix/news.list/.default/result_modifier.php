<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
$section_ID=[];

foreach ($arResult["ITEMS"] as $arItem){
	$db_groups = CIBlockElement::GetElementGroups($arItem['ID'], true);

    while($ar_group = $db_groups->Fetch()) {
		$section_ID[$ar_group["ID"]] = $arItem["ID"];
	}
	
}

$rsSection = \Bitrix\Iblock\SectionTable::getList(array(
    'order' => array('LEFT_MARGIN'=>'ASC'),
    'filter' => array(
        'IBLOCK_ID' => $arParams["IBLOCK_ID"],
		'ID' => array_keys($section_ID),
        'ACTIVE' => 'Y',
        'GLOBAL_ACTIVE' => 'Y',
    ), 
    'select' =>  array(
        'ID',
        'NAME',
        'CODE',
        'DEPTH_LEVEL',
        'SECTION_PAGE_URL' => 'IBLOCK.SECTION_PAGE_URL',

    ),

));

while ($arSection=$rsSection->fetch()) 
{
	$section_ID[$arSection['ID']] = array_merge(["ELEMENT_ID"=>$section_ID[$arSection['ID']],"SECTION_CODE" => $arSection["CODE"],"IBLOCK_SECTION_ID"=>$arSection["ID"]],$arSection);
}

foreach ($arResult["ITEMS"] as &$arItem){
	$db_groups = CIBlockElement::GetElementGroups($arItem['ID'], true);
    while($ar_group = $db_groups->Fetch()) {
		$arItem["SECTION_INFO"][$ar_group["ID"]] = $section_ID[$ar_group["ID"]];
	}
}
if (is_object($this->__component)) 

{ 
    $this->__component->SetResultCacheKeys(['ITEMS']); 
    if (!isset($arResult['ITEMS'])) 
        $arResult['ITEMS'] = $this->__component->arResult['ITEMS']; 
}
?>