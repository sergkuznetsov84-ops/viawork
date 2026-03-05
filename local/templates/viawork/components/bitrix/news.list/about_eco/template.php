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
<section class="comp-8">
	<div class="comp-8-wrapper" >
		<div class="container" >
			<div class="comp-8-main" >
<?
$sec_info = CIBlockSection::GetByID($arParams["SECTION_ID"])->GetNext();

?>

<div class="comp-8-content" >
					<div class="media image-animation" data-delay="200" >
						<picture>
							<source media="(min-width: 768px)" srcset="<?=CFile::GetPath($sec_info["PICTURE"]);?> 1x">
							<img class="sp-no-webp" src="<?=CFile::GetPath($sec_info["PICTURE"]);?>" alt="">
						</picture>					
					</div>
					<div class="content" >
						<div class="text fadeInUp-scroll" data-delay="300" >
							<p><?=$sec_info["DESCRIPTION"];?></p>
						</div>
						<div class="action fadeInUp-scroll" data-delay="350" >
							<a href="<?=$sec_info["CODE"];?>/" target="" class="btn btn-white btn-semibold btn-rnd-full"><span><?=$sec_info["NAME"];?></span> <i>
									<svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
										<path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#373F43"></path>
									</svg>
								</i></a>						</div>
					</div>
				</div>
<div class="comp-8-acc" id="comp-8-acc" >
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$i+=1;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
						<div class="comp-8-acc-item fadeInUp-scroll" data-delay="200"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="comp-8-acc-item-head collapsed" id="heading<?=$i;?>" data-bs-toggle="collapse" data-bs-target="#collapse<?=$i;?>" aria-expanded="false" aria-controls="collapse1" >
								<div class="head-start" >
									<div class="head-number" >
										<span><?echo $arItem["PREVIEW_TEXT"];?></span>
									</div>
								</div>
								<div class="head-end" >
									<div class="head-text" >
										<span><?echo $arItem["NAME"];?></span>
									</div>
									<div class="acc-icon" >
										<i>
											<svg xmlns="http://www.w3.org/2000/svg" width="43" height="23" viewBox="0 0 43 23" fill="none">
												<path d="M43 1.54483L21.4964 23L0 1.54483L1.54832 0L21.4964 19.9032L41.4517 0L43 1.54483Z" fill="#D6E8BA"></path>
											</svg>
										</i>
									</div>
								</div>
							</div>
							<div class="comp-8-acc-item-collapse collapse" id="collapse<?=$i?>" aria-labelledby="heading<?=$i;?>" data-bs-parent="#comp-8-acc" >
								<div class="comp-8-acc-item-collapse-body" >
									<div class="comp-8-acc-item-collapse-body-start" >
										<div class="icon" >
											<img src="<?=CFile::GetPath($arItem["PROPERTIES"]["PROP_ICO"]["VALUE"]);?>" alt="">										
										</div>
									</div>
									<div class="comp-8-acc-item-collapse-body-end" >
										<div class="text" >
											<p></p><p><?echo $arItem["DETAIL_TEXT"];?></p>
											<p></p>
										</div>
									</div>
								</div>
							</div>
						</div>

<?endforeach;?>
</div>

			</div>
		</div>
	</div>
</section>
