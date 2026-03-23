<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<main class="main-product">
<section class="comp-1 style-2">
    <div class="comp-1-wrapper">
        <div class="comp-1-media">
            <?if ($arResult['BANNER_MEDIA']):?>
                <?if ($arResult['BANNER_MEDIA']['IS_VIDEO']):?>
                    <video 
                        id="mainBannerVideo"
                        src="<?=$arResult['BANNER_MEDIA']['SRC']?>" 
                        autoplay 
                        muted 
                        loop 
                        playsinline 
                        preload="auto" 
                        class="sp-no-webp hero-video-fade"
                        style="width: 100%; height: 100%; object-fit: cover;">
                    </video>

                    <script>
                        (function() {
                            var vid = document.getElementById("mainBannerVideo");
                            if (vid) {
                                vid.onplaying = function() {
                                    vid.classList.add('is-playing');
                                };
                                if (vid.readyState >= 3) {
                                    vid.classList.add('is-playing');
                                }
                            }
                        })();
                    </script>
                <?else:?>
                    <picture>
                        <img class="sp-no-webp" src="<?=$arResult['BANNER_MEDIA']['SRC']?>" alt="<?=htmlspecialcharsbx($arResult['NAME'])?>">
                    </picture>
                <?endif;?>
            <?else:?>
                <picture>
                    <img class="sp-no-webp" src="<?=$arResult['BANNER_POSTER']?>" alt="<?=htmlspecialcharsbx($arResult['NAME'])?>">
                </picture>
            <?endif;?>
        </div>
        
        <div class="comp-1-content">
            <div class="title fadeInUp-scroll visible" data-delay="300">
                <h2><?=$arResult["NAME"]?></h2>
            </div>
        </div>
	    <?if(!empty($arResult["PROPERTIES"]["BADGE"]["VALUE"])){?>
		    <div class="comp-1-badges">
				<div class="badge-media fadeInUp-scroll visible" data-delay="300" data-badge-index="1">
					<img src="<?=CFile::GetPath($arResult["PROPERTIES"]["BADGE"]["VALUE"])?>" alt="">
				</div>
			</div>
		<?}?>
        
        <div class="comp-1-icon">
            <div class="mouse">
                <div class="roll"></div>
                <div class="rollshadow"></div>
            </div>
        </div>
    </div>
