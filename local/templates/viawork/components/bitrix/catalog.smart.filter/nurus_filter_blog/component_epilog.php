<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */

CJSCore::Init(array('fx', 'popup', 'ui.fonts.opensans'));

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