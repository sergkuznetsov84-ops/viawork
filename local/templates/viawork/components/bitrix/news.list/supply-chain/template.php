<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>

<section class="comp-83 style-1" data-index="0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-lead">
                    <div class="text fadeInUp-scroll" data-delay="200">
                        <p>Полный цикл производства, никогда не прерываемый</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-10 offset-lg-1 slider-container">
                <div class="swiper main-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach($arResult['ITEMS'] as $index => $item): ?>

                            <?php
                            // Добавляем ссылки для редактирования и удаления
                            $this->AddEditAction(
                                $item['ID'],
                                $item['EDIT_LINK'],
                                CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT')
                            );
                            $this->AddDeleteAction(
                                $item['ID'],
                                $item['DELETE_LINK'],
                                CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'),
                                ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
                            );
                            ?>

                            <div class="swiper-slide"
                                 id="<?= $this->GetEditAreaId($item['ID']); ?>"
                                 role="group"
                                 aria-label="<?= $index + 1 ?> / <?= count($arResult['ITEMS']) ?>">
                                <a href="javascript:;" class="box" data-index="<?= $index ?>">
                                    <span class="box-inner">
                                        <span class="box-bottom">
                                            <span class="title">
                                                <p><?= $item['NAME'] ?></p>
                                            </span>
                                            <span class="icon-wrapper">
                                                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="27.6999" cy="27.6179" r="26.8288" fill="white"></circle>
                                                    <path d="M17.8203 28.0781H38.5303" stroke="#2F2F2F" stroke-width="2.82408" stroke-linecap="round"></path>
                                                    <path d="M28.1758 17.7344V38.4443" stroke="#2F2F2F" stroke-width="2.82408" stroke-linecap="round"></path>
                                                </svg>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="media-wrapper">
                                        <picture>
                                            <?php if (!empty($item['PREVIEW_PICTURE_WEBP'])): ?>
                                                <source srcset="<?= $item['PREVIEW_PICTURE_WEBP'] ?>" type="image/webp">
                                            <?php endif; ?>
                                            <?php if (!empty($item['PREVIEW_PICTURE_AVIF'])): ?>
                                                <source srcset="<?= $item['PREVIEW_PICTURE_AVIF'] ?>" type="image/avif">
                                            <?php endif; ?>
                                            <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>">
                                        </picture>
                                    </span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="swiper-actions">
                        <a href="javascript:;" class="main-nav-prev" role="button">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                    <path d="M11 1L1.42457 10.4246L10.8491 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                        </a>
                        <a href="javascript:;" class="main-nav-next" role="button">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                    <path d="M0.999999 1L10.5754 10.4246L1.15086 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                        </a>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>

                <!-- Modal swiper -->
                <div class="modal-swiper-container">
                    <div class="modal-swiper-container-inner">
                        <div class="swiper modal-swiper swiper-fade">
                            <div class="swiper-wrapper">
                                <?php foreach($arResult['ITEMS'] as $item): ?>

                                    <?php
                                    // Повторяем, чтобы поддерживалось редактирование и в модалке
                                    $this->AddEditAction(
                                        $item['ID'],
                                        $item['EDIT_LINK'],
                                        CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT')
                                    );
                                    $this->AddDeleteAction(
                                        $item['ID'],
                                        $item['DELETE_LINK'],
                                        CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'),
                                        ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
                                    );
                                    ?>

                                    <div class="swiper-slide" id="<?= $this->GetEditAreaId($item['ID']); ?>" role="group">
                                        <div class="content-container">
                                            <div class="content-container-inner">
                                                <div class="content">
                                                    <div class="title">
                                                        <h4><?= $item['NAME'] ?></h4>
                                                    </div>
                                                    <div class="text">
                                                        <p><?= $item['DETAIL_TEXT'] ?></p>
                                                    </div>
                                                </div>
                                                <div class="media-wrapper">
                                                    <picture>
                                                        <?php if (!empty($item['PREVIEW_PICTURE_WEBP'])): ?>
                                                            <source srcset="<?= $item['PREVIEW_PICTURE_WEBP'] ?>" type="image/webp">
                                                        <?php endif; ?>
                                                        <?php if (!empty($item['PREVIEW_PICTURE_AVIF'])): ?>
                                                            <source srcset="<?= $item['PREVIEW_PICTURE_AVIF'] ?>" type="image/avif">
                                                        <?php endif; ?>
                                                        <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($item['NAME']) ?>">
                                                    </picture>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>

                            <div class="swiper-nav-container">
                                <div class="modal-nav-btn modal-btn-prev">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                        <path d="M11 1L1.42457 10.4246L10.8491 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></i>
                                </div>
                                <div class="modal-nav-btn modal-btn-next">
                                    <i><svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="none">
                                        <path d="M0.999999 1L10.5754 10.4246L1.15086 20" stroke="#25282A" stroke-width="1.58796" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></i>
                                </div>
                            </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                    <div class="modal-swiper-overlay"></div>
                    <div class="modal-swiper-close-btn-container">
                        <a href="javascript:;" class="modal-swiper-close-btn">
                            <i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none">
                                    <path d="M1 1L16 16" stroke="#25282A" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M16 1L1 16" stroke="#25282A" stroke-width="1.37112" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
