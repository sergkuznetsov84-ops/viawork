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
<section class="comp-99">
    <div class="comp-99-wrapper" >
      <div class="container" >
        <div class="comp-99-main" >
          <div class="comp-99-head" >
            <div class="subtitle fadeInUp-scroll" data-delay="200" >
              <h4><?=GetMessage("CT_BIG_TITLE");?></h4>
            </div>
            <div class="title fadeInUp-scroll" data-delay="250" >
              <h2><?=GetMessage("CT_TITLE");?></h2>
            </div>
          </div>
          <div class="comp-99-content fadeInUp-scroll" data-delay="300" >
            <div class="swiper designer-swiper" >
              <div class="swiper-wrapper" >
  

<?foreach($arResult["ITEMS"] as $arItem):?>

	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
			<div class="swiper-slide"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="designer-card">
                      <div class="designer-card-media">
                        <picture>
						<source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> 
						</picture>                        
						<div class="designer-detail-btn">
                          <a href="javascript:;">
                            <i>
                              <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
                                <path d="M0.893555 11.5H22.1068" stroke="#25282A" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M11.5002 0.893399V22.1066" stroke="#25282A" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round"></path>
                              </svg>
                            </i>
                          </a>
                        </div>
                      </div>
                      <div class="designer-card-content">
                        <div class="title">
                          <h5><?echo $arItem["NAME"]?></h5>
                        </div>
                      </div>
                    </div>
                    <div class="designer-detail-popup-content">
                      <div class="designer-name">
                        <span><?echo $arItem["NAME"]?></span>

                      </div>
					  
					  <?if(!empty($arItem["PROPERTIES"]["PRODUCT_LIST"]["VALUE"])){?>
                        <div class="designer-products">
                          <ul>
						  
							<?foreach($arItem["PRODUCT_LIST"] as $product){?>
                                <li>
                                <div class="product-title"><?=$product['NAME'];?></div>
                                <div class="product-media">
                                  <picture>
									<source srcset="<?=CFile::GetPath($product['PREVIEW_PICTURE']);?>" type="image/webp">
									<img src="<?=CFile::GetPath($product['PREVIEW_PICTURE']);?>" class=" sp-no-webp" alt="<?=$product['NAME'];?>" loading="eager"> 
								  </picture>
                                </div>
                                <div class="product-link">
                                  <a href="<?=$product['DETAIL_PAGE_URL'];?>"></a>
                                </div>
                              </li>
							<?}?>
                            </ul>
                        </div>
					  <?}?>
                      <div class="designer-description">
                        <p><?=$arItem["DETAIL_TEXT"];?></p>
                      </div>
                    </div>
                  </div>

<?endforeach;?>

</div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="comp-99-designer-popup">
      <div class="comp-99-designer-popup-wrapper">
        <div class="popup-close">
          <a href="javascript:;">
            <i>
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                <path d="M1 1L16 16" stroke="white" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M16 1L1 16" stroke="white" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </i>
          </a>
        </div>
        <div class="popup-content">
          <div class="designer-name">
            <span></span>
          </div>
          <div class="designer-products">
            <div class="swiper designer-products-swiper swiper-initialized swiper-horizontal">
              <div class="swiper-wrapper" id="swiper-wrapper-c106978735d91b488" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                <div class="swiper-slide">
                  <div class="product-card">
                    <div class="product-card-title">
                      <span></span>
                    </div>
                    <div class="product-card-media">
                      <img src="" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-mobile-nav">
                <a href="javascript:;" class="nav-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c106978735d91b488" aria-disabled="false">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                      <path d="M0.190707 5.52842L5.38141 0.198085C5.50417 0.0720302 5.67076 -8.15588e-07 5.83735 -8.01024e-07C6.00395 -7.8646e-07 6.17054 0.0630266 6.29329 0.198085C6.54757 0.459199 6.54757 0.882385 6.29329 1.1435L2.20737 5.33933L15 5.33934L15 6.67192L2.21613 6.67192L6.30206 10.8587C6.55634 11.1199 6.55634 11.543 6.30206 11.8042C6.04779 12.0653 5.63569 12.0653 5.38141 11.8042L0.190707 6.47383C-0.0635676 6.21272 -0.0635676 5.78953 0.190707 5.52842Z" fill="#25282A"></path>
                    </svg>
                  </i>
                </a>
                <div class="swiper-pagination swiper-pagination-fraction swiper-pagination-horizontal"><span class="swiper-pagination-current">0</span> / <span class="swiper-pagination-total">0</span></div>
                <a href="javascript:;" class="nav-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c106978735d91b488" aria-disabled="false">
                  <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                    <path d="M14.8093 6.47158L9.61859 11.8019C9.49584 11.928 9.32924 12 9.16265 12C8.99605 12 8.82946 11.937 8.70671 11.8019C8.45243 11.5408 8.45243 11.1176 8.70671 10.8565L12.7926 6.66066H0V5.32808H12.7839L8.69794 1.14125C8.44366 0.880135 8.44366 0.45695 8.69794 0.195836C8.95221 -0.0652786 9.36431 -0.0652786 9.61859 0.195836L14.8093 5.52617C15.0636 5.78728 15.0636 6.21047 14.8093 6.47158Z" fill="#25282A"></path>
                  </svg>
                </a>
              </div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <a href="javascript:;" class="nav-prev nav-desktop">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                  <circle cx="22" cy="22" r="21" transform="rotate(-180 22 22)" stroke="#373F43" stroke-width="2"></circle>
                  <path d="M14.11 21.8125L20.03 15.8925C20.17 15.7525 20.36 15.6725 20.55 15.6725C20.74 15.6725 20.93 15.7425 21.07 15.8925C21.36 16.1825 21.36 16.6525 21.07 16.9425L16.41 21.6025L31 21.6025L31 23.0825L16.42 23.0825L21.08 27.7325C21.37 28.0225 21.37 28.4925 21.08 28.7825C20.79 29.0725 20.32 29.0725 20.03 28.7825L14.11 22.8625C13.82 22.5725 13.82 22.1025 14.11 21.8125Z" fill="#373F43"></path>
                </svg>
              </i>
            </a>
            <a href="javascript:;" class="nav-next nav-desktop">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="44" height="44" viewBox="0 0 44 44" fill="none">
                  <circle cx="22" cy="22" r="21" transform="matrix(1 -8.74228e-08 -8.74228e-08 -1 0 44)" stroke="#373F43" stroke-width="2"></circle>
                  <path d="M29.89 21.8125L23.97 15.8925C23.83 15.7525 23.64 15.6725 23.45 15.6725C23.26 15.6725 23.07 15.7425 22.93 15.8925C22.64 16.1825 22.64 16.6525 22.93 16.9425L27.59 21.6025L13 21.6025L13 23.0825L27.58 23.0825L22.92 27.7325C22.63 28.0225 22.63 28.4925 22.92 28.7825C23.21 29.0725 23.68 29.0725 23.97 28.7825L29.89 22.8625C30.18 22.5725 30.18 22.1025 29.89 21.8125Z" fill="#373F43"></path>
                </svg>
              </i>
            </a>
          </div>
          <div class="description">
            <p></p>
          </div>
        </div>
      </div>
    </div>

  </section>
