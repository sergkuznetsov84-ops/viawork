<?php
// Compatibility wrapper for footer direct links
// Prefer editing include/footer_direct_links.php; this file includes it if exists
if (file_exists(__DIR__ . '/footer_direct_links.php')) {
    include __DIR__ . '/footer_direct_links.php';
    return;
}
?>
<div class="direct-links">
    <?php if(defined('LANGUAGE_ID') && LANGUAGE_ID === 'ru'): ?>
        <a href="<?=SITE_DIR?>sustainability/">Устойчивое развитие</a>
        <a href="<?=SITE_DIR?>technology/">Технологии</a>
    <?php else: ?>
        <a href="<?=SITE_DIR?>sustainability/">Sustainability</a>
        <a href="<?=SITE_DIR?>technology/">Technology</a>
    <?php endif; ?>
</div>
