<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult)) return;

$legalLabelsMap = array(
	'Cookie Policy' => 'Политика использования cookie',
	'Terms & Conditions' => 'Условия использования',
	'Privacy Policy' => 'Политика конфиденциальности',
	'Information Security Policy' => 'Политика информационной безопасности',
);
?>
<div class="legal-links" >
<?
foreach($arResult as $arItem):
	$linkText = isset($legalLabelsMap[$arItem["TEXT"]]) ? $legalLabelsMap[$arItem["TEXT"]] : $arItem["TEXT"];
?>
	<a href="<?=$arItem["LINK"]?>"><?=$linkText?></a>
<?
endforeach;
?>
</div>
