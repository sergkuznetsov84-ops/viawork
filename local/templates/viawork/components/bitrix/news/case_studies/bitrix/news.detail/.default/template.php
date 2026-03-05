<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<main class="main-case-study-detail">
	<section class="comp-34 is-gallery">
	<div class="comp-34-wrapper">
		<div class="container">
			<div class="comp-34-main">
				<div class="comp-34-head">
					<div class="row">
						<div class="col-12 col-lg-6 offset-lg-3">
							<div class="subtitle fadeInUp-scroll" data-delay="200">
								<h6>Case Studies</h6>
							</div>
							<div class="title fadeInUp-scroll" data-delay="250">
								<h3><?=$arResult["NAME"];?></h3>
							</div>
							<div class="tags fadeInUp-scroll" data-delay="300">
								<?foreach($arResult["PROPERTIES"]["PROP_TAG_LIST"]["VALUE"] as $tag){?>
								<span><?=strtoupper($tag);?></span>
								<?}?>
							</div>
								<div class="text fadeInUp-scroll" data-delay="350">
									<p><?=$arResult["PREVIEW_TEXT"];?></p>
								</div>
								<div class="date fadeInUp-scroll" data-delay="400">
									<span><?=$arResult["PROPERTIES"]["PROP_LOCATION"]["VALUE"]?>/ <?=explode(".", $arResult["PROPERTIES"]["PROP_DATE"]["VALUE"])[2]?></span>
								</div>
						</div>
					</div>
				</div>
				<div class="comp-34-content fadeInUp-scroll" data-delay="500">
					<div class="row">
						<div class="col-12 col-lg-10 offset-lg-1">
							<div class="swiper comp-34-swiper">
								<div class="swiper-wrapper">
										<?foreach(array_merge([$arResult["PREVIEW_PICTURE"]["ID"]],$arResult["PROPERTIES"]["PROP_PHOTO_LIST"]["VALUE"]) as $sl => $src){?>
							
										<div class="swiper-slide main-swiper-slide">
											<div class="card">
												<div class="card-wrapper">
													<div class="media">
														<picture><source srcset="<?=CFile::GetPath($src);?>"  type="image/webp"><img src="<?=CFile::GetPath($src);?>" class=" sp-no-webp" alt=""  > 
														</picture>													
													</div>
													<div class="dot-container">
														
														<?
														$i=0;
														foreach($arResult['PRODICT_LIST'] as $product){?>

														<?if($sl === $product["SLIDE"]){?>
														<?//var_dump($sl);?>
														<?//var_dump($product["SLIDE"]);?>
														<div class="dot-item" style="--left: <?=$arResult['PRODICT_LIST'][$i]["POS"][0];?>%; --top: <?=$arResult['PRODICT_LIST'][$i]["POS"][1];?>%;">
																<div class="dot-item-circle">
																	<img src="https://nurus.com/wp-content/themes/nurus-backend/dist/img/static/dot-outer.svg" aria-hidden="true" class="dot-outer">
																</div>
														</div>
														<?}$i++;}?>
													</div>
												</div>
												<div class="swiper comp-34-info-swiper">
													<div class="swiper-wrapper">
													<?foreach($arResult['PRODICT_LIST'] as $product){?>
														<?if($sl === $product["SLIDE"]){?>
														<div class="swiper-slide " style="--left: <?=$product["POS"][0];?>%; --top: <?=$product["POS"][1];?>%;">
																<div class="info-item-wrapper">
																	<div class="info-item">
																		<div class="info-media">
																			<picture><source srcset="<?=CFile::GetPath($product["PREVIEW_PICTURE"])?>"  type="image/webp">
																			<img src="<?=CFile::GetPath($product["PREVIEW_PICTURE"])?>" class=" sp-no-webp" alt=""  > 
																			</picture>																		
																		</div>
																		<div class="info-content">
																			<div class="info-title">
																				<span><?=$product["NAME"];?></span>
																			</div>
																			<div class="info-action">
																				<a href="<?=CIBlock::ReplaceDetailUrl($product["DETAIL_PAGE_URL"], $product, false, 'E');;?>" target="">
																					<i>
																						<svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewbox="0 0 12 21" fill="none">
																							<path d="M0.999999 1L10.5754 10.4246L1.15086 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round" />
																						</svg>
																					</i>
																				</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														<?}?>
													<?}?>
													</div>
													<div class="swiper-pagination"></div>
												</div>
											</div>
										</div>
										<?}?>
				
							
								</div>
								<div class="swiper-pagination main-swiper-pagination"></div>

								<div class="swiper-action">
									<a href="javascript:;" class="btn-prev">
										<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewbox="0 0 44 44" fill="none">
											<path d="M14.11 21.8125L20.03 15.8925C20.17 15.7525 20.36 15.6725 20.55 15.6725C20.74 15.6725 20.93 15.7425 21.07 15.8925C21.36 16.1825 21.36 16.6525 21.07 16.9425L16.41 21.6025L31 21.6025L31 23.0825L16.42 23.0825L21.08 27.7325C21.37 28.0225 21.37 28.4925 21.08 28.7825C20.79 29.0725 20.32 29.0725 20.03 28.7825L14.11 22.8625C13.82 22.5725 13.82 22.1025 14.11 21.8125Z" fill="#373F43" />
										</svg>
									</a>
									<a href="javascript:;" class="btn-next">
										<svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewbox="0 0 44 44" fill="none">
											<path d="M29.89 22.1875L23.97 28.1075C23.83 28.2475 23.64 28.3275 23.45 28.3275C23.26 28.3275 23.07 28.2575 22.93 28.1075C22.64 27.8175 22.64 27.3475 22.93 27.0575L27.59 22.3975H13V20.9175H27.58L22.92 16.2675C22.63 15.9775 22.63 15.5075 22.92 15.2175C23.21 14.9275 23.68 14.9275 23.97 15.2175L29.89 21.1375C30.18 21.4275 30.18 21.8975 29.89 22.1875Z" fill="#373F43" />
										</svg>
									</a>
								</div>

								<div class="mobile-action-container">
									<div class="swiper-action-mobile">
										<a href="javascript:;" class="btn-prev">
											<svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewbox="0 0 10 15" fill="none">
												<path d="M8.46267 14L1 7.49891L8.46267 1L9 1.4681L2.07716 7.49891L9 13.5319L8.46267 14Z" stroke="white" />
											</svg>
										</a>
										<a href="javascript:;" class="btn-next">
											<svg xmlns="http://www.w3.org/2000/svg" width="10" height="15" viewbox="0 0 10 15" fill="none">
												<path d="M1.53733 1L9 7.50109L1.53733 14L1 13.5319L7.92284 7.50109L1 1.4681L1.53733 1Z" stroke="white" />
											</svg>
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
</section>
