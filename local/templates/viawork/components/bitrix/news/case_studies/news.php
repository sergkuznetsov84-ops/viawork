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
?>
<section class="comp-33 style-1">
	<div class="comp-33-wrapper" >
		<div class="container" >
			<div class="comp-33-main" >
				<div class="comp-33-head fadeInUp-scroll visible" data-delay="200" >
					<h2>Case Studies</h2>
				</div>
				<div class="row" >
					<div class="col-12 col-lg-10 offset-lg-1" >
						<div class="comp-33-content" >

<div class="sort-toggle fadeInUp-scroll visible" data-delay="250" >
	<p>Sorting</p>
	<div class="switch-filter" >
		<div class="switch-filter-inner" >
			<a href="javascript:;" class="products active">Продукция</a>
			<a href="javascript:;" class="cases">References</a>
		</div>
	</div>
</div>
<div class="comp-33-product-filters-title fadeInUp-scroll visible" data-delay="250" >
	<span>Filter By Tags</span>
	<i>
		<svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
			<path d="M13.6992 7.34961L7.34894 0.999329L0.998658 7.34961" stroke="#25282A" stroke-miterlimit="10"></path>
		</svg>
	</i>
</div>

<div class="filter-btns reached-left fadeInUp-scroll visible reached-right" data-delay="300" style="height:175px;" >
	<div class="prev-btn" >
		<a href="javascript:;">
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
				<circle cx="22" cy="22" r="21" transform="rotate(-180 22 22)" stroke="#373F43" stroke-width="2"></circle>
				<path d="M14.11 21.8125L20.03 15.8925C20.17 15.7525 20.36 15.6725 20.55 15.6725C20.74 15.6725 20.93 15.7425 21.07 15.8925C21.36 16.1825 21.36 16.6525 21.07 16.9425L16.41 21.6025L31 21.6025L31 23.0825L16.42 23.0825L21.08 27.7325C21.37 28.0225 21.37 28.4925 21.08 28.7825C20.79 29.0725 20.32 29.0725 20.03 28.7825L14.11 22.8625C13.82 22.5725 13.82 22.1025 14.11 21.8125Z" fill="#373F43"></path>
			</svg>
		</a>
	</div><!--PRODUCT_SERIES-->
	<?//var_dump($arResult['PRODUCT_CATEGORY']);?>
	<?$tempArray = array_keys(array_count_values($arResult['PRODUCT_CATEGORY']));?>
	<div class="studies-btns product-btns show">
		<button class="active" data-filter="*">Все продукты</button>
		<?$arParamsTranslite = array("replace_space"=>"-","replace_other"=>"-");?>
		<?foreach($arResult['PRODUCT_CATEGORY'] as $category){
			if(!empty($category) && in_array($category, $tempArray)){?>
				<button data-filter=".<?=Cutil::translit($category,"ru",$arParamsTranslite);?>"><?=$category?></button>
			<?
			$key = array_search($category,$tempArray);
			unset($tempArray[$key]);
			}?>

		<?}?>

	</div>
	<div class="studies-btns case-btns hidden" >
		<button class="active" data-filter="*">All Projects</button>
		<?foreach($arResult['PRODUCT_SECTION'] as $section){
			if(!empty($section)){?>
				<button data-filter=".<?=Cutil::translit($section,"ru",$arParamsTranslite);?>"><?=$section?></button>
			<?}?>
		<?}?>

	</div>
	<div class="next-btn" >
		<a href="javascript:;">
			<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
				<circle cx="22" cy="22" r="21" stroke="#373F43" stroke-width="2"></circle>
				<path d="M29.89 22.1875L23.97 28.1075C23.83 28.2475 23.64 28.3275 23.45 28.3275C23.26 28.3275 23.07 28.2575 22.93 28.1075C22.64 27.8175 22.64 27.3475 22.93 27.0575L27.59 22.3975H13L13 20.9175H27.58L22.92 16.2675C22.63 15.9775 22.63 15.5075 22.92 15.2175C23.21 14.9275 23.68 14.9275 23.97 15.2175L29.89 21.1375C30.18 21.4275 30.18 21.8975 29.89 22.1875Z" fill="#373F43"></path>
			</svg>
		</a>
	</div>
</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
		"PRODUCT_CATEGORY"=>$arResult['PRODUCT_CATEGORY'],
		"PRODUCT_SECTION"=>$arResult['PRODUCT_SECTION'],
	),
	$component
);?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
