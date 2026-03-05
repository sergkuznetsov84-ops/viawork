<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$arFilter["=CODE"] = $arResult["VARIABLES"]["SECTION_CODE"];
	$rsSection = CIBlockSection::GetList(array(), $arFilter);
    if($arSection = $rsSection->Fetch()){
        $GLOBALS["arrFilter"][] = ["=SECTION_ID" =>$arSection["ID"]];
		$arrFilter[] = ["=SECTION_ID" =>$arSection["ID"]];
			   
	}
?>
<section class="comp-47">
	<div class="comp-35-wrapper">
			<div class="container">
				<div class="comp-35-main">
					<div class="comp-35-head fadeInUp-scroll visible" data-delay="200">
						<h2><?=$arSection["NAME"];?></h2>
						<br /><br /><br /><br />
					</div>
					<div class="comp-35-content">
						<div class="row">
							<div class="col-12 col-lg-10 offset-lg-1">
<?

	
	
	$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"blog_filter_news", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "7",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "arrFilter",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "О компании",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "nurus_blog",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"COMPONENT_TEMPLATE" => "blog_filter_news",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);

?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>