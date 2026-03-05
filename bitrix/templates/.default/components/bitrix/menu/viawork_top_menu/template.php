<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<?
$previousLevel = 0;?>

<div class="nav-list-item" >
	<div class="nav-list-item-link" >
		<a href="/sustainability/" target="" class="">Sustainability</a>                  
	</div>
</div>
<div class="nav-list-item" >
	<div class="nav-list-item-link" >
		<a href="/technology/" target="" class="">Technology</a>                  
	</div>
</div>
<div class="nav-list-item" >
	<div class="nav-list-item-link" >
		<a href="/supply_chain/" target="" class="">Supply Chain</a>                  
	</div>
</div>
<div class="nav-list-item" >
	<div class="nav-list-item-link" >
		<a href="/resources/" target="" class="">Resources</a>                  
	</div>
</div>
<div class="nav-list-item" >
	<div class="nav-list-item-link" >
		<a href="/company/" target="" class="">About</a>                  
	</div>
</div>

<?
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<div class="nav-list-item" >
					<div class="nav-list-item-link" >
						<a href="<?=$arItem["LINK"]?>" target="" class=""><?=$arItem["TEXT"]?></a>                  
					</div>
				</div>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<div class="menu-clear-left"></div>
<?endif?>