</section>
<section class="comp-13">
	<div class="comp-13-wrapper" >
		<div class="container" >
			<div class="comp-13-main" >
				<div class="comp-13-head" >
					<div class="row" >
						<div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2" >
							<div class="text" >
								<p></p>
								<p data-start="0" data-end="43">
									<div style="position: relative; display: inline-block; color: rgb(55, 63, 67);" >
										<?=$arResult["DETAIL_TEXT"]?>
									</div> 
								</p>
								<p>
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="comp-13-content" id="comp-13-tab-section" >
					<div class="product-title" >
						<h2><?=$arResult["NAME"]?></h2>
					</div>
					<div class="comp-13-tab fadeInUp-scroll visible" data-delay="400" >
						<nav>
						    <div class="list-group list-group-main" id="list-tab" role="tablist">
						        <?foreach ($arResult["NAV_TABS"] as $categoryName => $items):?>
						            <?
						            $isActive = ($categoryName == $arResult["CURRENT_NAV_CATEGORY"]);
						            $categoryUrl = $items[0]["URL"]; 
						            ?>
						            <a class="<?=$isActive ? 'active' : ''?>" href="<?=$categoryUrl?>">
						                <span><?=$categoryName?></span>
						                <i>
						                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
						                        <path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#373F43" stroke-opacity="0.35" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
						                    </svg>
						                </i>
						            </a>
						        <?endforeach;?>
						    </div>
						</nav>
						<div class="tab-content" >
							<div class="inner-tab" >
								<nav>
						            <div class="list-group list-group-inner" role="tablist">
						                <?foreach ($arResult["NAV_TABS"][$arResult["CURRENT_NAV_CATEGORY"]] as $item):?>
						                    <a class="<?=$item['IS_CURRENT'] ? 'active' : ''?>" href="<?=$item['URL']?>">
						                        <?=$item['NAME']?>
						                    </a>
						                <?endforeach;?>
						            </div>
						        </nav>
								<div class="product-content" >
									<div class="row align-items-lg-center" >
											<div class="col-lg-5 offset-lg-1" >
												<div class="media-wrapper" >
													<a href="javascript:;" class="nav-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-794b5523e910595f" aria-disabled="true">
														<i>
															<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
																<circle cx="22" cy="22" r="21" transform="rotate(-180 22 22)" stroke="#25282A" stroke-width="2"></circle>
																<path d="M14.11 21.8125L20.03 15.8925C20.17 15.7525 20.36 15.6725 20.55 15.6725C20.74 15.6725 20.93 15.7425 21.07 15.8925C21.36 16.1825 21.36 16.6525 21.07 16.9425L16.41 21.6025L31 21.6025L31 23.0825L16.42 23.0825L21.08 27.7325C21.37 28.0225 21.37 28.4925 21.08 28.7825C20.79 29.0725 20.32 29.0725 20.03 28.7825L14.11 22.8625C13.82 22.5725 13.82 22.1025 14.11 21.8125Z" fill="#25282A"></path>
															</svg>
														</i>
													</a>
													<?if (!empty($arResult['PROPERTIES']["GALLERY_MAIN"]["VALUE"])) {?>
														<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" >
															<div class="swiper-wrapper" id="swiper-wrapper-794b5523e910595f" aria-live="polite" >
																<?foreach ($arResult['PROPERTIES']["GALLERY_MAIN"]["VALUE"] as $imgId) {?>
																	<div class="swiper-slide" role="group">
																		<div class="media" >
																			<img src="<?=CFile::GetPath($imgId)?>" class=" sp-no-webp" alt="<?=$arResult['NAME']?>"> 
																		</div>
																	</div>
																<?}?>									
															</div>
														<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" ><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 6"></span></div>
													
													<?}?>
													<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
													<a href="javascript:;" class="nav-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-794b5523e910595f" aria-disabled="false">
														<i>
															<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
																<circle cx="22" cy="22" r="21" stroke="#25282A" stroke-width="2"></circle>
																<path d="M29.89 22.1875L23.97 28.1075C23.83 28.2475 23.64 28.3275 23.45 28.3275C23.26 28.3275 23.07 28.2575 22.93 28.1075C22.64 27.8175 22.64 27.3475 22.93 27.0575L27.59 22.3975H13L13 20.9175H27.58L22.92 16.2675C22.63 15.9775 22.63 15.5075 22.92 15.2175C23.21 14.9275 23.68 14.9275 23.97 15.2175L29.89 21.1375C30.18 21.4275 30.18 21.8975 29.89 22.1875Z" fill="#25282A"></path>
															</svg>
														</i>
													</a>
													<div class="gallery-btn" >
														<a href="javascript:;">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
																	<g clip-path="url(#clip0_1_4410)">
																		<path d="M25.0418 7.345V0.95752H18.6543" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M16.9121 9.08791L25.0425 0.95752" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M0.957031 7.345V0.95752H7.34451" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M9.08742 9.08791L0.957031 0.95752" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M0.957031 18.7888V25.1763H7.34451" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M9.08742 17.0461L0.957031 25.1765" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M25.0418 18.7888V25.1763H18.6543" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M16.9121 17.0461L25.0425 25.1765" stroke="#25282A" stroke-width="1.91529" stroke-linecap="round" stroke-linejoin="round"></path>
																	</g>
																	<defs>
																		<clippath id="clip0_1_4410">
																			<rect width="26" height="26.1341" fill="white"></rect>
																		</clippath>
																	</defs>
																</svg>
															</i>
														</a>
													</div>
												</div>
											</div>
																				<div class="col-lg-4 offset-lg-1" >
											<div class="content" >
												<div class="title" >
													<span><?=$arResult['NAME']?></span>
												</div>
												<div class="price-block" >
													<div class="price" >
														<span>
														</span>
													</div>
													<div class="subtext" >
														<p></p>
													</div>
												</div>
												<div class="actions" >
													<a href="mailto:info@nurus.com.tr" target="" class="btn btn-arsenic btn-rnd-full btn-semibold"><?=GetMessage('GET_OFFER')?></a>													<a href="/en/product/u-do/#comp-16" target="" class="btn btn-arsenic-outline btn-semibold btn-rnd-full"><?=GetMessage('CONFIGURE')?></a>																																								<a href="https://login.pcon-solutions.com/catalog/NURD12" class="btn btn-light-silver btn-rnd" target="_blank">
															<img src="<?=SITE_TEMPLATE_PATH."/src/img"?>/comp-13-button-img.svg" alt="">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
																	<g clip-path="url(#clip0_1_4295)">
																		<path d="M17.3408 5.05872V0.659302H12.9414" stroke="#4F4F4F" stroke-width="1.31916" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M7.60556 0.659302H2.54656C1.50442 0.659302 0.660156 1.50357 0.660156 2.54571V15.4537C0.660156 16.4959 1.50442 17.3401 2.54656 17.3401H15.4546C16.4967 17.3401 17.341 16.4959 17.341 15.4537V10.3947" stroke="#4F4F4F" stroke-width="1.31916" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M10.0918 7.90151L17.3406 0.659302" stroke="#4F4F4F" stroke-width="1.31916" stroke-linecap="round" stroke-linejoin="round"></path>
																	</g>
																	<defs>
																		<clippath id="clip0_1_4295">
																			<rect width="18" height="18" fill="white"></rect>
																		</clippath>
																	</defs>
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
			</div>
		</div>
	</div>
