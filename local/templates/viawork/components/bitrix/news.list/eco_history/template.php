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
<section class="comp-30 style-1">
	<div class="container" >
		<div class="row" >
			<div class="col-lg-12" ></div>
			<div class="col-lg-10 offset-lg-1" >
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$i++;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
				<div class="comp-30-card" >
						<div class="row" >
							<div class="col-lg-6" >
								<div class="comp-30-card-asset fadeInUp-scroll" data-delay="250" >
									<picture><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp">
									<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> </picture>
								</div>
							</div>
							<div class="col-lg-6" >
								<div class="comp-30-card-content" >
									<div class="comp-30-card-content-title fadeInUp-scroll" data-delay="300" >
										<?echo $arItem["NAME"];?></div>
									<div class="comp-30-card-content-text fadeInUp-scroll" data-delay="350" >
										<p><?echo $arItem["~PREVIEW_TEXT"];?></p>
									</div>
										<?if(!empty($arItem["PROPERTIES"]["PROP_LINK"]["VALUE"])){?>	
											<div class="comp-30-card-content-action fadeInUp-scroll" data-delay="400" >
												<a href="<?=$arItem["PROPERTIES"]["PROP_LINK"]["VALUE"]?>" class="btn btn-rnd-full btn-silver">
													<span><?=$arItem["PROPERTIES"]["PROP_LINK"]["DESCRIPTION"]?></span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
															<path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#353535"></path>
														</svg>
													</i>
												</a>
											</div>
										<?}?>
								</div>

							</div>
						</div>
					</div>
		
<?endforeach;?>

			</div>
		</div>
	</div>
</section>
