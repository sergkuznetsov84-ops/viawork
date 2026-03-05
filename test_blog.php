<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
/* 
$arFilter1 = array(
	"IBLOCK_ID" => 2
);

$arSelect1 = array(
	"ID",
	"NAME", 
	"PROPERTY_FILE"
);

$res1 = CIBlockElement::GetList(
	array("SORT" => "ASC"), 
	$arFilter1,
	false, 
	false, 
	$arSelect1
);


while($ar_props = $res1->Fetch()){
	$arProdId[$ar_props['NAME']] = $ar_props['ID'];
}
	

$arFilter2 = array(
	"IBLOCK_ID" => 53
);

$arSelect2 = array(
	"ID",
	"NAME"
);

$res2 = CIBlockElement::GetList(
	array("SORT" => "ASC"), 
	$arFilter2,
	false, 
	false, 
	$arSelect2
);


while($docs = $res2->Fetch()){
	foreach ($arProdId as $name => $id) {
		if (strpos($docs['NAME'], $name) !== false) {
			$readyArr[$id][] = $docs['ID'];
		}
	}
}


$PROPERTY_CODE = "DOC_FILLES"; 
foreach ($readyArr as $prodID => $docIdsArr) {
	CIBlockElement::SetPropertyValuesEx($prodID, false, array($PROPERTY_CODE => $docIdsArr));  
} */


 





require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>