</section>
<section class="comp-94">
	<div class="comp-94-wrapper" >
		<div class="container" >
			<div class="comp-94-main" >
				<div class="row" >
					<div class="col-lg-10 offset-lg-1" >
						<div class="comp-94-nav" >
							<a href="#overview" data-target=".comp-95" class=""><?=$arResult['NAME']?> <?=GetMessage('PRODUCT_OVERVIEW')?></a>
							<?if (!empty($arResult['PROPERTIES']['USE_IMG']['VALUE'])) {?>
								<a href="javascript:;" data-target=".comp-14" class=""><?=GetMessage('USAGE')?></a>
							<?}?>
							<?if (!empty($arResult['DOCS_BY_SECTION'])) {?>
								<a href="#docs" data-target=".comp-12" class=""><?=GetMessage('DOCUMENTS')?></a>
							<?}?>
							<?if (!empty($arResult['PROPERTIES']['PICTURE_WITH_SIZES']['VALUE']) || !empty($arResult['PROPERTIES']['CHARACTERISTICS']['VALUE'])) {?>
								<a href="#Dimensions" data-target=".comp-96" class=""><?=GetMessage('SIZES_AND_MATERIALS')?></a>
							<?}?>
							<!-- <a href="javascript:;" data-target=".comp-16" class="">Конфигуратор</a> -->
							<a href="#nav-tabContent" data-target=".comp-97" class=""><?=GetMessage('GALLERY')?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?if (!empty($arResult['PROPERTIES']["FEATURES_GALLERY"]["VALUE"])) {?>
<section class="comp-95">
  <div class="comp-95-wrapper" >
    <div class="container" >
      <div class="comp-95-main" >
        <div class="row" >
          <div class="col-lg-10 offset-lg-1" >
            <div class="comp-95-head" >
              <div class="title fadeInUp-scroll visible" data-delay="200" >
                <h2></h2>
              </div>
            </div>
			<div class="comp-95-content fadeInUp-scroll visible" data-delay="300" id="overview">
                <div class="swiper comp-95-swiper swiper-initialized swiper-horizontal swiper-backface-hidden" >
					<div class="swiper-wrapper" id="swiper-wrapper-d6cb2fe59ffb0925" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >
						<?foreach ($arResult['PROPERTIES']["FEATURES_GALLERY"]["VALUE"] as $elem) {
							$elemArr = CFile::GetFileArray($elem);
							$is_video = (strpos($elemArr["CONTENT_TYPE"], "video") !== false);
							?>
							<div class="swiper-slide" role="group" style="margin-right: 30px;" >
								<div class="card" >
									<div class="card-media" >
										<?if ($is_video):?>
											<video src="<?=$elemArr['SRC']?>" autoplay muted loop playsinline class="sp-no-webp" style="width: 100%; height: 100%; object-fit: cover;"></video>
										<?else:?>
											<picture>
												<img class="sp-no-webp" src="<?=$elemArr['SRC']?>" alt="<?=htmlspecialcharsbx($elemArr['DESCRIPTION'])?>">
											</picture>
										<?endif;?>
									</div>
									<?if (!empty($elemArr['DESCRIPTION'])) {?>
										<div class="card-content" >
											<div class="text" >
												<p><?=$elemArr['DESCRIPTION']?></p>
											</div>
										</div>
									<?}?>
								</div>
							</div>
						<?}?>
					</div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-actions" >
                  <a href="javascript:;" class="nav-prev swiper-button-disabled" tabindex="-1" role="button">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none"><path d="M8.55859 16L0.999045 8.55955L8.4395 1" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path></svg></i>
                  </a>
                  <a href="javascript:;" class="nav-next" tabindex="0" role="button">
                    <i><svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none"><path d="M0.999999 1L8.55955 8.44045L1.1191 16" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path></svg></i>
                  </a>
                </div>
              </div>
			</div>
        </div>
      </div>
    </div>
  </div>
</section>
<?}?>
<?if (!empty($arResult['PROPERTIES']['USE_IMG']['VALUE'])) {?>	
	<section class="comp-14">
		<div class="comp-14-wrapper" >
			<div class="container" >
				<div class="comp-14-head" >
					<div class="title fadeInUp-scroll visible" data-delay="200" >
						<h2><?=GetMessage('USAGE')?></h2>
					</div>
				</div>
				<div class="comp-14-main" >
					<div class="swiper swiper-backface-hidden swiper-initialized swiper-horizontal" >
						<div class="swiper-wrapper" aria-live="polite" >
							<?foreach ($arResult['PROPERTIES']["USE_IMG"]["VALUE"] as  $imgId) {?>
								<div class="swiper-slide swiper-slide-next" role="group"  style="width: 1261.82px; margin-right: 40px;">
									<div class="comp-14-item" >
										<picture>
											<img class="sp-no-webp" src="<?=CFile::GetPath($imgId)?>" alt="Nurus_Flora_Masaüstü_2x_eng_(1)">
										</picture>
									</div>
								</div>
							<?}?>
						</div>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
					<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" ><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
				</div>
			</div>
		</div>
	</section>
<?}?>
<?if (!empty($arResult['DOCS_BY_SECTION'])):?>
    <section class="comp-12">
        <div class="comp-12-wrapper">
            <div class="comp-12-head">
                <div class="title"><h3><?=GetMessage('DESIGN_MATERIALS')?></h3></div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2" id="docs">
                    <div class="comp-12-list">
                        <?foreach ($arResult['DOCS_BY_SECTION'] as $arSection):?>
                            <div class="comp-12-list-item fadeInUp-scroll">
                                <div class="comp-12-list-item-text">
                                    <p><?=$arSection['NAME']?></p>
                                    <i class="icon-desktop" style="opacity: 1;">
										<svg xmlns="http://www.w3.org/2000/svg" width="22" height="2" viewBox="0 0 22 2" fill="none">
											<path d="M1 1L21 0.999998" stroke="white" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</i>
									<i class="icon-mobile">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="15" viewBox="0 0 26 15" fill="none">
											<path d="M25 1L13.0953 13.0953L1 1.19056" stroke="white" stroke-width="2.00585" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
                                </div>
                                <div class="comp-12-list-item-buttons">
                                    <div class="comp-12-list-item-buttons-list">
                                        <?foreach ($arSection['FILES'] as $doc):?>
                                            <a class="btn-download" href="<?=$doc['SRC']?>" download="">
                                                <span><?=htmlspecialcharsbx(strtoupper($doc['ELEMENT_NAME']))?></span>
                                                <i>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
														<path d="M8.91016 1.229V12.5858" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M3.54492 7.21436L8.90997 12.5858L14.2814 7.21436" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M17 14.0815V15.7569C17 16.7289 16.2199 17.509 15.2479 17.509H2.58024C1.61466 17.509 0.828125 16.7225 0.828125 15.7569V14.0815" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
                                                </i>
                                            </a>
                                        <?endforeach;?>
                                    </div>
                                </div>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?endif;?>
