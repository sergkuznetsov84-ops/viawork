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
<section class="comp-83 style-1 is-dark">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="section-lead">
					<div class="text fadeInUp-scroll" data-delay="200">
						<p><p data-start="78" data-end="396"><?=GetMessage("CT_TITLE");?></p></p>
					</div>
				</div>
			</div>
			<div class="col-lg-10 offset-lg-1 slider-container">
				<div class="swiper main-swiper">
					<div class="swiper-wrapper">					
					<?$i=0;?>
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$i++;
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<div class="swiper-slide"   id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<a href="javascript:;" class="box">
								<span class="box-inner">
									<span class="box-bottom">
										<span class="title">
											<p><?echo $arItem["NAME"]?></p>
										</span>
										<span class="icon-wrapper">
											<svg width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
												<circle cx="27.6999" cy="27.6179" r="26.8288" fill="white" />
												<path d="M17.8203 28.0781H38.5303" stroke="#2F2F2F" stroke-width="2.82408" stroke-linecap="round" />
												<path d="M28.1758 17.7344V38.4443" stroke="#2F2F2F" stroke-width="2.82408" stroke-linecap="round" />
											</svg>
										</span>
									</span>
								</span>
								<span class="media-wrapper">
									<picture>
									<source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp">
									<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> 
									</picture>									
								</span>
							</a>
						</div>
					<?endforeach;?>
					
					</div>
					<div class="swiper-actions">
						<a href="javascript:;" class="main-nav-prev">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewbox="0 0 10 17" fill="none">
									<path d="M8.55859 16L0.999045 8.55955L8.4395 1" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</i>
						</a>
						<a href="javascript:;" class="main-nav-next">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewbox="0 0 10 17" fill="none">
									<path d="M0.999999 1L8.55955 8.44045L1.1191 16" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round" />
								</svg>
							</i>
						</a>
					</div>
				</div>
				<div class="modal-swiper-container">
					<div class="modal-swiper-container-inner">
						<div class="swiper modal-swiper">
							<div class="swiper-wrapper">
							<?$i=0;?>
							<?foreach($arResult["ITEMS"] as $arItem):?>
								<div class="swiper-slide">
									<div class="content-container">
										<div class="content-container-inner">
											<div class="content">
												<div class="title">
													<h4><?echo $arItem["NAME"]?></h4>
												</div>
												<div class="text">
													<p>
														<?echo $arItem["DETAIL_TEXT"]?>
													</p>
												</div>
											</div>
											<div class="media-wrapper">
												<picture>
												<source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp">
												<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> </picture>
											</div>
										</div>
									</div>
								</div>							

							<?endforeach;?>

							</div>
							<div class="swiper-nav-container">
								<div class="modal-nav-btn modal-btn-prev">
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewbox="0 0 12 21" fill="none">
											<path d="M11 1L1.42457 10.4246L10.8491 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</i>
								</div>
								<div class="modal-nav-btn modal-btn-next">
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewbox="0 0 12 21" fill="none">
											<path d="M0.999999 1L10.5754 10.4246L1.15086 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
									</i>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-swiper-overlay"></div>
					<div class="modal-swiper-close-btn-container">
							<a href="javascript:;" class="modal-swiper-close-btn">
								<i>
									<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewbox="0 0 17 17" fill="none">
										<path d="M1 1L16 16" stroke="#25282A" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round" />
										<path d="M16 1L1 16" stroke="#25282A" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round" />
									</svg>
								</i>
							</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
