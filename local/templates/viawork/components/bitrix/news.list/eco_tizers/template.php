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
<section class="comp-41">
		<div class="comp-41-wrapper" >
		<div class="container-fluid" >
			<div class="row" >
				<div class="col-xl-10 offset-xl-1" >
					<div class="comp-41-main" >
						<div class="comp-41-head" >
							<div class="comp-41-head-subtitle fadeInUp-scroll" data-delay="100" >
								<h5></h5>
							</div>
							<div class="comp-41-head-title fadeInUp-scroll" data-delay="150" >
								<h5><?=GetMessage("CT_TIZER_TITLE");?></h5>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="comp-41-body" >
				<div class="row" >
<?$css_array=[182=>"col-lg-2 offset-lg-1",183=>"col-lg-4 none",184=>"col-lg-4 none",185=>"col-lg-7 offset-lg-1",186=>"col-lg-3 none",187=>"col-lg-3 offset-lg-1",188=>"col-lg-2 none",189=>"col-lg-3 none",190=>"col-lg-2 none",191=>"col-lg-2 offset-lg-1",192=>"col-lg-3 none",193=>"col-lg-2 none",194=>"col-lg-3 none"];?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="<?=$css_array[$arItem["ID"]]?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="comp-41-media" >
			<?foreach($arItem["PROPERTIES"]["PROP_ICO"]["VALUE"] as $src){?>
			<img src="<?=CFile::GetPath($src);?>" alt="">
			<?}?>
		</div>
	</div>
	
<?endforeach;?>
				</div>
			</div>
		</div>
	</div>
			<div class="comp-41-footer" >
			<div class="container-fluid" >
				<div class="row" >
					<div class="col-lg-8 offset-lg-2" >
						<div class="comp-41-footer-video" >
							<video src="<?=SITE_TEMPLATE_PATH."/src/video"?>/GreenGood_Nisan25_Announcement_1080x1920-1.mp4" autoplay="" muted="" loop="" playsinline=""></video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
