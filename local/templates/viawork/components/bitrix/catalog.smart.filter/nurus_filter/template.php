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


$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/colors.css',
	'TEMPLATE_CLASS' => 'bx_'.$arParams['TEMPLATE_THEME']
);
?>
<div class="bx_filter ">
	<div class="bx_filter_section">
		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;
			//prices
			
			//not prices
			foreach($arResult["ITEMS"] as $key=>$arItem)
			{
				if(
					empty($arItem["VALUES"])
					|| isset($arItem["PRICE"])
				)
					continue;

				if (
					$arItem["DISPLAY_TYPE"] == "A"
					&& (
						$arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0
					)
				)
					continue;
				?>
				<div class="comp-24-filters-body-item<?if ($arItem["DISPLAY_EXPANDED"]== "Y"):?>active<?endif?>">
					<span class="bx_filter_container_modef"></span>
					<div class="comp-24-filters-body-item-title" onclick="smartFilter.hideFilterProps(this)"><?=$arItem["NAME"]?> <i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i></div>
					<div class="bx_filter_block">
						<div class="bx_filter_parameters_box_container">
						<?
						$arCur = current($arItem["VALUES"]);
						switch ($arItem["DISPLAY_TYPE"])
						{
							
							default://CHECKBOXES
								?>
								<?foreach($arItem["VALUES"] as $val => $ar):?>
									<label data-role="label_<?=$ar["CONTROL_ID"]?>" class="bx_filter_param_label <? echo $ar["DISABLED"] ? 'disabled': '' ?>" for="<? echo $ar["CONTROL_ID"] ?>">
										<span class="bx_filter_input_checkbox">
											<input
												type="checkbox"
												value="<? echo $ar["HTML_VALUE"] ?>"
												name="<? echo $ar["CONTROL_NAME"] ?>"
												id="<? echo $ar["CONTROL_ID"] ?>"
												<? echo $ar["CHECKED"]? 'checked="checked"': '' ?>
												onclick="smartFilter.click(this)"
											/>
											<label title="<?=$ar["VALUE"];?>" for="<? echo $ar["CONTROL_NAME"] ?>"><?=$ar["VALUE"];?> </label>
											<?
											if ($arParams["DISPLAY_ELEMENT_COUNT"] !== "N" && isset($ar["ELEMENT_COUNT"])):
												?> (<span data-role="count_<?=$ar["CONTROL_ID"]?>"><? echo $ar["ELEMENT_COUNT"]; ?></span>)<?
											endif;?></span>
										</span>
									</label>
								<?endforeach;?>
						<?
						}
						?>
						</div>
						<div class="clb"></div>
					</div>
				</div>
			<?
			}
			?>
			<div class="clb"></div>
			<div class="bx_filter_button_box active">		
				<div class="comp-24-filters-body-footer" >
					<div class="clear-all-btn" >
						<input class="bx_filter_search_button" type="submit" id="set_filter" name="set_filter" style="display:none;" value="<?=GetMessage("CT_BCSF_SET_FILTER")?>"/>
						<input class="bx_filter_search_reset" type="submit" id="del_filter" name="del_filter" value="Сбросить все фильтры" />
					</div>
				</div>
				<div class="bx_filter_popup_result <?=$arParams["POPUP_POSITION"]?>" id="modef" <?if(!isset($arResult["ELEMENT_COUNT"])) echo 'style="display:none"';?> style="display: inline-block;">
					<?echo GetMessage("CT_BCSF_FILTER_COUNT", array("#ELEMENT_COUNT#" => '<span id="modef_num">'.intval($arResult["ELEMENT_COUNT"]).'</span>'));?>
					<span class="arrow"></span>
					<a href="<?echo $arResult["FILTER_URL"]?>"><?echo GetMessage("CT_BCSF_FILTER_SHOW")?></a>
				</div>
			</div>
			
		</div>
	</form>
	<div class="comp-24-filters-body-mobile">
		<div class="comp-24-filters-body-mobile-selected-filters"></div>
		<div class="comp-24-filters-body-mobile-head">
			<div class="title">
				<i>
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
						<path d="M16.0117 4.04651H19.0009" stroke="#25282A" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M1 4.04651H9.91696" stroke="#25282A" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M10.0762 13.1729H19.0004" stroke="#25282A" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M1 13.1729H3.98195" stroke="#25282A" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M12.9649 0.999756C14.6472 0.999756 16.0118 2.36438 16.0118 4.04669C16.0118 5.72899 14.6472 7.09361 12.9649 7.09361C11.2826 7.09361 9.91797 5.72899 9.91797 4.04669C9.91797 2.36438 11.2826 0.999756 12.9649 0.999756Z" stroke="#25282A" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M7.02935 10.1262C8.71166 10.1262 10.0763 11.4908 10.0763 13.1732C10.0763 14.8555 8.71166 16.2201 7.02935 16.2201C5.34704 16.2201 3.98242 14.8555 3.98242 13.1732C3.98242 11.4908 5.34704 10.1262 7.02935 10.1262Z" stroke="#25282A" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
				</i>
				<span>Filter Products</span>
			</div>
			<div class="close-btn">
				<a href="javascript:;">
					<i>
						<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
							<path d="M1 1L13 13" stroke="#25282A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M13 1L1 13" stroke="#25282A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</i>
				</a>
			</div>
		</div>
		<div class="comp-24-filters-body-mobile-content">
			<?foreach($arResult["ITEMS"] as $key=>$arItem):
				if (empty($arItem["VALUES"]) || isset($arItem["PRICE"])) {
					continue;
				}
				if ($arItem["DISPLAY_TYPE"] == "A" && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)) {
					continue;
				}
			?>
				<div class="comp-24-filters-body-mobile-content-item">
					<div class="comp-24-filters-body-mobile-content-item-head">
						<span><?=htmlspecialcharsbx($arItem["NAME"])?></span>
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
								<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
							</svg>
						</i>
					</div>
					<div class="comp-24-filters-body-mobile-content-item-list">
						<div class="list-head">
							<div class="back-btn">
								<a href="javascript:;">
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
											<path d="M8 1L1.64972 7.35028L8 13.7006" stroke="#25282A" stroke-miterlimit="10"></path>
										</svg>
									</i>
								</a>
							</div>
							<span><?=htmlspecialcharsbx($arItem["NAME"])?></span>
							<div class="close-btn">
								<a href="javascript:;">
									<i>
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
											<path d="M1 1L13 13" stroke="#25282A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M13 1L1 13" stroke="#25282A" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
									</i>
								</a>
							</div>
						</div>
						<div class="list-content">
							<div class="list-content-item-sublist show">
								<div class="list-content-item-sublist-body">
									<?foreach($arItem["VALUES"] as $val => $ar):?>
										<div class="list-content-item-sublist-body-item">
											<button
												type="button"
												class="mobile-filter-option<?if ($ar["CHECKED"]):?> active<?endif?>"
												data-checkbox-id="<?echo $ar["CONTROL_ID"]?>"
												data-filter-name="<?=htmlspecialcharsbx($arItem["NAME"])?>"
												data-filter-value="<?=htmlspecialcharsbx($ar["VALUE"])?>"
											>
												<span><?=htmlspecialcharsbx($ar["VALUE"])?></span>
											</button>
										</div>
									<?endforeach;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
		<div class="comp-24-filters-body-mobile-footer">
			<div class="apply-btn">
				<a href="javascript:;" class="mobile-filter-apply-btn">
					Apply
					<span class="mobile-filter-apply-count">0</span>
				</a>
			</div>
			<div class="clear-btn">
				<a href="javascript:;" class="mobile-filter-clear-btn">Clear</a>
			</div>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