<?//if (!empty($arResult['DOC_PDF']) || !empty($arResult['DOC_CAD'])) {?>
	<!-- <section class="comp-12">
		<div class="comp-12-wrapper" >
			<div class="comp-12-head" >
				<div class="title fadeInUp-scroll visible" data-delay="100" >
					<h3><?=GetMessage('DOCUMENTS')?></h3>
				</div>
			</div>
			<div class="row" >
				<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2" >
					<div class="comp-12-list" >
						<?if (!empty($arResult['DOC_CAD'])) {?>
							<div class="comp-12-list-item fadeInUp-scroll" data-delay="150" >
								<div class="comp-12-list-item-text"  style="width: 600.332px;">
									<p><?=GetMessage('CAD_DATA')?></p>
									<i class="icon-desktop" style="opacity: 1;">
										<svg xmlns="http://www.w3.org/2000/svg" width="22" height="2" viewBox="0 0 22 2" fill="none">
											<path d="M1 1L21 0.999998" stroke="white" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</i>
									<i class="icon-mobile">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="15" viewBox="0 0 26 15" fill="none">
											<path d="M25 1L13.0953 13.0953L1 1.19056" stroke="white" stroke-width="2.00585" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</div>
								<div class="comp-12-list-item-buttons" >
									<div class="comp-12-list-item-buttons-list" >
										<?foreach ($arResult['DOC_CAD'] as $doc) {?>
											<a class="btn-download" href="<?=$doc['SRC']?>" download="">
												<span><?=htmlspecialcharsbx(strtoupper($doc['ELEMENT_NAME']))?></span>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
														<path d="M8.91016 1.229V12.5858" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M3.54492 7.21436L8.90997 12.5858L14.2814 7.21436" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M17 14.0815V15.7569C17 16.7289 16.2199 17.509 15.2479 17.509H2.58024C1.61466 17.509 0.828125 16.7225 0.828125 15.7569V14.0815" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</i>
											</a>
										<?}?>
									</div>
								</div>
							</div>
						<?}?>
						<?if (!empty($arResult['DOC_PDF'])) {?>
							<div class="comp-12-list-item fadeInUp-scroll" data-delay="150" >
								<div class="comp-12-list-item-text"  style="width: 600.332px;">
									<p><?=GetMessage('BOOKLETS')?></p>
									<i class="icon-desktop" style="opacity: 1;">
										<svg xmlns="http://www.w3.org/2000/svg" width="22" height="2" viewBox="0 0 22 2" fill="none">
											<path d="M1 1L21 0.999998" stroke="white" stroke-width="2" stroke-linecap="round"></path>
										</svg>
									</i>
									<i class="icon-mobile">
										<svg xmlns="http://www.w3.org/2000/svg" width="26" height="15" viewBox="0 0 26 15" fill="none">
											<path d="M25 1L13.0953 13.0953L1 1.19056" stroke="white" stroke-width="2.00585" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</div>
								<div class="comp-12-list-item-buttons" >
									<div class="comp-12-list-item-buttons-list" >
										<?foreach ($arResult['DOC_PDF'] as $doc) {?>
											<a class="btn-download" href="<?=$doc['SRC']?>" download="">
												<span><?=htmlspecialcharsbx(strtoupper($doc['ELEMENT_NAME']))?></span>
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="19" viewBox="0 0 18 19" fill="none">
														<path d="M8.91016 1.229V12.5858" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M3.54492 7.21436L8.90997 12.5858L14.2814 7.21436" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M17 14.0815V15.7569C17 16.7289 16.2199 17.509 15.2479 17.509H2.58024C1.61466 17.509 0.828125 16.7225 0.828125 15.7569V14.0815" stroke="#25282A" stroke-width="1.27891" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</i>
											</a>
										<?}?>
									</div>
								</div>
							</div>
						<?}?>
					</div>
				</div>
			</div>
		</div>
	</section> -->
