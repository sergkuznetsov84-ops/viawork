<section class="comp-15">
    <div class="comp-15-wrapper">
        <div class="container">
            <div class="comp-15-main">
                <div class="comp-15-head">
                    <div class="title fadeInUp-scroll" data-delay="200">
                        <h2>Выставочные залы</h2>
                    </div>
                </div>

                <?php if (!empty($arResult['ITEMS'])): ?>
                    <div class="comp-15-content">
                        <div class="row">
                            <?php foreach ($arResult['ITEMS'] as $index => $arItem): ?>

                                <?php
                                $this->AddEditAction(
                                    $arItem['ID'],
                                    $arItem['EDIT_LINK'],
                                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT")
                                );
                                $this->AddDeleteAction(
                                    $arItem['ID'],
                                    $arItem['DELETE_LINK'],
                                    CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"),
                                    ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
                                );
                                ?>

                                <div class="col-12 col-lg-6" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                    <div class="address-box fadeInUp-scroll" data-delay="300" data-index="<?= $index ?>">
                                        <div class="title <?= $arItem['PROPERTIES']['TITLE_COLOR']['VALUE'] ?? 'black' ?>">
                                            <span><?= htmlspecialcharsbx($arItem['NAME']) ?></span>
                                        </div>
                                        <div class="text">
                                            <p>
                                                <?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_CITY']['VALUE']) ?>,
                                                <?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_COUNTRY']['VALUE']) ?>
                                            </p>
                                            <p>
                                                <?= $arItem['PREVIEW_TEXT'] ?>

                                                <?php if ($arItem['PROPERTIES']['PROPERTY_PHONE']['VALUE']): ?>
                                                    <a href="tel:<?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_PHONE']['VALUE']) ?>">
                                                        <strong>T:</strong>&nbsp;<?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_PHONE']['VALUE']) ?>
                                                    </a><br>
                                                <?php endif; ?>

                                                <?php if ($arItem['PROPERTIES']['PROPERTY_FAX']['VALUE']): ?>
                                                    <a href="tel:<?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_FAX']['VALUE']) ?>">
                                                        <strong>F:</strong>&nbsp;<?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_FAX']['VALUE']) ?>
                                                    </a><br>
                                                <?php endif; ?>

                                                <?php if ($arItem['PROPERTIES']['PROPERTY_EMAIL']['VALUE']): ?>
                                                    <a href="mailto:<?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_EMAIL']['VALUE']) ?>">
                                                        <strong>E:</strong>&nbsp;<?= htmlspecialcharsbx($arItem['PROPERTIES']['PROPERTY_EMAIL']['VALUE']) ?>
                                                    </a>
                                                <?php endif; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>