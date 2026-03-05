<div class="container-fluid">
	<div class="comp-24-main" >
		<div class="comp-24-head" >
			<div class="comp-24-head-title fadeInUp-scroll visible" data-delay="200" >
				<h1></h1>
			</div>
		</div>
		<div class="comp-24-filters" >
			<div class="mobile-overlay active" ></div>
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
									"COMPONENT_TEMPLATE" => ".default",
									"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
									"IBLOCK_ID" => $arParams["IBLOCK_ID"],
									"PREFILTER_NAME" => $arParams["FILTER_NAME"],
									"HIDE_NOT_AVAILABLE" => "N",
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
						}?>
						<?
						$APPLICATION->IncludeComponent(
							"bitrix:catalog.section",
							"nurus",
							Array(
								"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
								"IBLOCK_ID" => $arParams["IBLOCK_ID"],
								"ELEMENT_SORT_FIELD" =>  $arParams['ELEMENT_SORT_FIELD'],
								"ELEMENT_SORT_ORDER" => $arParams['ELEMENT_SORT_ORDER'],
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
								"_PRICE_COUNT" => $arParams["_PRICE_COUNT"],

								"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],

								"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
								"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
								"PAGER_TITLE" => $arParams["PAGER_TITLE"],
								"PAGER__ALWAYS" => $arParams["PAGER__ALWAYS"],
								"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
								"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
								"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
								"PAGER__ALL" => $arParams["PAGER__ALL"],

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