<?//}?>
<?if (!empty($arResult['PROPERTIES']['PICTURE_WITH_SIZES']['VALUE']) || !empty($arResult['PROPERTIES']['CHARACTERISTICS']['VALUE'])) {?>
	<section class="comp-96">
	<div class="container" >
		<div class="row" >
		<div class="col-12" >
			<div class="section-title title" >
			<h2><?=GetMessage('SIZES_AND_CHARS')?></h2>
			</div>
		</div>
		<div class="col-lg-10 offset-lg-1"  id="Dimensions">
			<div class="row" >
			<div class="col-lg-7" >
				<?if (!empty($arResult['PROPERTIES']['PICTURE_WITH_SIZES']['VALUE'])) {?>
					<div class="comp-96-asset" >
						<img src="<?=CFile::GetPath($arResult['PROPERTIES']['PICTURE_WITH_SIZES']['VALUE'])?>" alt="">            
					</div>
				<?}?>
			</div>
			<div class="col-lg-4 offset-lg-1" >
				<div class="comp-96-content" >
				<div class="comp-96-content-title" ><?=$arResult['NAME']?></div>
					<div class="comp-96-content-text" >
						<p>
							<?if (!empty($arResult['PROPERTIES']['CHARACTERISTICS']['VALUE'])) {?>
								<?foreach ($arResult['PROPERTIES']['CHARACTERISTICS']['VALUE'] as $val) {?>
									<?=$val?><br>
								<?}?>
							<?}?>
						</p>            
					</div>
					<div class="comp-96-content-button" >
						<!-- <a href="/en/product/u-do/#comp-16" target="" class="btn btn-arsenic btn-semibold">Go to Configurator</a>   -->            
					</div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</div>
	</section>
<?}?>