</div>

				</div>
			</div>
			
			<div class="col-lg-3 col-xl-2 d-lg-block d-none ms-lg-auto" >
				<div class="comp-24-filters-search" >
					<form action="">
						<input type="text" id ="element-search" placeholder="Поиск" name="resFilter[?NAME]" value="<?= $_REQUEST['resFilter']['?NAME'] ?>" onkeyup="debouncedUpdate(this.value)">

								<script>
								let timeoutId;

								function debouncedUpdate(value) {
									clearTimeout(timeoutId);
									timeoutId = setTimeout(() => updateUrlParam(value), 1100);
								}

								function updateUrlParam(value) {
									const url = new URL(window.location.href);
									
									if (value.trim()) {
										url.searchParams.set('resFilter[?NAME]', value.trim());
									} else {
										url.searchParams.delete('resFilter[?NAME]');
									}
									
									window.location.href = url.toString();
								}
								</script>
						<button>
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
									<path d="M13.1933 7.10018C13.1933 10.4648 10.4648 13.1933 7.10018 13.1933C3.73554 13.1933 1 10.4648 1 7.10018C1 3.73554 3.72847 1 7.09311 1C10.4577 1 13.1862 3.72847 13.1862 7.10018H13.1933Z" stroke="white" stroke-width="1.41371" stroke-linecap="round" stroke-linejoin="round"></path>
									<path d="M11.4062 11.4043L16.0008 15.9989" stroke="white" stroke-width="1.41371" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</i>
						</button>
					</form>
				</div>
			</div>
			<div class="col-6 col-lg-3 col-xl-2" >
				<div class="comp-24-filters-sort" >
					<div class="comp-24-filters-sort-title" >
						<span>Сортировка:</span>
					</div>
					<?
					$sort[] = 'A-я';
					$sortMap = [ 
						2 => ['По названию A-я'], 
						3 => ['По названию Я-а'],
						1 => ['По новизне']
					];
					if (isset($_GET['sort'])) {
						$sort = $sortMap[$_GET['sort']];
					}
					function getSortUrl($sortValue) {
						$params = $_GET;
						$params['sort'] = $sortValue;
						return '?' . http_build_query($params);
					}
					?>
					<div class="active-sort" >
						<a href="javascript:;"><?=$sort[0]?></a>
						<div class="icon" >
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
									<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#373F43" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</i>
						</div>
					</div>
					<div class="comp-24-filters-sort-options" >
						<a href="<?= getSortUrl(1) ?>" id="sort-option_1">По новизне </a>
						<a href="<?= getSortUrl(2) ?>" id="sort-option_2">По названию A-я</a>
						<a href="<?= getSortUrl(3) ?>" id="sort-option_3"> По названию Я-а</a>
						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-xl-2 d-lg-block d-none" >
				<div class="comp-24-filters-view" >
					<div class="comp-24-filters-view-title" >
						<span>View:</span>
					</div>
					<div class="comp-24-filters-view-options" >
						<a href="javascript:;" class="option-odd active">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
									<rect x="25" y="24" width="7" height="11" transform="rotate(-180 25 24)" fill="#D9D9D9"></rect>
									<rect x="25" y="11" width="7" height="11" transform="rotate(-180 25 11)" fill="#D9D9D9"></rect>
									<rect x="16" y="24" width="7" height="11" transform="rotate(-180 16 24)" fill="#D9D9D9"></rect>
									<rect x="7" y="24" width="7" height="11" transform="rotate(-180 7 24)" fill="#D9D9D9"></rect>
									<rect x="16" y="11" width="7" height="11" transform="rotate(-180 16 11)" fill="#D9D9D9"></rect>
									<rect x="7" y="11" width="7" height="11" transform="rotate(-180 7 11)" fill="#D9D9D9"></rect>
								</svg>
							</i>
						</a>
						<a href="javascript:;" class="option-even">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect x="24" y="24" width="11" height="11" transform="rotate(-180 24 24)" fill="#D9D9D9"></rect>
									<rect x="24" y="11" width="11" height="11" transform="rotate(-180 24 11)" fill="#D9D9D9"></rect>
									<rect x="11" y="24" width="11" height="11" transform="rotate(-180 11 24)" fill="#D9D9D9"></rect>
									<rect x="11" y="11" width="11" height="11" transform="rotate(-180 11 11)" fill="#D9D9D9"></rect>
								</svg>
							</i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="comp-24-body" style="min-height: 383px;" >
		<div class="loading-spinner" style="display: none;" >
			<div class="loading-spinner-inner" >
				<div class="spinner" ></div>
			</div>
		</div>
		<div class="row" >
			<div class="col-12" >
			<div class="comp-24-body-selected-filters">
			<?$i = 1;?>
			<?if ($APPLICATION->GetCurDir() != "/all-products/") {?>
				
				<?$section = CIBlockSection::GetList([], ['CODE' => $arParams["SECTION_CODE_CUST"]], false, ['NAME'])->Fetch();?>
				<div class="selected-filters-item" >
					<a href="/all-products/">
						<label>
							<?=$section['NAME'];?>
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
								<path d="M1 1L7 7" stroke="#25282A" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
								<path d="M7 1L1 7" stroke="#25282A" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
								</svg>
							</i>
						</lebal>
					</a>
				</div>
			<?}?>
			<?foreach($arResult["ITEMS"] as $key=>$arItem){
				if(	empty($arItem["VALUES"])|| isset($arItem["PRICE"]))
					continue;
				if ($arItem["DISPLAY_TYPE"] == "A" && ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0))
					continue;							
				if ($arItem["DISPLAY_EXPANDED"]== "Y"){
					foreach($arItem["VALUES"] as $val => $ar){
						if ($ar["CHECKED"]) {?>
							<?if ($i == 1) {?>
								<div class="clear-btn" >
									<a href="javascript:;" type="submit" id="del_filter" name="del_filter" value="Сбросить">
										<label class="" type="submit"  for="del_filter" value="Сбросить все фильтры" >
											Сбросить все фильтры
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
														<path d="M11.6834 2.8695L9.67052 2.48413L9.28516 4.49294" stroke="white" stroke-width="0.819924" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M9.67069 2.48406C10.5931 3.40648 11.1671 4.67736 11.1671 6.08353C11.1671 8.89177 8.89177 11.1671 6.08353 11.1671C3.27529 11.1671 1 8.89177 1 6.08353C1 3.27529 3.27529 1 6.08353 1C6.4238 1 6.75587 1.0328 7.07564 1.09839" stroke="white" stroke-width="0.819924" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</i>
										</label>
									</a>
								</div>
								<?$i++;?>
								<div class="selected-filters" >
							<?}?>
								<div class="selected-filters-item" >
									<label fore="<?=$ar["CONTROL_ID"] ?>"><?=$ar["VALUE"];?>
											<i>
												<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
												<path d="M1 1L7 7" stroke="#25282A" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M7 1L1 7" stroke="#25282A" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</i>
									</label>
								</div>
						<?
						}							
					}
				}
			}	
		?>
		</div>
	</div>
