<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}
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
?>
<div class="search-page">

<form action="" method="get">
<?php if ($arParams['USE_SUGGEST'] === 'Y'):
	if (mb_strlen($arResult['REQUEST']['~QUERY']) && is_object($arResult['NAV_RESULT']))
	{
		$arResult['FILTER_MD5'] = $arResult['NAV_RESULT']->GetFilterMD5();
		$obSearchSuggest = new CSearchSuggest($arResult['FILTER_MD5'], $arResult['REQUEST']['~QUERY']);
		$obSearchSuggest->SetResultCount($arResult['NAV_RESULT']->NavRecordCount);
	}
	?>
	<?php $APPLICATION->IncludeComponent(
		'bitrix:search.suggest.input',
		'',
		[
			'NAME' => 'q',
			'VALUE' => $arResult['REQUEST']['~QUERY'],
			'INPUT_SIZE' => 40,
			'DROPDOWN_SIZE' => 10,
			'FILTER_MD5' => $arResult['FILTER_MD5'],
		],
		$component, ['HIDE_ICONS' => 'Y']
	);?>
<?php else:?>
	<input type="text" name="q" value="<?=$arResult['REQUEST']['QUERY']?>" placeholder="Search ..." class="search-input-dropdown"  autocomplete="off">
<?php endif;?>
<?php if ($arParams['SHOW_WHERE']):?>
	&nbsp;<select name="where">
	<option value=""><?=GetMessage('SEARCH_ALL')?></option>
	<?php foreach ($arResult['DROPDOWN'] as $key => $value):?>
	<option value="<?=$key?>"<?php echo ($arResult['REQUEST']['WHERE'] == $key) ? ' selected' : '';?>><?=$value?></option>
	<?php endforeach?>
	</select>
<?php endif;?>
	<button  type="submit">
		<i>
			<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M12.0991 12.0985L17 16.9994" stroke="#ACB4B7" stroke-width="1.50796" stroke-linecap="round" stroke-linejoin="round"></path>
				<path d="M14.0062 7.50685C14.0062 11.0958 11.0958 14.0062 7.50685 14.0062C3.9179 14.0062 1 11.0958 1 7.50685C1 3.9179 3.91036 1 7.49931 1C11.0883 1 13.9986 3.91037 13.9986 7.50685H14.0062Z" stroke="#ACB4B7" stroke-width="1.50796" stroke-linecap="round" stroke-linejoin="round"></path>
			</svg>
		</i>
	</button>
	<input type="hidden" name="how" value="<?php echo $arResult['REQUEST']['HOW'] == 'd' ? 'd' : 'r'?>" />
<?php if ($arParams['SHOW_WHEN']):?>
	<script>
	var switch_search_params = function()
	{
		var sp = document.getElementById('search_params');
		var flag;
		var i;

		if(sp.style.display == 'none')
		{
			flag = false;
			sp.style.display = 'block'
		}
		else
		{
			flag = true;
			sp.style.display = 'none';
		}

		var from = document.getElementsByName('from');
		for(i = 0; i < from.length; i++)
			if(from[i].type.toLowerCase() == 'text')
				from[i].disabled = flag;

		var to = document.getElementsByName('to');
		for(i = 0; i < to.length; i++)
			if(to[i].type.toLowerCase() == 'text')
				to[i].disabled = flag;

		return false;
	}
	</script>
	<br /><a class="search-page-params" href="#" onclick="return switch_search_params()"><?php echo GetMessage('CT_BSP_ADDITIONAL_PARAMS')?></a>
	<div id="search_params" class="search-page-params" style="display:<?php echo $arResult['REQUEST']['FROM'] || $arResult['REQUEST']['TO'] ? 'block' : 'none'?>">
		<?php $APPLICATION->IncludeComponent(
			'bitrix:main.calendar',
			'',
			[
				'SHOW_INPUT' => 'Y',
				'INPUT_NAME' => 'from',
				'INPUT_VALUE' => $arResult['REQUEST']['~FROM'],
				'INPUT_NAME_FINISH' => 'to',
				'INPUT_VALUE_FINISH' => $arResult['REQUEST']['~TO'],
				'INPUT_ADDITIONAL_ATTR' => 'size="10"',
			],
			null,
			['HIDE_ICONS' => 'Y']
		);?>
	</div>
<?php endif?>
</form><br />

