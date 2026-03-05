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
<section class="comp-6">
	<div class="comp-6-wrapper" >
		<div class="container" >
			<div class="row" >
				<div class="col-xl-10 offset-xl-1" >
					<div class="comp-6-main" >
						<div class="comp-6-head" >
							<div class="row" >
								<div class="col-sm-8" >
									<div class="comp-6-head-title fadeInUp-scroll" data-delay="100" >
										<h3>Найдите идеальный вариант для себя. Откройте для себя офисные кресла Nurus!</h3>
									</div>
								</div>
								<div class="col-12" >
									<div class="comp-6-head-btn fadeInUp-scroll" data-delay="150" >
										<a href="/all-products/ofisnye-kresla/" target="" class="btn btn-arsenic-outline btn-medium btn-rnd-full"><span>Все офисные стулья</span> <i>
												<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M16.89 7.1875L10.97 13.1075C10.83 13.2475 10.64 13.3275 10.45 13.3275C10.26 13.3275 10.07 13.2575 9.93 13.1075C9.64 12.8175 9.64 12.3475 9.93 12.0575L14.59 7.3975H0V5.9175H14.58L9.92 1.2675C9.63 0.9775 9.63 0.5075 9.92 0.2175C10.21 -0.0725 10.68 -0.0725 10.97 0.2175L16.89 6.1375C17.18 6.4275 17.18 6.8975 16.89 7.1875Z" fill="#373f43"></path>
												</svg>
											</i>
										</a>								
									</div>
								</div>
							</div>
						</div>
			<div class="comp-6-body" >
				<div class="row" >
					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
									<div class="col-md-3 col-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
										<div class="comp-6-item fadeInUp-scroll" data-delay="350" >
											<div class="comp-6-item-start" >
												<div class="comp-6-item-media" >
													<picture><source srcset="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]);?>" type="image/webp"><img src="<?=CFile::GetPath($arItem["PREVIEW_PICTURE"]);?>" class=" sp-no-webp" alt=""> </picture>													
												</div>
											</div>
											<div class="comp-6-item-end" >
												<div class="comp-6-item-title" >
													<h5><?=$arItem["NAME"];?></h5>
												</div>
												<div class="comp-6-item-price" >
													<span><?=$arItem["PREVIEW_TEXT"];?></span>
												</div>
												<div class="comp-6-item-actions" >
													<a href="<?=$arItem["DETAIL_PAGE_URL"];?>" target="" class="btn btn-arsenic btn-rnd-full btn-semibold">Подробнее</a>														
												</div>
											</div>
										</div>
									</div>
							<?endforeach;?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
