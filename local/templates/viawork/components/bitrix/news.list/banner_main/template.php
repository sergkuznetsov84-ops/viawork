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
    $previewPicture = '';
    if (!empty($item['PREVIEW_PICTURE'])) {
        if (is_array($item['PREVIEW_PICTURE'])) {
            $previewPicture = $item['PREVIEW_PICTURE']['SRC'] ?? '';
        } else {
            $previewPicture = CFile::GetPath($item['PREVIEW_PICTURE']);
        }
    }

    $detailPicture = '';
    if (!empty($item['DETAIL_PICTURE'])) {
        if (is_array($item['DETAIL_PICTURE'])) {
            $detailPicture = $item['DETAIL_PICTURE']['SRC'] ?? '';
        } else {
            $detailPicture = CFile::GetPath($item['DETAIL_PICTURE']);
        }
    }
    $processedItem = [
        'ID' => $item['ID'],
        'NAME' => $item['~NAME'],
        'PREVIEW_PICTURE' => $previewPicture,
        'DETAIL_PICTURE' => $detailPicture,
        'LINK' => $item['PROPERTIES']['LINK']['VALUE'] ?? '#',
    ];

    $desktopVideoId = $item['PROPERTIES']['VIDEO_DESKTOP']['VALUE'] ?? $item['PROPERTIES']['VIDEO']['VALUE'] ?? null;
    if (!empty($desktopVideoId)) {
        $desktopFile = CFile::GetFileArray($desktopVideoId);
        if ($desktopFile) {
            $processedItem['VIDEO_DESKTOP_SRC'] = $desktopFile['SRC'];
        }
    }

    if (!empty($item['PROPERTIES']['VIDEO_MOBILE']['VALUE'])) {
        $mobileFile = CFile::GetFileArray($item['PROPERTIES']['VIDEO_MOBILE']['VALUE']);
        if ($mobileFile) {
            $processedItem['VIDEO_MOBILE_SRC'] = $mobileFile['SRC'];
        }
    }

    $processedItem['DESKTOP_FALLBACK_IMAGE'] = $detailPicture ?: $previewPicture;
    $processedItem['MOBILE_FALLBACK_IMAGE'] = $previewPicture ?: $detailPicture;

    if (
        !empty($processedItem['VIDEO_DESKTOP_SRC']) ||
        !empty($processedItem['VIDEO_MOBILE_SRC']) ||
        !empty($processedItem['DESKTOP_FALLBACK_IMAGE']) ||
        !empty($processedItem['MOBILE_FALLBACK_IMAGE'])
    ) {
        $processedItems[] = $processedItem;
    }
}

if (empty($processedItems)) {
    return;
}

?>

<section class="comp-88">
    <div class="comp-88-wrapper">
        <div class="container-fluid">
            <div class="comp-88-main">
                <div class="row">
                    <!-- Основной слайдер -->
                    <div class="col-lg-9">
                        <div class="swiper comp-88-swiper swiper-initialized swiper-horizontal swiper-backface-hidden">
                            <div class="swiper-wrapper" aria-live="polite">
                                <?php foreach ($processedItems as $index => $item): ?>
                                    <div class="swiper-slide <?= $index === 0 ? 'swiper-slide-active' : '' ?>" 
                                         role="group" 
                                         aria-label="<?= ($index + 1) . ' / ' . count($processedItems) ?>">
                                        <div class="comp-88-media scale-scroll visible" data-delay="200">
                                            <a href="<?= htmlspecialcharsbx($item['LINK']) ?>">
                                                <?php if (!empty($item['VIDEO_DESKTOP_SRC'])): ?>
                                                    <video class="comp-88-video-desktop" 
                                                           src="<?= htmlspecialcharsbx($item['VIDEO_DESKTOP_SRC']) ?>" 
                                                           poster="<?= htmlspecialcharsbx($item['DESKTOP_FALLBACK_IMAGE']) ?>"
                                                           preload="metadata"
                                                           autoplay muted playsinline loop></video>
                                                <?php elseif (!empty($item['DESKTOP_FALLBACK_IMAGE'])): ?>
                                                    <img class="comp-88-image-desktop sp-no-webp"
                                                         src="<?= htmlspecialcharsbx($item['DESKTOP_FALLBACK_IMAGE']) ?>"
                                                         alt="<?= htmlspecialcharsbx($item['NAME']) ?>">
                                                <?php endif; ?>
                                                
                                                <?php if (!empty($item['VIDEO_MOBILE_SRC'])): ?>
                                                    <video class="comp-88-video-mobile" 
                                                           src="<?= htmlspecialcharsbx($item['VIDEO_MOBILE_SRC']) ?>" 
                                                           poster="<?= htmlspecialcharsbx($item['MOBILE_FALLBACK_IMAGE']) ?>"
                                                           preload="metadata"
                                                           autoplay muted playsinline loop></video>
                                                <?php elseif (!empty($item['VIDEO_DESKTOP_SRC'])): ?>
                                                    <video class="comp-88-video-mobile" 
                                                           src="<?= htmlspecialcharsbx($item['VIDEO_DESKTOP_SRC']) ?>" 
                                                           poster="<?= htmlspecialcharsbx($item['MOBILE_FALLBACK_IMAGE']) ?>"
                                                           preload="metadata"
                                                           autoplay muted playsinline loop></video>
                                                <?php elseif (!empty($item['MOBILE_FALLBACK_IMAGE'])): ?>
                                                    <img class="comp-88-image-mobile sp-no-webp"
                                                         src="<?= htmlspecialcharsbx($item['MOBILE_FALLBACK_IMAGE']) ?>"
                                                         alt="<?= htmlspecialcharsbx($item['NAME']) ?>">
                                                <?php endif; ?>
                                            </a>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <!-- Пагинация -->
                            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal <?= count($processedItems) <= 1 ? 'swiper-pagination-lock' : '' ?>">
                                <?php for ($i = 0; $i < count($processedItems); $i++): ?>
                                    <span class="swiper-pagination-bullet <?= $i === 0 ? 'swiper-pagination-bullet-active' : '' ?>" 
                                          tabindex="0" 
                                          role="button" 
                                          aria-label="Go to slide <?= $i + 1 ?>"
                                          <?= $i === 0 ? 'aria-current="true"' : '' ?>></span>
                                <?php endfor;?>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>

                        <div class="col-lg-3">
                            <a href="<?= htmlspecialcharsbx($sidebarItem['SIDEBAR_LINK']) ?>" class="card-btn shop_track_button">
                                <div class="card-btn-bg scale-scroll visible" data-delay="300">
                                        <picture>
                                            <source srcset="<?=htmlspecialcharsbx($detailPicture)?>" media="(max-width: 1024px)">
                                            <img class="sp-no-webp" 
                                                fetchpriority="high" 
                                                src="<?=htmlspecialcharsbx($previewPicture)?>" 
                                                alt="<?=htmlspecialcharsbx($sidebarItem['SIDEBAR_IMAGE_ALT'])?>">
                                        </picture>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
