<div class="links-block" >
	<div class="title" >
		<span><?=(defined('LANGUAGE_ID') && LANGUAGE_ID === 'ru')? 'Записаться на визит' : 'Schedule a Visit'?></span>
	</div>
	<div class="links" >
		<?php if(defined('LANGUAGE_ID') && LANGUAGE_ID === 'ru'): ?>
			<a>Доступно: Пн–Сб</a>
			<a>08.00 - 17.30 (GMT +03)</a>
				<a href="mailto:info@nurus.com.tr">Электронная почта</a>
		<?php else: ?>
			<a>Available: Mon-Sat</a>
			<a>08.00 - 17.30 (GMT +03)</a>
			<a href="mailto:info@nurus.com.tr">Email</a>
		<?php endif; ?>
	</div>
</div>
