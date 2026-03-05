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

$processedItems = [];
foreach ($arResult['ITEMS'] as $key => $item) {
    $processedItem = [
        'ID' => $item['ID'],
        'NAME' => $item['~NAME'],
        'PREVIEW_TEXT' => $item['~PREVIEW_TEXT'],
        'DETAIL_TEXT' => $item['~DETAIL_TEXT'],
        'DETAIL_PAGE_URL' => $item['~DETAIL_PAGE_URL'],
        'PREVIEW_PICTURE' => $item['PREVIEW_PICTURE'],
    ];


    $processedItem['SUBTITLE'] = $item['PROPERTIES']['SUBTITLE']['~VALUE'] ?? '';
    $processedItem['FEATURED_TEXT'] = $item['PROPERTIES']['FEATURED_TEXT']['~VALUE'] ?? '';
    $processedItem['BUTTON1_TEXT'] = $item['PROPERTIES']['BUTTON1_TEXT']['VALUE'] ?? '';
    $processedItem['BUTTON1_LINK'] = $item['PROPERTIES']['BUTTON1_LINK']['VALUE'] ?? '';
    $processedItem['BUTTON1_TARGET'] = $item['PROPERTIES']['BUTTON1_TARGET']['VALUE'] ?? '_self';
    $processedItem['BUTTON2_TEXT'] = $item['PROPERTIES']['BUTTON2_TEXT']['VALUE'] ?? '';
    $processedItem['BUTTON2_LINK'] = $item['PROPERTIES']['BUTTON2_LINK']['VALUE'] ?? '';
    

    $badges = [];
    if (!empty($item['PROPERTIES']['BADGES']['VALUE'])) {
        foreach ($item['PROPERTIES']['BADGES']['VALUE'] as $badgeId) {
            $badgeFile = CFile::GetFileArray($badgeId);
            if ($badgeFile) {
                $badges[] = [
                    'SRC' => $badgeFile['SRC'],
                    'ALT' => $badgeFile['ORIGINAL_NAME']
                ];
            }
        }
    }
    $processedItem['BADGES'] = $badges;

    $processedItems[] = $processedItem;
}
?>

<section class="comp-3">
    <div class="comp-3-wrapper">
        <div class="container">
            <div class="comp-3-main">
                <div class="comp-3-head">
                        <div class="subtitle fadeInUp-scroll visible" data-delay="200">
                            <h4>CALMA BY NURUS</h4>
                        </div>
                    
                        <div class="title fadeInUp-scroll visible" data-delay="250">
                            <h2>Создано для лучшего опыта работы</h2>
                        </div>
                </div>

                <div class="swiper comp-3-swiper swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
                    <div class="swiper-wrapper" aria-live="polite">
                        <?php foreach ($processedItems as $index => $item): ?>
                            <div class="swiper-slide <?= $index === 0 ? 'swiper-slide-visible swiper-slide-fully-visible swiper-slide-active' : 'swiper-slide-next' ?>" 
                                 role="group" aria-label="<?= ($index + 1) . ' / ' . count($processedItems) ?>">
                                <div class="comp-3-content fadeInUp-scroll visible" data-delay="400">
                                    <div class="row align-items-center">

                                        <div class="col-lg-5 offset-lg-3">
                                            <div class="comp-3-content-media fadeInUp-scroll visible" data-delay="300">
                                               
                                                    <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= htmlspecialcharsbx($item['IMAGE_ALT']) ?>">
                                              
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <div class="comp-3-content-info">

                                                <?php if (!empty($item['BADGES'])): ?>
                                                    <div class="badge-logos">
                                                        <?php foreach ($item['BADGES'] as $badgeIndex => $badge): ?>
                                                            <a href="javascript:;" class="media disabled" data-badge-index="<?= $badgeIndex + 1 ?>">
                                                                <picture>
                                                                    <source srcset="<?= $badge['SRC'] ?>" type="image/webp">
                                                                    <img src="<?= $badge['SRC'] ?>" alt="<?= htmlspecialcharsbx($badge['ALT']) ?>" class="sp-no-webp">
                                                                </picture>
                                                            </a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif; ?>

                                                    <div class="subtitle">
                                                        <h4>РЕКОМЕНДУЕМЫЙ ПРОДУКТ</h4>
                                                    </div>

                                                <?php if (!empty($item['NAME'])): ?>
                                                    <div class="title">
                                                        <h3><?= htmlspecialcharsbx($item['NAME']) ?></h3>
                                                    </div>
                                                <?php endif; ?>

                                                <?php if (!empty($item['PREVIEW_TEXT'])): ?>
                                                    <div class="text">
                                                        <p><?= htmlspecialcharsbx($item['PREVIEW_TEXT']) ?></p>
                                                    </div>
                                                <?php endif; ?>

                                                <div class="actions">
                                                        <a href="<?= htmlspecialcharsbx($item['BUTTON1_LINK']) ?>" 
                                                           target="<?= htmlspecialcharsbx($item['BUTTON1_TARGET']) ?>" 
                                                           class="btn btn-black btn-semibold btn-rnd-full">
                                                            <span>Узнать больше</span>
                                                        </a>

                                                        <a href="<?= htmlspecialcharsbx($item['BUTTON2_LINK']) ?>" 
                                                           class="btn btn-blue btn-regular btn-rnd-full">
                                                            <span><span>Сайт Calma</span></span>
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
                        <?php endforeach; ?>
                    </div>

                    <div class="col-lg-5 offset-lg-3">
                        <div class="swiper-actions fadeInUp-scroll visible" data-delay="300">
                            <a href="javascript:;" class="nav-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                        <path d="M8.55859 16L0.999045 8.55955L8.4395 1" stroke="#fff" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </i>
                            </a>
                            <a href="javascript:;" class="nav-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                                <i>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="17" viewBox="0 0 10 17" fill="none">
                                        <path d="M0.999999 1L8.55955 8.44045L1.1191 16" stroke="#fff" stroke-width="1.25366" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </i>
                            </a>
                        </div>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</section>
