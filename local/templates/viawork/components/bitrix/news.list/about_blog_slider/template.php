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
<section class="comp-10 <?=$arParams["STYLE_CSS"];?>">
	<div class="comp-10-wrapper" >
		<div class="container" >
			<div class="row" >
				<div class="col-xl-10 offset-xl-1" >
					<div class="comp-10-main" >
						<div class="comp-10-head" >
							<div class="comp-10-head-title fadeInUp-scroll" data-delay="100" >
								<h3><?=GetMessage("CT_TITLE_BLOG");?></h3>
							</div>
						</div>
						<div class="comp-10-body" >
							<div class="swiper swiper-initialized swiper-horizontal" >
								<div class="swiper-wrapper" id="swiper-wrapper-6c27d85e9c8371a5" aria-live="polite" style="cursor: grab;" >
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?$i++;?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="comp-10-item fadeInUp-scroll" data-delay="150">
		<div class="comp-10-item-content" >
			<div class="comp-10-item-title" >
				<h5><?=$arItem["NAME"];?></h5>
			</div>
			<div class="comp-10-item-article" >
				<p><?echo $arItem["PREVIEW_TEXT"];?></p>
			</div>
			<div class="comp-10-item-date" >
				<?echo $arItem["DISPLAY_ACTIVE_FROM"]?>		</div>
		</div>
		<div class="comp-10-item-media" >
			<picture>
				<source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="media-fluid sp-no-webp" alt=""> 
			</picture>				
		</div>
		</a>
	</div>																			
	
<?endforeach;?>

								</div>
								<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
							</div>
						<div class="comp-10-footer" >
							<div class="swiper-btn-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-6c27d85e9c8371a5" aria-disabled="true" >
								<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1.11 6.8125L7.03 0.892499C7.17 0.752499 7.36 0.6725 7.55 0.6725C7.74 0.6725 7.93 0.742499 8.07 0.892499C8.36 1.1825 8.36 1.6525 8.07 1.9425L3.41 6.6025L18 6.6025L18 8.0825L3.42 8.0825L8.08 12.7325C8.37 13.0225 8.37 13.4925 8.08 13.7825C7.79 14.0725 7.32 14.0725 7.03 13.7825L1.11 7.8625C0.82 7.5725 0.82 7.1025 1.11 6.8125Z" fill="#373F43"></path>
								</svg>
							</div>
							<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal" >
							<? for ($i = 1; $i <= count($arResult["ITEMS"]); $i++) {?>
								<span class="swiper-pagination-bullet <?echo ($i==1)?"swiper-pagination-bullet-active":""?>" tabindex="0" role="button" aria-label="Go to slide <?=$i?>" aria-current="true"></span>

							<?}?>
							</div>
							<div class="swiper-btn-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-6c27d85e9c8371a5" aria-disabled="false" >
								<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M16.89 7.1875L10.97 13.1075C10.83 13.2475 10.64 13.3275 10.45 13.3275C10.26 13.3275 10.07 13.2575 9.93 13.1075C9.64 12.8175 9.64 12.3475 9.93 12.0575L14.59 7.3975H0V5.9175H14.58L9.92 1.2675C9.63 0.9775 9.63 0.5075 9.92 0.2175C10.21 -0.0725 10.68 -0.0725 10.97 0.2175L16.89 6.1375C17.18 6.4275 17.18 6.8975 16.89 7.1875Z" fill="#373F43"></path>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
