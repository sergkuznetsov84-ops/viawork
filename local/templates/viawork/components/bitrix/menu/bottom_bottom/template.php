<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;

$legalLabelsMap = array(
	'Cookie Policy' => array(
		'short' => 'Политика cookie',
		'full' => 'Политика использования cookie',
	),
	'Terms & Conditions' => array(
		'short' => 'Условия использования',
		'full' => 'Условия использования',
	),
	'Privacy Policy' => array(
		'short' => 'Конфиденциальность',
		'full' => 'Политика конфиденциальности',
	),
	'Information Security Policy' => array(
		'short' => 'Информационная безопасность',
		'full' => 'Политика информационной безопасности',
	),
);
?>
<div class="legal-links" >
<?
foreach($arResult as $arItem):
	$linkConfig = isset($legalLabelsMap[$arItem["TEXT"]]) ? $legalLabelsMap[$arItem["TEXT"]] : array(
		'short' => $arItem["TEXT"],
		'full' => $arItem["TEXT"],
	);
?>
		<a href="<?=$arItem["LINK"]?>" title="<?=htmlspecialcharsbx($linkConfig['full'])?>"><?=$linkConfig['short']?></a>
<?
endforeach;
?>
</div>
