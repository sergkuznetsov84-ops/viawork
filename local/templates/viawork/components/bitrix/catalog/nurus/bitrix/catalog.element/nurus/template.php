<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$heroImageSrc = '';

if (!empty($arResult['DETAIL_PICTURE']['SRC'])) {
	$heroImageSrc = $arResult['DETAIL_PICTURE']['SRC'];
} elseif (!empty($arResult['PREVIEW_PICTURE']['SRC'])) {
	$heroImageSrc = $arResult['PREVIEW_PICTURE']['SRC'];
} elseif (!empty($arResult['PROPERTIES']['GALLERY']['VALUE'][0])) {
	$heroImageSrc = CFile::GetPath($arResult['PROPERTIES']['GALLERY']['VALUE'][0]);
}
?>
<main class="main-product">
	<section class="comp-1 style-2">
		<div class="comp-1-wrapper" >
			<div class="comp-1-media" >
				<picture>
					<img class="sp-no-webp" src="<?=$heroImageSrc?>" alt="<?=htmlspecialcharsbx($arResult['NAME'])?>">
				</picture>				
			</div>
			<div class="comp-1-content" >
				<div class="title fadeInUp-scroll visible" data-delay="300" >
						<h2><?=$arResult["NAME"]?></h2>
					</div>
				</div>
			<div class="comp-1-icon" >
				<div class="mouse" >
					<div class="roll" ></div>
					<div class="rollshadow" ></div>
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
						<div class="tab-content" >
							<div class="inner-tab" >
								<nav>
									<div class="list-group list-group-inner" role="tablist" >
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
													<?if (!empty($arResult['PROPERTIES']["GALLERY"]["VALUE"])) {?>
														<div class="swiper swiper-initialized swiper-horizontal swiper-backface-hidden" >
															<div class="swiper-wrapper" id="swiper-wrapper-794b5523e910595f" aria-live="polite" >
																<?foreach ($arResult['PROPERTIES']["GALLERY"]["VALUE"] as $imgId) {?>
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
													<a href="" target="" class="btn btn-arsenic btn-rnd-full btn-semibold">Получить предложение</a>													<a href="/en/product/u-do/#comp-16" target="" class="btn btn-arsenic-outline btn-semibold btn-rnd-full">Configure</a>																																								<a href="https://login.pcon-solutions.com/catalog/NURD12" class="btn btn-light-silver btn-rnd" target="_blank">
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
							<a href="#overview" data-target=".comp-95" class=""><?=$arResult['NAME']?> обзор</a>
							<?if (!empty($arResult['PROPERTIES']['USE_IMG']['VALUE'])) {?>
								<a href="javascript:;" data-target=".comp-14" class="">Использование</a>
							<?}?>
							<?if (!empty($arResult['DOC_PDF']) || !empty($arResult['DOC_CAD'])) {?>
								<a href="javascript:;" data-target=".comp-12" class="">Документы</a>
							<?}?>
							<?if (!empty($arResult['PROPERTIES']['PICTURE_WITH_SIZES']['VALUE']) || !empty($arResult['PROPERTIES']['CHARACTERISTICS']['VALUE'])) {?>
								<a href="#Dimensions" data-target=".comp-96" class="">Размеры и материалы</a>
							<?}?>
							<!-- <a href="javascript:;" data-target=".comp-16" class="">Конфигуратор</a> -->
							<a href="#nav-tabContent" data-target=".comp-97" class="">Галерея</a>
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
				<?if (!empty($arResult['PROPERTIES']["FEATURES_GALLERY"]["VALUE"])) {?>
					<div class="swiper-wrapper" id="swiper-wrapper-d6cb2fe59ffb0925" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);" >
						<?foreach ($arResult['PROPERTIES']["FEATURES_GALLERY"]["VALUE"] as  $elem) {?>
							<?
							$elemArr = CFile::GetFileArray($elem);
							?>
							<div class="swiper-slide swiper-slide-active" role="group" style="margin-right: 30px;" >
								<div class="card" >
									<div class="card-media" >
										<picture><img class="sp-no-webp" src="<?=$elemArr['SRC']?>" alt=""></picture>
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
				<?}?>					
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                <div class="swiper-actions" >
                  <a href="javascript:;" class="nav-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-d6cb2fe59ffb0925" aria-disabled="true">
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                        <path d="M8.55859 16L0.999045 8.55955L8.4395 1" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                  </a>
                  <a href="javascript:;" class="nav-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-d6cb2fe59ffb0925" aria-disabled="false">
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                        <path d="M0.999999 1L8.55955 8.44045L1.1191 16" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
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
<?}?>
<?if (!empty($arResult['PROPERTIES']['USE_IMG']['VALUE'])) {?>	
	<section class="comp-14">
		<div class="comp-14-wrapper" >
			<div class="container" >
				<div class="comp-14-head" >
					<div class="title fadeInUp-scroll visible" data-delay="200" >
						<h2>Использование</h2>
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
<?if (!empty($arResult['DOC_PDF']) || !empty($arResult['DOC_CAD'])) {?>
	<section class="comp-12">
		<div class="comp-12-wrapper" >
			<div class="comp-12-head" >
				<div class="title fadeInUp-scroll visible" data-delay="100" >
					<h3>Документы</h3>
				</div>
			</div>
			<div class="row" >
				<div class="col-lg-8 offset-lg-2 col-md-8 offset-md-2" >
					<div class="comp-12-list" >
						<?if (!empty($arResult['DOC_CAD'])) {?>
							<div class="comp-12-list-item fadeInUp-scroll" data-delay="150" >
								<div class="comp-12-list-item-text"  style="width: 600.332px;">
									<p>2D / CAD Data</p>
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
												<span><?=strtoupper(str_replace('.', ' ', $doc['ORIGINAL_NAME']))?></span>
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
									<p>Буклеты</p>
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
												<span><?=strtoupper(str_replace('.', ' ', $doc['ORIGINAL_NAME']))?></span>
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
	</section>
<?}?>
<?if (!empty($arResult['PROPERTIES']['PICTURE_WITH_SIZES']['VALUE']) || !empty($arResult['PROPERTIES']['CHARACTERISTICS']['VALUE'])) {?>
	<section class="comp-96">
	<div class="container" >
		<div class="row" >
		<div class="col-12" >
			<div class="section-title title" >
			<h2>Размеры и характеристики</h2>
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
<!-- <section class="comp-16 style-1 is-dark" id="comp-16">
	<div class="comp-16-wrapper" >
		<div class="container" >
			<div class="comp-16-main" >
				<div class="comp-16-content" >
					<div class="row" >
						<div class="col-12 col-lg-10 offset-lg-1" >
							<div class="section-title title" >
								<h2>
									pCon Configurator								
								</h2>
							</div>
							<div class="iframe fadeInUp-scroll visible" data-delay="200" >
								<div class="loader" >
									<div class="loader-wrapper" ></div>
								</div>
								<iframe src="<?=SITE_TEMPLATE_PATH."/src/img"?>/saved_resource.html" frameborder="0" bis_size="{&quot;x&quot;:346,&quot;y&quot;:3990,&quot;w&quot;:1154,&quot;h&quot;:552,&quot;abs_x&quot;:346,&quot;abs_y&quot;:3990}" bis_id="fr_xja2dafnmd6r3zbcyqpul9" bis_depth="0" bis_chainid="1"></iframe>
							</div>
						</div>
						<div class="col-12 col-lg-3 offset-lg-7 d-none" >
							<div class="action fadeInUp-scroll visible" data-delay="300" >
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<section class="comp-97">
  <div class="comp-97-wrapper" >
    <div class="container" >
      <div class="comp-97-main" >
        <div class="row" >
          <div class="col-lg-10 offset-lg-1" >
            <div class="comp-97-head" >
              <div class="title fadeInUp-scroll visible" data-delay="200" >
                <h2>Галерея</h2>
              </div>
              <div class="comp-97-tab-nav fadeInUp-scroll visible" data-delay="250" >
                <nav>
                  <div class="list-group" id="list-tab" role="tablist" >
					<?if (!empty($arResult['PROPERTIES']["GALLERY_IN_SPACE"]["VALUE"])) {?>
						
					<?}?>
					<a class="active" id="id-tab-1" data-bs-toggle="list" href="/en/product/u-do/#tab-1" role="tab" aria-controls="tab-1">В интерьере</a>
					<a class="" id="id-tab-2" data-bs-toggle="list" href="/en/product/u-do/#tab-2" role="tab" aria-controls="tab-2">На белом фоне</a>
				</div>
                </nav>
                <div class="arrow-icon" >
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
            <div class="comp-97-content fadeInUp-scroll visible" data-delay="300" >
              <div class="tab-content" id="nav-tabContent" >
                                  <div class="tab-pane fade show active " id="tab-1" role="tabpanel" aria-labelledby="id-tab-1" >
                    <div class="swiper comp-97-swiper swiper-initialized swiper-horizontal swiper-backface-hidden" >
                      <div class="swiper-wrapper" id="swiper-wrapper-2b12627ef210910b10" aria-live="polite"  style="transform: translate3d(0px, 0px, 0px);">
							<?foreach ($arResult['PROPERTIES']["GALLERY_IN_SPACE"]["VALUE"] as $imgId) {?>
								<div class="swiper-slide" role="group">
									<div class="media" >
										<img src="<?=CFile::GetPath($imgId)?>" class=" sp-no-webp" alt="<?=$arResult['NAME']?>"> 
									</div>
								</div>
							<?}?>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                  </div>
				<div class="tab-pane fade  is-transparent" id="tab-2" role="tabpanel" aria-labelledby="id-tab-2" >
                    <div class="swiper comp-97-swiper swiper-initialized swiper-horizontal" >
                      <div class="swiper-wrapper" id="swiper-wrapper-a109ea399d26863df" aria-live="polite"  style="transition-duration: 0ms; transition-delay: 0ms;">
						<?foreach ($arResult['PROPERTIES']["GALLERY"]["VALUE"] as $imgId) {?>
							<div class="swiper-slide" role="group">
								<div class="media" >
									<img src="<?=CFile::GetPath($imgId)?>" class=" sp-no-webp" alt="<?=$arResult['NAME']?>"> 
								</div>
							</div>
						<?}?>
						</div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                  </div>
                </div>
            </div>
            <div class="comp-97-end fadeInUp-scroll visible" data-delay="400" >
              <div class="comp-97-end-content" >
                <div class="description" >
                  <p>Ознакомьтесь с нашей продукцией в галерее и на странице с примерами работ.</p>
                </div>
                <div class="action" >
                  <a href="/case-studies/" class="btn btn-white btn-rnd-full btn-semibold">
                    <span>Примеры работ</span>
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                        <path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#353535"></path>
                      </svg>
                    </i>
                  </a>
                </div>
              </div>
              <div class="comp-97-end-swiper-actions" >
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
<?if (!empty($arResult['PROPERTIES']["GALLERY"]["VALUE"][0])) {?>
	<section class="comp-19">
		<div class="comp-19-wrapper" >
			<div class="container" >
				<div class="comp-19-main" >
					<div class="row" >
						<div class="col-lg-8 offset-lg-2" >
							<div class="comp-19-content" >
								<div class="content-top" >
										<div class="media fadeInUp-scroll visible" data-delay="200" >
											<img src="<?=CFile::GetPath($arResult['PROPERTIES']["GALLERY"]["VALUE"][0])?>" class=" sp-no-webp" alt=""> 							
										</div>
										<div class="text fadeInUp-scroll visible" data-delay="300" >
										<p>Гармоничный дизайн и высокое качество.</p>
									</div>
								</div>
								<div class="content-bottom" >
									<div class="word fadeInUp-scroll visible" data-delay="350" >
										<span><?=$arResult['NAME']?></span>
									</div>
									<div class="actions fadeInUp-scroll visible" data-delay="400" >
										<a href="" target="" class="btn btn-arsenic btn-semibold btn-rnd">Получить предложение</a>									
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
<!-- <section class="comp-22">
	<div class="comp-22-wrapper" >
		<div class="container" >
			<div class="comp-22-main" >
				<div class="comp-22-body" >
					<div class="swiper swiper-initialized swiper-horizontal swiper-autoheight swiper-backface-hidden" >
						<div class="swiper-wrapper"  aria-live="polite" >
							<div class="swiper-slide swiper-slide-prev" role="group">
								<div class="comp-22-item" >
									<div class="row" >
										<div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0 col-sm-10 offset-sm-1" >
											<div class="comp-22-item-content" >
												<div class="comp-22-item-subtitle fadeInUp-scroll visible" data-delay="100" >
													<h4>FLORA:  CHOOSE SUSTAINABILITY.</h4>
												</div>
												<div class="comp-22-item-title fadeInUp-scroll visible" data-delay="150" >
													<h3>95% Vertically Integrated Production.</h3>
												</div>
												<div class="comp-22-item-article fadeInUp-scroll visible" data-delay="200" >
													<p>Produced in Nurus’s 45,000 m² high-tech facility, which houses all production lines, Flora is a sustainable product made with a variety of material choices and closed-loop production methods.</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 offset-xl-2 col-lg-4 offset-lg-1" >
											<div class="comp-22-item-media fadeInUp-scroll visible" data-delay="250" >
												<img src="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2024/10/18074618/FloraSustainabilityNurus.svg" alt="">												</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-slide swiper-slide-active"  role="group">
								<div class="comp-22-item" >
									<div class="row" >
										<div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0 col-sm-10 offset-sm-1" >
											<div class="comp-22-item-content" >
												<div class="comp-22-item-subtitle fadeInUp-scroll visible" data-delay="100" >
													<h4>FLORA: UPHOLSTERY MATERIALS</h4>
												</div>
												<div class="comp-22-item-title fadeInUp-scroll visible" data-delay="150" >
													<h3>Internationally Certified Fabrics</h3>
												</div>
												<div class="comp-22-item-article fadeInUp-scroll visible" data-delay="200" >
													<p>The foam underneath Flora’s comfortable seat undergoes both molding and casting processes at Nurus facilities. This ensures that high-quality foams, which can be traced back to their chemical composition, are used. The upholstery fabrics are skillfully sewn from internationally certified materials that remain durable even after repeated use.</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 offset-xl-2 col-lg-4 offset-lg-1" >
											<div class="comp-22-item-media fadeInUp-scroll visible" data-delay="250" >
												<img src="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2024/10/18074617/FloraSustainabilityNurus3.svg" alt="">												</div>
										</div>
									</div>
								</div>
							</div>

							<div class="swiper-slide swiper-slide-next" role="group" >
								<div class="comp-22-item" >
									<div class="row" >
										<div class="col-xl-5 offset-xl-1 col-lg-6 offset-lg-0 col-sm-10 offset-sm-1" >
											<div class="comp-22-item-content" >
												<div class="comp-22-item-subtitle fadeInUp-scroll visible" data-delay="100" >
													<h4>FLORA: METAL INTERNAL STRUCTURE</h4>
												</div>
												<div class="comp-22-item-title fadeInUp-scroll visible" data-delay="150" >
													<h3>Aluminum Injection and Metal Processing Line</h3>
												</div>
												<div class="comp-22-item-article fadeInUp-scroll visible" data-delay="200" >
													<p>All of Flora’s metal components are produced within the facility’s injection and processing lines. Waste materials are repurposed through closed-loop manufacturing, reducing both our Scope 3 carbon footprint and the amount of material wasted.</p>
												</div>
											</div>
										</div>
										<div class="col-xl-3 offset-xl-2 col-lg-4 offset-lg-1" >
											<div class="comp-22-item-media fadeInUp-scroll visible" data-delay="250" >
												<img src="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2024/10/18074615/FloraSustainabilityNurus1.svg" alt="">												</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
				</div>
				<div class="comp-22-footer" >
					<div class="row" >
						<div class="col-xl-5 offset-xl-1 col-lg-6" >
							<div class="comp-22-footer-main" >
								<div class="swiper-btn-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-8b692bebd71e83e3" aria-disabled="false" >
									<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M1.11 6.8125L7.03 0.892499C7.17 0.752499 7.36 0.6725 7.55 0.6725C7.74 0.6725 7.93 0.742499 8.07 0.892499C8.36 1.1825 8.36 1.6525 8.07 1.9425L3.41 6.6025L18 6.6025L18 8.0825L3.42 8.0825L8.08 12.7325C8.37 13.0225 8.37 13.4925 8.08 13.7825C7.79 14.0725 7.32 14.0725 7.03 13.7825L1.11 7.8625C0.82 7.5725 0.82 7.1025 1.11 6.8125Z" fill="#fff"></path>
									</svg>
								</div>
								<div class="swiper-pagination swiper-pagination-progressbar swiper-pagination-horizontal" ><span class="swiper-pagination-progressbar-fill" style="transform: translate3d(0px, 0px, 0px) scaleX(0.666667) scaleY(1); transition-duration: 300ms;"></span></div>
								<div class="swiper-btn-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-8b692bebd71e83e3" aria-disabled="false" >
									<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.89 7.1875L10.97 13.1075C10.83 13.2475 10.64 13.3275 10.45 13.3275C10.26 13.3275 10.07 13.2575 9.93 13.1075C9.64 12.8175 9.64 12.3475 9.93 12.0575L14.59 7.3975H0V5.9175H14.58L9.92 1.2675C9.63 0.9775 9.63 0.5075 9.92 0.2175C10.21 -0.0725 10.68 -0.0725 10.97 0.2175L16.89 6.1375C17.18 6.4275 17.18 6.8975 16.89 7.1875Z" fill="#fff"></path>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="comp-22-cta" >
			<div class="container" >
				<div class="row" >
					<div class="col-xl-10 offset-xl-1" >
						<div class="comp-22-cta-main fadeInUp-scroll visible" data-delay="100" >
							<h4>Listen to Nurus's Sustainability Journey.</h4>
							<a href="/office-chair/surdurulebilirlik/" target="" class="btn btn-white btn-semibold btn-rnd-full">
								<span>Visit Our Page</span> 
								<i>
									<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M16.89 7.1875L10.97 13.1075C10.83 13.2475 10.64 13.3275 10.45 13.3275C10.26 13.3275 10.07 13.2575 9.93 13.1075C9.64 12.8175 9.64 12.3475 9.93 12.0575L14.59 7.3975H0V5.9175H14.58L9.92 1.2675C9.63 0.9775 9.63 0.5075 9.92 0.2175C10.21 -0.0725 10.68 -0.0725 10.97 0.2175L16.89 6.1375C17.18 6.4275 17.18 6.8975 16.89 7.1875Z" fill="#4f6d5d"></path>
									</svg>
								</i>
							</a>						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<style>
main {
	padding-top: inherit;
}
</style>
