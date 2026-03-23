<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="container-fluid">
	<div class="comp-24-main" >
		<div class="comp-24-head" >
			<div class="comp-24-head-title fadeInUp-scroll visible" data-delay="200" >
				<h1></h1>
			</div>
		</div>
		<div class="comp-24-filters" >
			<div class="mobile-overlay" ></div>
			<div class="row" >
				<div class="col-6 col-lg-3" >
					<div class="comp-24-filters-main" >
						<div class="comp-24-filters-main-btn" >
							<a href="javascript:;">
								<i class="filter-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
										<path d="M16.0117 4.04651H19.0009" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M1 4.04651H9.91696" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M10.0762 13.1729H19.0004" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M1 13.1729H3.98195" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M12.9649 0.999756C14.6472 0.999756 16.0118 2.36438 16.0118 4.04669C16.0118 5.72899 14.6472 7.09361 12.9649 7.09361C11.2826 7.09361 9.91797 5.72899 9.91797 4.04669C9.91797 2.36438 11.2826 0.999756 12.9649 0.999756Z" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
										<path d="M7.02935 10.1262C8.71166 10.1262 10.0763 11.4908 10.0763 13.1732C10.0763 14.8555 8.71166 16.2201 7.02935 16.2201C5.34704 16.2201 3.98242 14.8555 3.98242 13.1732C3.98242 11.4908 5.34704 10.1262 7.02935 10.1262Z" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</i>
								<span>Фильтр товаров</span>
								<i class="arrow-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
										<path d="M17 1L9.06352 9.06352L1 1.12704" stroke="white" stroke-width="1.33723" stroke-linecap="round" stroke-linejoin="round"></path>
									</svg>
								</i>
							</a>
						</div>
						<div class="comp-24-filters-body" >
							<?$GLOBALS[$arParams["FILTER_NAME"]][] = array('!SUBSECTION' => 6);?>
							
							<?$APPLICATION->IncludeComponent(
								"bitrix:catalog.smart.filter", 
								"nurus_filter", 
								array(
									"SECTION_CODE_CUST" => $arResult["VARIABLES"]["SECTION_CODE"],
									"COMPONENT_TEMPLATE" => ".default",
									"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
									"IBLOCK_ID" => $arParams["IBLOCK_ID"],
									"PREFILTER_NAME" => $arParams["FILTER_NAME"],
									"HIDE_NOT_AVAILABLE" => "Y",
									"TEMPLATE_THEME" => "blue",
									"FILTER_VIEW_MODE" => "horizontal",
									"DISPLAY_ELEMENT_COUNT" => "Y",
									"SEF_MODE" => "N",
									"CACHE_TYPE" => "A",
									"CACHE_TIME" => "36000000",
									"CACHE_GROUPS" => "Y",
									"SAVE_IN_SESSION" => "N",
									"INSTANT_RELOAD" => "Y",
									"PAGER_PARAMS_NAME" => "arrPager",
									"PRICE_CODE" => array(
										0 => "BASE",
									),
									"CONVERT_CURRENCY" => "Y",
									"XML_EXPORT" => "N",
									"SECTION_TITLE" => "-",
									"SECTION_DESCRIPTION" => "-",
									"POPUP_POSITION" => "left",
									"SEF_RULE" => "/all-products/#SMART_FILTER_PATH#/apply/",
									"SECTION_CODE_PATH" => "",
									"SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
									"CURRENCY_ID" => "RUB",
									"FILTER_NAME" => 'resFilter',
								),
								false
							);
							
							$sortMap = [ 
								2 => ['name', 'ASC' ], 
								3 => ['name', 'DESC' ],	
								1=> ['show_counter_start', 'ASC' ]
							];
							
							if (isset($_GET['sort'])) {
								$arParams['ELEMENT_SORT_FIELD'] =  $sortMap[$_GET['sort']][0];
								$arParams['ELEMENT_SORT_ORDER'] =  $sortMap[$_GET['sort']][1];
							}
								
							$APPLICATION->IncludeComponent(
								"bitrix:catalog.section",
								"nurus",
								Array(
									"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
									"IBLOCK_ID" => $arParams["IBLOCK_ID"],
									"ELEMENT_SORT_FIELD" => $arParams["ELEMENT_SORT_FIELD"],
									"ELEMENT_SORT_ORDER" => $arParams["ELEMENT_SORT_ORDER"],
									"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
									"META_KEYWORDS" => $arParams["LIST_META_KEYWORDS"],
									"META_DESCRIPTION" => $arParams["LIST_META_DESCRIPTION"],
									"BROWSER_TITLE" => $arParams["LIST_BROWSER_TITLE"],
									"INCLUDE_SUBSECTIONS" => $arParams["INCLUDE_SUBSECTIONS"],
									"BASKET_URL" => $arParams["BASKET_URL"],
									"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
									"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
									"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
									"FILTER_NAME" => 'resFilter',
									"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
									"CACHE_TYPE" => $arParams["CACHE_TYPE"],
									"CACHE_TIME" => $arParams["CACHE_TIME"],
									"CACHE_FILTER" => $arParams["CACHE_FILTER"],
									"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
									"SET_TITLE" => $arParams["SET_TITLE"],
									"SET_STATUS_404" => $arParams["SET_STATUS_404"],
									"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
									"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
									"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
									"PRICE_CODE" => $arParams["PRICE_CODE"],
									"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
									"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],

									"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],

									"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
									"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
									"PAGER_TITLE" => $arParams["PAGER_TITLE"],
									"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
									"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
									"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
									"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
									"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],

									"SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
									"SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
									"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
									"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],
								),
								$component
							);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banner_in_catalog", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "57",
		"NEWS_COUNT" => "1",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "DETAIL_PICTURE",
			2 => "PREVIEW_HTML",
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
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
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
		"COMPONENT_TEMPLATE" => "banner_in_catalog",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"contact_us", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "30",
		"NEWS_COUNT" => "3",
		"SORT_BY1" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
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
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
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
		"COMPONENT_TEMPLATE" => "about_blog_slider",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"map", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "system_blocks",
		"IBLOCK_ID" => "48",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
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
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
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
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
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
		"COMPONENT_TEMPLATE" => "nurus",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>
   <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/supply_text.php",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "",
		"AREA_FILE_RECURSIVE" => "Y",
		"EDIT_TEMPLATE" => "include_area.php"
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>