<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$request = Bitrix\Main\Application::getInstance()->getContext()->getRequest();

$sortCode = $request->getPost('sort') ?: '2';

// ==================== ОСНОВНЫЕ ПАРАМЕТРЫ КОМПОНЕНТА ====================
$arParams = [
    'IBLOCK_TYPE'                    => 'product',
    'IBLOCK_ID'                      => 2,
    'SECTION_ID'                     => $request->getPost('SECTION_ID'),
    'SECTION_CODE'                   => $request->getPost('SECTION_CODE'),
    'FILTER_NAME'                    => 'resFilter',
    'INCLUDE_SUBSECTIONS'            => 'Y',
    'SHOW_ALL_WO_SECTION'            => 'N',

    'PAGE_ELEMENT_COUNT'             => 18,
    'LINE_ELEMENT_COUNT'             => 3,

    'DISPLAY_TOP_PAGER'              => 'N',
    'DISPLAY_BOTTOM_PAGER'           => 'Y',
    'PAGER_TEMPLATE'                 => 'nurus',
    'PAGER_TITLE'                    => 'Товары',
    'PAGER_SHOW_ALWAYS'              => 'N',
    'PAGER_DESC_NUMBERING'           => 'N',
    'PAGER_SHOW_ALL'                 => 'N',

    'CACHE_TYPE'                     => 'A',
    'CACHE_TIME'                     => '36000000',
    'CACHE_FILTER'                   => 'N',
    'CACHE_GROUPS'                   => 'Y',

    'SET_TITLE'                      => 'N',           // не меняем заголовок при AJAX
    'SET_STATUS_404'                 => 'N',
    'BROWSER_TITLE'                  => '-',
    'META_KEYWORDS'                  => '-',
    'META_DESCRIPTION'               => '-',

    'BASKET_URL'                     => '/personal/basket.php',
    'ACTION_VARIABLE'                => 'action',
    'PRODUCT_ID_VARIABLE'            => 'id',
    'SECTION_ID_VARIABLE'            => 'SECTION_ID',

    'PRICE_CODE'                     => [],
    'USE_PRICE_COUNT'                => 'N',
    'SHOW_PRICE_COUNT'               => '1',
    'PRICE_VAT_INCLUDE'              => 'Y',

    'DISPLAY_COMPARE'                => 'N',

    // Сортировка будет переопределяться ниже
    'ELEMENT_SORT_FIELD'             => 'sort',
    'ELEMENT_SORT_ORDER'             => 'asc',
];

// ====================== ОБРАБОТКА СОРТИРОВКИ ======================
switch ($sortCode) {
    case '1': // Новизне (по дате создания DESC)
        $arParams['ELEMENT_SORT_FIELD'] = 'CREATED';
        $arParams['ELEMENT_SORT_ORDER'] = 'desc';
        break;

    case '2': // А-Я (по имени ASC)
        $arParams['ELEMENT_SORT_FIELD'] = 'NAME';
        $arParams['ELEMENT_SORT_ORDER'] = 'asc';
        break;

    case '3': // Я-А (по имени DESC)
        $arParams['ELEMENT_SORT_FIELD'] = 'NAME';
        $arParams['ELEMENT_SORT_ORDER'] = 'desc';
        break;

    case 'price_asc':
        $arParams['ELEMENT_SORT_FIELD'] = 'CATALOG_PRICE_1';
        $arParams['ELEMENT_SORT_ORDER'] = 'asc';
        break;

    case 'price_desc':
        $arParams['ELEMENT_SORT_FIELD'] = 'CATALOG_PRICE_1';
        $arParams['ELEMENT_SORT_ORDER'] = 'desc';
        break;

    default: // по умолчанию — как было (sort)
        $arParams['ELEMENT_SORT_FIELD'] = 'sort';
        $arParams['ELEMENT_SORT_ORDER'] = 'asc';
        break;
}

// ====================== ВЫВОД ТОЛЬКО ТОВАРОВ ======================
ob_start();

$APPLICATION->IncludeComponent(
    "bitrix:catalog.section",
    "nurus",                    // ваш шаблон
    $arParams,
    false,
    ['HIDE_ICONS' => 'Y']
);

$html = ob_get_clean();

echo $html;

require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/epilog_after.php");
?>