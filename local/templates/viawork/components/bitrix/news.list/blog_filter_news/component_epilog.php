<?
/*if (!empty($_REQUEST['arrFilter_SECTION_BINDING'])) {
    $GLOBALS['arrFilter'] = [
        'SECTION_ID' => $_REQUEST['arrFilter_SECTION_BINDING']
    ];
}*/
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

// Обработка AJAX-запроса
$isAjax = $_REQUEST['ajax_filter'] === 'y' || $_REQUEST['ajax_page'] === 'y';

// Обработка фильтра по разделам
$selectedSections = [];
if (!empty($_REQUEST['arrFilter_SECTION_BINDING'])) {
    $selectedSections = $_REQUEST['arrFilter_SECTION_BINDING'];
    if (!is_array($selectedSections)) {
        $selectedSections = [$selectedSections];
    }
}

if (!empty($selectedSections)) {
    $GLOBALS['arrSectionFilter'] = [
        'SECTION_ID' => $selectedSections,
        'INCLUDE_SUBSECTIONS' => 'Y'
    ];
}

?>