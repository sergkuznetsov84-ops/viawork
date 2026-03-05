   
                    </div>
                    <div class="row">
                        <div class="col-lg-9 offset-lg-3">
                            <div class="comp-105-content-body">
                                <div class="comp-105-content-body-list">
                                    <div class="table container">
                                        <div class="thead">
                                            <div class="tr">
                                            <div class="th"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">№</font></font></div>
                                            <div class="th"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">ПРОДУКТ</font></font></div>
                                            <div class="th"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">НАЗВАНИЕ ДОКУМЕНТА</font></font></div>
                                            <div class="th"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">ТИП ДАННЫХ</font></font></div>
                                            <div class="th"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">РАЗМЕР</font></font></div>
                                            <div class="th"><font dir="auto" style="vertical-align: inherit;"><font dir="auto" style="vertical-align: inherit;">СКАЧАТЬ</font></font></div>
                                            </div>
                                        </div>
                                        <div class="tbody">
                                            <?php foreach ($arResult['ITEMS'] as $item) {
                                                        $uniqueItems[$item['ID']] = $item;
                                                    }
                                                    if (!empty($uniqueItems)): ?>
                                                        <?php foreach (array_values($uniqueItems) as $index => $arItem): ?>
                                                            <div class="tr">
                                                                <div class="download-checkbox">
                                                                    <input type="checkbox" class="file-checkbox" 
                                                                        id="file-<?= $arItem['ID'] ?>" 
                                                                        data-file-id="<?= $arItem['ID'] ?>" 
                                                                        data-file-url="<?= $arItem['FILE_URL'] ?>" 
                                                                        data-file-name="<?= htmlspecialcharsbx($arItem['NAME']) ?>">
                                                                    <label for="file-<?= $arItem['ID'] ?>"><?= $index + 1 ?></label>
                                                                </div>
                                                                <div class="td product1"><?= htmlspecialcharsbx($arItem['NAME']) ?></div>
                                                                <div class="td document-name"><?= htmlspecialcharsbx($arItem['NAME']) ?></div>
                                                                <div class="td data-type"><?= htmlspecialcharsbx($arItem['FILE_EXTENSION']) ?></div>
                                                                <div class="td size"><?= $arItem['FILE_SIZE'] ?></div>
                                                                <div class="td download-btn">
                                                                    <div class="download-btn-desktop">
                                                                        <a class="download-btn" href="<?= $arItem['FILE_URL'] ?>"
                                                                                data-file-url="<?= $arItem['FILE_URL'] ?>" 
                                                                                data-file-name="<?= htmlspecialcharsbx($arItem['NAME']) ?>" dowload>
                                                                            Скачать
                                                                        </a>
                                                                    </div>
                                                                    <div class="download-btn-mobile">
                                                                        <button class="download-btn" 
                                                                                data-file-url="<?= $arItem['FILE_URL'] ?>" 
                                                                                data-file-name="<?= htmlspecialcharsbx($arItem['NAME']) ?>">
                                                                            <i>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                                                    <path d="M10.5 1V14.2537" stroke="#373F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    <path d="M4.19531 7.98535L10.4986 14.254L16.8094 7.98535" stroke="#373F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                    <path d="M20 16V17.9552C20 19.0896 19.0834 20 17.9415 20H3.05852C1.92408 20 1 19.0821 1 17.9552V16" stroke="#373F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                                </svg>
                                                                            </i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php if ($arResult['NAV_STRING']): ?>
                                <div class="comp-105-pagination">
                                    <?= $arResult['NAV_STRING'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>  
            </div>
        </div>
    </div>
    </div>
    <? /* include_once($_SERVER['DOCUMENT_ROOT'] . $templateFolder . '/popup.php');  */?>
</section>

<script>
document.addEventListener('change', function(e) {
  if (e.target.classList.contains('file-checkbox')) {
    const checked = document.querySelectorAll('.file-checkbox:checked').length;
    document.getElementById('selected-count').textContent = checked;
  }
});
document.getElementById('download-selected').addEventListener('click', function() {
  const checked = document.querySelectorAll('.file-checkbox:checked');

  if (!checked.length) {
    alert('Выберите хотя бы один файл для скачивания.');
    return;
  }
  checked.forEach(chk => {
    const url = chk.dataset.fileUrl;
    const name = chk.dataset.fileName || 'file.pdf';
    const a = document.createElement('a');
    a.href = url;
    a.download = name;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  });
});
</script>