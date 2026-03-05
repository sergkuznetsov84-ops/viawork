<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

$product_ID=[];
$prodID=[];

foreach($arResult["PROPERTIES"]["PROP_PRODUCT_LIST"]["VALUE"] as $prod){
	$product_ID[$arResult["ID"]][] = $prod;
	$prodID[] = $prod;
}

$result =  \Bitrix\Iblock\Elements\ElementProductTable::getList(array(
	'select' => ['ID', 'NAME', 'PREVIEW_PICTURE','CODE', 'SECTIONS', 'DETAIL_PAGE_URL' => 'IBLOCK.DETAIL_PAGE_URL'],
    'filter' => array('=ID'=>$prodID),

))->fetchAll();

$count_sl = count(array_merge([$arResult["PREVIEW_PICTURE"]["ID"]],$arResult["PROPERTIES"]["PROP_PHOTO_LIST"]["VALUE"]));

foreach($result as &$product){
	foreach($arResult["PROPERTIES"]["PROP_SLIDE_LIST"]["~VALUE"] as $i => $props){
		//$pos = strpos($props, "i:".$product["ID"]);
		$pos = strpos($props, $product["ID"]);
		if($pos !== false) {
			//$sl_arr = unserialize($props);
			$sl_arr = json_decode($props);
			//$product["POS"] = $sl_arr["ID_PRODUCTS"][$product['ID']]["POS"];
			$product["POS"] = $sl_arr->ID_PRODUCTS->{$product['ID']}->POS;
			$product["SLIDE"] = $i;
		}
	}
}

$arr = [
	0 => ["ID_PRODUCTS" => [37 => ["POS" => [40,50]], 39 => ["POS" => [30,20]], ]],
	1 => ["ID_PRODUCTS" => []],
	2 => ["ID_PRODUCTS" => [38 => ["POS" => [40,50]] ]]
];


foreach($arr as $el){
	//$serialized = base64_encode(serialize($el));
	//$serialized =serialize($el);
	$serialized =json_encode($el);
	//var_dump($serialized);
}

//$serialized = serialize($arr);

$arResult["PRODICT_LIST"] = $result;
//echo "<pre>";
//var_dump($result);
//echo "</pre>";
if (is_object($this->__component)) 

{ 
    $this->__component->SetResultCacheKeys(['PRODICT_LIST']); 
    if (!isset($arResult['PRODICT_LIST'])) 
        $arResult['PRODICT_LIST'] = $this->__component->arResult['PRODICT_LIST']; 
}

?>