<?
$hasInterior = !empty($arResult['PROPERTIES']['GALLERY_IN_SPACE']['VALUE']);
$hasWhiteBg = !empty($arResult['PROPERTIES']['GALLERY']['VALUE']);
?>

<?php if ($hasInterior || $hasWhiteBg): ?>
    <section class="comp-97">
        <div class="comp-97-wrapper">
            <div class="container">
                <div class="comp-97-main">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">

                            <div class="comp-97-head">
                                <div class="title fadeInUp-scroll visible" data-delay="200">
                                    <h2><?=GetMessage('GALLERY')?></h2>
                                </div>
                                <div class="comp-97-tab-nav fadeInUp-scroll visible hide-icon" data-delay="250">
                                    <nav>
                                        <div class="list-group" id="list-tab" role="tablist">
                                            <? if ($hasInterior): ?>
                                                <a class="active" id="id-tab-1" data-bs-toggle="list" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
                                                    <?=GetMessage('IN_INTERIOR')?>
                                                </a>
                                            <? endif; ?>
                                            <? if ($hasWhiteBg): ?>
                                                <a class="<?= (!$hasInterior) ? 'active' : '' ?>" id="id-tab-2" data-bs-toggle="list" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="<?= (!$hasInterior) ? 'true' : 'false' ?>">
                                                    <?=GetMessage('ON_WHITE_BG')?>
                                                </a>
                                            <? endif; ?>
                                        </div>
                                    </nav>
                                    <div class="arrow-icon">
                                        <a href="javascript:;">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="18" viewBox="0 0 10 18" fill="none">
                                                    <path d="M1 1L9.06352 8.93648L1.12704 17" stroke="#25282A" stroke-width="1.33723" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="comp-97-content fadeInUp-scroll visible" data-delay="300">
                                <div class="tab-content" id="nav-tabContent">
                                    <? if ($hasInterior): ?>
                                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="id-tab-1">
                                            <div class="swiper comp-97-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                                                <div class="swiper-wrapper" id="swiper-wrapper-2b12627ef210910b10" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                                    <? foreach ($arResult['PROPERTIES']["GALLERY_IN_SPACE"]["VALUE"] as $imgId) { ?>
                                                        <div class="swiper-slide" role="group">
                                                            <div class="media">
                                                                <img src="<?= CFile::GetPath($imgId) ?>" class=" sp-no-webp" alt="<?= $arResult['NAME'] ?>">
                                                            </div>
                                                        </div>
                                                    <? } ?>
                                                </div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                            </div>
                                        </div>
                                    <? endif; ?>
                                    
                                    <? if ($hasWhiteBg): ?>
                                        <div class="tab-pane fade <?= (!$hasInterior) ? 'show active' : '' ?> is-transparent" id="tab-2" role="tabpanel" aria-labelledby="id-tab-2">
                                            <div class="swiper comp-97-swiper swiper-initialized swiper-horizontal">
                                                <div class="swiper-wrapper" id="swiper-wrapper-a109ea399d26863df" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                                                    <? foreach ($arResult['PROPERTIES']["GALLERY"]["VALUE"] as $imgId) { ?>
                                                        <div class="swiper-slide" role="group">
                                                            <div class="media">
                                                                <img src="<?= CFile::GetPath($imgId) ?>" class=" sp-no-webp" alt="<?= $arResult['NAME'] ?>">
                                                            </div>
                                                        </div>
                                                    <? } ?>
                                                </div>
                                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                            </div>
                                        </div>
                                    <? endif; ?>
                                </div>
                            </div>

                            <div class="comp-97-end fadeInUp-scroll visible" data-delay="400">
                                <div class="comp-97-end-content">
                                    <div class="description">
                                        <p><?=GetMessage('GALLERY_FOOTER_TEXT')?></p>
                                    </div>
                                    <div class="action">
                                        <a href="/case-studies/" class="btn btn-white btn-rnd-full btn-semibold">
                                            <span><?=GetMessage('CASE_STUDIES')?></span>
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                                                    <path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#353535"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                                <div class="comp-97-end-swiper-actions">
                                    <a href="javascript:;" class="nav-prev">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                                <path d="M8.55859 16L0.999045 8.55955L8.4395 1" stroke="#fff" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </i>
                                    </a>
                                    <a href="javascript:;" class="nav-next">
                                        <i>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                                <path d="M0.999999 1L8.55955 8.44045L1.1191 16" stroke="#fff" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
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
    </section>
