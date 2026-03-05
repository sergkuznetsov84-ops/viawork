<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

$this->setFrameMode(true);

if (empty($arResult['ITEMS'])) {
    return;
}

// Обработка картинок
$processedItems = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    $processedItem = [
        'ID' => $item['ID'],
        'NAME' => $item['~NAME'],
        'PREVIEW_TEXT' => $item['~PREVIEW_TEXT'],
        'DETAIL_TEXT' => $item['~DETAIL_TEXT'],
        'DETAIL_PAGE_URL' => $item['~DETAIL_PAGE_URL'],
		'PREVIEW_PICTURE' => $item['PREVIEW_PICTURE'],
        'PROPERTIES' => $item['PROPERTIES'] ?? [],
    ];

    // Обработка свойств
    $processedItem['SUBTITLE'] = $item['PROPERTIES']['SUBTITLE']['~VALUE'] ?? '';
    $processedItem['BUTTON_TEXT'] = $item['PROPERTIES']['BUTTON_TEXT']['VALUE'] ?? '';
    $processedItem['BUTTON_LINK'] = $item['PROPERTIES']['BUTTON_LINK']['VALUE'] ?? '';
    $processedItem['BUTTON_TARGET'] = $item['PROPERTIES']['BUTTON_TARGET']['VALUE'] ?? '_self';

    $processedItems[] = $processedItem;
}
?>

<section class="comp-91" id="comp91">
    <div class="comp-91-sticky">
        <div class="comp-91-images">
            <?php foreach ($processedItems as $index => $item): ?>
                <div class="comp-91-image <?= $index === 0 ? 'active' : '' ?>" data-index="<?= $index ?>">
                        <picture>
                            <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= htmlspecialcharsbx($item['IMAGE_ALT']) ?>" title="<?= htmlspecialcharsbx($item['IMAGE_TITLE']) ?>" class="sp-no-webp">
                        </picture>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <nav class="comp-91-titles">
        <?php foreach ($processedItems as $index => $item): ?>
					<div class="comp-91-title 
				<?= $index === 0 ? 'first active' : '' ?> 
				<?= $index === count($processedItems) - 1 ? 'last' : '' ?> 
				<?= $index >= 3 ? 'visible' : '' ?>" 
				data-index="<?= $index ?>">
                
                <?php if (!empty($item['NAME'])): ?>
                    <div class="subtitle">
                        <h4><?=$item['NAME']?></h4>
                    </div>
                <?php endif; ?>
                
                <h3>
                    <?php if (!empty($item['PREVIEW_TEXT'])): ?>
                        <span class="comp-91-title-inner"><?= $item['PREVIEW_TEXT']?></span>
                    <?php endif; ?>

  					<?php if (!empty($item['DETAIL_TEXT'])): ?>
                        <span class="comp-91-subtitle-inner"><?= $item['DETAIL_TEXT']?></span>
                    <?php endif; ?>
                </h3>
                
                <?php if (!empty($item['BUTTON_TEXT']) && !empty($item['BUTTON_LINK'])): ?>
                    <div class="action">
                        <a href="<?= htmlspecialcharsbx($item['BUTTON_LINK']) ?>" 
                           target="<?= htmlspecialcharsbx($item['BUTTON_TARGET']) ?>" 
                           class="btn btn-green btn-rnd-full btn-semibold">
                            <span><?= htmlspecialcharsbx($item['BUTTON_TEXT']) ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </nav>
</section>
