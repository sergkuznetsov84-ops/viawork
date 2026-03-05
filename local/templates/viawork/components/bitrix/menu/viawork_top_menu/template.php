<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>


<?$previousLevel = 0;?>

<div class="nav-list" >
	<div class="nav-list-item" >
		<div class="nav-list-item-link" >
			<a href="javascript:;"></a>
			<a href="javascript:;">
				Продукция                 
			</a>
		</div>
		<div class="nav-list-item-dropdown" >
			<div class="back-btn" >
				<a href="javascript:;">
					<i>
						<svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
						<path d="M0.26699 8.28649L7.53398 1.0195C7.70583 0.847646 7.93906 0.749444 8.17229 0.749444C8.40553 0.749444 8.63876 0.83537 8.81061 1.0195C9.16659 1.37548 9.16659 1.95242 8.81061 2.30841L3.09031 8.02871L21 8.02871L21 9.84545L3.10259 9.84545L8.82288 15.5535C9.17887 15.9095 9.17887 16.4864 8.82288 16.8424C8.4669 17.1984 7.88996 17.1984 7.53398 16.8424L0.266989 9.5754C-0.0889943 9.21941 -0.0889942 8.64247 0.26699 8.28649Z" fill="#25282A"></path>
						</svg>
					</i>
					Back                    
				</a>
			</div>
		<div class="row" >
			<?$count = 0;?>
			<?foreach ($arResult['CATALOG_SECTIONS'] as $section) {?>
				<?$count++;?>
				<div class="col-lg-2 <?=$count == 1 ? 'offset-lg-1': '' ;?> ">
						<div class="nav-list-item-dropdown-item" >
							<div class="nav-list-item-dropdown-item-wrapper" >
								<a href="<?=$section['URL']?>" class="nav-list-item-dropdown-item-head">
									<i>
										<img src="<?=$section['ICON']?>" alt="icon-office-chair">
									</i>
									<span><?=$section['NAME']?></span>
								</a>
							<div class="nav-list-item-dropdown-item-body is-desktop" >
								<?foreach ($section['SUB_SECTIONS'] as $subsection) {?>
									<a href="<?=$subsection['URL']?>" target="" class=""><?=$subsection['NAME']?></a>
								<?}?>
							</div>
							<div class="nav-list-item-dropdown-item-end is-desktop" >
								<a href="<?=$section['URL']?>" target="" class="">Все <?=$section['NAME']?> <i>
									<svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10" fill="none">
										<path d="M10.8601 5.41569L7.05363 9.73487C6.96361 9.83701 6.84144 9.89538 6.71927 9.89538C6.59711 9.89538 6.47494 9.84431 6.38492 9.73487C6.19845 9.52329 6.19845 9.18038 6.38492 8.9688L9.38127 5.5689H0V4.48911H9.37484L6.37849 1.09651C6.19202 0.884928 6.19202 0.54202 6.37849 0.330439C6.56496 0.118858 6.86716 0.118858 7.05363 0.330439L10.8601 4.64962C11.0466 4.8612 11.0466 5.20411 10.8601 5.41569Z" fill="#25282A"></path>
									</svg>
									</i>
								</a>                              
							</div>
						</div>
					</div>
				</div>	
			<?}?>
			<div class="col-lg-2" >
				<div class="nav-list-item-dropdown-item item-end" >
					<div class="nav-list-item-dropdown-item-wrapper" >
						<a href="/all-products/" class="nav-list-item-dropdown-item-head">
							<i>
								<img src="<?=SITE_TEMPLATE_PATH."/src/img"?>/icon-all-products.svg" alt="icon-all-products">
							</i>
							<span>Все товары</span>
						</a>
					<div class="nav-list-item-dropdown-item-body is-desktop" >
						<a href="/all-products/storage/" target="" class="">Хранение</a> 
						<!-- <a href="/en/storage-en/" target="" class="">Storage</a>  -->
					</div>
					<div class="nav-list-item-dropdown-item-end is-desktop" >
						<a href="/all-products/" target="" class="">Посмотреть все товары
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="11" height="10" viewBox="0 0 11 10" fill="none">
									<path d="M10.8601 5.41569L7.05363 9.73487C6.96361 9.83701 6.84144 9.89538 6.71927 9.89538C6.59711 9.89538 6.47494 9.84431 6.38492 9.73487C6.19845 9.52329 6.19845 9.18038 6.38492 8.9688L9.38127 5.5689H0V4.48911H9.37484L6.37849 1.09651C6.19202 0.884928 6.19202 0.54202 6.37849 0.330439C6.56496 0.118858 6.86716 0.118858 7.05363 0.330439L10.8601 4.64962C11.0466 4.8612 11.0466 5.20411 10.8601 5.41569Z" fill="#25282A"></path>
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
<?foreach($arResult as $arItem):?>
	<?if ($arItem["IS_PARENT"]):?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
				<ul>
		<?else:?>
			<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
				<ul>
		<?endif?>
	<?else:?>
		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<?if ($arItem["LINK"] == "/all-products/") {
				continue;
			}?>
			<div class="nav-list-item" >
				<div class="nav-list-item-link" >
					<a href="<?=$arItem["LINK"]?>" target="" class=""><?=$arItem["TEXT"]?></a>                  
				</div>
			</div>
		<?else:?>
			
		<?endif?>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
</div>
<?endif?>
