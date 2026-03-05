<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="comp-7">
	<div class="comp-7-wrapper">
		<div class="container">
			
			<?if(!empty($arResult["NAME"])):?>
			<div class="comp-7-head fadeInUp-scroll" data-delay="200">
				<div class="title">
					<h3><?=htmlspecialcharsbx($arResult["NAME"])?></h3>
				</div>
			</div>
			<?endif;?>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="comp-7-accordion fadeInUp-scroll" data-delay="400">
						<div id="comp-7-acc" class="accordion">

							<?$i = 1;?>
							<?foreach($arResult["ITEMS"] as $arItem):?>
								<?
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

								$title = $arItem["NAME"];
								$desc = $arItem["PREVIEW_TEXT"];
								$link = $arItem["DISPLAY_PROPERTIES"]["LINK"]["VALUE"] ?? "";
								$img = $arItem["PREVIEW_PICTURE"]["SRC"] ?? SITE_TEMPLATE_PATH."/src/img/no-image.png";
								$btn_text = $arItem["DISPLAY_PROPERTIES"]["BUTTON_TEXT"]["VALUE"] ?? GetMessage("DOWNLOAD"); // можно задать дефолтный текст
								?>

								<div class="card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
									<div class="card-header" 
										 id="comp-7-acc-head_<?=$i?>" 
										 data-bs-toggle="collapse" 
										 data-bs-target="#comp-7-acc-collapse_<?=$i?>" 
										 aria-expanded="false" 
										 aria-controls="comp-7-acc-collapse_<?=$i?>">
										<?=$title?>
									</div>

									<div id="comp-7-acc-collapse_<?=$i?>" 
										 class="collapse" 
										 aria-labelledby="comp-7-acc-head_<?=$i?>" 
										 data-bs-parent="#comp-7-acc">
										
										<div class="card-body">
											<div class="comp-7-accordion-media">
												<picture>
													<source media="(min-width: 768px)" srcset="<?=$img?> 1x">
													<img class="sp-no-webp" src="<?=$img?>" alt="<?=htmlspecialcharsbx($title)?>">
												</picture>
											</div>

											<div class="comp-7-accordion-content">
												<?if($desc):?>
												<div class="description">
													<?=$desc?>
												</div>
												<?endif;?>

												<?if($link):?>
												<div class="action">
													<a href="<?=$link?>" target="_blank" class="btn btn-silver btn-rnd-full btn-semibold">
														<?=$btn_text?>
													</a>
												</div>
												<?endif;?>
											</div>
										</div>
									</div>
								</div>

								<?$i++;?>
							<?endforeach;?>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
