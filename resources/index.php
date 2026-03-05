<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Документы");
?>

 <main class="main-blogs">


         <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/resources.php",
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
	
		




<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/resources-text.php",
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

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"brochures", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "system_blocks",
		"IBLOCK_ID" => "51",
		"NEWS_COUNT" => "20",
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
		"COMPONENT_TEMPLATE" => "brochures",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>

<section class="comp-105">
    <div class="comp-105-wrapper">
        <div class="container-fluid">
            <div class="comp-105-main">
                <div class="comp-105-head">
                    <div class="title">
                        <h2>Библиотека данных о продуктах Nurus</h2>
                    </div>
                </div>
                <div class="comp-105-content">
                    <div class="comp-105-content-head">
                        <div class="title">
                            <h3><?= $arResult['SECTION']['NAME'] ?? '' ?></h3>
                        </div>
                    </div>
					<div class="comp-105-content-filters">
                    	<div class="comp-105-filters">
							<div class="row">
								
								<?
								$arrFilter = $GLOBALS['arrFilter'] ?? [];
								$APPLICATION->IncludeComponent(
									"bitrix:catalog.smart.filter", "nurus_filter_resourses", Array(
										"COMPONENT_TEMPLATE" => "filter_resources",
										"IBLOCK_TYPE" => "products",	// Тип инфоблока
										"IBLOCK_ID" => "53",	// Инфоблок
										"SECTION_ID" => "",	// ID раздела инфоблока
										"SECTION_CODE" => "",	// Код раздела
										"FILTER_NAME" => "arrFilter1",	// Имя выходящего массива для фильтрации
										"HIDE_NOT_AVAILABLE" => "N",
										"TEMPLATE_THEME" => "blue",	// Цветовая тема
										"FILTER_VIEW_MODE" => "vertical",
										"DISPLAY_ELEMENT_COUNT" => "Y",	// Показывать количество
										"SEF_MODE" => "N",	// Включить поддержку ЧПУ
										"CACHE_TYPE" => "A",	// Тип кеширования
										"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
										"CACHE_GROUPS" => "Y",	// Учитывать права доступа
										"SAVE_IN_SESSION" => "N",	// Сохранять установки фильтра в сессии пользователя
										"INSTANT_RELOAD" => "Y",
										"PAGER_PARAMS_NAME" => "arrPager",	// Имя массива с переменными для построения ссылок в постраничной навигации
										"PRICE_CODE" => array(
											0 => "BASE",
										),
										"AJAX_MODE" => "N",
										"CONVERT_CURRENCY" => "Y",
										"XML_EXPORT" => "N",	// Включить поддержку Яндекс Островов
										"SECTION_TITLE" => "-",	// Заголовок
										"SECTION_DESCRIPTION" => "-",	// Описание
										"POPUP_POSITION" => "left",	// Позиция для отображения всплывающего блока с информацией о фильтрации
										"SEF_RULE" => "/resources/#SMART_FILTER_PATH#/apply/",	// Правило для обработки
										"SECTION_CODE_PATH" => "",
										"SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
										"CURRENCY_ID" => "RUB"
									),
									false
								); 
									?>
								</div>
							</div>
				<?
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
					"library",
					array(
						"IBLOCK_TYPE" => "products",
						"IBLOCK_ID" => "53",
						"SECTION_ID" => $_REQUEST["SECTION_ID"],
						"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
						'FILTER_NAME' => 'arrFilter1',
						"INCLUDE_SUBSECTIONS" => "Y",
						"SHOW_ALL_WO_SECTION" => "Y",
						"ELEMENT_SORT_FIELD" => $arParams['ELEMENT_SORT_FIELD'],
						"ELEMENT_SORT_ORDER" => $arParams['ELEMENT_SORT_ORDER'],
						"PAGE_ELEMENT_COUNT" => 999,
						"LINE_ELEMENT_COUNT" => 3,
						"PROPERTY_CODE" => [
							"PRODUCT",
							"FILE",
							"CATEGORY",
							"PRODUCT_FAMILY",
							"AREA_OF_USE",
							"RESOURCE_CATEGORY",
							"DATA_TYPE",
						],
						"SET_TITLE" => "Y",
						"SET_STATUS_404" => "Y",
						"CACHE_TYPE" => "A",
						"CACHE_TIME" => "3600",
						"CACHE_FILTER" => "Y",
					),
					$component
				);
				?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"certifications", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "system_blocks",
		"IBLOCK_ID" => "52",
		"NEWS_COUNT" => "20",
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
		"PAGER_TITLE" => "О компании",
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
		"COMPONENT_TEMPLATE" => "certifications",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>
   <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/pcon.php",
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

<section class="comp-16 style-1" id="comp-16"><strong><strong>
	<div class="comp-16-wrapper" bis_skin_checked="1">
		<div class="container" bis_skin_checked="1">
			<div class="comp-16-main" bis_skin_checked="1">
				<div class="comp-16-content" bis_skin_checked="1">
					<div class="row" bis_skin_checked="1">
						<div class="col-12 col-lg-10 offset-lg-1" bis_skin_checked="1">
							<div class="section-title title" bis_skin_checked="1">
								<h2>
									PCon Configurator								</h2>
							</div>
							<div class="iframe fadeInUp-scroll" data-delay="200" bis_skin_checked="1">
								<div class="loader show" bis_skin_checked="1">
									<div class="loader-wrapper" bis_skin_checked="1"></div>
								</div>
								<iframe src="<?=SITE_TEMPLATE_PATH."/src/img"?>/saved_resource(1).html" frameborder="0" bis_size="{&quot;x&quot;:346,&quot;y&quot;:5026,&quot;w&quot;:1154,&quot;h&quot;:552,&quot;abs_x&quot;:346,&quot;abs_y&quot;:5026}" bis_id="fr_w27nj8l6b7ea8oaiqvy9qu" bis_depth="0" bis_chainid="1"></iframe>
							</div>
						</div>
						<div class="col-12 col-lg-3 offset-lg-7 d-none" bis_skin_checked="1">
							<div class="action fadeInUp-scroll visible" data-delay="300" bis_skin_checked="1">
															</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</strong></strong></section>


  
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"eco_material_slider", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "system_blocks",
		"IBLOCK_ID" => "44",
		"NEWS_COUNT" => "20",
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
		"PAGER_TITLE" => "О компании",
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
		"COMPONENT_TEMPLATE" => "eco_material_slider",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>

<?$APPLICATION->IncludeComponent("bitrix:news.list","eco_chairs",Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "system_blocks",
		"IBLOCK_ID" => "46",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => Array("ID"),
		"PROPERTY_CODE" => Array("DESCRIPTION"),
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
		"PAGER_TITLE" => "О компании",
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
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
   <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
	"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_DIR."include/resources_see.php",
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
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>