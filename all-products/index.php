<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Все продукты");
?>
<main class="main-blogs">
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"nurus", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_PICTURE" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "nurus",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "18",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_SHOW_PARENT_NAME" => "N",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"FILTER_NAME" => "arFillter",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "nurus",
		"SEF_FOLDER" => "/all-products/",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>
<section class="comp-17">
	<div class="comp-17-wrapper" >
		<div class="comp-17-main" >
			<div class="comp-17-content" >
				<div class="media scale-scroll visible" data-delay="200" >
					<picture><source media="(min-width: 768px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/Comp-17-Image-2878x1588-1-scaled.webp 1x"><img class="sp-no-webp" src="<?=SITE_TEMPLATE_PATH."/src/img"?>/Comp-17-Image-2878x1588-1-scaled.webp" alt=""></picture>				</div>
				<div class="content" >
					<div class="text fadeInUp-scroll visible" data-delay="250" >
						<p>Посмотрите на <span>Продуцкию Nurus</span> в деле. Посетите нашу галерею.</p>
					</div>
					<div class="action fadeInUp-scroll visible" data-delay="300" >
						<a href="/case-studies/" target="" class="btn btn-white btn-semibold btn-rnd-full">
							<span>Наши работы</span> 
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
									<path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#373F43"></path>
								</svg>
							</i>
						</a>					
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="comp-93 style-1">
  <div class="comp-93-wrapper" >
    <div class="container" >
      <div class="comp-93-main" >
        <div class="comp-93-head" >
			<div class="subtitle fadeInUp-scroll visible" data-delay="200" >
				<h4>СВЯЖИТЕСЬ С НАМИ</h4>
			</div>
			<div class="title fadeInUp-scroll visible" data-delay="250" >
              <h2>Свяжитесь с нами, и мы будем рядом на протяжении всего пути!</h2>
            </div>
		</div>
        <div class="comp-93-content fadeInUp-scroll visible" data-delay="400" >
          <div class="row" >
                          <div class="col-lg-4" >
                <div class="card" >
                  <div class="card-media" >
                    <picture>
                      <source media="(max-width: 991px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-gorsel-wp.jpg">
                      <source media="(min-width: 992px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-gorsel-wp.jpg">
                      <img class="sp-no-webp" src="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-gorsel-wp.jpg" alt="">                    </picture>
                  </div>
                  <div class="card-content" >
                    <div class="text" >
                      <p>Давайте спланируем Ваше рабочее пространство вместе!</p>
                    </div>
                                          <div class="action" >
                        <a href="/contact/" class="btn btn-white btn-rnd-full btn-medium btn-gradient" target="">
                                                    <span>Свяжитесь с нами</span>
                          <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                              <path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="#25282A"></path>
                            </svg>
                          </i>
                        </a>
                      </div>
                                      </div>
                </div>
              </div>
			<div class="col-lg-4" >
                <div class="card" >
                  <div class="card-media" >
                    <picture>
                      <source media="(max-width: 991px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-proje.jpg">
                      <source media="(min-width: 992px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-proje.jpg">
                      <img class="sp-no-webp" src="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-proje.jpg" alt="">                    </picture>
                  </div>
                  <div class="card-content" >
                    <div class="text" >
                      <p>Хотите стать официальным поставщиком?</p>
                    </div>
					<div class="action" >
                        <a href="/contact/" class="btn btn-white btn-rnd-full btn-medium btn-gradient" target="">
						<span>Напишите нам</span>
                          <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                              <path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="#25282A"></path>
                            </svg>
                          </i>
                        </a>
                      </div>
                                      </div>
                </div>
              </div>
			<div class="col-lg-4" >
                <div class="card" >
                  <div class="card-media" >
                    <picture>
                      <source media="(max-width: 991px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-calma.jpg">
                      <source media="(min-width: 992px)" srcset="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-calma.jpg">
                      <img class="sp-no-webp" src="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-93-calma.jpg" alt="">                    </picture>
                  </div>
                  <div class="card-content" >
                    <div class="text" >
                      <p>Engineered for a Better Work Experience</p>
                    </div>
					<div class="action" >
                        <a href="https://calma.nurus.com/" class="btn btn-blue btn-regular btn-rnd-full btn-blue" target="">
							<span>Calma</span>
                          <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                              <path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="white"></path>
                            </svg>
                          </i>
                        </a>
                      </div>
					</div>
                </div>
              </div>
                      </div>
        </div>
      </div>
    </div>
  </div>
