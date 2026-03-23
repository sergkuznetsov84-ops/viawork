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
    $arFilter = array("IBLOCK_ID" => 53, "ID" => $idsArr, "ACTIVE" => "Y");
    $arSelect = array("ID", "NAME", "IBLOCK_SECTION_ID", "PROPERTY_FILE");
    $res = CIBlockElement::GetList(array("SORT" => "ASC"), $arFilter, false, false, $arSelect);

    $arResult['DOCS_BY_SECTION'] = [];
    $sectionIds = [];

    while ($ob = $res->fetch()) {
        if (!empty($ob["PROPERTY_FILE_VALUE"])) {
            $sectionId = (int)$ob["IBLOCK_SECTION_ID"];
            
            // Если документ в корне (нет раздела), 
            // принудительно отправляем его в раздел с ID 249
            if ($sectionId <= 0) {
                $sectionId = 249; 
            }

            $fileInfo = CFile::GetFileArray($ob["PROPERTY_FILE_VALUE"]);
            $fileInfo["ELEMENT_NAME"] = $ob["NAME"];
            
            // Группируем файл в массив раздела
            $arResult['DOCS_BY_SECTION'][$sectionId]['FILES'][] = $fileInfo;
            
            // Сохраняем ID раздела, чтобы потом получить его название
            $sectionIds[] = $sectionId;
        }
    }

    // Получаем названия для всех собранных разделов (включая принудительный 249)
    if (!empty($sectionIds)) {
        $rsSections = CIBlockSection::GetList(
            array(), 
            array("ID" => array_unique($sectionIds)), 
            false, 
            array("ID", "NAME")
        );
        while ($arSect = $rsSections->GetNext()) {
            $arResult['DOCS_BY_SECTION'][$arSect['ID']]['NAME'] = $arSect['NAME'];
        }
    }
}


// --- ЛОГИКА ДЛЯ ВЕРХНЕГО БАННЕРА ---
$posterSrc = "";
if (!empty($arResult['DETAIL_PICTURE'])) {
    $posterSrc = $arResult['DETAIL_PICTURE']['SRC'];
} elseif (!empty($arResult['PREVIEW_PICTURE'])) {
    $posterSrc = $arResult['PREVIEW_PICTURE']['SRC'];
} elseif (!empty($arResult['PROPERTIES']['GALLERY_MAIN']['VALUE'][0])) {
    $posterSrc = CFile::GetPath($arResult['PROPERTIES']['GALLERY_MAIN']['VALUE'][0]);
}
$arResult['BANNER_POSTER'] = $posterSrc;

// 2. Теперь определяем основной медиа-файл
$arResult['BANNER_MEDIA'] = null;

if (!empty($arResult['PROPERTIES']['BANNER_MAIN']['VALUE'])) {
    $file = CFile::GetFileArray($arResult['PROPERTIES']['BANNER_MAIN']['VALUE']);
    if ($file) {
        $arResult['BANNER_MEDIA'] = [
            'SRC' => $file['SRC'],
            'IS_VIDEO' => (strpos($file["CONTENT_TYPE"], "video") !== false)
        ];
    }
}

// --- ЛОГИКА ДЛЯ СЛАЙДЕРА ОСОБЕННОСТЕЙ (FEATURES) ---
if (!empty($arResult['PROPERTIES']['FEATURES_GALLERY']['VALUE'])) {
    foreach ($arResult['PROPERTIES']['FEATURES_GALLERY']['VALUE'] as $key => $fileId) {
        $file = CFile::GetFileArray($fileId);
        if ($file) {
            $arResult['FEATURES_MEDIA'][] = [
                'SRC' => $file['SRC'],
                'IS_VIDEO' => (strpos($file["CONTENT_TYPE"], "video") !== false),
                'DESCRIPTION' => $file['DESCRIPTION'],
                'CONTENT_TYPE' => $file['CONTENT_TYPE']
            ];
        }
    }
}


// Получаем ID связанных товаров и добавляем текущий
$linkedIds = $arResult['PROPERTIES']['PRODUCT_LINK_TYPE']['VALUE'];
if (!is_array($linkedIds)) $linkedIds = [];
$linkedIds[] = $arResult['ID']; // Добавляем текущий товар в выборку

$arNavGroups = [];
$currentCategoryName = "";

// Выбираем данные всех товаров группы
$rsLinked = CIBlockElement::GetList(
    ["SORT" => "ASC"],
    ["IBLOCK_ID" => $arResult['IBLOCK_ID'], "ID" => $linkedIds, "ACTIVE" => "Y"],
    false,
    false,
    ["ID", "NAME", "DETAIL_PAGE_URL", "PROPERTY_USAGE_TYPE"]
);

while($obLinked = $rsLinked->GetNextElement()) {
    $fields = $obLinked->GetFields();
    // Получаем текстовое значение свойства список (Personal Use и т.д.)
    $props = $obLinked->GetProperties();
    $usageTypeName = $props['USAGE_TYPE']['VALUE'];

    if (empty($usageTypeName)) continue;

    // Формируем массив: Группа -> Модели
    $arNavGroups[$usageTypeName][] = [
        "ID" => $fields["ID"],
        "NAME" => $fields["NAME"],
        "URL" => $fields["DETAIL_PAGE_URL"],
        "IS_CURRENT" => ($fields["ID"] == $arResult["ID"])
    ];

    // Запоминаем, какая категория активна прямо сейчас
    if ($fields["ID"] == $arResult["ID"]) {
        $currentCategoryName = $usageTypeName;
    }
}

$arResult["NAV_TABS"] = $arNavGroups;
$arResult["CURRENT_NAV_CATEGORY"] = $currentCategoryName;