<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
$section_ID=[];
	$db_groups = CIBlockElement::GetElementGroups($arResult['ID'], true);
    while($ar_group = $db_groups->Fetch()) {
		$section_ID[$ar_group["ID"]] = $arResult["ID"];
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


	$db_groups = CIBlockElement::GetElementGroups($arResult['ID'], true);
    while($ar_group = $db_groups->Fetch()) {
		$arResult["SECTION_INFO"][$ar_group["ID"]] = $section_ID[$ar_group["ID"]];
	}

if (is_object($this->__component)) 

{ 
    $this->__component->SetResultCacheKeys(['SECTION_INFO']); 
        $arResult = $this->__component->arResult; 
}
?>