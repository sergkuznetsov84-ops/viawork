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
<section class="comp-28 style-1 is-dark">
	<div class="comp-28-wrapper" >
		<div class="container" >
			<div class="comp-28-main" >
				<div class="comp-28-head" >
					<div class="subtitle" >
						<h4><?=GetMessage("CT_BIG_TITLE");?></h4>
					</div>
					<div class="title" >
						<h3><?=GetMessage("CT_TITLE");?></h3>
					</div>
				</div>
				<div class="comp-28-content" >
					<div class="row" >
						<div class="col-xl-10 offset-xl-1" >
							<div class="swiper comp-28-swiper swiper-cards swiper-3d swiper-initialized swiper-vertical swiper-watch-progress" >
								<div class="swiper-wrapper" id="swiper-wrapper-59db84684e381298" aria-live="polite" >
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$i++;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="card <?echo ($i % 2 == 0)?"text-left":"text-right"?>" >
			<div class="media" >
				<picture><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/avif"><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> </picture>												
			</div>
			<div class="content" >
				<div class="title" >
					<h2><?echo $arItem["NAME"]?></h2>
				</div>
				<div class="text" >
					<p><?echo $arItem["~DETAIL_TEXT"];?></p>
				</div>
			</div>
		</div>
	<div class="swiper-slide-shadow swiper-slide-shadow-cards" style="opacity: 0;" ></div>
	</div>

<?endforeach;?>
</div>
							<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>