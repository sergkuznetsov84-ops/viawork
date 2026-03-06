<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use \Bitrix\Main\Page\Asset;
IncludeTemplateLangFile(__FILE__);

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/colors.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/common.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/src/css/style.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/src/css/style.min.css");
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/src/css/main.css");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/jquery.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/jquery-migrate.min.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/script.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/prod.js");
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/functions.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/jquery.validate.methods.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/jquery.validate.messages.js");
//Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/src/js/jquery.validate.js");
$page = $APPLICATION->GetCurDir(true);
$headerClass = '';
$bodyClass = '';
if ($page == '/technology/') {
	$headerClass = 'header-dark';
	$bodyClass = 'body-technology';
}
?>
<!DOCTYPE html>
<html lang="<?=defined('LANGUAGE_ID')?LANGUAGE_ID:'en'?>">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?
// Load Montserrat (includes Cyrillic) so Russian text matches the design more closely
Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap&subset=cyrillic" rel="stylesheet">');
?>
<?$APPLICATION->ShowHead();?>
<title><?$APPLICATION->ShowTitle()?></title>

<body class="home wp-singular page-template-default page page-id-671 wp-theme-nurus-backend language-<?=(defined('LANGUAGE_ID')?LANGUAGE_ID:'en')?> <?=$bodyClass?>"  style="" >
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
	<header class="header header-home <?=$headerClass?>">
      <div class="header-top" >
		<div class="container-fluid" >
			<div class="header-top-wrapper" >
				<div class="header-top-links" >
					<a href="#" class="active">Nurus Corporate</a>
					<a href="" target="" class="">Calma</a>                      
				</div>
				<div class="header-top-region" >
					<!--<div class="region-flag" >
						<img src="<?=SITE_TEMPLATE_PATH."/src/img"?>/Nurus_Flags_US.svg" alt="">
					</div>
					<div class="region-text" >
						<span>Глобально</span>
					</div>-->
				</div>
			</div>
		</div>
	</div>
  	<div class="header-wrapper" >
    	<div class="container-fluid" >
		<div class="header-main" >
			<div class="header-bars" >
			<span></span>
			<span></span>
			<span></span>
			</div>
			<div class="header-main-logo" >
			<a href="/">
				<i>
				<svg xmlns="http://www.w3.org/2000/svg" width="139" height="28" viewBox="0 0 139 28" fill="none">   <path fill-rule="evenodd" clip-rule="evenodd" d="M135.187 7.474L138.247 1.65621C135.589 0.451481 132.682 0 129.774 0C124.155 0 118.44 2.80714 118.44 9.12787C118.44 13.7386 121.296 15.1445 124.155 15.8977C127.016 16.6463 129.872 16.7492 129.872 18.754C129.872 20.1599 128.167 20.7096 127.014 20.7096C124.756 20.7096 121.645 19.4067 119.79 18.1037L116.482 24.4712C119.591 26.3777 123.201 27.4281 126.864 27.4281C132.831 27.4281 139 24.6209 139 17.851C139 13.0859 135.791 11.0788 131.528 10.2273C130.274 9.97703 127.416 9.72673 127.416 7.96993C127.416 6.66461 129.219 6.21547 130.274 6.21547C131.828 6.21547 133.783 6.71607 135.187 7.46932M95.4075 0.851498H86.2796V16.3492C86.2796 24.8221 92.2471 27.4304 99.9715 27.4304C107.696 27.4304 113.661 24.8221 113.661 16.3492V0.851498H104.533V14.5924C104.533 17.8534 103.731 20.1599 99.9715 20.1599C96.2122 20.1599 95.4075 17.8534 95.4075 14.5924V0.851498ZM72.3539 5.06454V0.851498H63.2284V26.5766H72.3539V16.1972C72.3539 11.783 73.6078 8.42375 78.6723 8.42375C80.0782 8.42375 81.2806 8.57346 82.5345 9.27524V0.500606H80.78C77.2196 0.500606 74.209 1.90183 72.4545 5.06454H72.3539ZM40.6543 0.851498H31.5288V16.3492C31.5288 24.8221 37.494 27.4304 45.2183 27.4304C52.9426 27.4304 58.9101 24.8221 58.9101 16.3492V0.851498H49.7845V14.5924C49.7845 17.8534 48.9798 20.1599 45.2183 20.1599C41.4567 20.1599 40.6543 17.8534 40.6543 14.5924V0.851498ZM9.12787 4.16158V0.851498H0V26.5766H9.12787V13.238C9.12787 10.0285 10.1805 7.27282 13.893 7.27282C18.4055 7.27282 18.0054 11.5841 18.0054 14.0427V26.5789H27.131V10.6812C27.131 4.36042 24.3753 0 17.4534 0C13.893 0 11.3338 1.05034 9.22846 4.16158H9.12787Z" fill="#25282A"></path> </svg>            </i>
			</a>
			</div>
			<div class="header-main-nav" >
				<div class="header-bars-right" >
					<span></span>
					<span></span>
				</div>	  
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"viawork_top_menu", 
						array(
							"ROOT_MENU_TYPE" => "top",
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"COMPONENT_TEMPLATE" => "viawork_top_menu",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_THEME" => "site"
						),
						false,
						array(
							"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				<div class="header-btn" >
					<a href="/" target="_blank" class="btn-blue"> <span>Calma</span> <i>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
							<path d="M15.7966 7.11172L10.2598 12.6485C10.1289 12.7794 9.95119 12.8542 9.77349 12.8542C9.59579 12.8542 9.41809 12.7888 9.28716 12.6485C9.01593 12.3773 9.01593 11.9377 9.28716 11.6665L13.6455 7.30813H0V5.92394H13.6361L9.2778 1.57497C9.00658 1.30375 9.00658 0.864172 9.2778 0.592946C9.54903 0.32172 9.9886 0.32172 10.2598 0.592946L15.7966 6.1297C16.0678 6.40093 16.0678 6.8405 15.7966 7.11172Z" fill="white"></path>
						</svg>
						</i>
					</a>              
				</div>
				<div class="mobile-language-btn" style="display:none;">
					<a href="javascript:;">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
							<g clip-path="url(#clip0_1_9274)">
								<path d="M13.5553 7.00006C13.5553 10.6224 10.6227 13.555 7.0003 13.555C3.37793 13.555 0.445312 10.6224 0.445312 7.00006C0.445312 3.37768 3.37793 0.445068 7.0003 0.445068C10.6227 0.445068 13.5553 3.38213 13.5553 7.00006Z" stroke="#25282A" stroke-width="0.890019" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M7.00073 13.555C8.56716 13.555 9.83544 10.618 9.83544 7.00006C9.83544 3.38213 8.56716 0.445068 7.00073 0.445068C5.43429 0.445068 4.16602 3.37768 4.16602 7.00006C4.16602 10.6224 5.43429 13.555 7.00073 13.555Z" stroke="#25282A" stroke-width="0.890019" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M0.445312 7.00049H13.3684" stroke="#25282A" stroke-width="0.890019" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
							<defs>
								<clippath id="clip0_1_9274">
								<rect width="14" height="14" fill="white"></rect>
								</clippath>
							</defs>
							</svg>
						</i>
							Язык и регион
					</a>
				</div>
			</div>
			<div class="header-main-end" >
			<?$APPLICATION->IncludeComponent("bitrix:search.title","",Array(
					"SHOW_INPUT" => "Y",
					"INPUT_ID" => "title-search-input",
					"CONTAINER_ID" => "title-search",
					"PRICE_CODE" => array("BASE","RETAIL"),
					"PRICE_VAT_INCLUDE" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "50",
					"SHOW_PREVIEW" => "Y",
					"PREVIEW_WIDTH" => "24",
					"PREVIEW_HEIGHT" => "24",
					"CONVERT_CURRENCY" => "Y",
					"CURRENCY_ID" => "RUB",
					"PAGE" => "#SITE_DIR#search/index.php",
					"NUM_CATEGORIES" => "1",
					"TOP_COUNT" => "5",
					"ORDER" => "rank",
					"USE_LANGUAGE_GUESS" => "Y",
					"CHECK_DATES" => "Y",
					"SHOW_OTHERS" => "N",
					"CATEGORY_1_TITLE" => "Новости",
					"CATEGORY_1" => array("iblock_content"),
					"CATEGORY_1_iblock_news" => array("all"),
					"CATEGORY_0_TITLE" => "Каталоги",
					"CATEGORY_0" => array("iblock_products"),
					"CATEGORY_0_iblock_books" => "all",
					"CATEGORY_OTHERS_TITLE" => ""
				)
			);?>
  <?/*$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/header_lang.php",
			"EDIT_TEMPLATE" => "include_area.php"
		)
	);*/?>
        </div>
      </div>
    </div>
  </div>
</header>


<div id="headerfixed" class="">
	<header class="header header-home <?=$headerClass?>">
      <div class="header-top" >
		<div class="container-fluid" >
			<div class="header-top-wrapper" >
				<div class="header-top-links" >
					<a href="/en" class="active">Nurus Corporate</a>
					<a href="" target="" class="">Calma</a>                      
				</div>
				<div class="header-top-region" >
					<div class="region-flag" >
						<img src="<?=SITE_TEMPLATE_PATH."/src/img"?>/Nurus_Flags_US.svg" alt="">
					</div>
					<div class="region-text" >
						<span>Глобально</span>
					</div>
				</div>
			</div>
		</div>
	</div>
  	<div class="header-wrapper" >
    	<div class="container-fluid" >
		<div class="header-main" >
			<div class="header-bars" >
			<span></span>
			<span></span>
			<span></span>
			</div>
			<div class="header-main-logo" >
			<a href="/">
				<i>
				<svg xmlns="http://www.w3.org/2000/svg" width="139" height="28" viewBox="0 0 139 28" fill="none">   <path fill-rule="evenodd" clip-rule="evenodd" d="M135.187 7.474L138.247 1.65621C135.589 0.451481 132.682 0 129.774 0C124.155 0 118.44 2.80714 118.44 9.12787C118.44 13.7386 121.296 15.1445 124.155 15.8977C127.016 16.6463 129.872 16.7492 129.872 18.754C129.872 20.1599 128.167 20.7096 127.014 20.7096C124.756 20.7096 121.645 19.4067 119.79 18.1037L116.482 24.4712C119.591 26.3777 123.201 27.4281 126.864 27.4281C132.831 27.4281 139 24.6209 139 17.851C139 13.0859 135.791 11.0788 131.528 10.2273C130.274 9.97703 127.416 9.72673 127.416 7.96993C127.416 6.66461 129.219 6.21547 130.274 6.21547C131.828 6.21547 133.783 6.71607 135.187 7.46932M95.4075 0.851498H86.2796V16.3492C86.2796 24.8221 92.2471 27.4304 99.9715 27.4304C107.696 27.4304 113.661 24.8221 113.661 16.3492V0.851498H104.533V14.5924C104.533 17.8534 103.731 20.1599 99.9715 20.1599C96.2122 20.1599 95.4075 17.8534 95.4075 14.5924V0.851498ZM72.3539 5.06454V0.851498H63.2284V26.5766H72.3539V16.1972C72.3539 11.783 73.6078 8.42375 78.6723 8.42375C80.0782 8.42375 81.2806 8.57346 82.5345 9.27524V0.500606H80.78C77.2196 0.500606 74.209 1.90183 72.4545 5.06454H72.3539ZM40.6543 0.851498H31.5288V16.3492C31.5288 24.8221 37.494 27.4304 45.2183 27.4304C52.9426 27.4304 58.9101 24.8221 58.9101 16.3492V0.851498H49.7845V14.5924C49.7845 17.8534 48.9798 20.1599 45.2183 20.1599C41.4567 20.1599 40.6543 17.8534 40.6543 14.5924V0.851498ZM9.12787 4.16158V0.851498H0V26.5766H9.12787V13.238C9.12787 10.0285 10.1805 7.27282 13.893 7.27282C18.4055 7.27282 18.0054 11.5841 18.0054 14.0427V26.5789H27.131V10.6812C27.131 4.36042 24.3753 0 17.4534 0C13.893 0 11.3338 1.05034 9.22846 4.16158H9.12787Z" fill="#25282A"></path> </svg>            </i>
			</a>
			</div>
			<div class="header-main-nav" >
				<div class="header-bars-right" >
					<span></span>
					<span></span>
				</div>	  
					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"viawork_top_menu", 
						array(
							"ROOT_MENU_TYPE" => "top",
							"MAX_LEVEL" => "1",
							"CHILD_MENU_TYPE" => "left",
							"USE_EXT" => "Y",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_TIME" => "36000000",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"MENU_CACHE_GET_VARS" => array(
							),
							"COMPONENT_TEMPLATE" => "viawork_top_menu",
							"DELAY" => "N",
							"ALLOW_MULTI_SELECT" => "N",
							"MENU_THEME" => "site"
						),
						false,
						array(
							"ACTIVE_COMPONENT" => "Y"
						)
					);?>
				<div class="header-btn" >
					<a href="/" target="_blank" class="btn-blue"> <span>Calma</span> <i>
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
							<path d="M15.7966 7.11172L10.2598 12.6485C10.1289 12.7794 9.95119 12.8542 9.77349 12.8542C9.59579 12.8542 9.41809 12.7888 9.28716 12.6485C9.01593 12.3773 9.01593 11.9377 9.28716 11.6665L13.6455 7.30813H0V5.92394H13.6361L9.2778 1.57497C9.00658 1.30375 9.00658 0.864172 9.2778 0.592946C9.54903 0.32172 9.9886 0.32172 10.2598 0.592946L15.7966 6.1297C16.0678 6.40093 16.0678 6.8405 15.7966 7.11172Z" fill="white"></path>
						</svg>
						</i>
					</a>              
				</div>
				<div class="mobile-language-btn" >
					<a href="javascript:;">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
							<g clip-path="url(#clip0_1_9274)">
								<path d="M13.5553 7.00006C13.5553 10.6224 10.6227 13.555 7.0003 13.555C3.37793 13.555 0.445312 10.6224 0.445312 7.00006C0.445312 3.37768 3.37793 0.445068 7.0003 0.445068C10.6227 0.445068 13.5553 3.38213 13.5553 7.00006Z" stroke="#25282A" stroke-width="0.890019" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M7.00073 13.555C8.56716 13.555 9.83544 10.618 9.83544 7.00006C9.83544 3.38213 8.56716 0.445068 7.00073 0.445068C5.43429 0.445068 4.16602 3.37768 4.16602 7.00006C4.16602 10.6224 5.43429 13.555 7.00073 13.555Z" stroke="#25282A" stroke-width="0.890019" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M0.445312 7.00049H13.3684" stroke="#25282A" stroke-width="0.890019" stroke-linecap="round" stroke-linejoin="round"></path>
							</g>
							<defs>
								<clippath id="clip0_1_9274">
								<rect width="14" height="14" fill="white"></rect>
								</clippath>
							</defs>
							</svg>
						</i>
							Язык и регион
					</a>
				</div>
			</div>
			<div class="header-main-end" >
			<?$APPLICATION->IncludeComponent("bitrix:search.title","",Array(
					"SHOW_INPUT" => "Y",
					"INPUT_ID" => "title-search-input",
					"CONTAINER_ID" => "title-search",
					"PRICE_CODE" => array("BASE","RETAIL"),
					"PRICE_VAT_INCLUDE" => "Y",
					"PREVIEW_TRUNCATE_LEN" => "50",
					"SHOW_PREVIEW" => "Y",
					"PREVIEW_WIDTH" => "24",
					"PREVIEW_HEIGHT" => "24",
					"CONVERT_CURRENCY" => "Y",
					"CURRENCY_ID" => "RUB",
					"PAGE" => "#SITE_DIR#search/index.php",
					"NUM_CATEGORIES" => "1",
					"TOP_COUNT" => "5",
					"ORDER" => "rank",
					"USE_LANGUAGE_GUESS" => "Y",
					"CHECK_DATES" => "Y",
					"SHOW_OTHERS" => "N",
					"CATEGORY_1_TITLE" => "Новости",
					"CATEGORY_1" => array("iblock_content"),
					"CATEGORY_1_iblock_news" => array("all"),
					"CATEGORY_0_TITLE" => "Каталоги",
					"CATEGORY_0" => array("iblock_products"),
					"CATEGORY_0_iblock_books" => "all",
					"CATEGORY_OTHERS_TITLE" => ""
				)
			);?>
  <?$APPLICATION->IncludeComponent(
		"bitrix:main.include",
		"",
		Array(
			"AREA_FILE_SHOW" => "file",
			"PATH" => SITE_DIR."include/header_lang.php",
			"EDIT_TEMPLATE" => "include_area.php"
		)
	);?>
        </div>
      </div>
    </div>
  </div>
</header>
  </div>
