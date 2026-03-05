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
<section class="comp-51">
  <div class="comp-51-wrapper">
    <div class="container">
      <div class="comp-51-main">
        <div class="comp-51-head">
          <div class="comp-51-head-subtitle">
            <h4></h4>
          </div>
          <div class="comp-51-head-title">
            <h3><?=GetMessage("BL_HEAD");?></</h3>
          </div>
        </div>
        <div class="comp-51-body">
            <div class="swiper swiper-initialized swiper-horizontal">
              <div class="swiper-wrapper" id="swiper-wrapper-fa40c45492c4749d" aria-live="polite">

<?$i=0;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$i++;
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="comp-51-item">
            <picture><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt=""> </picture>                    
		</div>
    </div>

<?endforeach;?>

			</div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>
          <div class="comp-51-footer" >
          <div class="comp-51-footer-action prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-fa40c45492c4749d" >
            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1.11 6.8125L7.03 0.892499C7.17 0.752499 7.36 0.6725 7.55 0.6725C7.74 0.6725 7.93 0.742499 8.07 0.892499C8.36 1.1825 8.36 1.6525 8.07 1.9425L3.41 6.6025L18 6.6025L18 8.0825L3.42 8.0825L8.08 12.7325C8.37 13.0225 8.37 13.4925 8.08 13.7825C7.79 14.0725 7.32 14.0725 7.03 13.7825L1.11 7.8625C0.820001 7.5725 0.820001 7.1025 1.11 6.8125Z" fill="#373F43"></path>
            </svg>
          </div>
          <a href="javascript:;" class="btn btn-arsenic-outline btn-medium">
            <i>
              <svg width="22" height="17" viewBox="0 0 22 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.5868 4.95975C19.6758 4.05276 18.465 3.55324 17.1771 3.55324C15.8892 3.55324 14.6783 4.05276 13.7674 4.95975L7.59029 11.1108C6.06444 12.6303 3.58157 12.6303 2.05557 11.1108C1.31708 10.3754 0.910199 9.39768 0.910199 8.35793C0.910199 7.31818 1.31694 6.34044 2.05557 5.60501C2.79464 4.869 3.77749 4.46373 4.82293 4.46373H5.41626V7.58399C5.41626 7.7681 5.52714 7.93412 5.69724 8.00459C5.75355 8.02793 5.81264 8.03931 5.87129 8.03931C5.98975 8.03931 6.10617 7.99306 6.19326 7.90597L9.77264 4.32674C9.85828 4.2411 9.90627 4.12497 9.90598 4.00389C9.90569 3.8828 9.85726 3.76682 9.77133 3.68162L6.19195 0.132002C6.06153 0.00259891 5.86603 -0.0356238 5.69637 0.0349863C5.5267 0.105596 5.41626 0.271326 5.41626 0.455145V3.55324H4.82293C3.53503 3.55324 2.32415 4.05276 1.41322 4.95975C0.501857 5.86732 -0.000145857 7.07411 3.17889e-08 8.35778C3.17889e-08 9.64146 0.501857 10.8482 1.41322 11.7558C2.32415 12.6628 3.53503 13.1623 4.82293 13.1623C6.11084 13.1623 7.32171 12.6628 8.23264 11.7558L14.4097 5.60487C15.9357 4.08529 18.4184 4.08544 19.9444 5.60487C20.6831 6.34029 21.0898 7.31804 21.0898 8.35778C21.0898 9.39753 20.6831 10.3753 19.9444 11.1107C19.2054 11.8467 18.2225 12.252 17.1771 12.252H16.5837V9.13172C16.5837 8.94761 16.4729 8.78159 16.3028 8.71127C16.1327 8.64081 15.9369 8.67976 15.8067 8.80989L12.2274 12.3891C12.1417 12.4748 12.0937 12.5909 12.094 12.712C12.0943 12.8331 12.1427 12.949 12.2287 13.0342L15.8081 16.5839C15.895 16.6701 16.0108 16.7159 16.1287 16.7159C16.1877 16.7159 16.2472 16.7044 16.3036 16.6809C16.4733 16.6103 16.5837 16.4444 16.5837 16.2607V13.1626H17.1771C18.465 13.1626 19.6758 12.6631 20.5868 11.7561C21.4981 10.8485 22 9.64175 22 8.35808C22 7.0744 21.4981 5.86761 20.5868 4.96004V4.95975ZM6.32675 1.54741L8.80598 4.00593L6.32675 6.48501V1.54741ZM15.6734 15.1682L13.1942 12.7096L15.6734 10.2306V15.1682Z" fill="#373F43"></path>
              </svg>
            </i>
            <span><?=GetMessage("CT_BTN");?></span>
          </a>
          <div class="comp-51-footer-action next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-fa40c45492c4749d" >
            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M16.89 7.1875L10.97 13.1075C10.83 13.2475 10.64 13.3275 10.45 13.3275C10.26 13.3275 10.07 13.2575 9.93 13.1075C9.64 12.8175 9.64 12.3475 9.93 12.0575L14.59 7.3975H0V5.9175H14.58L9.92 1.2675C9.63 0.9775 9.63 0.5075 9.92 0.2175C10.21 -0.0725 10.68 -0.0725 10.97 0.2175L16.89 6.1375C17.18 6.4275 17.18 6.8975 16.89 7.1875Z" fill="#373F43"></path>
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  
