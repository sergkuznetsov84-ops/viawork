<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
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
$this->setFrameMode(true);?>
<?php
$INPUT_ID = trim($arParams['~INPUT_ID']);
if ($INPUT_ID == '')
{
	$INPUT_ID = 'title-search-input';
}
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams['~CONTAINER_ID']);
if ($CONTAINER_ID == '')
{
	$CONTAINER_ID = 'title-search';
}
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);
$isRussian = defined('LANGUAGE_ID') && LANGUAGE_ID === 'ru';
$searchLabel = $isRussian ? 'Поиск' : 'Search';
$searchPlaceholder = $isRussian ? 'Поиск...' : 'Search ...';

if ($arParams['SHOW_INPUT'] !== 'N'):?>
	<div class="search" ><!---->
				<a href="javascript:;" class="search-btn">
					<i>
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
						<g clip-path="url(#clip0_23_147)">
							<path d="M18.9613 9.91969C18.9613 14.9146 14.9145 18.9614 9.92841 18.9614C4.94231 18.9614 0.87793 14.9146 0.87793 9.91969C0.87793 4.92481 4.92475 0.877991 9.91963 0.877991C14.9145 0.877991 18.9525 4.92481 18.9525 9.91969H18.9613Z" stroke="#25282A" stroke-width="1.75567" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M16.3105 16.3104L23.1225 23.1224" stroke="#25282A" stroke-width="1.75567" stroke-linecap="round" stroke-linejoin="round"></path>
						</g>
						<defs>
							<clippath id="clip0_23_147">
							<rect width="24" height="24" fill="white"></rect>
							</clippath>
						</defs>
						</svg>
					</i>
				</a>
			<div class="search-dropdown" >
				<div class="header-bars-right" >
					<span></span>
					<span></span>
				</div>
				<div class="back-btn" >
					<a href="javascript:;">
						<i>
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="18" viewBox="0 0 21 18" fill="none">
							<path d="M0.26699 8.28649L7.53398 1.0195C7.70583 0.847646 7.93906 0.749444 8.17229 0.749444C8.40553 0.749444 8.63876 0.83537 8.81061 1.0195C9.16659 1.37548 9.16659 1.95242 8.81061 2.30841L3.09031 8.02871L21 8.02871L21 9.84545L3.10259 9.84545L8.82288 15.5535C9.17887 15.9095 9.17887 16.4864 8.82288 16.8424C8.4669 17.1984 7.88996 17.1984 7.53398 16.8424L0.266989 9.5754C-0.0889943 9.21941 -0.0889942 8.64247 0.26699 8.28649Z" fill="#25282A"></path>
							</svg>
							</i>
							<?=$searchLabel?>                
						</a>
					</div>
					<div class="row" >
						<div class="col-lg-6 offset-lg-3"  id="<?php echo $CONTAINER_ID?>">
						<form action="<?php echo $arResult['FORM_ACTION']?>">
							<button  name="s" type="submit" value="<?=GetMessage('CT_BST_SEARCH_BUTTON')?>">
							<i>
								<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M12.0991 12.0985L17 16.9994" stroke="#ACB4B7" stroke-width="1.50796" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M14.0062 7.50685C14.0062 11.0958 11.0958 14.0062 7.50685 14.0062C3.9179 14.0062 1 11.0958 1 7.50685C1 3.9179 3.91036 1 7.49931 1C11.0883 1 13.9986 3.91037 13.9986 7.50685H14.0062Z" stroke="#ACB4B7" stroke-width="1.50796" stroke-linecap="round" stroke-linejoin="round"></path>
							</svg>
							</i>
							</button>
							<input  id="<?php echo $INPUT_ID?>" type="text" name="q" value="" placeholder="<?=$searchPlaceholder?>" class="search-input-dropdown"  autocomplete="off">
						</form>
					
					</div>
				</div>
            </div>
    </div><!---->
<?php endif?>
<script>
	BX.ready(function(){
		new JCTitleSearch({
			'AJAX_PAGE' : '<?php echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
			'CONTAINER_ID': '<?php echo $CONTAINER_ID?>',
			'INPUT_ID': '<?php echo $INPUT_ID?>',
			'MIN_QUERY_LEN': 2
		});
	});
</script>
