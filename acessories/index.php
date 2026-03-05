<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аксессуары");
?>

<main class="main-blogs">

  


<section class="comp-24">

	<div class="comp-24-wrapper" >
	<?$GLOBALS["arFillter"][] = ["SECTION_ID" =>32];?>
	<?$arFillter[] = ["SECTION_ID" =>32];?>
	<?$APPLICATION->IncludeComponent(
	"bitrix:catalog", 
	"nurus", 
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"SECTION_ID" =>32,
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPATIBLE_MODE" => "N",
		"DETAIL_BACKGROUND_IMAGE" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_SHOW_PICTURE" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "products",
		"INCLUDE_SUBSECTIONS" => "Y",
		"LINE_ELEMENT_COUNT" => "3",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"LINK_IBLOCK_ID" => "",
		"LINK_IBLOCK_TYPE" => "",
		"LINK_PROPERTY_SID" => "",
		"LIST_BROWSER_TITLE" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_META_KEYWORDS" => "-",
		"MESSAGE_404" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "nurus",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "3",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"SECTION_BACKGROUND_IMAGE" => "-",
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_SHOW_PARENT_NAME" => "N",
		"SECTION_TOP_DEPTH" => "2",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_DEACTIVATED" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SKU_DESCRIPTION" => "N",
		"SHOW_TOP_ELEMENTS" => "N",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_ELEMENT_SORT_FIELD" => "sort",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER" => "asc",
		"TOP_ELEMENT_SORT_ORDER2" => "desc",
		"TOP_LINE_ELEMENT_COUNT" => "3",
		"USER_CONSENT" => "N",
		"USER_CONSENT_ID" => "0",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "N",
		"USE_COMPARE" => "N",
		"FILTER_NAME" => "arFillter",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_STORE" => "N",
		"COMPONENT_TEMPLATE" => "nurus",
		"SEF_FOLDER" => "/all-products/",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"compare" => "compare.php?action=#ACTION_CODE#",
			"smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
		),
		"VARIABLE_ALIASES" => array(
			"compare" => array(
				"ACTION_CODE" => "action",
			),
		)
	),
	false
);?>
	
	
	
	
		<div class="container-fluid" >
			<div class="comp-24-main" >
				<div class="comp-24-head" >
					<div class="comp-24-head-title fadeInUp-scroll visible" data-delay="200" >
						<h1></h1>
					</div>
				</div>
				<div class="comp-24-filters" >
					<div class="mobile-overlay" ></div>
					<div class="row" >
						<div class="col-6 col-lg-3" >
							<div class="comp-24-filters-main" >
								<div class="comp-24-filters-main-btn" >
									<a href="javascript:;">
										<i class="filter-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none">
												<path d="M16.0117 4.04651H19.0009" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M1 4.04651H9.91696" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M10.0762 13.1729H19.0004" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M1 13.1729H3.98195" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M12.9649 0.999756C14.6472 0.999756 16.0118 2.36438 16.0118 4.04669C16.0118 5.72899 14.6472 7.09361 12.9649 7.09361C11.2826 7.09361 9.91797 5.72899 9.91797 4.04669C9.91797 2.36438 11.2826 0.999756 12.9649 0.999756Z" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M7.02935 10.1262C8.71166 10.1262 10.0763 11.4908 10.0763 13.1732C10.0763 14.8555 8.71166 16.2201 7.02935 16.2201C5.34704 16.2201 3.98242 14.8555 3.98242 13.1732C3.98242 11.4908 5.34704 10.1262 7.02935 10.1262Z" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</i>
										<span>Filter Products</span>
										<i class="arrow-icon">
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
												<path d="M17 1L9.06352 9.06352L1 1.12704" stroke="white" stroke-width="1.33723" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</i>
									</a>
								</div>
								<div class="comp-24-filters-body" style="max-height: 1678px; overflow-y: auto;" >

																			<div class="comp-24-filters-body-item" >
											<div class="comp-24-filters-body-item-title" >
												<a href="javascript:;">
													<span>Product Categories</span>
													<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i>
												</a>
											</div>
											<ul class="comp-24-filters-body-item-list">
												<li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product_category_8" id="product_category_8" value="acessories-en" data-taxonomy="product_category" data-type="category">
                    <label for="product_category_8">Acessories (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product_category_4" id="product_category_4" value="desks-tables-en" data-taxonomy="product_category" data-type="category" class="has-children">
                    <label for="product_category_4">Desks &amp; Tables (52)</label></form><i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                    <path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path></svg></i>
                    </div>
                    <div class="comp-24-filters-body-item-sublist" >
                        <div class="comp-24-filters-body-item-sublist-item" >
                        
                            <ul class="comp-24-filters-body-item-sublist-item-content">
                                <li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1189" id="product_category_1189" value="coffee-side-tables" data-taxonomy="product_category">
                <label for="product_category_1189">Coffee &amp; Side Tables (18)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1185" id="product_category_1185" value="executive-desks" data-taxonomy="product_category">
                <label for="product_category_1185">Executive Desks (3)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1187" id="product_category_1187" value="meeting-desks-tables" data-taxonomy="product_category">
                <label for="product_category_1187">Meeting Desks &amp; Tables (14)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1183" id="product_category_1183" value="single-desks" data-taxonomy="product_category">
                <label for="product_category_1183">Single Desks (18)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1191" id="product_category_1191" value="sit-stands" data-taxonomy="product_category">
                <label for="product_category_1191">Sit Stands (1)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1195" id="product_category_1195" value="worksystems" data-taxonomy="product_category">
                <label for="product_category_1195">Worksystems (16)</label></li>
                            </ul>
                        </div>
                    </div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product_category_1541" id="product_category_1541" value="nurus-kids" data-taxonomy="product_category" data-type="category">
                    <label for="product_category_1541">Nurus Kids (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product_category_2" id="product_category_2" value="office-chairs-en" data-taxonomy="product_category" data-type="category">
                    <label for="product_category_2">Office Chairs (41)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product_category_5" id="product_category_5" value="seating-en" data-taxonomy="product_category" data-type="category" class="has-children">
                    <label for="product_category_5">Seating (92)</label></form><i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                    <path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path></svg></i>
                    </div>
                    <div class="comp-24-filters-body-item-sublist" >
                        <div class="comp-24-filters-body-item-sublist-item" >
                        
                            <ul class="comp-24-filters-body-item-sublist-item-content">
                                <li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_1524" id="product_category_1524" value="chairs" data-taxonomy="product_category">
                <label for="product_category_1524">Chairs (10)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_770" id="product_category_770" value="office-chairs-sub" data-taxonomy="product_category">
                <label for="product_category_770">Office Chairs (41)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_777" id="product_category_777" value="public-lounge-seating" data-taxonomy="product_category">
                <label for="product_category_777">Public &amp; Lounge Seating (14)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_775" id="product_category_775" value="soft-seating" data-taxonomy="product_category" class="has-children">
                <label for="product_category_775">Soft Seating (35)</label><ul><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_783" id="product_category_783" value="armchairs" data-taxonomy="product_category">
                <label for="product_category_783">Armchairs (8)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_785" id="product_category_785" value="sofas" data-taxonomy="product_category">
                <label for="product_category_785">Sofas (23)</label></li></ul></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_773" id="product_category_773" value="stools-pouffes" data-taxonomy="product_category" class="has-children">
                <label for="product_category_773">Stools &amp; Pouffes (10)</label><ul><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_781" id="product_category_781" value="pouffes" data-taxonomy="product_category">
                <label for="product_category_781">Pouffes (8)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_779" id="product_category_779" value="stools" data-taxonomy="product_category">
                <label for="product_category_779">Stools (2)</label></li></ul></li>
                            </ul>
                        </div>
                    </div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product_category_6" id="product_category_6" value="storage-en" data-taxonomy="product_category" data-type="category" class="has-children">
                    <label for="product_category_6">Storage (9)</label></form><i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                    <path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path></svg></i>
                    </div>
                    <div class="comp-24-filters-body-item-sublist" >
                        <div class="comp-24-filters-body-item-sublist-item" >
                        
                            <ul class="comp-24-filters-body-item-sublist-item-content">
                                <li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_823" id="product_category_823" value="cabinets" data-taxonomy="product_category">
                <label for="product_category_823">Cabinets (5)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_825" id="product_category_825" value="consoles" data-taxonomy="product_category">
                <label for="product_category_825">Consoles (2)</label></li><li class="comp-24-filters-body-item-sublist-item-content-li">
                <input type="checkbox" name="product_category_827" id="product_category_827" value="shelf-systems" data-taxonomy="product_category">
                <label for="product_category_827">Shelf Systems (2)</label></li>
                            </ul>
                        </div>
                    </div></li>											</ul>
										</div>
																			<div class="comp-24-filters-body-item" >
											<div class="comp-24-filters-body-item-title" >
												<a href="javascript:;">
													<span>Areas Of Use</span>
													<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i>
												</a>
											</div>
											<ul class="comp-24-filters-body-item-list">
												<li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_797" id="areas-of-use_797" value="cafe-break-areas" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_797">Café &amp; Break Areas (78)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_795" id="areas-of-use_795" value="education" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_795">Education (48)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_801" id="areas-of-use_801" value="executive-offices" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_801">Executive Offices (74)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_793" id="areas-of-use_793" value="healthcare" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_793">Healthcare (6)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_789" id="areas-of-use_789" value="home-offices" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_789">Home Offices (67)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_799" id="areas-of-use_799" value="hospitality" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_799">Hospitality (47)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_803" id="areas-of-use_803" value="meeting-areas" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_803">Meeting Areas (91)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_805" id="areas-of-use_805" value="public-lounge" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_805">Public &amp; Lounge (53)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_791" id="areas-of-use_791" value="small-offices" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_791">Small Offices (92)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="areas-of-use_829" id="areas-of-use_829" value="workspaces" data-taxonomy="areas-of-use" data-type="category">
                    <label for="areas-of-use_829">Workspaces (95)</label></form></div></li>											</ul>
										</div>
																			<div class="comp-24-filters-body-item" >
											<div class="comp-24-filters-body-item-title" >
												<a href="javascript:;">
													<span>Product Families</span>
													<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i>
												</a>
											</div>
											<ul class="comp-24-filters-body-item-list">
												<li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_1279" id="product-family_1279" value="4u" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_1279">4U (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_282" id="product-family_282" value="air" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_282">Air (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_284" id="product-family_284" value="alava" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_284">Alava (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_677" id="product-family_677" value="aqua" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_677">Aqua (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_286" id="product-family_286" value="aura" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_286">Aura (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_288" id="product-family_288" value="best-sellers" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_288">Best Sellers (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_675" id="product-family_675" value="bunny" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_675">Bunny (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_637" id="product-family_637" value="claire" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_637">Claire (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_627" id="product-family_627" value="clopete" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_627">Clopete (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_679" id="product-family_679" value="coral" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_679">Coral (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_653" id="product-family_653" value="corvo" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_653">Corvo (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_705" id="product-family_705" value="cube" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_705">Cube (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_715" id="product-family_715" value="cube-box" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_715">Cube Box (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_685" id="product-family_685" value="edgar" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_685">Edgar (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_631" id="product-family_631" value="ela" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_631">Ela (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_615" id="product-family_615" value="eon" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_615">Eon (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_707" id="product-family_707" value="fe2" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_707">Fe2 (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_613" id="product-family_613" value="featured-products" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_613">Featured Products (5)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_629" id="product-family_629" value="fiona" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_629">Fiona (11)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_290" id="product-family_290" value="flora" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_290">Flora (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_645" id="product-family_645" value="fresco" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_645">Fresco (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_661" id="product-family_661" value="greta" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_661">Greta (9)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_1500" id="product-family_1500" value="leaves" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_1500">Leaves (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_623" id="product-family_623" value="lips" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_623">Lips (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_689" id="product-family_689" value="louis" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_689">Louis (5)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_659" id="product-family_659" value="lucrezia" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_659">Lucrezia (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_1439" id="product-family_1439" value="marla" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_1439">Marla (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_643" id="product-family_643" value="matilda" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_643">Matilda (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_292" id="product-family_292" value="me-too" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_292">Me Too (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_294" id="product-family_294" value="metope" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_294">Metope (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_1549" id="product-family_1549" value="mini-do" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_1549">Mini Do (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_1547" id="product-family_1547" value="mini-go" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_1547">Mini Go (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_697" id="product-family_697" value="mono" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_697">Mono (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_296" id="product-family_296" value="mou" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_296">Mou (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_719" id="product-family_719" value="olo" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_719">Olo (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_625" id="product-family_625" value="patrick" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_625">Patrick (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_669" id="product-family_669" value="pila" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_669">Pila (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_671" id="product-family_671" value="pila-wood" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_671">Pila Wood (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_621" id="product-family_621" value="r2" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_621">R2 (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_691" id="product-family_691" value="renee" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_691">Renée (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_298" id="product-family_298" value="ron" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_298">Ron (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_655" id="product-family_655" value="s-chair" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_655">S Chair (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_300" id="product-family_300" value="sacha" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_300">Sacha (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_683" id="product-family_683" value="sema" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_683">Sema (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_667" id="product-family_667" value="silva" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_667">Silva (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_647" id="product-family_647" value="spring" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_647">Spring (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_657" id="product-family_657" value="step" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_657">Step (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_663" id="product-family_663" value="taklamakan" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_663">Taklamakan (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_639" id="product-family_639" value="tan" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_639">Tan (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_633" id="product-family_633" value="tara" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_633">Tara (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_681" id="product-family_681" value="tau" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_681">Tau (8)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_701" id="product-family_701" value="to" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_701">To (9)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_302" id="product-family_302" value="toya" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_302">Toya (9)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_304" id="product-family_304" value="trea" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_304">Trea (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_306" id="product-family_306" value="tulya" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_306">Tulya (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_673" id="product-family_673" value="u-too" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_673">U Too (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_308" id="product-family_308" value="uneo" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_308">Uneo (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="product-family_310" id="product-family_310" value="waves" data-taxonomy="product-family" data-type="category">
                    <label for="product-family_310">Waves (1)</label></form></div></li>											</ul>
										</div>
																			<div class="comp-24-filters-body-item" >
											<div class="comp-24-filters-body-item-title" >
												<a href="javascript:;">
													<span>Features</span>
													<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i>
												</a>
											</div>
											<ul class="comp-24-filters-body-item-list">
												<li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_945" id="features_945" value="2-leg-base" data-taxonomy="features" data-type="category">
                    <label for="features_945">2 Leg Base (18)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_947" id="features_947" value="3-leg-base" data-taxonomy="features" data-type="category">
                    <label for="features_947">3 Leg Base (20)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_136" id="features_136" value="4-leg-base" data-taxonomy="features" data-type="category">
                    <label for="features_136">4 Leg Base (47)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_138" id="features_138" value="4-star-base" data-taxonomy="features" data-type="category">
                    <label for="features_138">4 Star Base (11)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_140" id="features_140" value="5-star-base" data-taxonomy="features" data-type="category">
                    <label for="features_140">5 Star Base (24)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_148" id="features_148" value="adjustable-armrests" data-taxonomy="features" data-type="category">
                    <label for="features_148">Adjustable Armrests (9)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_132" id="features_132" value="adjustable-backrest-height" data-taxonomy="features" data-type="category">
                    <label for="features_132">Adjustable Backrest Height (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_154" id="features_154" value="adjustable-seat-depth" data-taxonomy="features" data-type="category">
                    <label for="features_154">Adjustable Seat Depth (9)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_156" id="features_156" value="adjustable-seat-height" data-taxonomy="features" data-type="category">
                    <label for="features_156">Adjustable Seat Height (31)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_152" id="features_152" value="automatic-weight-adjustment" data-taxonomy="features" data-type="category">
                    <label for="features_152">Automatic Weight Adjustment (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_168" id="features_168" value="back-tilt" data-taxonomy="features" data-type="category">
                    <label for="features_168">Back Tilt (21)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_166" id="features_166" value="back-tilt-lock" data-taxonomy="features" data-type="category">
                    <label for="features_166">Back Tilt Lock (13)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_748" id="features_748" value="castors" data-taxonomy="features" data-type="category">
                    <label for="features_748">Castors (28)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_744" id="features_744" value="depth-adjustable-table" data-taxonomy="features" data-type="category">
                    <label for="features_744">Depth Adjustable Table (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_1289" id="features_1289" value="foldable-table" data-taxonomy="features" data-type="category">
                    <label for="features_1289">Foldable Table (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_146" id="features_146" value="footrest" data-taxonomy="features" data-type="category">
                    <label for="features_146">Footrest (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_738" id="features_738" value="height-adjustable-table" data-taxonomy="features" data-type="category">
                    <label for="features_738">Height Adjustable Table (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_158" id="features_158" value="high-back" data-taxonomy="features" data-type="category">
                    <label for="features_158">High Back (10)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_943" id="features_943" value="high-table" data-taxonomy="features" data-type="category">
                    <label for="features_943">High Table (6)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_144" id="features_144" value="low-back" data-taxonomy="features" data-type="category">
                    <label for="features_144">Low Back (11)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_150" id="features_150" value="lumbar-support" data-taxonomy="features" data-type="category">
                    <label for="features_150">Lumbar Support (10)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_742" id="features_742" value="meeting-table" data-taxonomy="features" data-type="category">
                    <label for="features_742">Meeting Table (13)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_752" id="features_752" value="modular-seating" data-taxonomy="features" data-type="category">
                    <label for="features_752">Modular Seating (33)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_949" id="features_949" value="optional-soft-seating" data-taxonomy="features" data-type="category">
                    <label for="features_949">Optional Soft Seating (8)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_740" id="features_740" value="semi-executive" data-taxonomy="features" data-type="category">
                    <label for="features_740">Semi Executive (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_1526" id="features_1526" value="sledge-base" data-taxonomy="features" data-type="category">
                    <label for="features_1526">Sledge Base (4)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_750" id="features_750" value="stackable" data-taxonomy="features" data-type="category">
                    <label for="features_750">Stackable (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_162" id="features_162" value="u-leg-base" data-taxonomy="features" data-type="category">
                    <label for="features_162">U Leg Base (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_142" id="features_142" value="wooden-base" data-taxonomy="features" data-type="category">
                    <label for="features_142">Wooden Base (25)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="features_160" id="features_160" value="writing-pad" data-taxonomy="features" data-type="category">
                    <label for="features_160">Writing Pad (2)</label></form></div></li>											</ul>
										</div>
																			<div class="comp-24-filters-body-item" >
											<div class="comp-24-filters-body-item-title" >
												<a href="javascript:;">
													<span>Certifications</span>
													<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i>
												</a>
											</div>
											<ul class="comp-24-filters-body-item-list">
												<li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="certification_817" id="certification_817" value="gs-mark" data-taxonomy="certification" data-type="category">
                    <label for="certification_817">GS Mark (Geprüfte Sicherheit) (6)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="certification_807" id="certification_807" value="greenguard" data-taxonomy="certification" data-type="category">
                    <label for="certification_807">Greenguard (28)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="certification_809" id="certification_809" value="greenguard-gold" data-taxonomy="certification" data-type="category">
                    <label for="certification_809">Greenguard Gold (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="certification_819" id="certification_819" value="tse-9241-5-ergonomy" data-taxonomy="certification" data-type="category">
                    <label for="certification_819">TSE 9241-5 Ergonomy (6)</label></form></div></li>											</ul>
										</div>
																			<div class="comp-24-filters-body-item" >
											<div class="comp-24-filters-body-item-title" >
												<a href="javascript:;">
													<span>Awards</span>
													<i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
														</svg></i>
												</a>
											</div>
											<ul class="comp-24-filters-body-item-list">
												<li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1215" id="award_1215" value="big-see-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1215">Big See Design Award (5)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1217" id="award_1217" value="big-see-wood-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1217">Big See Wood Design Award (2)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1229" id="award_1229" value="design-preis" data-taxonomy="award" data-type="category">
                    <label for="award_1229">Design Preis (6)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1211" id="award_1211" value="design-turkey" data-taxonomy="award" data-type="category">
                    <label for="award_1211">Design Turkey (5)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1227" id="award_1227" value="elle-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1227">Elle Design Award (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1237" id="award_1237" value="german-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1237">German Design Award (40)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1221" id="award_1221" value="good-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1221">Good Design Award (20)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1219" id="award_1219" value="green-good-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1219">Green Good Design Award (3)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1209" id="award_1209" value="if-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1209">IF Design Award (12)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1223" id="award_1223" value="ifda-award" data-taxonomy="award" data-type="category">
                    <label for="award_1223">IFDA Award (1)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1213" id="award_1213" value="red-dot-design-award" data-taxonomy="award" data-type="category">
                    <label for="award_1213">Red Dot Design Award (11)</label></form></div></li><li class="comp-24-filters-body-item-list-li">
                <div class="comp-24-filters-body-item-list-li-head" >
                    <form><input type="checkbox" name="award_1233" id="award_1233" value="universal-design-consumer-award" data-taxonomy="award" data-type="category">
                    <label for="award_1233">Universal Design Consumer Award (2)</label></form></div></li>											</ul>
										</div>
									
									<div class="comp-24-filters-body-footer" >
										<div class="clear-all-btn" >
											<a href="javascript:;">Clear All Filters</a>
										</div>
									</div>
								</div>
								<div class="comp-24-filters-body-mobile" >
									<div class="comp-24-filters-body-mobile-selected-filters show" >
          <div class="selected-filters-item" data-id="acessories-en" data-type="taxonomy" data-taxonomy="product_category" >
            <span>Acessories</span>
            <i>
              <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                <path d="M1 1L7 7" stroke="white" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M7 1L1 7" stroke="white" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg>
            </i>
          </div>
        </div>

									<div class="comp-24-filters-body-mobile-head" >
										<div class="title" >
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
										<div class="close-btn" >
											<a href="javascript:;">
												<i>
													<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
														<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
													</svg>
												</i>
											</a>
										</div>
									</div>
									<div class="comp-24-filters-body-mobile-content" >
																					<div class="comp-24-filters-body-mobile-content-item" >
												<div class="comp-24-filters-body-mobile-content-item-head" >
													<span>Product Categories</span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</i>
												</div>
												<div class="comp-24-filters-body-mobile-content-item-list direct-list" >
													<div class="list-head" >
														<a href="javascript:;" class="back-btn">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
																	<path d="M7.55078 14L0.999172 7.55161L7.44756 1" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</i>
														</a>
														<div class="list-head-title" >
															<span>Product Categories</span>
														</div>
														<div class="close-btn" >
															<a href="javascript:;">
																<i>
																	<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
																		<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</i>
															</a>
														</div>
													</div>
													<div class="list-content" >
																													<div class="list-content-item direct-terms" >
																<div class="list-content-item-sublist-body" >
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-8" id="term-mobile-8" value="acessories-en" data-taxonomy="product_category">
																				<label for="term-mobile-8">
																					<span>Acessories (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-783" id="term-mobile-783" value="armchairs" data-taxonomy="product_category">
																				<label for="term-mobile-783">
																					<span>Armchairs (8)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-823" id="term-mobile-823" value="cabinets" data-taxonomy="product_category">
																				<label for="term-mobile-823">
																					<span>Cabinets (5)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1524" id="term-mobile-1524" value="chairs" data-taxonomy="product_category">
																				<label for="term-mobile-1524">
																					<span>Chairs (10)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1189" id="term-mobile-1189" value="coffee-side-tables" data-taxonomy="product_category">
																				<label for="term-mobile-1189">
																					<span>Coffee &amp; Side Tables (18)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-825" id="term-mobile-825" value="consoles" data-taxonomy="product_category">
																				<label for="term-mobile-825">
																					<span>Consoles (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-4" id="term-mobile-4" value="desks-tables-en" data-taxonomy="product_category">
																				<label for="term-mobile-4">
																					<span>Desks &amp; Tables (52)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1185" id="term-mobile-1185" value="executive-desks" data-taxonomy="product_category">
																				<label for="term-mobile-1185">
																					<span>Executive Desks (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-728" id="term-mobile-728" value="media-video-walls-en" data-taxonomy="product_category">
																				<label for="term-mobile-728">
																					<span>Media / Video Walls (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1187" id="term-mobile-1187" value="meeting-desks-tables" data-taxonomy="product_category">
																				<label for="term-mobile-1187">
																					<span>Meeting Desks &amp; Tables (14)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1541" id="term-mobile-1541" value="nurus-kids" data-taxonomy="product_category">
																				<label for="term-mobile-1541">
																					<span>Nurus Kids (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-770" id="term-mobile-770" value="office-chairs-sub" data-taxonomy="product_category">
																				<label for="term-mobile-770">
																					<span>Office Chairs (41)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-2" id="term-mobile-2" value="office-chairs-en" data-taxonomy="product_category">
																				<label for="term-mobile-2">
																					<span>Office Chairs (41)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-727" id="term-mobile-727" value="panel-systems-en" data-taxonomy="product_category">
																				<label for="term-mobile-727">
																					<span>Panel Systems (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-781" id="term-mobile-781" value="pouffes" data-taxonomy="product_category">
																				<label for="term-mobile-781">
																					<span>Pouffes (8)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-777" id="term-mobile-777" value="public-lounge-seating" data-taxonomy="product_category">
																				<label for="term-mobile-777">
																					<span>Public &amp; Lounge Seating (14)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-7" id="term-mobile-7" value="screens-partition-en" data-taxonomy="product_category">
																				<label for="term-mobile-7">
																					<span>Screens &amp; Partition (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-5" id="term-mobile-5" value="seating-en" data-taxonomy="product_category">
																				<label for="term-mobile-5">
																					<span>Seating (92)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-827" id="term-mobile-827" value="shelf-systems" data-taxonomy="product_category">
																				<label for="term-mobile-827">
																					<span>Shelf Systems (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1183" id="term-mobile-1183" value="single-desks" data-taxonomy="product_category">
																				<label for="term-mobile-1183">
																					<span>Single Desks (18)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1191" id="term-mobile-1191" value="sit-stands" data-taxonomy="product_category">
																				<label for="term-mobile-1191">
																					<span>Sit Stands (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-785" id="term-mobile-785" value="sofas" data-taxonomy="product_category">
																				<label for="term-mobile-785">
																					<span>Sofas (23)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-775" id="term-mobile-775" value="soft-seating" data-taxonomy="product_category">
																				<label for="term-mobile-775">
																					<span>Soft Seating (35)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-779" id="term-mobile-779" value="stools" data-taxonomy="product_category">
																				<label for="term-mobile-779">
																					<span>Stools (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-773" id="term-mobile-773" value="stools-pouffes" data-taxonomy="product_category">
																				<label for="term-mobile-773">
																					<span>Stools &amp; Pouffes (10)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-6" id="term-mobile-6" value="storage-en" data-taxonomy="product_category">
																				<label for="term-mobile-6">
																					<span>Storage (9)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1195" id="term-mobile-1195" value="worksystems" data-taxonomy="product_category">
																				<label for="term-mobile-1195">
																					<span>Worksystems (16)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																	</div>
															</div>
																											</div>
												</div>
											</div>
																					<div class="comp-24-filters-body-mobile-content-item" >
												<div class="comp-24-filters-body-mobile-content-item-head" >
													<span>Areas of Use</span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</i>
												</div>
												<div class="comp-24-filters-body-mobile-content-item-list direct-list" >
													<div class="list-head" >
														<a href="javascript:;" class="back-btn">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
																	<path d="M7.55078 14L0.999172 7.55161L7.44756 1" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</i>
														</a>
														<div class="list-head-title" >
															<span>Areas of Use</span>
														</div>
														<div class="close-btn" >
															<a href="javascript:;">
																<i>
																	<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
																		<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</i>
															</a>
														</div>
													</div>
													<div class="list-content" >
																													<div class="list-content-item direct-terms" >
																<div class="list-content-item-sublist-body" >
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-797" id="term-mobile-797" value="cafe-break-areas" data-taxonomy="areas-of-use">
																				<label for="term-mobile-797">
																					<span>Café &amp; Break Areas (78)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-795" id="term-mobile-795" value="education" data-taxonomy="areas-of-use">
																				<label for="term-mobile-795">
																					<span>Education (48)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-801" id="term-mobile-801" value="executive-offices" data-taxonomy="areas-of-use">
																				<label for="term-mobile-801">
																					<span>Executive Offices (74)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-793" id="term-mobile-793" value="healthcare" data-taxonomy="areas-of-use">
																				<label for="term-mobile-793">
																					<span>Healthcare (6)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-789" id="term-mobile-789" value="home-offices" data-taxonomy="areas-of-use">
																				<label for="term-mobile-789">
																					<span>Home Offices (67)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-799" id="term-mobile-799" value="hospitality" data-taxonomy="areas-of-use">
																				<label for="term-mobile-799">
																					<span>Hospitality (47)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-803" id="term-mobile-803" value="meeting-areas" data-taxonomy="areas-of-use">
																				<label for="term-mobile-803">
																					<span>Meeting Areas (91)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-805" id="term-mobile-805" value="public-lounge" data-taxonomy="areas-of-use">
																				<label for="term-mobile-805">
																					<span>Public &amp; Lounge (53)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-791" id="term-mobile-791" value="small-offices" data-taxonomy="areas-of-use">
																				<label for="term-mobile-791">
																					<span>Small Offices (92)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-829" id="term-mobile-829" value="workspaces" data-taxonomy="areas-of-use">
																				<label for="term-mobile-829">
																					<span>Workspaces (95)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																	</div>
															</div>
																											</div>
												</div>
											</div>
																					<div class="comp-24-filters-body-mobile-content-item" >
												<div class="comp-24-filters-body-mobile-content-item-head" >
													<span>Product Families</span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</i>
												</div>
												<div class="comp-24-filters-body-mobile-content-item-list direct-list" >
													<div class="list-head" >
														<a href="javascript:;" class="back-btn">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
																	<path d="M7.55078 14L0.999172 7.55161L7.44756 1" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</i>
														</a>
														<div class="list-head-title" >
															<span>Product Families</span>
														</div>
														<div class="close-btn" >
															<a href="javascript:;">
																<i>
																	<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
																		<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</i>
															</a>
														</div>
													</div>
													<div class="list-content" >
																													<div class="list-content-item direct-terms" >
																<div class="list-content-item-sublist-body" >
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1279" id="term-mobile-1279" value="4u" data-taxonomy="product-family">
																				<label for="term-mobile-1279">
																					<span>4U (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-282" id="term-mobile-282" value="air" data-taxonomy="product-family">
																				<label for="term-mobile-282">
																					<span>Air (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-284" id="term-mobile-284" value="alava" data-taxonomy="product-family">
																				<label for="term-mobile-284">
																					<span>Alava (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-677" id="term-mobile-677" value="aqua" data-taxonomy="product-family">
																				<label for="term-mobile-677">
																					<span>Aqua (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-721" id="term-mobile-721" value="ashbury" data-taxonomy="product-family">
																				<label for="term-mobile-721">
																					<span>Ashbury (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-286" id="term-mobile-286" value="aura" data-taxonomy="product-family">
																				<label for="term-mobile-286">
																					<span>Aura (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-288" id="term-mobile-288" value="best-sellers" data-taxonomy="product-family">
																				<label for="term-mobile-288">
																					<span>Best Sellers (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-675" id="term-mobile-675" value="bunny" data-taxonomy="product-family">
																				<label for="term-mobile-675">
																					<span>Bunny (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-709" id="term-mobile-709" value="calma" data-taxonomy="product-family">
																				<label for="term-mobile-709">
																					<span>Calma (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-637" id="term-mobile-637" value="claire" data-taxonomy="product-family">
																				<label for="term-mobile-637">
																					<span>Claire (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-627" id="term-mobile-627" value="clopete" data-taxonomy="product-family">
																				<label for="term-mobile-627">
																					<span>Clopete (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-679" id="term-mobile-679" value="coral" data-taxonomy="product-family">
																				<label for="term-mobile-679">
																					<span>Coral (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-653" id="term-mobile-653" value="corvo" data-taxonomy="product-family">
																				<label for="term-mobile-653">
																					<span>Corvo (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-705" id="term-mobile-705" value="cube" data-taxonomy="product-family">
																				<label for="term-mobile-705">
																					<span>Cube (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-715" id="term-mobile-715" value="cube-box" data-taxonomy="product-family">
																				<label for="term-mobile-715">
																					<span>Cube Box (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-649" id="term-mobile-649" value="dora" data-taxonomy="product-family">
																				<label for="term-mobile-649">
																					<span>Dora (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-685" id="term-mobile-685" value="edgar" data-taxonomy="product-family">
																				<label for="term-mobile-685">
																					<span>Edgar (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-631" id="term-mobile-631" value="ela" data-taxonomy="product-family">
																				<label for="term-mobile-631">
																					<span>Ela (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-615" id="term-mobile-615" value="eon" data-taxonomy="product-family">
																				<label for="term-mobile-615">
																					<span>Eon (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-707" id="term-mobile-707" value="fe2" data-taxonomy="product-family">
																				<label for="term-mobile-707">
																					<span>Fe2 (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-613" id="term-mobile-613" value="featured-products" data-taxonomy="product-family">
																				<label for="term-mobile-613">
																					<span>Featured Products (5)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-629" id="term-mobile-629" value="fiona" data-taxonomy="product-family">
																				<label for="term-mobile-629">
																					<span>Fiona (11)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-290" id="term-mobile-290" value="flora" data-taxonomy="product-family">
																				<label for="term-mobile-290">
																					<span>Flora (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-645" id="term-mobile-645" value="fresco" data-taxonomy="product-family">
																				<label for="term-mobile-645">
																					<span>Fresco (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-723" id="term-mobile-723" value="gate" data-taxonomy="product-family">
																				<label for="term-mobile-723">
																					<span>Gate (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-617" id="term-mobile-617" value="gravity" data-taxonomy="product-family">
																				<label for="term-mobile-617">
																					<span>Gravity (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-661" id="term-mobile-661" value="greta" data-taxonomy="product-family">
																				<label for="term-mobile-661">
																					<span>Greta (9)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-725" id="term-mobile-725" value="i-x" data-taxonomy="product-family">
																				<label for="term-mobile-725">
																					<span>I/X (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-693" id="term-mobile-693" value="inno" data-taxonomy="product-family">
																				<label for="term-mobile-693">
																					<span>Inno (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-713" id="term-mobile-713" value="isola" data-taxonomy="product-family">
																				<label for="term-mobile-713">
																					<span>Isola (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1500" id="term-mobile-1500" value="leaves" data-taxonomy="product-family">
																				<label for="term-mobile-1500">
																					<span>Leaves (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-623" id="term-mobile-623" value="lips" data-taxonomy="product-family">
																				<label for="term-mobile-623">
																					<span>Lips (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-699" id="term-mobile-699" value="locker" data-taxonomy="product-family">
																				<label for="term-mobile-699">
																					<span>Locker (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-689" id="term-mobile-689" value="louis" data-taxonomy="product-family">
																				<label for="term-mobile-689">
																					<span>Louis (5)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-659" id="term-mobile-659" value="lucrezia" data-taxonomy="product-family">
																				<label for="term-mobile-659">
																					<span>Lucrezia (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-635" id="term-mobile-635" value="luna" data-taxonomy="product-family">
																				<label for="term-mobile-635">
																					<span>Luna (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-619" id="term-mobile-619" value="m-bee" data-taxonomy="product-family">
																				<label for="term-mobile-619">
																					<span>M Bee (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1439" id="term-mobile-1439" value="marla" data-taxonomy="product-family">
																				<label for="term-mobile-1439">
																					<span>Marla (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-643" id="term-mobile-643" value="matilda" data-taxonomy="product-family">
																				<label for="term-mobile-643">
																					<span>Matilda (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-292" id="term-mobile-292" value="me-too" data-taxonomy="product-family">
																				<label for="term-mobile-292">
																					<span>Me Too (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-294" id="term-mobile-294" value="metope" data-taxonomy="product-family">
																				<label for="term-mobile-294">
																					<span>Metope (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1549" id="term-mobile-1549" value="mini-do" data-taxonomy="product-family">
																				<label for="term-mobile-1549">
																					<span>Mini Do (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1547" id="term-mobile-1547" value="mini-go" data-taxonomy="product-family">
																				<label for="term-mobile-1547">
																					<span>Mini Go (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-697" id="term-mobile-697" value="mono" data-taxonomy="product-family">
																				<label for="term-mobile-697">
																					<span>Mono (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-296" id="term-mobile-296" value="mou" data-taxonomy="product-family">
																				<label for="term-mobile-296">
																					<span>Mou (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-703" id="term-mobile-703" value="nest" data-taxonomy="product-family">
																				<label for="term-mobile-703">
																					<span>Nest (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-695" id="term-mobile-695" value="next" data-taxonomy="product-family">
																				<label for="term-mobile-695">
																					<span>Next (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-719" id="term-mobile-719" value="olo" data-taxonomy="product-family">
																				<label for="term-mobile-719">
																					<span>Olo (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-625" id="term-mobile-625" value="patrick" data-taxonomy="product-family">
																				<label for="term-mobile-625">
																					<span>Patrick (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-669" id="term-mobile-669" value="pila" data-taxonomy="product-family">
																				<label for="term-mobile-669">
																					<span>Pila (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-671" id="term-mobile-671" value="pila-wood" data-taxonomy="product-family">
																				<label for="term-mobile-671">
																					<span>Pila Wood (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-621" id="term-mobile-621" value="r2" data-taxonomy="product-family">
																				<label for="term-mobile-621">
																					<span>R2 (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-641" id="term-mobile-641" value="redonda" data-taxonomy="product-family">
																				<label for="term-mobile-641">
																					<span>Redonda (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-691" id="term-mobile-691" value="renee" data-taxonomy="product-family">
																				<label for="term-mobile-691">
																					<span>Renée (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-298" id="term-mobile-298" value="ron" data-taxonomy="product-family">
																				<label for="term-mobile-298">
																					<span>Ron (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-655" id="term-mobile-655" value="s-chair" data-taxonomy="product-family">
																				<label for="term-mobile-655">
																					<span>S Chair (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-300" id="term-mobile-300" value="sacha" data-taxonomy="product-family">
																				<label for="term-mobile-300">
																					<span>Sacha (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-683" id="term-mobile-683" value="sema" data-taxonomy="product-family">
																				<label for="term-mobile-683">
																					<span>Sema (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-667" id="term-mobile-667" value="silva" data-taxonomy="product-family">
																				<label for="term-mobile-667">
																					<span>Silva (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-647" id="term-mobile-647" value="spring" data-taxonomy="product-family">
																				<label for="term-mobile-647">
																					<span>Spring (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-657" id="term-mobile-657" value="step" data-taxonomy="product-family">
																				<label for="term-mobile-657">
																					<span>Step (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-665" id="term-mobile-665" value="stone" data-taxonomy="product-family">
																				<label for="term-mobile-665">
																					<span>Stone (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-663" id="term-mobile-663" value="taklamakan" data-taxonomy="product-family">
																				<label for="term-mobile-663">
																					<span>Taklamakan (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-639" id="term-mobile-639" value="tan" data-taxonomy="product-family">
																				<label for="term-mobile-639">
																					<span>Tan (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-633" id="term-mobile-633" value="tara" data-taxonomy="product-family">
																				<label for="term-mobile-633">
																					<span>Tara (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-681" id="term-mobile-681" value="tau" data-taxonomy="product-family">
																				<label for="term-mobile-681">
																					<span>Tau (8)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-701" id="term-mobile-701" value="to" data-taxonomy="product-family">
																				<label for="term-mobile-701">
																					<span>To (9)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-717" id="term-mobile-717" value="tools" data-taxonomy="product-family">
																				<label for="term-mobile-717">
																					<span>Tools (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-302" id="term-mobile-302" value="toya" data-taxonomy="product-family">
																				<label for="term-mobile-302">
																					<span>Toya (9)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-304" id="term-mobile-304" value="trea" data-taxonomy="product-family">
																				<label for="term-mobile-304">
																					<span>Trea (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-306" id="term-mobile-306" value="tulya" data-taxonomy="product-family">
																				<label for="term-mobile-306">
																					<span>Tulya (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-687" id="term-mobile-687" value="u-do" data-taxonomy="product-family">
																				<label for="term-mobile-687">
																					<span>U Do (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-673" id="term-mobile-673" value="u-too" data-taxonomy="product-family">
																				<label for="term-mobile-673">
																					<span>U Too (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-308" id="term-mobile-308" value="uneo" data-taxonomy="product-family">
																				<label for="term-mobile-308">
																					<span>Uneo (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-651" id="term-mobile-651" value="vela" data-taxonomy="product-family">
																				<label for="term-mobile-651">
																					<span>Vela (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-711" id="term-mobile-711" value="video-wall" data-taxonomy="product-family">
																				<label for="term-mobile-711">
																					<span>Video Wall (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-310" id="term-mobile-310" value="waves" data-taxonomy="product-family">
																				<label for="term-mobile-310">
																					<span>Waves (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																	</div>
															</div>
																											</div>
												</div>
											</div>
																					<div class="comp-24-filters-body-mobile-content-item" >
												<div class="comp-24-filters-body-mobile-content-item-head" >
													<span>Features</span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</i>
												</div>
												<div class="comp-24-filters-body-mobile-content-item-list direct-list" >
													<div class="list-head" >
														<a href="javascript:;" class="back-btn">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
																	<path d="M7.55078 14L0.999172 7.55161L7.44756 1" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</i>
														</a>
														<div class="list-head-title" >
															<span>Features</span>
														</div>
														<div class="close-btn" >
															<a href="javascript:;">
																<i>
																	<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
																		<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</i>
															</a>
														</div>
													</div>
													<div class="list-content" >
																													<div class="list-content-item direct-terms" >
																<div class="list-content-item-sublist-body" >
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-945" id="term-mobile-945" value="2-leg-base" data-taxonomy="features">
																				<label for="term-mobile-945">
																					<span>2 Leg Base (18)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-947" id="term-mobile-947" value="3-leg-base" data-taxonomy="features">
																				<label for="term-mobile-947">
																					<span>3 Leg Base (20)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-136" id="term-mobile-136" value="4-leg-base" data-taxonomy="features">
																				<label for="term-mobile-136">
																					<span>4 Leg Base (47)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-138" id="term-mobile-138" value="4-star-base" data-taxonomy="features">
																				<label for="term-mobile-138">
																					<span>4 Star Base (11)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-140" id="term-mobile-140" value="5-star-base" data-taxonomy="features">
																				<label for="term-mobile-140">
																					<span>5 Star Base (24)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-148" id="term-mobile-148" value="adjustable-armrests" data-taxonomy="features">
																				<label for="term-mobile-148">
																					<span>Adjustable Armrests (9)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-132" id="term-mobile-132" value="adjustable-backrest-height" data-taxonomy="features">
																				<label for="term-mobile-132">
																					<span>Adjustable Backrest Height (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-154" id="term-mobile-154" value="adjustable-seat-depth" data-taxonomy="features">
																				<label for="term-mobile-154">
																					<span>Adjustable Seat Depth (9)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-156" id="term-mobile-156" value="adjustable-seat-height" data-taxonomy="features">
																				<label for="term-mobile-156">
																					<span>Adjustable Seat Height (31)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-152" id="term-mobile-152" value="automatic-weight-adjustment" data-taxonomy="features">
																				<label for="term-mobile-152">
																					<span>Automatic Weight Adjustment (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-168" id="term-mobile-168" value="back-tilt" data-taxonomy="features">
																				<label for="term-mobile-168">
																					<span>Back Tilt (21)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-166" id="term-mobile-166" value="back-tilt-lock" data-taxonomy="features">
																				<label for="term-mobile-166">
																					<span>Back Tilt Lock (13)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-748" id="term-mobile-748" value="castors" data-taxonomy="features">
																				<label for="term-mobile-748">
																					<span>Castors (28)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-744" id="term-mobile-744" value="depth-adjustable-table" data-taxonomy="features">
																				<label for="term-mobile-744">
																					<span>Depth Adjustable Table (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1289" id="term-mobile-1289" value="foldable-table" data-taxonomy="features">
																				<label for="term-mobile-1289">
																					<span>Foldable Table (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-146" id="term-mobile-146" value="footrest" data-taxonomy="features">
																				<label for="term-mobile-146">
																					<span>Footrest (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-738" id="term-mobile-738" value="height-adjustable-table" data-taxonomy="features">
																				<label for="term-mobile-738">
																					<span>Height Adjustable Table (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-158" id="term-mobile-158" value="high-back" data-taxonomy="features">
																				<label for="term-mobile-158">
																					<span>High Back (10)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-943" id="term-mobile-943" value="high-table" data-taxonomy="features">
																				<label for="term-mobile-943">
																					<span>High Table (6)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-144" id="term-mobile-144" value="low-back" data-taxonomy="features">
																				<label for="term-mobile-144">
																					<span>Low Back (11)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-150" id="term-mobile-150" value="lumbar-support" data-taxonomy="features">
																				<label for="term-mobile-150">
																					<span>Lumbar Support (10)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-746" id="term-mobile-746" value="media-wall" data-taxonomy="features">
																				<label for="term-mobile-746">
																					<span>Media Wall (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-742" id="term-mobile-742" value="meeting-table" data-taxonomy="features">
																				<label for="term-mobile-742">
																					<span>Meeting Table (13)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-752" id="term-mobile-752" value="modular-seating" data-taxonomy="features">
																				<label for="term-mobile-752">
																					<span>Modular Seating (33)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-949" id="term-mobile-949" value="optional-soft-seating" data-taxonomy="features">
																				<label for="term-mobile-949">
																					<span>Optional Soft Seating (8)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-740" id="term-mobile-740" value="semi-executive" data-taxonomy="features">
																				<label for="term-mobile-740">
																					<span>Semi Executive (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1526" id="term-mobile-1526" value="sledge-base" data-taxonomy="features">
																				<label for="term-mobile-1526">
																					<span>Sledge Base (4)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-750" id="term-mobile-750" value="stackable" data-taxonomy="features">
																				<label for="term-mobile-750">
																					<span>Stackable (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-162" id="term-mobile-162" value="u-leg-base" data-taxonomy="features">
																				<label for="term-mobile-162">
																					<span>U Leg Base (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-142" id="term-mobile-142" value="wooden-base" data-taxonomy="features">
																				<label for="term-mobile-142">
																					<span>Wooden Base (25)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-160" id="term-mobile-160" value="writing-pad" data-taxonomy="features">
																				<label for="term-mobile-160">
																					<span>Writing Pad (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																	</div>
															</div>
																											</div>
												</div>
											</div>
																					<div class="comp-24-filters-body-mobile-content-item" >
												<div class="comp-24-filters-body-mobile-content-item-head" >
													<span>Certifications</span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</i>
												</div>
												<div class="comp-24-filters-body-mobile-content-item-list direct-list" >
													<div class="list-head" >
														<a href="javascript:;" class="back-btn">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
																	<path d="M7.55078 14L0.999172 7.55161L7.44756 1" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</i>
														</a>
														<div class="list-head-title" >
															<span>Certifications</span>
														</div>
														<div class="close-btn" >
															<a href="javascript:;">
																<i>
																	<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
																		<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</i>
															</a>
														</div>
													</div>
													<div class="list-content" >
																													<div class="list-content-item direct-terms" >
																<div class="list-content-item-sublist-body" >
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-863" id="term-mobile-863" value="ce-certified" data-taxonomy="certification">
																				<label for="term-mobile-863">
																					<span>CE Certified (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1295" id="term-mobile-1295" value="environmental-product-declaration-en" data-taxonomy="certification">
																				<label for="term-mobile-1295">
																					<span>Environmental Product Declaration (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-817" id="term-mobile-817" value="gs-mark" data-taxonomy="certification">
																				<label for="term-mobile-817">
																					<span>GS Mark (Geprüfte Sicherheit) (6)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-807" id="term-mobile-807" value="greenguard" data-taxonomy="certification">
																				<label for="term-mobile-807">
																					<span>Greenguard (28)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-809" id="term-mobile-809" value="greenguard-gold" data-taxonomy="certification">
																				<label for="term-mobile-809">
																					<span>Greenguard Gold (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-821" id="term-mobile-821" value="iso-23351-1" data-taxonomy="certification">
																				<label for="term-mobile-821">
																					<span>ISO 23351-1 (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-861" id="term-mobile-861" value="scs-indoor-air-quality" data-taxonomy="certification">
																				<label for="term-mobile-861">
																					<span>SCS Indoor Air Quality (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-819" id="term-mobile-819" value="tse-9241-5-ergonomy" data-taxonomy="certification">
																				<label for="term-mobile-819">
																					<span>TSE 9241-5 Ergonomy (6)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-811" id="term-mobile-811" value="ul-solutions" data-taxonomy="certification">
																				<label for="term-mobile-811">
																					<span>UL Solutions (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																	</div>
															</div>
																											</div>
												</div>
											</div>
																					<div class="comp-24-filters-body-mobile-content-item" >
												<div class="comp-24-filters-body-mobile-content-item-head" >
													<span>Awards</span>
													<i>
														<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
															<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
														</svg>
													</i>
												</div>
												<div class="comp-24-filters-body-mobile-content-item-list direct-list" >
													<div class="list-head" >
														<a href="javascript:;" class="back-btn">
															<i>
																<svg xmlns="http://www.w3.org/2000/svg" width="9" height="15" viewBox="0 0 9 15" fill="none">
																	<path d="M7.55078 14L0.999172 7.55161L7.44756 1" stroke="#25282A" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
																</svg>
															</i>
														</a>
														<div class="list-head-title" >
															<span>Awards</span>
														</div>
														<div class="close-btn" >
															<a href="javascript:;">
																<i>
																	<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
																		<path d="M13 12.5516L1.08878 0.640413" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																		<path d="M1.08878 12.5516L13 0.640414" stroke="#25282A" stroke-width="1.08878" stroke-linecap="round" stroke-linejoin="round"></path>
																	</svg>
																</i>
															</a>
														</div>
													</div>
													<div class="list-content" >
																													<div class="list-content-item direct-terms" >
																<div class="list-content-item-sublist-body" >
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1215" id="term-mobile-1215" value="big-see-design-award" data-taxonomy="award">
																				<label for="term-mobile-1215">
																					<span>Big See Design Award (5)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1217" id="term-mobile-1217" value="big-see-wood-design-award" data-taxonomy="award">
																				<label for="term-mobile-1217">
																					<span>Big See Wood Design Award (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1229" id="term-mobile-1229" value="design-preis" data-taxonomy="award">
																				<label for="term-mobile-1229">
																					<span>Design Preis (6)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1211" id="term-mobile-1211" value="design-turkey" data-taxonomy="award">
																				<label for="term-mobile-1211">
																					<span>Design Turkey (5)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1225" id="term-mobile-1225" value="dutch-good-industrial-design-award" data-taxonomy="award">
																				<label for="term-mobile-1225">
																					<span>Dutch Good Industrial Design Award (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1227" id="term-mobile-1227" value="elle-design-award" data-taxonomy="award">
																				<label for="term-mobile-1227">
																					<span>Elle Design Award (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1237" id="term-mobile-1237" value="german-design-award" data-taxonomy="award">
																				<label for="term-mobile-1237">
																					<span>German Design Award (40)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1221" id="term-mobile-1221" value="good-design-award" data-taxonomy="award">
																				<label for="term-mobile-1221">
																					<span>Good Design Award (20)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1219" id="term-mobile-1219" value="green-good-design-award" data-taxonomy="award">
																				<label for="term-mobile-1219">
																					<span>Green Good Design Award (3)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1235" id="term-mobile-1235" value="guildmark-design-award" data-taxonomy="award">
																				<label for="term-mobile-1235">
																					<span>Guildmark Design Award (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1209" id="term-mobile-1209" value="if-design-award" data-taxonomy="award">
																				<label for="term-mobile-1209">
																					<span>IF Design Award (12)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1223" id="term-mobile-1223" value="ifda-award" data-taxonomy="award">
																				<label for="term-mobile-1223">
																					<span>IFDA Award (1)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1231" id="term-mobile-1231" value="plus-x-award" data-taxonomy="award">
																				<label for="term-mobile-1231">
																					<span>Plus X Award (0)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1213" id="term-mobile-1213" value="red-dot-design-award" data-taxonomy="award">
																				<label for="term-mobile-1213">
																					<span>Red Dot Design Award (11)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																			<div class="list-content-item-sublist-body-item" >
																			<form action="/en/acessories-en/">
																				<input type="checkbox" name="term-mobile-1233" id="term-mobile-1233" value="universal-design-consumer-award" data-taxonomy="award">
																				<label for="term-mobile-1233">
																					<span>Universal Design Consumer Award (2)</span>
																					<div class="bars" >
																						<span class="bar"></span>
																						<span class="bar"></span>
																					</div>
																				</label>
																			</form>
																		</div>
																																	</div>
															</div>
																											</div>
												</div>
											</div>
																			</div>
									<div class="comp-24-filters-body-mobile-footer" >
										<div class="apply-btn" >
											<a href="javascript:;">Apply</a>
										</div>
									</div>
								</div>

								<div class="comp-24-filters-body-mobile-applied-fixed show" >
									<div class="apply-btn" >
										<a href="javascript:;">Applied Filters <span>1</span></a>
									</div>
									<div class="clear-btn" >
										<a href="javascript:;">Clear</a>
									</div>
								</div>

							</div>
						</div>
												<div class="col-lg-3 col-xl-2 d-lg-block d-none ms-lg-auto" >
							<div class="comp-24-filters-search" >
								<form action="/en/acessories-en/">
									<input type="text" placeholder="Search">
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
									<span>Sort by:</span>
								</div>
								<div class="active-sort" >
									<a href="javascript:;">Featured Products</a>
									<div class="icon" >
										<i>
											<svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
												<path d="M14 1L7.55161 7.55161L1 1.10322" stroke="#373F43" stroke-width="1.0865" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</i>
									</div>
								</div>
								<div class="comp-24-filters-sort-options" >
									<a href="javascript:;" id="sort-option_1">Newest</a>
									<a href="javascript:;" id="sort-option_2">A-Z</a>
									<a href="javascript:;" id="sort-option_3">Z-A</a>
									<a href="javascript:;" id="sort-option_3">Best Sellers</a>
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
							<div class="comp-24-body-selected-filters show" >
								<div class="clear-btn" >
									<a href="javascript:;">
										<span>Clear All Filters</span>
										<i>
											<svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none">
												<path d="M11.6834 2.8695L9.67052 2.48413L9.28516 4.49294" stroke="white" stroke-width="0.819924" stroke-linecap="round" stroke-linejoin="round"></path>
												<path d="M9.67069 2.48406C10.5931 3.40648 11.1671 4.67736 11.1671 6.08353C11.1671 8.89177 8.89177 11.1671 6.08353 11.1671C3.27529 11.1671 1 8.89177 1 6.08353C1 3.27529 3.27529 1 6.08353 1C6.4238 1 6.75587 1.0328 7.07564 1.09839" stroke="white" stroke-width="0.819924" stroke-linecap="round" stroke-linejoin="round"></path>
											</svg>
										</i>
									</a>
								</div>
								<div class="selected-filters" >
          <div class="selected-filters-item" >
            <span>Acessories</span>
            <a href="javascript:;" data-id="acessories-en" data-type="taxonomy" data-taxonomy="product_category">
              <i>
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">
                  <path d="M1 1L7 7" stroke="#25282A" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
                  <path d="M7 1L1 7" stroke="#25282A" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
              </i>
            </a>
          </div>
        </div>
							</div>

							<div class="comp-24-body-cards odd-view grid-view" >
<div class="comp-24-card shop-product " data-delay="100" >
  <div class="comp-24-card-media" >
    <a href="/en/product/leaves-family/leaves-double/" class="comp-24-card-media-link">
      <img src="./Acessories Archives _ Nurus_files/Accessories_Leaves-Double.jpg" alt="Leaves Double">
    </a>
      </div>
  <div class="comp-24-card-title" >
    <h5>Leaves Double</h5>
  </div>
</div>
<div class="comp-24-card shop-product " data-delay="100" >
  <div class="comp-24-card-media" >
    <a href="/en/product/leaves-family/leaves-single/" class="comp-24-card-media-link">
      <img src="./Acessories Archives _ Nurus_files/Accessories_Leaves-Single.jpg" alt="Leaves Single">
    </a>
      </div>
  <div class="comp-24-card-title" >
    <h5>Leaves Single</h5>
  </div>
</div>
<div class="comp-24-card shop-product " data-delay="100" >
  <div class="comp-24-card-media" >
    <a href="/en/product/marla-family/marla-single/" class="comp-24-card-media-link">
      <img src="./Acessories Archives _ Nurus_files/Accessories_Marla-1.jpg" alt="Marla">
    </a>
      </div>
  <div class="comp-24-card-title" >
    <h5>Marla</h5>
  </div>
</div>
<div class="comp-24-card shop-product " data-delay="100" >
  <div class="comp-24-card-media" >
    <a href="/en/product/marla-family/marla-maxi/" class="comp-24-card-media-link">
      <img src="./Acessories Archives _ Nurus_files/Accessories_Marla-Maxi.jpg" alt="Marla Maxi">
    </a>
      </div>
  <div class="comp-24-card-title" >
    <h5>Marla Maxi</h5>
  </div>
</div></div>


						</div>
					</div>
				</div>

									<div class="comp-24-pagination"  style="display: none;">
						<a href="javascript:;" class="pagination-btn prev-btn disabled">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
									<path d="M0.190707 5.52842L5.38141 0.198085C5.50417 0.0720302 5.67076 -8.15588e-07 5.83735 -8.01024e-07C6.00395 -7.8646e-07 6.17054 0.0630266 6.29329 0.198085C6.54757 0.459199 6.54757 0.882385 6.29329 1.1435L2.20737 5.33933L15 5.33934L15 6.67192L2.21613 6.67192L6.30206 10.8587C6.55634 11.1199 6.55634 11.543 6.30206 11.8042C6.04779 12.0653 5.63569 12.0653 5.38141 11.8042L0.190707 6.47383C-0.0635676 6.21272 -0.0635676 5.78953 0.190707 5.52842Z" fill="#25282A"></path>
								</svg>
							</i>
						</a>
						<div class="pagination-numbers" >
							<div class="current-page" >
								<span>1</span>
							</div>
							<span class="divider">/</span>
							<div class="total-page" >
								<span>9</span>
							</div>
						</div>
						<a href="javascript:;" class="pagination-btn next-btn">
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
									<path d="M14.8093 6.47158L9.61859 11.8019C9.49584 11.928 9.32924 12 9.16265 12C8.99605 12 8.82946 11.937 8.70671 11.8019C8.45243 11.5408 8.45243 11.1176 8.70671 10.8565L12.7926 6.66066H0V5.32808H12.7839L8.69794 1.14125C8.44366 0.880135 8.44366 0.45695 8.69794 0.195836C8.95221 -0.0652786 9.36431 -0.0652786 9.61859 0.195836L14.8093 5.52617C15.0636 5.78728 15.0636 6.21047 14.8093 6.47158Z" fill="#25282A"></path>
								</svg>
							</i>
						</a>
					</div>
							</div>
		</div>
	</div>
</section><section class="comp-17">
	<div class="comp-17-wrapper" >
		<div class="comp-17-main" >
			<div class="comp-17-content" >
				<div class="media scale-scroll visible" data-delay="200" >
					<picture><source media="(min-width: 768px)" srcset="/wp-content/uploads/2025/05/Comp-17-Image-2878x1588-1-scaled.webp 1x"><img class="sp-no-webp" src="./Acessories Archives _ Nurus_files/Comp-17-Image-2878x1588-1-scaled.webp" alt=""></picture>				</div>
				<div class="content" >
					<div class="text fadeInUp-scroll visible" data-delay="250" >
						<p>See <span>Nurus Products</span> in action. Visit our gallery.</p>
					</div>
					<div class="action fadeInUp-scroll visible" data-delay="300" >
						<a href="/case-studies/" target="" class="btn btn-white btn-semibold btn-rnd-full"><span>Case Studies</span> <i>
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none">
									<path d="M14.5888 5.7608L9.4754 10.5057C9.35447 10.6179 9.19036 10.682 9.02625 10.682C8.86213 10.682 8.69802 10.6259 8.57709 10.5057C8.3266 10.2733 8.3266 9.89656 8.57709 9.66412L12.6022 5.92912H0V4.74289H12.5936L8.56846 1.01591C8.31797 0.783469 8.31797 0.406763 8.56846 0.174327C8.81894 -0.058109 9.22491 -0.058109 9.4754 0.174327L14.5888 4.91922C14.8393 5.15166 14.8393 5.52837 14.5888 5.7608Z" fill="#373F43"></path>
								</svg>
							</i></a>					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="comp-93 style-1">
  <div class="comp-93-wrapper" >
    <div class="container" >
      <div class="comp-93-main" >
        <div class="comp-93-head" >
                      <div class="subtitle fadeInUp-scroll visible" data-delay="200" >
              <h4>CONTACT US</h4>
            </div>
                                <div class="title fadeInUp-scroll visible" data-delay="250" >
              <h2>By Your Side, Every Step of The Way</h2>
            </div>
                  </div>
        <div class="comp-93-content fadeInUp-scroll visible" data-delay="400" >
          <div class="row" >
                          <div class="col-lg-4" >
                <div class="card" >
                  <div class="card-media" >
                    <picture>
                      <source media="(max-width: 991px)" srcset="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2025/08/26104717/comp-93-gorsel-wp.jpg">
                      <source media="(min-width: 992px)" srcset="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2025/08/26104717/comp-93-gorsel-wp.jpg">
                      <img class="sp-no-webp" src="./Acessories Archives _ Nurus_files/comp-93-gorsel-wp.jpg" alt="">                    </picture>
                  </div>
                  <div class="card-content" >
                    <div class="text" >
                      <p>Let’s Plan Your Workspace Together</p>
                    </div>
                                          <div class="action" >
                        <a href="/contact/" class="btn btn-white btn-rnd-full btn-medium btn-gradient" target="">
                                                    <span>Contact Us</span>
                          <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                              <path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="#25282A"></path>
                            </svg>
                          </i>
                        </a>
                      </div>
                                      </div>
                </div>
              </div>
                          <div class="col-lg-4" >
                <div class="card" >
                  <div class="card-media" >
                    <picture>
                      <source media="(max-width: 991px)" srcset="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2025/08/26104408/comp-93-proje.jpg">
                      <source media="(min-width: 992px)" srcset="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2025/08/26104408/comp-93-proje.jpg">
                      <img class="sp-no-webp" src="./Acessories Archives _ Nurus_files/comp-93-proje.jpg" alt="">                    </picture>
                  </div>
                  <div class="card-content" >
                    <div class="text" >
                      <p>Interested in Becoming a Dealer?</p>
                    </div>
                                          <div class="action" >
                        <a href="/contact/" class="btn btn-white btn-rnd-full btn-medium btn-gradient" target="">
                                                    <span>Contact Us</span>
                          <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                              <path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="#25282A"></path>
                            </svg>
                          </i>
                        </a>
                      </div>
                                      </div>
                </div>
              </div>
                          <div class="col-lg-4" >
                <div class="card" >
                  <div class="card-media" >
                    <picture>
                      <source media="(max-width: 991px)" srcset="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2025/08/26105104/comp-93-calma.jpg">
                      <source media="(min-width: 992px)" srcset="https://nurus-storage.s3.amazonaws.com/wp-content/uploads/2025/08/26105104/comp-93-calma.jpg">
                      <img class="sp-no-webp" src="./Acessories Archives _ Nurus_files/comp-93-calma.jpg" alt="">                    </picture>
                  </div>
                  <div class="card-content" >
                    <div class="text" >
                      <p>Engineered for a Better Work Experience</p>
                    </div>
                                          <div class="action" >
                        <a href="https://calma.nurus.com/" class="btn btn-blue btn-regular btn-rnd-full btn-blue" target="">
                                                    <span>Calma</span>
                          <i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
                              <path d="M15.2077 6.47158L9.87732 11.8019C9.75127 11.928 9.58019 12 9.40912 12C9.23804 12 9.06697 11.937 8.94091 11.8019C8.6798 11.5408 8.6798 11.1176 8.94091 10.8565L13.1367 6.66066H0V5.32808H13.1277L8.93191 1.14125C8.67079 0.880135 8.67079 0.45695 8.93191 0.195836C9.19302 -0.0652786 9.61621 -0.0652786 9.87732 0.195836L15.2077 5.52617C15.4688 5.78728 15.4688 6.21047 15.2077 6.47158Z" fill="white"></path>
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
    </div>
  </div>
</section><section class="comp-20">
	<div class="comp-20-wrapper" >
		<div class="container" >
			<form action="/en/acessories-en/" method="">
				<div class="comp-20-main" >
					<div class="comp-20-head" >
						<div class="row" >
							<div class="col-xl-8 offset-xl-2" >
								<div class="comp-20-head-main" >
									<div class="comp-20-head-subtitle fadeInUp-scroll" data-delay="100" >
										<h4>NURUS SALES POINTS</h4>
									</div>
									<div class="comp-20-head-title fadeInUp-scroll" data-delay="150" >
										<h3>Find The Nearest Experience Hub</h3>
									</div>
									<div class="comp-20-head-select-container fadeInUp-scroll" data-delay="200" >
										<div class="select-wrapper" >
											<select name="country" id="country" class="custom-select2 select2-hidden-accessible" data-select2-id="select2-data-country" tabindex="-1" aria-hidden="true">
												<option data-select2-id="select2-data-2-mn3z">Country</option>
																									<option value="Turkey" data-country="Turkey">Turkey</option>
																									<option value="Germany" data-country="Germany">Germany</option>
																									<option value="United States" data-country="United States">United States</option>
																							</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-zotk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container" aria-controls="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true" title="Country">Country</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<div class="select-wrapper" >
											<select name="city" id="city" class="custom-select2 select2-hidden-accessible" data-select2-id="select2-data-city" tabindex="-1" aria-hidden="true">
												<option data-select2-id="select2-data-4-t5fm">City</option>
																																							<option value="Nurus Ankara HQ" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.163825555145!2d32.537433412396304!3d39.96008978318553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d33acca23d4d85%3A0x481326dafcd0d246!2sNurus%20Fabrika!5e0!3m2!1str!2str!4v1724847051664!5m2!1str!2str">Nurus Ankara HQ</option>
                                <option value="Nurus Istanbul Experience Hub" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12030.911227345512!2d29.0155148!3d41.0749421!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab678d7800e09%3A0xafd714d5278e02c8!2sNurus%20Experience%20Hub!5e0!3m2!1str!2str!4v1724655699798!5m2!1str!2str">Nurus Istanbul Experience Hub</option>
                                <option value="Nurus Ankara Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6120.623869647582!2d32.804461!3d39.912035!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d348b2497b106d%3A0x47ca7c570966071b!2zTnVydXMgS2_DpyBLdWxlL1PDtsSfw7x0w7Z6w7w!5e0!3m2!1str!2str!4v1750066507548!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Ankara Store</option>
                                <option value="Nurus Izmir Showroom" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3125.352474451588!2d27.161369099999998!3d38.433326699999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd86e56948711%3A0x76cf8576ff2b04c0!2zTnVydXMgxLB6bWlyIE1hxJ9hemE!5e0!3m2!1str!2str!4v1755865626328!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Izmir Showroom</option>
                                <option value="Nurus Bursa Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6093.571461458493!2d28.960224!3d40.213829!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14ca115dd8813833%3A0x654d0e5b8fd8ba29!2sNurus%20Bursa!5e0!3m2!1str!2str!4v1750066589804!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Bursa Store</option>
                                <option value="Nurus Antalya Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12762.360582861946!2d30.735806000000004!3d36.900152!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3853f9ae0050f%3A0xe965a60461fa0271!2sNurus%20Antalya!5e0!3m2!1str!2str!4v1750066634213!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Antalya Store</option>
                                <option value="Nurus Adana Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1593.2706263296081!2d35.328167!3d36.996882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15288f6bc8334665%3A0xf7f1822cd3eff916!2sNurus%20Adana!5e0!3m2!1str!2str!4v1750066664652!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Adana Store</option>
                                <option value="Nurus Gaziantep Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3183.5532096719126!2d37.360952!3d37.068129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1531e482251bf27b%3A0xb6756cfe956b86ca!2sNurus!5e0!3m2!1str!2str!4v1750066692589!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Gaziantep Store</option>
                                <option value="Nurus Kayseri Store" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6227.702499898449!2d35.6167!3d38.698261!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b6db9f1c2467d%3A0x6440d4afeafe2065!2sNurus%20kayseri!5e0!3m2!1str!2str!4v1750066729992!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus Kayseri Store</option>
                                <option value="Sempre Office Furniture Masko" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.0787576528437!2d28.793653775861554!3d41.06727107134231!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa4c5c49eb13d%3A0xd95f6b246e620470!2sSempre%20Ofis%20Mobilyalar%C4%B1%20Masko%20(Sempre%20Office%20Furniture)!5e0!3m2!1str!2str!4v1758281386207!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Sempre Office Furniture Masko</option>
                                <option value="Sempre Office Furniture Çağlayan" data-country="Turkey" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3007.7960761904706!2d28.974361075862003!3d41.07344997134149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab6e0b297cc9f%3A0xec4b09e1c7e4b8d8!2sSempre%20Ofis%20Mobilyalar%C4%B1%20%C3%87a%C4%9Flayan!5e0!3m2!1str!2str!4v1758282833527!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Sempre Office Furniture Çağlayan</option>
                                                                                                                                    <option value="Nurus GmbH, Stuttgart, Germany" data-country="Germany" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.408043182033!2d9.18491377630056!3d48.774099771320806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4799c4b5da7ff449%3A0x293467d46886ae96!2sBlumenstra%C3%9Fe%2036%2C%2070182%20Stuttgart%2C%20Almanya!5e0!3m2!1str!2str!4v1750066455555!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">Nurus GmbH, Stuttgart, Germany</option>
                                                                                                                                    <option value="Nurus North America, Chicago, North America" data-country="United States" data-iframe="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.2067920282484!2d-87.6354498!3d41.888409599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cb6e328686d%3A0x43f86a8214e286bb!2sTHE%20MART!5e0!3m2!1str!2str!4v1752667242687!5m2!1str!2str">Nurus North America, Chicago, North America</option>
                                                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-3-cqgc" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-city-container" aria-controls="select2-city-container"><span class="select2-selection__rendered" id="select2-city-container" role="textbox" aria-readonly="true" title="City">City</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
									</div>
									<div class="comp-20-head-article fadeInUp-scroll" data-delay="250" >
										<p>Feel the difference. Visit our showrooms or stores to get exclusive offers, try any Nurus product and find your perfect fit.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="comp-20-map image-animation" data-delay="300" >
						<iframe src="./Acessories Archives _ Nurus_files/embed.html" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>