<?php endif; ?>
<?if (!empty($arResult['PROPERTIES']["GALLERY_MAIN"]["VALUE"][0])) {?>
	<section class="comp-19">
		<div class="comp-19-wrapper" >
			<div class="container" >
				<div class="comp-19-main" >
					<div class="row" >
						<div class="col-lg-8 offset-lg-2" >
							<div class="comp-19-content" >
								<div class="content-top" >
									<div class="media fadeInUp-scroll visible" data-delay="200" >
										<img src="<?=CFile::GetPath($arResult['PROPERTIES']["GALLERY_MAIN"]["VALUE"][0])?>" class=" sp-no-webp" alt="">			
									</div>
									<div class="text fadeInUp-scroll visible" data-delay="300" >
										<p><?=GetMessage('QUALITY_DESC')?></p>
									</div>
								</div>
								<div class="content-bottom" >
									<div class="word fadeInUp-scroll visible" data-delay="350" >
										<span><?=$arResult['NAME']?></span>
									</div>
									<div class="actions fadeInUp-scroll visible" data-delay="400" >
										<a href="mailto:info@nurus.com.tr" target="" class="btn btn-arsenic btn-semibold btn-rnd"><?=GetMessage('GET_OFFER')?></a>									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?}?>
<?
if (!empty($arResult['PROPERTIES']['SLIDER_ADVANTAGES']['VALUE'])):   
    $GLOBALS['arrAdvFilter'] = array(
        "ID" => $arResult['PROPERTIES']['SLIDER_ADVANTAGES']['VALUE']
    );
    ?>

    <?$APPLICATION->IncludeComponent(
        "bitrix:news.list", 
        "eco_adv_slider_for_product",
        array(
            "IBLOCK_TYPE" => "system_blocks",
            "IBLOCK_ID" => "50", 
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "FILTER_NAME" => "arrAdvFilter",
            "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT", "DETAIL_TEXT", ""),
            "PROPERTY_CODE" => array("PROP_PHOTO", ""),
            "CHECK_DATES" => "Y",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",
            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_STATUS_404" => "N",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "METOO_HREF" => "/sustainability/" 
        ),
        false
    );?>

<?endif;?>