<!-- </section><section class="comp-20">
	<div class="comp-20-wrapper" >
		<div class="container" >
			<form action="/en/all-products/" method="">
				<div class="comp-20-main" >
					<div class="comp-20-head" >
						<div class="row" >
							<div class="col-xl-8 offset-xl-2" >
								<div class="comp-20-head-main" >
									<div class="comp-20-head-subtitle fadeInUp-scroll visible" data-delay="100" >
										<h4>NURUS SALES POINTS</h4>
									</div>
									<div class="comp-20-head-title fadeInUp-scroll visible" data-delay="150" >
										<h3>Find The Nearest Experience Hub</h3>
									</div>
									<div class="comp-20-head-select-container fadeInUp-scroll visible" data-delay="200" >
										<div class="select-wrapper" >
											<select name="country" id="country" class="custom-select2 select2-hidden-accessible" data-select2-id="select2-data-country" tabindex="-1" aria-hidden="true">
												<option data-select2-id="select2-data-2-bho0">Country</option>
																									<option value="Turkey" data-country="Turkey">Turkey</option>
																									<option value="Germany" data-country="Germany">Germany</option>
																									<option value="United States" data-country="United States">United States</option>
																							</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-yx2b" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container" aria-controls="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true" title="Country">Country</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="select-wrapper" >
											<select name="city" id="city" class="custom-select2 select2-hidden-accessible" data-select2-id="select2-data-city" tabindex="-1" aria-hidden="true">
												<option data-select2-id="select2-data-4-w7hk">City</option>
                                                <option value="Nurus Ankara HQ" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.163825555145!2d32.537433412396304!3d39.96008978318553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d33acca23d4d85%3A0x481326dafcd0d246!2sNurus%20Fabrika!5e0!3m2!1str!2str!4v1724847051664!5m2!1str!2str">Nurus Ankara HQ</option>
                                                <option value="Nurus Istanbul Experience Hub" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12030.911227345512!2d29.0155148!3d41.0749421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab678d7800e09%3A0xafd714d5278e02c8!2sNurus%20Experience%20Hub!5e0!3m2!1str!2str!4v1724655699798!5m2!1str!2str">Nurus Istanbul Experience Hub</option>
                                                <option value="Nurus Ankara Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6120.623869647582!2d32.804461!3d39.912035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d348b2497b106d%3A0x47ca7c570966071b!2zTnVydXMgS2_DpyBLdWxlL1PDtsSfw7x0w7Z6w7w!5e0!3m2!1str!2str!4v1750066507548!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Ankara Store</option>
                                                <option value="Nurus Izmir Showroom" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.352474451588!2d27.161369099999998!3d38.433326699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd86e56948711%3A0x76cf8576ff2b04c0!2zTnVydXMgxLB6bWlyIE1hxJ9hemE!5e0!3m2!1str!2str!4v1755865626328!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Izmir Showroom</option>
                                                <option value="Nurus Bursa Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6093.571461458493!2d28.960224!3d40.213829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca115dd8813833%3A0x654d0e5b8fd8ba29!2sNurus%20Bursa!5e0!3m2!1str!2str!4v1750066589804!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Bursa Store</option>
                                                <option value="Nurus Antalya Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12762.360582861946!2d30.735806000000004!3d36.900152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3853f9ae0050f%3A0xe965a60461fa0271!2sNurus%20Antalya!5e0!3m2!1str!2str!4v1750066634213!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Antalya Store</option>
                                                <option value="Nurus Adana Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1593.2706263296081!2d35.328167!3d36.996882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f6bc8334665%3A0xf7f1822cd3eff916!2sNurus%20Adana!5e0!3m2!1str!2str!4v1750066664652!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Adana Store</option>
                                                <option value="Nurus Gaziantep Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3183.5532096719126!2d37.360952!3d37.068129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e482251bf27b%3A0xb6756cfe956b86ca!2sNurus!5e0!3m2!1str!2str!4v1750066692589!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Gaziantep Store</option>
                                                <option value="Nurus Kayseri Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6227.702499898449!2d35.6167!3d38.698261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b6db9f1c2467d%3A0x6440d4afeafe2065!2sNurus%20kayseri!5e0!3m2!1str!2str!4v1750066729992!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Kayseri Store</option>
                                                <option value="Sempre Office Furniture Masko" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.0787576528437!2d28.793653775861554!3d41.06727107134231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4c5c49eb13d%3A0xd95f6b246e620470!2sSempre%20Ofis%20Mobilyalar%C4%B1%20Masko%20(Sempre%20Office%20Furniture)!5e0!3m2!1str!2str!4v1758281386207!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Sempre Office Furniture Masko</option>
                                                <option value="Sempre Office Furniture Çağlayan" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.7960761904706!2d28.974361075862003!3d41.07344997134149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6e0b297cc9f%3A0xec4b09e1c7e4b8d8!2sSempre%20Ofis%20Mobilyalar%C4%B1%20%C3%87a%C4%9Flayan!5e0!3m2!1str!2str!4v1758282833527!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Sempre Office Furniture Çağlayan</option>
                                                <option value="Nurus GmbH, Stuttgart, Germany" data-country="Germany" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.408043182033!2d9.18491377630056!3d48.774099771320806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799c4b5da7ff449%3A0x293467d46886ae96!2sBlumenstra%C3%9Fe%2036%2C%2070182%20Stuttgart%2C%20Almanya!5e0!3m2!1str!2str!4v1750066455555!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus GmbH, Stuttgart, Germany</option>
                                                <option value="Nurus North America, Chicago, North America" data-country="United States" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.2067920282484!2d-87.6354498!3d41.888409599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cb6e328686d%3A0x43f86a8214e286bb!2sTHE%20MART!5e0!3m2!1str!2str!4v1752667242687!5m2!1str!2str">Nurus North America, Chicago, North America</option>
                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-ld6t" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city-container" aria-controls="select2-city-container"><span class="select2-selection__rendered" id="select2-city-container" role="textbox" aria-readonly="true" title="City">City</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
									<div class="comp-20-head-article fadeInUp-scroll visible" data-delay="250" >
										<p>Feel the difference. Visit our showrooms or stores to get exclusive offers, try any Nurus product and find your perfect fit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comp-20-map image-animation animate" data-delay="300" >
						<iframe src="<?=SITE_TEMPLATE_PATH."/src/img"?>/embed.html" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</form>
		</div>
	</div>
</section> -->
  </main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>