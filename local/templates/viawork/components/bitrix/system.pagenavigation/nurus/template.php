<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/** @var array $arResult */

$pageCount = intval($arResult['NavPageCount']);
$currentPage = intval($arResult['NavPageNomer']);
$navNum = intval($arResult['NavNum']);

if ($pageCount <= 1) return;

$baseUrl = $arResult['sUrlPath'] . ($arResult['NavQueryString'] ? '?' . $arResult['NavQueryString'] . '&' : '?');
?>
<div class="comp-24-pagination">
    <a href="<?= $currentPage > 1 ? $baseUrl . 'PAGEN_' . $navNum . '=' . ($currentPage - 1) : 'javascript:;' ?>"
       class="pagination-btn prev-btn <?= $currentPage <= 1 ? 'disabled' : '' ?>">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                <path d="M0.190707 5.52842L5.38141 0.198085C5.50417 0.0720302 5.67076 -8.15588e-07 5.83735 -8.01024e-07C6.00395 -7.8646e-07 6.17054 0.0630266 6.29329 0.198085C6.54757 0.459199 6.54757 0.882385 6.29329 1.1435L2.20737 5.33933L15 5.33934L15 6.67192L2.21613 6.67192L6.30206 10.8587C6.55634 11.1199 6.55634 11.543 6.30206 11.8042C6.04779 12.0653 5.63569 12.0653 5.38141 11.8042L0.190707 6.47383C-0.0635676 6.21272 -0.0635676 5.78953 0.190707 5.52842Z" fill="#25282A"></path>
            </svg>
        </i>
    </a>
    <div class="pagination-numbers">
        <div class="current-page">
            <span><?= $currentPage ?></span>
        </div>
        <span class="divider">/</span>
        <div class="total-page">
            <span><?= $pageCount ?></span>
        </div>
    </div>
    <a href="<?= $currentPage < $pageCount ? $baseUrl . 'PAGEN_' . $navNum . '=' . ($currentPage + 1) : 'javascript:;' ?>"
       class="pagination-btn next-btn <?= $currentPage >= $pageCount ? 'disabled' : '' ?>">
        <i>
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12" fill="none">
                <path d="M14.8093 6.47158L9.61859 11.8019C9.49584 11.928 9.32924 12 9.16265 12C8.99605 12 8.82946 11.937 8.70671 11.8019C8.45243 11.5408 8.45243 11.1176 8.70671 10.8565L12.7926 6.66066H0V5.32808H12.7839L8.69794 1.14125C8.44366 0.880135 8.44366 0.45695 8.69794 0.195836C8.95221 -0.0652786 9.36431 -0.0652786 9.61859 0.195836L14.8093 5.52617C15.0636 5.78728 15.0636 6.21047 14.8093 6.47158Z" fill="#25282A"></path>
            </svg>
        </i>
    </a>
</div>