<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$Items_product = [];
foreach($arResult["ITEMS"] as $arItem){
	$id =[];
	foreach($arItem["PROPERTIES"]["PROP_HREF_PRODUCTS"]["VALUE"] as $product){
		$id[] = $product;
	}
	$rs = CIBlockElement::GetList(
	array(), 
	array(
		"IBLOCK_ID" => 2, 
		"ID" => $id
	),
	false, 
	false,
	array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "DETAIL_PAGE_URL")
);
while($ar = $rs->GetNext()) {
	$Items_product[]=$ar;
}
}
unset($arResult["ITEMS"]);
$arResult["ITEMS"] = $Items_product;
if (is_object($this->__component)) 

{ 
    $this->__component->SetResultCacheKeys(['ITEMS']); 
    if (!isset($arResult['ITEMS'])) 
        $arResult['ITEMS'] = $this->__component->arResult['ITEMS']; 
}