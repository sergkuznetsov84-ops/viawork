<?php if (!empty($arResult['ITEMS'])): ?>
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>

        <?php
        // Добавляем действия редактирования и удаления
        $this->AddEditAction(
            $arItem['ID'],
            $arItem['EDIT_LINK'],
            CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT')
        );
        $this->AddDeleteAction(
            $arItem['ID'],
            $arItem['DELETE_LINK'],
            CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'),
            ['CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
        );

        $src = $arItem['PREVIEW_PICTURE']['SRC'] ?? '';
        ?>

        <section class="comp-86 style-1" style="--section-background:#373f43;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="comp-86-wrapper">
                <div class="container">
                    <div class="comp-86-main">
                        <div class="card-container">
                            <div class="card">
                                <div class="card-media image-animation" data-delay="250">
                                    <?php if ($arItem['PREVIEW_PICTURE']): ?>
                                        <picture>
                                            <source srcset="<?= str_replace(['.jpg', '.png'], '.webp', $src) ?>" type="image/webp">
                                            <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="<?= htmlspecialchars($arItem['NAME']) ?>">
                                        </picture>
                                    <?php endif; ?>
                                </div>
                                <div class="card-content">
                                    <div class="title fadeInUp-scroll" data-delay="200">
                                        <p><?= $arItem['NAME'] ?></p>
                                    </div>
                                    <div class="text fadeInUp-scroll" data-delay="300">
                                        <p><?= $arItem['PREVIEW_TEXT'] ?></p>
                                    </div>
                                    <div class="card-action fadeInUp-scroll" data-delay="350">
                                        <a href="/all-products/" class="">
                                            Все продукты
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="29" height="25" viewBox="0 0 29 25" fill="none">
                                                    <path d="M0 11.4041H26.2323L16.018 1.03014L17.0191 0L28.96 12.115L17.0191 24.2446L16.018 23.2144L26.2178 12.855H0V11.4041Z" fill="black"></path>
                                                </svg>
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <?php endforeach; ?>
<?php endif; ?>