<script>
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', 'vertical');
</script>
<style>
	.selected-filters-item a{
		color: #25282a;
	}
	.clear-btn label{
		display:flex;
	}
	.clear-btn label i{
		margin-left: 10px;
	}
	.selected-filters-item label{
		display: flex;
	}
	.selected-filters-item label i{
		margin-left: 10px;
	}
	.comp-24-body-selected-filters .clear-btn a input{
		color: white;
		background-color: #25282a;
		border: none;
	}

	.comp-24-filters-body-item.active i {
		cursor: pointer;
		display: flex;
		height: 9px;
		width: 15px;
		transform: rotate(180deg);
	}
	.comp-24-filters-body-item-title{
		display: flex;
    	justify-content: space-between;
	}
	.bx_filter .bx_filter_search_reset{
		background: #25282a;
		border-radius: 17.5px;
		color: #fff;
		display: flex;
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		justify-content: center;
		line-height: normal;
		padding: 10px 0;
		width: 100%;
	}
	.bx_filter_parameters_box_container {
		padding-left: 0 !important;
	}
	.bx_filter .bx_filter_section {
		position: relative;
		padding: 0;
		border: none;
		border-radius: none;
		background: none;
		text-shadow: none;
	}
	.bx_filter .bx_filter_param_label{
		    align-items: center;
			border-bottom: .5px solid #25282a;
			cursor: pointer;
			display: flex;
			gap: 8px;
			justify-content: space-between;
			margin: 0 0 0 20px;
			padding: 15px 20px 15px 0;
    		color: #25282a;
			font-size: 14px;
			font-style: normal;
			font-variant-numeric: tabular-nums;
			font-weight: 600;
			line-height: normal;
	}
	button, input, select, textarea {
		-webkit-appearance: auto;
		-moz-appearance: none;
		appearance: auto;
	}
	.comp-24-filters-body-item-title{
		color: #25282a;
		cursor: pointer;
		font-size: 14px;
		font-style: normal;
		font-variant-numeric: tabular-nums;
		font-weight: 600;
		line-height: normal;
		padding-left: 22px;
		position: relative;
	}
	.bx_filter_parameters_box_container{
		padding-left: 15px;
	}
	.bx_filter_input_checkbox label{
		padding-left: 10px;
	}
	.bx_filter .bx_filter_input_checkbox input[type=checkbox] {
		position: relative;
		top: 2px;
		float: left;
	}
	
</style>