<?php if (isset($arResult['REQUEST']['ORIGINAL_QUERY'])):
	?>
	<div class="search-language-guess">
		<?php echo GetMessage('CT_BSP_KEYBOARD_WARNING', ['#query#' => '<a href="' . $arResult['ORIGINAL_QUERY_URL'] . '">' . $arResult['REQUEST']['ORIGINAL_QUERY'] . '</a>'])?>
	</div><br /><?php
endif;?>

<?php if ($arResult['REQUEST']['QUERY'] === false && $arResult['REQUEST']['TAGS'] === false):?>
<?php elseif ($arResult['ERROR_CODE'] != 0):?>
	<p><?=GetMessage('SEARCH_ERROR')?></p>
	<?php ShowError($arResult['ERROR_TEXT']);?>
	<p><?=GetMessage('SEARCH_CORRECT_AND_CONTINUE')?></p>
	<br /><br />
	<p><?=GetMessage('SEARCH_SINTAX')?><br /><b><?=GetMessage('SEARCH_LOGIC')?></b></p>
	<table border="0" cellpadding="5">
		<tr>
			<td align="center" valign="top"><?=GetMessage('SEARCH_OPERATOR')?></td><td valign="top"><?=GetMessage('SEARCH_SYNONIM')?></td>
			<td><?=GetMessage('SEARCH_DESCRIPTION')?></td>
		</tr>
		<tr>
			<td align="center" valign="top"><?=GetMessage('SEARCH_AND')?></td><td valign="top">and, &amp;, +</td>
			<td><?=GetMessage('SEARCH_AND_ALT')?></td>
		</tr>
		<tr>
			<td align="center" valign="top"><?=GetMessage('SEARCH_OR')?></td><td valign="top">or, |</td>
			<td><?=GetMessage('SEARCH_OR_ALT')?></td>
		</tr>
		<tr>
			<td align="center" valign="top"><?=GetMessage('SEARCH_NOT')?></td><td valign="top">not, ~</td>
			<td><?=GetMessage('SEARCH_NOT_ALT')?></td>
		</tr>
		<tr>
			<td align="center" valign="top">( )</td>
			<td valign="top">&nbsp;</td>
			<td><?=GetMessage('SEARCH_BRACKETS_ALT')?></td>
		</tr>
	</table>
<?php elseif (count($arResult['SEARCH']) > 0):?>
	<?php echo ($arParams['DISPLAY_TOP_PAGER'] != 'N') ? $arResult['NAV_STRING'] : '';?>
	<br /><hr />
	<?php foreach ($arResult['SEARCH'] as $arItem):?>
		<a href="<?php echo $arItem['URL']?>"><?php echo $arItem['TITLE_FORMATED']?></a>
		<p><?php echo $arItem['BODY_FORMATED']?></p>
		
		<small><?=GetMessage('SEARCH_MODIFIED')?> <?=$arItem['DATE_CHANGE']?></small><br /><?php
		if ($arItem['CHAIN_PATH']):?>
			<small><?=GetMessage('SEARCH_PATH')?>&nbsp;<?=$arItem['CHAIN_PATH']?></small><?php
		endif;
		?><hr />
	<?php endforeach;?>
	<?php echo ($arParams['DISPLAY_BOTTOM_PAGER'] != 'N') ? $arResult['NAV_STRING'] : '';?>
	<br />
	<p>
	<?php if ($arResult['REQUEST']['HOW'] == 'd'):?>
		<a href="<?=$arResult['URL']?>&amp;how=r<?php echo $arResult['REQUEST']['FROM'] ? '&amp;from=' . $arResult['REQUEST']['FROM'] : ''?><?php echo $arResult['REQUEST']['TO'] ? '&amp;to=' . $arResult['REQUEST']['TO'] : ''?>"><?=GetMessage('SEARCH_SORT_BY_RANK')?></a>&nbsp;|&nbsp;<b><?=GetMessage('SEARCH_SORTED_BY_DATE')?></b>
	<?php else:?>
		<b><?=GetMessage('SEARCH_SORTED_BY_RANK')?></b>&nbsp;|&nbsp;<a href="<?=$arResult['URL']?>&amp;how=d<?php echo $arResult['REQUEST']['FROM'] ? '&amp;from=' . $arResult['REQUEST']['FROM'] : ''?><?php echo $arResult['REQUEST']['TO'] ? '&amp;to=' . $arResult['REQUEST']['TO'] : ''?>"><?=GetMessage('SEARCH_SORT_BY_DATE')?></a>
	<?php endif;?>
	</p>
<?php else:?>
	<?php ShowNote(GetMessage('SEARCH_NOTHING_TO_FOUND'));?>
<?php endif;?>
</div>
