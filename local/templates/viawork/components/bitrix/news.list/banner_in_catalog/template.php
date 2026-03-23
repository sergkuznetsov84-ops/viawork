<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

if (empty($arResult['ITEMS'])) {
    return;
}

foreach ($arResult['ITEMS'] as $item) {
?>
<section class="comp-17">
    <div class="comp-17-wrapper" >
        <div class="comp-17-main" >
            <div class="comp-17-content" >
                <div class="media scale-scroll visible" data-delay="200" >
                    <picture>
                        <source media="(min-width: 768px)" srcset="<?=$item['DETAIL_PICTURE']["SRC"]?>"
                        >
                        <img class="sp-no-webp" src="<?=$item['DETAIL_PICTURE']["SRC"]?>" alt="">
                    </picture>               
                </div>
                <div class="content" >
                    <div class="text fadeInUp-scroll visible" data-delay="250" >
                        <?=$item['PREVIEW_TEXT']?>
                    </div>
                    <div class="action fadeInUp-scroll visible" data-delay="300" >
                        <a href="<?=$item['PROPERTIES']['BUTTON_LINK']['VALUE']?>" target="" class="btn btn-white btn-semibold btn-rnd-full">
                            <span><?=$item["PROPERTIES"]["BUTTON_TEXT"]["VALUE"]?></span> 
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
                                    <path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#373F43"></path>
                                </svg>
                            </i>
                        </a>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?}?>