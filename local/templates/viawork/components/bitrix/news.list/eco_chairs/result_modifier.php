<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$Items_product = [];
$all_ids = [];

// Собираем все ID товаров из всех привязанных системных блоков (IB 46)
foreach($arResult["ITEMS"] as $arItem) {
    if (!empty($arItem["PROPERTIES"]["PROP_HREF_PRODUCTS"]["VALUE"])) {
        foreach($arItem["PROPERTIES"]["PROP_HREF_PRODUCTS"]["VALUE"] as $product_id) {
            $all_ids[] = $product_id;
        }
    }
}

if (!empty($all_ids)) {
    $all_ids = array_unique($all_ids);

    $rs = CIBlockElement::GetList(
        array("SORT" => "ASC"), 
        array(
            "IBLOCK_ID" => 2, 
            "ID" => $all_ids,
            "ACTIVE" => "Y"
        ),
        false, 
        false,
        array("ID", "IBLOCK_ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PAGE_URL")
    );

    while($ob = $rs->GetNextElement()) {
        $arFields = $ob->GetFields();
        $arProps = $ob->GetProperties();
        
        $finalPhoto = "";

        // ШАГ 1: Проверяем наличие главной галереи (Основной вариант)
        if (!empty($arProps["GALLERY_MAIN"]["VALUE"])) {
            $val = $arProps["GALLERY_MAIN"]["VALUE"];
            // Берем первый ID из массива (или само значение, если оно не массив)
            $fileId = is_array($val) ? reset($val) : $val;
            $finalPhoto = CFile::GetPath($fileId);
        }
        
        // ШАГ 2: Если галерея пуста, берем картинку анонса (Запасной вариант)
        if (empty($finalPhoto) && !empty($arFields["PREVIEW_PICTURE"])) {
            $finalPhoto = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
        }

        // Записываем результат в массив полей под одним ключом
        $arFields["CUSTOM_PHOTO"] = $finalPhoto;
        $Items_product[] = $arFields;
    }
}

unset($arResult["ITEMS"]);
$arResult["ITEMS"] = $Items_product;

if (is_object($this->__component)) { 
    $this->__component->SetResultCacheKeys(['ITEMS']); 
}