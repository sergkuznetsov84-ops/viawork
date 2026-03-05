<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

if (!empty($arResult['CATEGORIES']) && $arResult['CATEGORIES_ITEMS_EXISTS']):?>
<div class="search-suggestions" >
	<div class="title" >
		<h4>Top Suggestions</h4>
	</div>
	<ul>
		<? foreach ($arResult['CATEGORIES'] as $category_id => $arCategory):?>
			<? foreach ($arCategory['ITEMS'] as $i => $arItem):?>
				<?if($arItem['TYPE'] !== 'all'){?>
				<li>
					<a href="<?=$arItem['URL'];?>">
						<i>
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M21.7382 16.1363L17.4328 20.4418C17.331 20.5436 17.1928 20.6018 17.0546 20.6018C16.9164 20.6018 16.7782 20.5509 16.6764 20.4418C16.4655 20.2309 16.4655 19.8891 16.6764 19.6781L20.0655 16.2891H9.45459V15.2127H20.0582L16.6691 11.8309C16.4582 11.62 16.4582 11.2781 16.6691 11.0672C16.88 10.8563 17.2219 10.8563 17.4328 11.0672L21.7382 15.3727C21.9491 15.5836 21.9491 15.9254 21.7382 16.1363Z" fill="#373F43"></path>
							</svg>
						</i>
						<span><?=$arItem['NAME'];?></span>
					</a>
				</li>
				<?}?>
			<?php endforeach;?>
		<?php endforeach;?>
	</ul>
</div>
<div class="title-search-fader"></div>
<?php endif;
