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
<section class="comp-93 style-1 <?= ($APPLICATION->GetCurPage() == "/" ? 'is-dark' : '') ?>">
  <div class="comp-93-wrapper">
    <div class="container" >
      <div class="comp-93-main" >
        <div class="comp-93-head" >
			<div class="subtitle fadeInUp-scroll visible" data-delay="200" >
				<h4>СВЯЖИТЕСЬ С НАМИ</h4>
			</div>
			<div class="title fadeInUp-scroll visible" data-delay="250" >
              <h2>Свяжитесь с нами, и мы будем рядом на протяжении всего пути!</h2>
            </div>
		</div>
        <div class="comp-93-content fadeInUp-scroll visible" data-delay="400" >
           	<div class="row" >
           		<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));				
				?>	                <div class="col-lg-4" >
		                <div class="card" >
							<div class="card-media" >
								<picture>
								  	<source media="(max-width: 991px)" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
								  	<source media="(min-width: 992px)" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
								  	<img class="sp-no-webp" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">                    
								</picture>
							</div>
			                <div class="card-content" >
			                    <div class="text" >
			                      <p><?=$arItem["NAME"];?></p>
			                    </div>
			                    <div class="action" >
			                        <a href="<?=$arItem["PROPERTIES"]["BUTTON_LINK"]["VALUE"]?>" class="btn <?=($arItem["PROPERTIES"]["BUTTON_COLOR"]["VALUE_XML_ID"] == "blue" ? "btn-blue btn-regular btn-rnd-full" : "btn-white btn-rnd-full btn-medium btn-gradient")?>" target="">
				                        <span><?=$arItem["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]?></span>
				                        <i>
				                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
				                              	<path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="<?=($arItem["PROPERTIES"]["BUTTON_COLOR"]["VALUE_XML_ID"] == "white" ? "#25282A" : "white")?>"></path>
				                            </svg>
				                        </i>
			                        </a>
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
</section>