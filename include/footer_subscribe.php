<section class="comp-11">
	<div class="comp-11-wrapper" >
		<div class="container" >
			<div class="comp-11-main" >
				<div class="row" >
					<?$APPLICATION->IncludeComponent(
						"bitrix:subscribe.form", 
						"main", 
						array(
							"USE_PERSONALIZATION" => "Y", 
							"PAGE" => "", 
							"SHOW_HIDDEN" => "Y", 
							"CACHE_TYPE" => "A", 
							"CACHE_TIME" => "3600" 
						),
						false
					);?>

				</div>
			</div>
		</div>
	</div>
</section>