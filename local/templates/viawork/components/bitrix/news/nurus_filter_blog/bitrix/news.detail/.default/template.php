<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
			<section class="comp-48">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="comp-48-head">
								<div class="comp-48-head-title">
									<h1><?=$arResult["NAME"]?></h1>
								</div>
								<div class="comp-48-head-tags">
									<?foreach($arResult["SECTION_INFO"] as $secInfo){?>
			<a href="<?=CIBlock::ReplaceDetailUrl($secInfo["SECTION_PAGE_URL"],$secInfo,false,'E');?>" class="comp-48-head-tags-item category-item"><?=$secInfo["NAME"]?></a>	
									<?}?>									
									</div>

								<?if(!empty($arResult["PROPERTIES"]["CHECK_PROP_TITLE_PIC"]["VALUE"])){?>
								<div class="comp-48-head-image">
									<picture><source srcset="<?echo $arResult["PREVIEW_PICTURE"]["SRC"];?>"  type="image/webp"><img src="<?echo $arResult["PREVIEW_PICTURE"]["SRC"];?>" class=" sp-no-webp" alt=""  > </picture>
								</div>
								<?}?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="comp-49">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<article>
							<?echo $arResult["~DETAIL_TEXT"];?>
							</article>
						</div>
					</div>
				</div>
			</section>



