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
/*$totalCount = $arResult['NAV_RESULT']->NavRecordCount;
$currentPage = $arResult['NAV_RESULT']->NavPageNomer;
$pageCount = $arResult['NAV_RESULT']->NavPageCount;*/
?>
<div class="comp-47-wrapper" id="news-list-container">
	<div class="comp-47-cards" id="news-list-items">
<!--<pre>
<?//var_dump($arResult["ITEMS"][0]);?>
</pre>-->
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	
	<div class="comp-47-card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="comp-47-card-thumbnail" >
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<picture>
					<source srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp">
					<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class=" sp-no-webp" alt="<?=$arItem["NAME"]?>"> 
				</picture>
			</a>
		</div>
		<div class="comp-47-card-title" >
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<?=$arItem["NAME"]?>
			</a>
		</div>
		<div class="comp-47-card-tags" >

			<?foreach($arItem["SECTION_INFO"] as $secInfo){?>
				<a href="<?=CIBlock::ReplaceDetailUrl($secInfo["SECTION_PAGE_URL"],$secInfo,false,'E');?>" class="comp-47-card-tags-item"><?=$secInfo["NAME"]?></a>	
			<?}?>			
		</div>
		<div class="comp-47-card-date" >
			<?= CIBlockFormatProperties::DateFormat($arParams["ACTIVE_DATE_FORMAT"], MakeTimeStamp($arItem["DATE_CREATE"], CSite::GetDateFormat()));?>	</div>
	</div>				

<?endforeach;?>
	</div>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

