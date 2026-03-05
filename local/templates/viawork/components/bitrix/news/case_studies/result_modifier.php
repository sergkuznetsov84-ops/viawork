<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

$arSelect = Array("ID", "NAME", "PROPERTY_PROP_PRODUCT_LIST");
$arFilter = Array("IBLOCK_ID"=>$arParams["IBLOCK_ID"], "ACTIVE"=>"Y");
$res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);
$productID = [];
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	$productID[] = $arFields["PROPERTY_PROP_PRODUCT_LIST_VALUE"];

}

$arSelect = Array("ID", "NAME", "PROPERTY_PRODUCT_SERIES");
$arFilter = Array("IBLOCK_ID"=>2, "ACTIVE"=>"Y", "ID" => $productID);
$res = CIBlockElement::GetList([], $arFilter, false, [], $arSelect);

$catInfo = [];
while($ob = $res->GetNextElement())
{
	$arFields = $ob->GetFields();
	$catInfo[$arFields["ID"]] = $arFields["PROPERTY_PRODUCT_SERIES_VALUE"];

}
$arResult['PRODUCT_CATEGORY'] = $catInfo;


$rsSection = \Bitrix\Iblock\SectionTable::getList(array(
    'order' => array('LEFT_MARGIN'=>'ASC'),
    'filter' => array(
        'IBLOCK_ID' => $arParams["IBLOCK_ID"],
		//'ID' => array_keys($section_ID),
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
$sectionInfo = [];
while ($arSection=$rsSection->fetch()) 
{
	$sectionInfo[$arSection["ID"]] = $arSection["NAME"];
}
//echo "<pre>";
//var_dump($sectionInfo);
//echo "</pre>";
$arResult['PRODUCT_SECTION'] = $sectionInfo;
if (is_object($this->__component)) 

{ 
    $this->__component->SetResultCacheKeys(['PRODUCT_CATEGORY', 'PRODUCT_SECTION']); 
    if (!isset($arResult['PRODUCT_CATEGORY']) || !isset($arResult['PRODUCT_SECTION'])) 
        $arResult['PRODUCT_CATEGORY'] = $this->__component->arResult['PRODUCT_CATEGORY']; 
        $arResult['PRODUCT_SECTION'] = $this->__component->arResult['PRODUCT_SECTION']; 
}
?>