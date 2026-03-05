<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arResult['APPLIED_FILTERS'] = $GLOBALS['arrFilter'] ?? [];

foreach ($arResult['ITEMS'] as &$arItem) {
    $arItem['PRODUCT_NAME'] = $arItem['PROPERTIES']['PRODUCT']['VALUE'] ?? '';
    $arItem['PRODUCT_FAMILY'] = $arItem['PROPERTIES']['PRODUCT_FAMILY']['VALUE'] ?? '';
    $arItem['AREA_OF_USE'] = $arItem['PROPERTIES']['AREA_OF_USE']['VALUE'] ?? '';
    $arItem['RESOURCE_CATEGORY'] = $arItem['PROPERTIES']['RESOURCE_CATEGORY']['VALUE'] ?? '';
    $arItem['DATA_TYPE'] = $arItem['PROPERTIES']['DATA_TYPE']['VALUE'] ?? '';

    $fileId = (int)$arItem['PROPERTIES']['FILE']['VALUE'];

    if ($fileId > 0) {
        $file = CFile::GetFileArray($fileId);
        if ($file) {
            $arItem['FILE_URL'] = $file['SRC'];
            $arItem['FILE_SIZE'] = round($file['FILE_SIZE'] / 1024 / 1024, 2) . ' MB';
            $arItem['FILE_EXTENSION'] = strtoupper(pathinfo($file['ORIGINAL_NAME'], PATHINFO_EXTENSION));
        }
    }
}
unset($arItem);