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
<section class="comp-30 style-1 is-dark">
	<div class="container" >
		<div class="row" >
			<div class="col-lg-12" >
											</div>
			<div class="col-lg-10 offset-lg-1" >
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$i++;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="comp-30-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="row" >
							<div class="col-lg-6" >
								<div class="comp-30-card-asset fadeInUp-scroll" data-delay="250" >
									<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">								</div>
							</div>
							<div class="col-lg-6" >
								<div class="comp-30-card-content" >
									<div class="comp-30-card-content-title fadeInUp-scroll" data-delay="300" >
										<?echo $arItem["NAME"];?>
									</div>
									<div class="comp-30-card-content-text fadeInUp-scroll" data-delay="350" >
										<p><?echo $arItem["PREVIEW_TEXT"];?></p>
									</div>
																	</div>

							</div>
						</div>
					</div>
		
<?endforeach;?>

			</div>
		</div>
	</div>
</section>
