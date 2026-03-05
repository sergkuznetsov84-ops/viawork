<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$arParamsTranslite = array("replace_space"=>"-","replace_other"=>"-");
?>
<div class="studies fadeInUp-scroll visible" data-delay="400" >
	<?if($arParams["NEWS_COUNT"]!=3){?>
	<div class="studies-wrapper">
	
		<div class="gutter-sizer" ></div>
	<?}?>
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_DELETE_CONFIRM')));
		?>
		<?//var_dump($arItem["SECTION_INFO"]);?>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="<?if($arParams["NEWS_COUNT"]!=3){?>study-item <?foreach($arItem["PROPERTIES"]["PROP_PRODUCT_LIST"]["VALUE"] as $id){echo Cutil::translit($arParams["PRODUCT_CATEGORY"][$id],"ru",$arParamsTranslite)." ";}?><?foreach($arItem["SECTION_INFO"] as $section){echo Cutil::translit($arParams["PRODUCT_SECTION"][$section["ID"]],"ru",$arParamsTranslite)." ";}?><?}?>">
		  <span class="study">
			<div class="study-media" >
				<picture><source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="media-fluid sp-no-webp" alt="" fetchpriority="high"> </picture>          
			</div>
			<span class="study-content">
			  <span class="study-content-inner">
				<span class="badges">
				  <?//foreach($arItem["PROPERTIES"]["PROP_TAG_LIST"]["VALUE"] as $tag){?>
				  <span class="badge"><?=$arItem["PROPERTIES"]["PROP_TAG_LIST"]["VALUE"][0]?></span>
				  <span class="badge"><?=$arItem["SECTION_INFO"][array_keys($arItem["SECTION_INFO"])[0]]["NAME"];?></span>
				  <?//}?>			  
				</span>
				<span class="title"><?echo $arItem["NAME"]?></span>
				<span class="study-bottom">
				  <span class="location"><?=$arItem["PROPERTIES"]["PROP_LOCATION"]["VALUE"]?>/ <?=explode(".", $arItem["PROPERTIES"]["PROP_DATE"]["VALUE"])[2]?></span>          <span class="action">
					<svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" viewBox="0 0 45 45" fill="none">
					  <circle cx="22.0312" cy="22.6851" r="22" fill="white"></circle>
					  <path d="M15 22.7583H28.2455L23.0879 17.5201L23.5934 17L29.6228 23.1172L23.5934 29.2418L23.0879 28.7217L28.2382 23.4909H15V22.7583Z" fill="black"></path>
					</svg>
				  </span>
				</span>
			  </span>
			</span>
		  </span>
		</a>	
	<?endforeach;?>
	<?if($arParams["NEWS_COUNT"]!=3){?></div><?}?>
</div>
