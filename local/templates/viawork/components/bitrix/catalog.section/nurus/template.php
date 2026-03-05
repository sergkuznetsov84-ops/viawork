<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="comp-24-body-cards odd-view grid-view" >
	<?
	foreach($arResult["ITEMS"] as $cell=>$arElement):
		$width = 0;
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
		
		$largeClass= '';
		if (empty($arElement["PREVIEW_PICTURE"]["SRC"])) {
			$arElement["PREVIEW_PICTURE"]["SRC"] = SITE_TEMPLATE_PATH."/src/img/no-product.png";
		}
		if ($arElement["PROPERTIES"]['LARGE_PFOTO']['VALUE'] == 'Y') {
			$largeClass = 'card-large';
		}
	?>
		<div class="comp-24-card shop-product <?=$largeClass ?>" data-delay="100" >
			<div class="comp-24-card-media" >
				<a href="<?=$arElement["DETAIL_PAGE_URL"]?>" class="comp-24-card-media-link">
				<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arElement["NAME"]?>">
				</a>
				</div>
			<div class="comp-24-card-title" >
				<h5><?=$arElement["NAME"]?></h5>
			</div>
		</div>
	<?
	endforeach; 
	?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>


