<div class="links-block" >
	<div class="title" >
		<span><?=(defined('LANGUAGE_ID') && LANGUAGE_ID === 'ru')? 'Записаться на визит' : 'Schedule a Visit'?></span>
	</div>
	<div class="links" >
		<?php if(defined('LANGUAGE_ID') && LANGUAGE_ID === 'ru'): ?>
			<a href="<?=SITE_DIR?>#">Доступно: Пн–Сб</a>
			<a href="<?=SITE_DIR?>#">08.00 - 17.30 (GMT +03)</a>
				<a href="<?=SITE_DIR?>#">Электронная почта</a>
		<?php else: ?>
			<a href="<?=SITE_DIR?>#">Available: Mon-Sat</a>
			<a href="<?=SITE_DIR?>#">08.00 - 17.30 (GMT +03)</a>
			<a href="<?=SITE_DIR?>#">Email</a>
		<?php endif; ?>
	</div>
</div>
