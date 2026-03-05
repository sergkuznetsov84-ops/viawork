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
<section class="comp-100 style-1">
  <div class="comp-100-wrapper" >
    <div class="container" >
      <div class="comp-100-main" >
        <div class="comp-100-head" >
          <div class="row" >
            <div class="col-lg-8 offset-lg-2" >
                <div class="title fadeInUp-scroll" data-delay="200" >
					<h2>Nurus Materials</h2>
                </div>
                <div class="description" >
					<p>Discover Nurus’ extensive material library, selected and developed with nearly a century of expertise.</p>
                </div>
            </div>
          </div>
        </div>
        <div class="row" >
            <div class="col-lg-10 offset-lg-1" >
              <div class="comp-100-content fadeInUp-scroll" data-delay="300" >
                <div class="swiper comp-100-swiper" >
                  <div class="swiper-wrapper" >
<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?$i++;?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="card" >
            <div class="card-media" >
                <picture><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/avif"><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> </picture>
            </div>
            <div class="card-content" >
                <div class="title" >
                    <h4><?=$arItem["NAME"];?></h4>
                </div>
                <div class="text" >
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                 </div>
            </div>
		</div>
	</div>
																	
	
<?endforeach;?>
 </div>
                </div>
                <div class="swiper-actions" >
                  <a href="javascript:;" class="nav-prev">
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                        <path d="M8.55859 16L0.999045 8.55955L8.4395 1" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                  </a>
                  <a href="javascript:;" class="nav-next">
                    <i>
                      <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                        <path d="M0.999999 1L8.55955 8.44045L1.1191 16" stroke="#373F43" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>