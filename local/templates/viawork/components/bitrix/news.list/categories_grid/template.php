<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);

$processedSections = [];

if (!empty($arResult['ITEMS']) && is_array($arResult['ITEMS'])) {
    foreach ($arResult['ITEMS'] as $item) {

        $this->AddEditAction(
            $item['ID'],
            $item['EDIT_LINK'],
            CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT")
        );
        $this->AddDeleteAction(
            $item['ID'],
            $item['DELETE_LINK'],
            CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"),
            ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]
        );

        $previewPicture = '';
        if (!empty($item['PREVIEW_PICTURE'])) {
            if (is_array($item['PREVIEW_PICTURE'])) {
                $previewPicture = $item['PREVIEW_PICTURE']['SRC'] ?? '';
            } else {
                $previewPicture = CFile::GetPath($item['PREVIEW_PICTURE']);
            }
        }

        $processedSections[] = [
            'ID' => $item['ID'],
            'NAME' => $item['~NAME'] ?? '',
            'DETAIL_PAGE_URL' => $item['DETAIL_PAGE_URL'] ?? '',
            'PREVIEW_PICTURE' => $previewPicture,
            'EDIT_AREA_ID' => $this->GetEditAreaId($item['ID']),
        ];
    }
}

$itemsCount = count($processedSections);
$colClasses = [
    1 => 'col-12',
    2 => 'col-6 col-lg-6',
    3 => 'col-6 col-lg-4',
    4 => 'col-6 col-lg-3',
    5 => 'col-6 col-lg-3',
    6 => 'col-6 col-lg-2'
];
$colClass = $colClasses[min($itemsCount, 6)] ?? 'col-6 col-lg-3';
?>

<section class="comp-90">
    <div class="comp-90-wrapper">
        <div class="container-fluid">
            <div class="comp-90-main">
                <div class="comp-90-head">
                    <div class="subtitle fadeInUp-scroll visible" data-delay="200">
                        <h4>Продукция Nurus</h4>
                    </div>
                    <div class="title fadeInUp-scroll visible" data-delay="250">
                        <h2>Решения для всех и каждой задачи</h2>
                    </div>
                </div>
            </div>

            <div class="comp-90-content fadeInUp-scroll visible" data-delay="300">
                <div class="row">
                    <?php foreach ($processedSections as $section): ?>
                        <div class="<?= $colClass ?>" id="<?= $section['EDIT_AREA_ID'] ?>">
                            <a href="<?= htmlspecialcharsbx($section['DETAIL_PAGE_URL']) ?>" class="card">
                                <?php if (!empty($section['PREVIEW_PICTURE'])): ?>
                                    <picture>
                                        <source srcset="<?= htmlspecialcharsbx($section['PREVIEW_PICTURE']) ?>" type="image/avif">
                                        <source srcset="<?= htmlspecialcharsbx($section['PREVIEW_PICTURE']) ?>" type="image/webp">
                                        <img src="<?= htmlspecialcharsbx($section['PREVIEW_PICTURE']) ?>"
                                             alt="<?= htmlspecialcharsbx($section['NAME']) ?>"
                                             class="sp-no-webp">
                                    </picture>
                                <?php endif; ?>

                                <div class="card-text">
                                    <span><?= htmlspecialcharsbx($section['NAME']) ?></span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
