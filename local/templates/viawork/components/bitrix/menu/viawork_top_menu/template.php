<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arResult */
use Bitrix\Main\Localization\Loc;
?>

<?if (!empty($arResult)):?>
<div class="nav-list" id="custom-nav-container">
    
    <div class="nav-list-item dropdown-parent-item">
        <div class="nav-list-item-link">
            <a href="javascript:;" class="menu-trigger-products"><?=Loc::getMessage("VIA_MENU_PRODUCTS")?></a>
        </div>
        
        <div class="nav-list-item-dropdown">
            <div class="back-btn">
                <a href="javascript:;">
                    <i><svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.26699 8.28649L7.53398 1.0195C7.70583 0.847646 7.93906 0.749444 8.17229 0.749444C8.40553 0.749444 8.63876 0.83537 8.81061 1.0195C9.16659 1.37548 9.16659 1.95242 8.81061 2.30841L3.09031 8.02871L21 8.02871L21 9.84545L3.10259 9.84545L8.82288 15.5535C9.17887 15.9095 9.17887 16.4864 8.82288 16.8424C8.4669 17.1984 7.88996 17.1984 7.53398 16.8424L0.266989 9.5754C-0.0889943 9.21941 -0.0889942 8.64247 0.26699 8.28649Z" fill="#25282A"/></svg></i>
                    <?=Loc::getMessage("VIA_MENU_BACK")?>
                </a>
            </div>

            <div class="row" id="catalog-grid-row">
                <?
                $count = 0;
                $specialIds = [5, 6, 7, 8]; 
                $svgArrow = '<svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10" fill="none"><path d="M10.8601 5.41569L7.05363 9.73487C6.96361 9.83701 6.84144 9.89538 6.71927 9.89538C6.59711 9.89538 6.47494 9.84431 6.38492 9.73487C6.19845 9.52329 6.19845 9.18038 6.38492 8.9688L9.38127 5.5689H0V4.48911H9.37484L6.37849 1.09651C6.19202 0.884928 6.19202 0.54202 6.37849 0.330439C6.56496 0.118858 6.86716 0.118858 7.05363 0.330439L10.8601 4.64962C11.0466 4.8612 11.0466 5.20411 10.8601 5.41569Z" fill="#25282A"></path></svg>';

                foreach ($arResult['CATALOG_DROPDOWN'] as $section):
                    $count++;
                ?>
                    <div class="col-lg-2 catalog-col-item <?=$count == 1 ? 'offset-lg-1': '' ;?>">
                        <div class="nav-list-item-dropdown-item">
                            <div class="nav-list-item-dropdown-item-wrapper">
                                <a href="<?=$section['URL']?>" target="<?=$section['TARGET']?>" class="nav-list-item-dropdown-item-head">
                                    <i><img src="<?=$section['ICON']?>" alt=""></i>
                                    <span><?=$section['NAME']?></span>
                                </a>

                                <div class="nav-list-item-dropdown-item-body is-desktop">
                                    <?foreach ($section['SUB_SECTIONS'] as $sub):?>
                                        <a href="<?=$sub['URL']?>" target="<?=$sub['TARGET']?>"><?=$sub['NAME']?></a>
                                    <?endforeach;?>
                                </div>
                                <div class="nav-list-item-dropdown-item-end is-desktop">
                                    <a href="<?=$section['URL']?>" target="<?=$section['TARGET']?>"><?=Loc::getMessage("VIA_MENU_ALL")?> <?=$section['NAME']?> <i><?=$svgArrow?></i></a>
                                </div>

                                <?if(in_array($section['ID'], $specialIds)):?>
                                    <div class="nav-list-item-dropdown-item-body-mobile">
                                        <div class="inner-back-btn">
                                            <a href="javascript:;"><i><svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.26699 8.28649L7.53398 1.0195C7.70583 0.847646 7.93906 0.749444 8.17229 0.749444C8.40553 0.749444 8.63876 0.83537 8.81061 1.0195C9.16659 1.37548 9.16659 1.95242 8.81061 2.30841L3.09031 8.02871L21 8.02871L21 9.84545L3.10259 9.84545L8.82288 15.5535C9.17887 15.9095 9.17887 16.4864 8.82288 16.8424C8.4669 17.1984 7.88996 17.1984 7.53398 16.8424L0.266989 9.5754C-0.0889943 9.21941 -0.0889942 8.64247 0.26699 8.28649Z" fill="#25282A"/></svg></i> <?=Loc::getMessage("VIA_MENU_BACK_TO_PRODUCTS")?></a>
                                        </div>
                                        <div class="mobile-wrapper">
                                            <div class="mobile-wrapper-head">
                                                <i><img src="<?=$section['ICON']?>" style="width:30px"></i>
                                                <span><?=$section['NAME']?></span>
                                            </div>
                                            <div class="mobile-wrapper-body">
                                                <div class="mobile-wrapper-body-links">
                                                    <?foreach ($section['SUB_SECTIONS'] as $sub):?>
                                                        <a href="<?=$sub['URL']?>" target="<?=$sub['TARGET']?>"><?=$sub['NAME']?></a>
                                                    <?endforeach;?>
                                                </div>
                                                <div class="mobile-wrapper-body-end"><a href="<?=$section['URL']?>" target="<?=$section['TARGET']?>"><?=Loc::getMessage("VIA_MENU_ALL")?> <?=$section['NAME']?> <i><?=$svgArrow?></i></a></div>
                                                <div class="mobile-wrapper-body-all-btn"><a href="<?=$section['URL']?>" target="<?=$section['TARGET']?>"><?=Loc::getMessage("VIA_MENU_ALL")?> <?=$section['NAME']?> <i><?=$svgArrow?></i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                <?endif;?>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>

                <div class="col-lg-2 catalog-col-item static-item-block">
                    <div class="nav-list-item-dropdown-item item-end">
                        <div class="nav-list-item-dropdown-item-wrapper">
                            <a href="/all-products/" class="nav-list-item-dropdown-item-head">
                                <i><img src="<?=SITE_TEMPLATE_PATH?>/src/img/icon-all-products.svg"></i>
                                <span><?=Loc::getMessage("VIA_MENU_ALL_PRODUCTS_TITLE")?></span>
                            </a>
                            <div class="nav-list-item-dropdown-item-body is-desktop">
                                <?foreach($arResult['STATIC_SECTIONS'] as $staticSect):?>
                                    <a href="<?=$staticSect['URL']?>"><?=$staticSect['NAME']?></a>
                                <?endforeach;?>
                            </div>
                            <div class="nav-list-item-dropdown-item-end is-desktop">
                                <a href="/all-products/"><?=Loc::getMessage("VIA_MENU_SEE_ALL_PRODUCTS")?> <i><?=$svgArrow?></i></a>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?foreach($arResult as $arItem):?>
        <?if ($arItem["DEPTH_LEVEL"] == 1 && $arItem["LINK"] != "/all-products/" && !in_array($arItem["TEXT"], ["Products", "Продукция"])):?>
            <div class="nav-list-item main-nav-item">
                <div class="nav-list-item-link">
                    <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
                </div>
            </div>
        <?endif?>
    <?endforeach?>
</div>
<?endif?>