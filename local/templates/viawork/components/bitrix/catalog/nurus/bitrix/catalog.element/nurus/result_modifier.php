<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
// hack
if (!is_array($arResult['SECTION']))
{
	$dbRes = CIBlock::GetByID($arResult['IBLOCK_ID']);
	if ($arIBlock = $dbRes->GetNext())
	{
		$arIBlock["~LIST_PAGE_URL"] = str_replace(
			array("#SERVER_NAME#", "#SITE_DIR#", "#IBLOCK_TYPE_ID#", "#IBLOCK_ID#", "#IBLOCK_CODE#", "#IBLOCK_EXTERNAL_ID#", "#CODE#"),
			array(SITE_SERVER_NAME, SITE_DIR, $arIBlock["IBLOCK_TYPE_ID"], $arIBlock["ID"], $arIBlock["CODE"], $arIBlock["EXTERNAL_ID"], $arIBlock["CODE"]),
			$arParams["IBLOCK_URL"] <> ''? trim($arParams["~IBLOCK_URL"]) : $arIBlock["~LIST_PAGE_URL"]
		);
		$arIBlock["~LIST_PAGE_URL"] = preg_replace("'/+'s", "/", $arIBlock["~LIST_PAGE_URL"]);
		$arIBlock["LIST_PAGE_URL"] = htmlspecialcharsbx($arIBlock["~LIST_PAGE_URL"]);

		$arResult['IBLOCK'] = $arIBlock;
	}
}

$arResult['PRICES']['PRICE']['PRINT_VALUE'] = number_format((float)$arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');
$arResult['PRICES']['PRICE']['PRINT_VALUE'] .= ' '.$arResult['PROPERTIES']['PRICECURRENCY']['VALUE_ENUM'];


if (!empty($arResult['PROPERTIES']['DOC_FILLES']['VALUE'])) {
	foreach ($arResult['PROPERTIES']['DOC_FILLES']['VALUE'] as $elemId) {
		$idsArr[] = $elemId;
	}
}

if (!empty($idsArr)) {
	$arFilter = array(
		"IBLOCK_ID" => 53,
		"ID" => $idsArr
	);

	$arSelect = array(
		"ID",
		"NAME", 
		"CODE",
		"DATE_ACTIVE_FROM",
		"PROPERTY_FILE" ,
		'PROPERTY_DATA_TYPE'
	);

	$res = CIBlockElement::GetList(
		array("SORT" => "ASC"), 
		$arFilter,
		false, 
		false, 
		$arSelect
	);

	while ($ob = $res->fetch()) {
		if (!empty($ob["PROPERTY_FILE_VALUE"])) {
			$fileInfo = CFile::GetFileArray($ob["PROPERTY_FILE_VALUE"]);
			if (strpos($fileInfo["ORIGINAL_NAME"], '.pdf') > 0) {
				$arResult['DOC_PDF'][] = $fileInfo;
			}else{
				$arResult['DOC_CAD'][] = $fileInfo;
			}
		}
	}	
}

