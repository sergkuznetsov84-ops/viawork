<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Blog");

$elements = \Bitrix\Iblock\ElementTable::getList([
	'select' => ['ID', 'NAME', 'IBLOCK_ID', 'CODE'],
	'filter' => ['IBLOCK_ID' => 6, 'CODE' => explode("/",$_SERVER["REQUEST_URI"])[count(explode("/",$_SERVER["REQUEST_URI"]))-2]]
])->fetchAll();
 
foreach ($elements as $element) {
    $dbProperty = \CIBlockElement::getProperty(
        $element['IBLOCK_ID'],
        $element['ID']
    );
    while($arProperty = $dbProperty->Fetch()){  
        $arItem['PROPERTIES'][] = $arProperty;
    }
}
if(count($elements)==1){
	$iblockID = 6;
	$detail = "#ELEMENT_CODE#/";
}else{
	$iblockID = 7;
	$detail = "#SECTION_CODE#/#ELEMENT_CODE#/";
}

?>
 <main class="main-blogs">
	<?$APPLICATION->IncludeComponent("bitrix:news","nurus_filter_blog",Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"SEF_MODE" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "content",
		"IBLOCK_ID" => $iblockID,
		"NEWS_COUNT" => "2",
		"USE_SEARCH" => "Y",
		"USE_RSS" => "Y",
		"USE_RATING" => "Y",
		"USE_CATEGORIES" => "Y",
		"USE_REVIEW" => "Y",
		"USE_FILTER" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => ["PREVIEW_PICTURE", "DETAIL_PICTURE"],
		"LIST_PROPERTY_CODE" => Array(),
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "Y",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => ["PREVIEW_PICTURE", "DETAIL_PICTURE"],
		"DETAIL_PROPERTY_CODE" => ["CHECK_PROP_TITLE_PIC"],
		"DETAIL_DISPLAY_TOP_PAGER" => "Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"STRICT_SECTION_CHECK" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"SET_LAST_MODIFIED" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"SET_STATUS_404" => "Y",
		"SHOW_404" => "Y",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK" => "",
		"PAGER_PARAMS_NAME" => "arrPager",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"USE_PERMISSIONS" => "Y",
		"GROUP_PERMISSIONS" => Array("1"),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "blog_filter_news",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"FILTER_NAME" => "arrFilter",
		"FILTER_FIELD_CODE" => Array(),
		"FILTER_PROPERTY_CODE" => Array(),
		"NUM_NEWS" => "20",
		"NUM_DAYS" => "30",
		"YANDEX" => "Y",
		"MAX_VOTE" => "5",
		"VOTE_NAMES" => Array("0", "1", "2", "3", "4"),
		"CATEGORY_IBLOCK" => Array(),
		"CATEGORY_CODE" => "CATEGORY",
		"CATEGORY_ITEMS_COUNT" => "5",
		"MESSAGES_PER_PAGE" => "10",
		"USE_CAPTCHA" => "Y",
		"REVIEW_AJAX_POST" => "Y",
		"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
		"FORUM_ID" => "1",
		"URL_TEMPLATES_READ" => "",
		"SHOW_LINK_TO_FORUM" => "Y",
		"POST_FIRST_MESSAGE" => "Y",
		"SEF_FOLDER" => "/blog/",
		"SEF_URL_TEMPLATES" => Array(
			"detail" => $detail,
			"news" => "search/",
			"section" => "#SECTION_CODE#/",
		),
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"VARIABLE_ALIASES" => Array(
			"detail" => Array(),
			"news" => Array(),
			"section" => Array(),
		),
		"USE_SHARE" => "Y",
		"SHARE_HIDE" => "Y",
		"SHARE_TEMPLATE" => "",
		"SHARE_HANDLERS" => array("delicious", "lj", "twitter"),
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_SHORTEN_URL_KEY" => "",
		)
);

?>										

  </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>