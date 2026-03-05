<?define("STATISTIC_SKIP_ACTIVITY_CHECK", "true");?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>

<?
if(\Bitrix\Main\Loader::includeModule('subscribe')){

	$dbRes = CRubric::GetList(array('ID' => 'ASC'), array('LID' => SITE_ID, 'ACTIVE' => 'Y'));
	$arSubscription = CSubscription::GetList(array('ID' => 'ASC'), array('ACTIVE' => 'Y', 'EMAIL' => $_REQUEST['EMAIL']))->Fetch();

	$subscr = new CSubscription;
	
	if($arSubscription){
		$subscr->Update($arSubscription['ID'], array('EMAIL' =>$_REQUEST['EMAIL'], 'RUB_ID' => $_REQUEST['RUB_ID']), SITE_ID);
	}
	else{
		$subscr->Add(array('EMAIL' => $_REQUEST['EMAIL'], 'RUB_ID' => $_REQUEST['RUB_ID']), SITE_ID);
	}
	echo "Bize ulaştığınız için teşekkürler! En kısa sürede sizinle temas kuracağız.";
}
?>

