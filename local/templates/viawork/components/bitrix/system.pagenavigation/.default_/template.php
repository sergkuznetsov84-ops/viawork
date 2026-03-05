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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>


	
<?if($arResult["bDescPageNumbering"] === true):?>
	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			1
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><?=GetMessage("nav_begin")?></a>
			|
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
			|
		<?else:?>
			2
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_begin")?></a>
			|
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=GetMessage("nav_prev")?></a>
				|
			<?else:?>
				<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>"><?=GetMessage("nav_prev")?></a>
				|
			<?endif?>
		<?endif?>
	<?else:?>
		<?=GetMessage("nav_begin")?>&nbsp;|&nbsp;<?=GetMessage("nav_prev")?>&nbsp;|
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>
3
		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<div class="current-page" >
				<span><?=$NavRecordGroupPrint?></span>
			</div>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>
		<?else:?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	|

	<?if ($arResult["NavPageNomer"] > 1):?>
		4
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_next")?></a>
		|
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_end")?></a>
	<?else:?>
		<?=GetMessage("nav_next")?>&nbsp;|&nbsp;<?=GetMessage("nav_end")?>
	<?endif?>

<?else:?>

			

	<?if ($arResult["NavPageNomer"] > 1):?>
		<?if($arResult["bSavePage"]):?>
			7
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><?=GetMessage("nav_begin")?></a>
			|
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>"><?=GetMessage("nav_prev")?></a>
			|
		<?else:?>
			<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pagination-btn prev-btn">
				<i>
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
						<path d="M0.190707 5.52842L5.38141 0.198085C5.50417 0.0720302 5.67076 -8.15588e-07 5.83735 -8.01024e-07C6.00395 -7.8646e-07 6.17054 0.0630266 6.29329 0.198085C6.54757 0.459199 6.54757 0.882385 6.29329 1.1435L2.20737 5.33933L15 5.33934L15 6.67192L2.21613 6.67192L6.30206 10.8587C6.55634 11.1199 6.55634 11.543 6.30206 11.8042C6.04779 12.0653 5.63569 12.0653 5.38141 11.8042L0.190707 6.47383C-0.0635676 6.21272 -0.0635676 5.78953 0.190707 5.52842Z" fill="#25282A"></path>
					</svg>
				</i>
			</a>		
		<?endif?>

	<?else:?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pagination-btn prev-btn">
				<i>
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
						<path d="M0.190707 5.52842L5.38141 0.198085C5.50417 0.0720302 5.67076 -8.15588e-07 5.83735 -8.01024e-07C6.00395 -7.8646e-07 6.17054 0.0630266 6.29329 0.198085C6.54757 0.459199 6.54757 0.882385 6.29329 1.1435L2.20737 5.33933L15 5.33934L15 6.67192L2.21613 6.67192L6.30206 10.8587C6.55634 11.1199 6.55634 11.543 6.30206 11.8042C6.04779 12.0653 5.63569 12.0653 5.38141 11.8042L0.190707 6.47383C-0.0635676 6.21272 -0.0635676 5.78953 0.190707 5.52842Z" fill="#25282A"></path>
					</svg>
				</i>
			</a>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<div class="pagination-numbers" >
			<div class="current-page" >
				<span><?=$arResult["nStartPage"]?></span>
			</div>
			<span class="divider">/</span>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			
		<?else:?>
			<div class="total-page" >
				<span> <?=$arResult["nStartPage"]?></span>
			</div>
		</div>	
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>
	

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="pagination-btn next-btn">
			<i>
				<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
					<path d="M14.8093 6.47158L9.61859 11.8019C9.49584 11.928 9.32924 12 9.16265 12C8.99605 12 8.82946 11.937 8.70671 11.8019C8.45243 11.5408 8.45243 11.1176 8.70671 10.8565L12.7926 6.66066H0V5.32808H12.7839L8.69794 1.14125C8.44366 0.880135 8.44366 0.45695 8.69794 0.195836C8.95221 -0.0652786 9.36431 -0.0652786 9.61859 0.195836L14.8093 5.52617C15.0636 5.78728 15.0636 6.21047 14.8093 6.47158Z" fill="#25282A"></path>
				</svg>
			</i>
		</a>
	<?else:?>
			<div class="total-page" >
				<span> <?=$arResult["NavPageCount"]?></span>
			</div>
		</div>
		<a href="javascript:;" class="pagination-btn next-btn disabled">
			<i>
				<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
					<path d="M14.8093 6.47158L9.61859 11.8019C9.49584 11.928 9.32924 12 9.16265 12C8.99605 12 8.82946 11.937 8.70671 11.8019C8.45243 11.5408 8.45243 11.1176 8.70671 10.8565L12.7926 6.66066H0V5.32808H12.7839L8.69794 1.14125C8.44366 0.880135 8.44366 0.45695 8.69794 0.195836C8.95221 -0.0652786 9.36431 -0.0652786 9.61859 0.195836L14.8093 5.52617C15.0636 5.78728 15.0636 6.21047 14.8093 6.47158Z" fill="#25282A"></path>
				</svg>
			</i>
		</a>
	<?endif?>

<?endif?>
