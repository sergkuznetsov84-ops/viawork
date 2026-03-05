<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
foreach ($arResult["ITEMS"] as &$arItem){
	$arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "DETAIL_PAGE_URL");
	$arFilter = Array("IBLOCK_ID"=>2, "ID"=>$arItem["PROPERTIES"]["PRODUCT_LIST"]["VALUE"], "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
	unset($arFields);
	$arFields = [];
	while($ob = $res->GetNextElement())
	{
		//var_dump($ob);
		$arFields[$ob->GetFields()["ID"]] = $ob->GetFields();

	}
	$arItem["PRODUCT_LIST"] = $arFields;

}



if (is_object($this->__component)) 

{ 
    $this->__component->SetResultCacheKeys(['ITEMS']); 
    if (!isset($arResult['ITEMS'])) 
        $arResult['ITEMS'] = $this->__component->arResult['ITEMS']; 
}