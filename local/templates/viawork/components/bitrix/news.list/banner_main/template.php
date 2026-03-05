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
$previewPicture = '';
        if (!empty($item['PREVIEW_PICTURE'])) {
            if (is_array($item['PREVIEW_PICTURE'])) {
                $previewPicture = $item['PREVIEW_PICTURE']['SRC'] ?? '';
            } else {
                $previewPicture = CFile::GetPath($item['PREVIEW_PICTURE']);
            }
        }
// Обработка элементов
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
    ];

    // Обработка видео для десктопа
    if (!empty($item['PROPERTIES']['VIDEO']['VALUE'])) {
        $desktopFile = CFile::GetFileArray($item['PROPERTIES']['VIDEO']['VALUE']);
        if ($desktopFile) {
            $processedItem['VIDEO']['SRC'] = $desktopFile['SRC'];
        }
    }

    // Обработка видео для мобильных
    if (!empty($item['PROPERTIES']['VIDEO_MOBILE']['VALUE'])) {
        $mobileFile = CFile::GetFileArray($item['PROPERTIES']['VIDEO_MOBILE']['VALUE']);
        if ($mobileFile) {
            $processedItem['VIDEO_MOBILE_SRC'] = $mobileFile['SRC'];
        }
    }

    $processedItem['LINK'] = $item['PROPERTIES']['LINK']['VALUE'] ?? '#';

    $processedItems[] = $processedItem;
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
                                                <?php if (!empty($item['VIDEO']['SRC'])): ?>
                                                    <video class="comp-88-video-desktop" 
                                                           src="<?= $item['VIDEO']['SRC'] ?>" 
                                                           autoplay muted playsinline></video>
                                                <?php endif; ?>
                                                
                                                <?php if (!empty($item['VIDEO']['SRC'])): ?>
                                                    <video class="comp-88-video-mobile" 
                                                           src="<?= $item['VIDEO']['SRC'] ?>" 
                                                           autoplay muted playsinline></video>
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