<footer class="footer footer-home">
	<div class="footer-wrapper" >
		<div class="container" >
			<div class="footer-main" >
				<div class="row" >
					<div class="col-xl-10 offset-xl-1" >
						<div class="footer-top" >
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
								"COMPONENT_TEMPLATE" => ".default",
								"PATH" => SITE_DIR."include/footer_logo.php",
								"AREA_FILE_SHOW" => "file",
								"AREA_FILE_SUFFIX" => "",
								"AREA_FILE_RECURSIVE" => "Y",
								"EDIT_TEMPLATE" => "include_area.php"
										),
										false,
										array(
										"ACTIVE_COMPONENT" => "Y"
										)
									);?>
							<div class="footer-links-wrapper" >
									<div class="footer-links" >
										<div class="links-block" >
											<div class="title" >
												<span><?=GetMessage("FOOTER_PRODUCTS")?></span>
											</div>
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom_product",
													"MAX_LEVEL" => "1",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "36000000",
													"MENU_CACHE_USE_GROUPS" => "Y",
													"MENU_CACHE_GET_VARS" => array(
													),
													"COMPONENT_TEMPLATE" => "bottom",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N",
													"MENU_THEME" => "site"
												),
												false,
												array(
													"ACTIVE_COMPONENT" => "Y"
												)
											);?>
										</div>
										<div class="links-block" >
											<div class="title" >
												<span><?=GetMessage("FOOTER_ABOUT")?></span>
											</div>
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom_about",
													"MAX_LEVEL" => "1",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "36000000",
													"MENU_CACHE_USE_GROUPS" => "Y",
													"MENU_CACHE_GET_VARS" => array(
													),
													"COMPONENT_TEMPLATE" => "bottom",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N",
													"MENU_THEME" => "site"
												),
												false,
												array(
													"ACTIVE_COMPONENT" => "Y"
												)
											);?>
										</div>
										<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
										"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/footer_direct_link.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "include_area.php"
										),
										false,
										array(
										"ACTIVE_COMPONENT" => "Y"
										)
									);?>
									</div>
									<div class="footer-links" >
										<div class="links-block" >
											<div class="title" >
												<span><?=GetMessage("FOOTER_RESOURCES")?></span>
											</div>
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom_resources",
													"MAX_LEVEL" => "1",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "36000000",
													"MENU_CACHE_USE_GROUPS" => "Y",
													"MENU_CACHE_GET_VARS" => array(
													),
													"COMPONENT_TEMPLATE" => "bottom",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N",
													"MENU_THEME" => "site"
												),
												false,
												array(
													"ACTIVE_COMPONENT" => "Y"
												)
											);?>
											
										</div>
										<div class="direct-links" >
											<a href="https://login.pcon-solutions.com/catalog/NURD12"><?=GetMessage("FOOTER_PCON")?></a>
										</div>
									</div>
									<div class="footer-links" >
										<div class="links-block" >
											<div class="title" >
												<span><?=GetMessage("FOOTER_CONTACT")?></span>
											</div>
											<?$APPLICATION->IncludeComponent(
												"bitrix:menu", 
												"bottom", 
												array(
													"ROOT_MENU_TYPE" => "bottom_contact",
													"MAX_LEVEL" => "1",
													"CHILD_MENU_TYPE" => "left",
													"USE_EXT" => "Y",
													"MENU_CACHE_TYPE" => "A",
													"MENU_CACHE_TIME" => "36000000",
													"MENU_CACHE_USE_GROUPS" => "Y",
													"MENU_CACHE_GET_VARS" => array(
													),
													"COMPONENT_TEMPLATE" => "bottom",
													"DELAY" => "N",
													"ALLOW_MULTI_SELECT" => "N",
													"MENU_THEME" => "site"
												),
												false,
												array(
													"ACTIVE_COMPONENT" => "Y"
												)
											);?>
										</div>
										<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
										"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/footer_shedule.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "include_area.php"
										),
										false,
										array(
										"ACTIVE_COMPONENT" => "Y"
										)
									);?>
									</div>
								</div>
								<div class="footer-newsletter" >
									<?$APPLICATION->IncludeComponent(
										"bitrix:subscribe.form", 
										"footer", 
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
						<div class="footer-center" >
							<div class="etbis-logo" >

							</div>
								<div class="social-links" >
									<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
										"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/social_links.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "include_area.php"
										),
										false,
										array(
										"ACTIVE_COMPONENT" => "Y"
										)
									);?>
									
								</div>
							</div>
					</div>
				</div>
				<div class="footer-bottom" >
					<div class="row" >
						<div class="col-xl-10 offset-xl-1" >
							<div class="footer-bottom-wrapper" >
								<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
										"COMPONENT_TEMPLATE" => ".default",
											"PATH" => SITE_DIR."include/footer_copyright.php",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "",
											"AREA_FILE_RECURSIVE" => "Y",
											"EDIT_TEMPLATE" => "include_area.php"
										),
										false,
										array(
										"ACTIVE_COMPONENT" => "Y"
										)
									);?>
								<?$APPLICATION->IncludeComponent(
									"bitrix:menu", 
									"bottom_bottom", 
									array(
										"ROOT_MENU_TYPE" => "bottom_bottom",
										"MAX_LEVEL" => "1",
										"CHILD_MENU_TYPE" => "left",
										"USE_EXT" => "Y",
										"MENU_CACHE_TYPE" => "A",
										"MENU_CACHE_TIME" => "36000000",
										"MENU_CACHE_USE_GROUPS" => "Y",
										"MENU_CACHE_GET_VARS" => array(
										),
										"COMPONENT_TEMPLATE" => "bottom",
										"DELAY" => "N",
										"ALLOW_MULTI_SELECT" => "N",
										"MENU_THEME" => "site"
										),
										false,
										array(
											"ACTIVE_COMPONENT" => "Y"
										)
									);?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fixedHeader = document.getElementById("headerfixed");
    if (!fixedHeader) {
        return;
    }

	window.addEventListener("scroll", function() {
        const currentScroll = window.pageYOffset || document.documentElement.scrollTop || 0;

        if (currentScroll > 100) {
            fixedHeader.classList.add("fixed");
        } else {
            fixedHeader.classList.remove("fixed");
        }
    });
});
</script>


<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/lib.min.js" id="nurus-lib-js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/core.min.js" id="nurus-core-js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/header-menu-fix.js"></script>

<!--<script data-minify="1" type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/core.js" id="nurus-ajax-js"></script>-->
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/dom-ready.min.js" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/hooks.min.js" id="wp-hooks-js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/i18n.min.js" id="wp-i18n-js"></script>

<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/a11y.min.js" id="wp-a11y-js"></script>
<script type="text/javascript" defer="defer" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/jquery.json.min.js" id="gform_json-js"></script>

                        					
<script type="text/javascript" defer="defer" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/placeholders.jquery.min.js" id="gform_placeholder-js"></script>
<script type="text/javascript" defer="defer" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/utils.min.js" id="gform_gravityforms_utils-js"></script>
<script type="text/javascript" defer="defer" src="<?=SITE_TEMPLATE_PATH."/src/js"?>/vendor-theme.min.js" id="gform_gravityforms_theme_vendors-js"></script>


					
