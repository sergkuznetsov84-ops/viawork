<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
if (!empty($arResult['ITEMS']['SECTION_BINDING'])) {
    // Кастомизация отображения свойства SECTION_BINDING
    $arResult['ITEMS']['SECTION_BINDING']['NAME'] = 'Разделы';
    $arResult['ITEMS']['SECTION_BINDING']['TYPE'] = 'LIST';
    $arResult['ITEMS']['SECTION_BINDING']['VALUES'] = [];
    
    foreach ($arSections as $section) {
        $arResult['ITEMS']['SECTION_BINDING']['VALUES'][] = [
            'ID' => $section['ID'],
            'NAME' => $section['NAME'],
            'CODE' => 'SECTION_BINDING_' . $section['ID'],
            'URL' => $APPLICATION->GetCurPageParam(
                "arrFilter_SECTION_BINDING=" . $section['ID'],
                ["arrFilter_SECTION_BINDING"]
            ),
            'SELECTED' => $_REQUEST['arrFilter_SECTION_BINDING'] == $section['ID']
        ];
    }
}
//
if (isset($arParams["TEMPLATE_THEME"]) && !empty($arParams["TEMPLATE_THEME"]))
{
	$arAvailableThemes = array();
	$dir = trim(preg_replace("'[\\\\/]+'", "/", __DIR__."/themes/"));
	if (is_dir($dir) && $directory = opendir($dir))
	{
		while (($file = readdir($directory)) !== false)
		{
			if ($file != "." && $file != ".." && is_dir($dir.$file))
				$arAvailableThemes[] = $file;
		}
		closedir($directory);
	}

	if ($arParams["TEMPLATE_THEME"] == "site")
	{
		$solution = COption::GetOptionString("main", "wizard_solution", "", SITE_ID);
		if ($solution == "eshop")
		{
			$templateId = COption::GetOptionString("main", "wizard_template_id", "eshop_bootstrap", SITE_ID);
			$templateId = (preg_match("/^eshop_adapt/", $templateId)) ? "eshop_adapt" : $templateId;
			$theme = COption::GetOptionString("main", "wizard_".$templateId."_theme_id", "blue", SITE_ID);
			$arParams["TEMPLATE_THEME"] = (in_array($theme, $arAvailableThemes)) ? $theme : "blue";
		}
	}
	else
	{
		$arParams["TEMPLATE_THEME"] = (in_array($arParams["TEMPLATE_THEME"], $arAvailableThemes)) ? $arParams["TEMPLATE_THEME"] : "blue";
	}
}
else
{
	$arParams["TEMPLATE_THEME"] = "blue";
}

$arParams["FILTER_VIEW_MODE"] = (isset($arParams["FILTER_VIEW_MODE"]) && mb_strtoupper($arParams["FILTER_VIEW_MODE"]) == "HORIZONTAL") ? "HORIZONTAL" : "VERTICAL";
$arParams["POPUP_POSITION"] = (isset($arParams["POPUP_POSITION"]) && in_array($arParams["POPUP_POSITION"], array("left", "right"))) ? $arParams["POPUP_POSITION"] : "left";
