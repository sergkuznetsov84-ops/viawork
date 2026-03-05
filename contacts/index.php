<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?> <main class="main-blogs">
	<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "feedback1", Array(
	"WEB_FORM_ID" => "1",	// ID веб-формы
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"COMPONENT_TEMPLATE" => "feedback",
		"LIST_URL" => "",	// Страница со списком результатов
		"EDIT_URL" => "",	// Страница редактирования результата
		"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?>


<?$APPLICATION->IncludeComponent(
  "bitrix:main.include",
  "",
  Array(
    "AREA_FILE_SHOW" => "file",
    "AREA_FILE_SUFFIX" => "",
    "EDIT_TEMPLATE" => "",
    "PATH" => "/include/contacts.php"
  )
);?>


<?$APPLICATION->IncludeComponent(
  "bitrix:main.include",
  "",
  Array(
    "AREA_FILE_SHOW" => "file",
    "AREA_FILE_SUFFIX" => "",
    "EDIT_TEMPLATE" => "",
    "PATH" => "/include/contacts_us.php"
  )
);?>
<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "contact_form_bottom", Array(
"WEB_FORM_ID" => "2",	// ID веб-формы
	"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
	"USE_EXTENDED_ERRORS" => "Y",	// Использовать расширенный вывод сообщений об ошибках
	"SEF_MODE" => "N",	// Включить поддержку ЧПУ
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
	"COMPONENT_TEMPLATE" => ".default",
	"LIST_URL" => "",	// Страница со списком результатов
	"EDIT_URL" => "",	// Страница редактирования результата
	"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
	"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
	"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
	"VARIABLE_ALIASES" => array(
		"WEB_FORM_ID" => "WEB_FORM_ID",
		"RESULT_ID" => "RESULT_ID",
		)
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"about_blog_slider", 
	array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "Y",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => "6",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
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
		"COMPONENT_TEMPLATE" => "about_blog_slider",
		"STRICT_SECTION_CHECK" => "N",
		"FILE_404" => ""
	),
	false
);?>
  </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>