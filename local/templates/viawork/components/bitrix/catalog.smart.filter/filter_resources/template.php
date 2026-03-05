<?php
$iblockId = 53;
$arSectionElements = [];
$arPropertyCounts = [];

$propertyCodes = ['PRODUCT_FAMILY', 'AREA_OF_USE', 'RESOURCE_CATEGORY', 'DATA_TYPE', 'CATEGORY'];

// Получаем все элементы
$selectFields = ['ID', 'IBLOCK_SECTION_ID'];
foreach ($propertyCodes as $code) {
    $selectFields[] = "PROPERTY_{$code}";
    $selectFields[] = "PROPERTY_{$code}_ENUM_ID"; // Добавляем получение ID значений для свойств-списков
}

$rs = CIBlockElement::GetList([], ['IBLOCK_ID' => $iblockId, 'ACTIVE' => 'Y'], false, false, $selectFields);

while ($el = $rs->Fetch()) {
    $elId = (int)$el['ID'];
    $linkedSections = [];

    // Обработка привязки к разделам
    if (!empty($el['IBLOCK_SECTION_ID'])) {
        $linkedSections[] = (int)$el['IBLOCK_SECTION_ID'];
    }

    $categoryProp = 'PROPERTY_CATEGORY_VALUE';
    if (isset($el[$categoryProp])) {
        $catValues = is_array($el[$categoryProp]) ? $el[$categoryProp] : [$el[$categoryProp]];
        foreach ($catValues as $value) {
            if (!empty($value)) $linkedSections[] = (int)$value;
        }
    }
    $linkedSections = array_unique(array_filter($linkedSections));
    
    foreach ($linkedSections as $sectionId) {
        if (!isset($arSectionElements[$sectionId])) {
            $arSectionElements[$sectionId] = [];
        }
        $arSectionElements[$sectionId][$elId] = true;
    }

    // Обработка свойств - исправленная версия
    foreach ($propertyCodes as $propCode) {
        $propValueKey = "PROPERTY_{$propCode}_VALUE";
        $propEnumKey = "PROPERTY_{$propCode}_ENUM_ID";
        
        if (isset($el[$propValueKey])) {
            $propValues = is_array($el[$propValueKey]) ? $el[$propValueKey] : [$el[$propValueKey]];
            $propEnums = isset($el[$propEnumKey]) ? (is_array($el[$propEnumKey]) ? $el[$propEnumKey] : [$el[$propEnumKey]]) : [];
            
            foreach ($propValues as $index => $val) {
                if (!empty($val)) {
                    // Используем ID значения если есть, иначе используем значение
                    $valueId = !empty($propEnums[$index]) ? (int)$propEnums[$index] : $val;
                    
                    if (!isset($arPropertyCounts[$propCode])) {
                        $arPropertyCounts[$propCode] = [];
                    }
                    if (!isset($arPropertyCounts[$propCode][$valueId])) {
                        $arPropertyCounts[$propCode][$valueId] = 0;
                    }
                    $arPropertyCounts[$propCode][$valueId]++;
                }
            }
        }
    }
}

$arCategoryCounts = [];
foreach ($arSectionElements as $sectionId => $elements) {
    $arCategoryCounts[$sectionId] = count($elements);
}

// Дополнительно: создаем массив соответствия HTML_VALUE_ALT -> sectionId для категорий
$arCategoryMapping = [];
if (!empty($arResult['ITEMS'][45]['VALUES'])) {
    foreach ($arResult['ITEMS'][45]['VALUES'] as $index => $category) {
        $sectionId = (int)$index;
        $htmlValueAlt = $category['HTML_VALUE_ALT'] ?? '';
        if ($htmlValueAlt) {
            $arCategoryMapping[$htmlValueAlt] = $sectionId;
        }
    }
}

echo '<!-- DEBUG: arCategoryCounts = ' . htmlspecialchars(json_encode($arCategoryCounts)) . ' -->';
echo '<!-- DEBUG: arCategoryMapping = ' . htmlspecialchars(json_encode($arCategoryMapping)) . ' -->';
?>


<div class="comp-105-content-filters" id="ajax-filter-container">
    <div class="comp-105-filters">
        <div class="mobile-overlay"></div>
        <div class="row">
            <div class="col-6 col-lg-3 order-0">
                <div class="comp-105-filters-main">
                    <div class="comp-105-filters-main-btn show">
                        <a href="javascript:;">
                           <i class="filter-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17" fill="none"> <path d="M16.0117 4.04651H19.0009" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M1 4.04651H9.91696" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M10.0762 13.1729H19.0004" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M1 13.1729H3.98195" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12.9649 0.999756C14.6472 0.999756 16.0118 2.36438 16.0118 4.04669C16.0118 5.72899 14.6472 7.09361 12.9649 7.09361C11.2826 7.09361 9.91797 5.72899 9.91797 4.04669C9.91797 2.36438 11.2826 0.999756 12.9649 0.999756Z" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M7.02935 10.1262C8.71166 10.1262 10.0763 11.4908 10.0763 13.1732C10.0763 14.8555 8.71166 16.2201 7.02935 16.2201C5.34704 16.2201 3.98242 14.8555 3.98242 13.1732C3.98242 11.4908 5.34704 10.1262 7.02935 10.1262Z" stroke="white" stroke-width="1.44404" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </i>
                             <span>Фильтр данных продуктов</span>
                        <i class="arrow-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none"> <path d="M17 1L9.06352 9.06352L1 1.12704" stroke="white" stroke-width="1.33723" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </i>
                        </a>
                    </div>

                    <div class="comp-105-filters-body show">
                       
                            <?foreach($arResult["HIDDEN"] as $arItem):?>
                            <input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
                            <?endforeach;?>
                        <!-- КАТЕГОРИИ -->
                        <form>
                        <div class="comp-105-filters-body-item">
                            <div class="comp-105-filters-body-item-title">
                                <a href="javascript:;">
                                    <span>КАТЕГОРИИ ТОВАРОВ</span>
                                    <i> 
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                                            <path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
                                        </svg> 
                                    </i>
                                </a>
                            </div>
                            
                            <? if (!empty($arResult['ITEMS'][45]['VALUES'])): ?>
                            <ul class="comp-105-filters-body-item-list show">

                                <? foreach ($arResult['ITEMS'][45]['VALUES'] as $index => $category): 
                                    $sectionId = (int)$index;
                                    $count = $arCategoryCounts[$sectionId] ?? 0;
                                ?>
                                <li class="comp-105-filters-body-item-list-li">
                                    <div class="comp-105-filters-body-item-list-li-head">
                                        <input type="checkbox"
                                            class="smartfilter-checkbox"
                                            name="<?= $category['CONTROL_NAME'] ?>"
                                            id="<?= $category['CONTROL_ID'] ?>"
                                            value="<?= $category['HTML_VALUE'] ?>"
                                            <?= $category['CHECKED'] ? 'checked' : '' ?>>
                                        <label for="<?= $category['CONTROL_ID'] ?>">
                                            <?= htmlspecialcharsbx($category['VALUE']) ?> (<?= $count ?>)
                                        </label>  
                                    </div>
                                </li>
                                <?endforeach; ?>
                            </ul>
                            <?endif; ?>
                        </div>

                            <!-- СВОЙСТВА -->
                            <? 
                            if (!empty($arResult['ITEMS'])): 
                                foreach ($arResult['ITEMS'] as $itemId => $item): 
                                    $filterCode = $item['CODE'] ?? "ITEM_$itemId";
                                    if ($filterCode !== 'CATEGORY' && !empty($item['VALUES'])): 
                            ?>
                                        <div class="comp-105-filters-body-item">
                                            <div class="comp-105-filters-body-item-title">
                                                <a href="javascript:;">
                                                    <span><?= htmlspecialcharsbx($item['NAME']) ?></span>
                                                    <i> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="9" viewBox="0 0 15 9" fill="none">
                                                            <path d="M1 1L7.35028 7.35028L13.7006 1" stroke="#25282A" stroke-miterlimit="10"></path>
                                                        </svg> 
                                                    </i>
                                                </a>
                                            </div>
                                            <ul class="comp-105-filters-body-item-list">
                                                <?foreach ($item['VALUES'] as $valueKey => $value): 
                                                    $customCount = $arPropertyCounts[$filterCode][(int)$valueKey] ?? 0;
                                                ?>
                                                    <li class="comp-105-filters-body-item-list-li">
                                                        <div class="comp-105-filters-body-item-list-li-head">
                                                            <input type="checkbox" 
                                                                class="smartfilter-checkbox"
                                                                name="<?= $value['CONTROL_NAME'] ?>" 
                                                                id="<?= $value['CONTROL_ID'] ?>" 
                                                                value="<?= $value['HTML_VALUE'] ?>"
                                                                <?= $value['CHECKED'] ? 'checked' : '' ?>>
                                                            <label for="<?= $value['CONTROL_ID'] ?>">
                                                                <?= htmlspecialcharsbx($value['VALUE']) ?> (<?= $customCount ?>)
                                                            </label>  
                                                        </div>
                                                    </li>
                                                <?endforeach; ?>
                                            </ul>
                                        </div>
                            <? 
                                    endif; 
                                endforeach; 
                            endif; 
                            ?>


                        <div class="comp-105-filters-body-footer">
                            <div class="clear-all-btn">
                              <a href="<?= $APPLICATION->GetCurPage() ?>" id="reset-section-filter">Очистить все фильтры</a>
                            </div>
                        </div>
                        </form>						
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-xl-2 d-none d-lg-block">
                <div class="comp-105-filters-download-btn">
                    <a href="javascript:;" id="download-selected">
                         <span>Скачать <b id="selected-count">0</b> файлов</span>
                        <i> <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none"> <path d="M10.5 1V14.2537" stroke="#373F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4.19531 7.98535L10.4986 14.254L16.8094 7.98535" stroke="#373F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M20 16V17.9552C20 19.0896 19.0834 20 17.9415 20H3.05852C1.92408 20 1 19.0821 1 17.9552V16" stroke="#373F43" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </i>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-xl-2 d-lg-block d-none ms-xl-auto order-2">
                <div class="comp-105-filters-search">
                    <form action="<?= $APPLICATION->GetCurPage() ?>" id="search-form">
                        <input type="text" name="q" placeholder="Поиск" value="<?= htmlspecialcharsbx($_REQUEST['q'] ?? '') ?>">
                        <button type="submit"><i> <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17" fill="none"> <path d="M13.1933 7.10018C13.1933 10.4648 10.4648 13.1933 7.10018 13.1933C3.73554 13.1933 1 10.4648 1 7.10018C1 3.73554 3.72847 1 7.09311 1C10.4577 1 13.1862 3.72847 13.1862 7.10018H13.1933Z" stroke="white" stroke-width="1.41371" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11.4062 11.4043L16.0008 15.9989" stroke="white" stroke-width="1.41371" stroke-linecap="round" stroke-linejoin="round"></path> </svg> </i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo '<!-- DEBUG: arResult ITEMS structure -->';
foreach ($arResult['ITEMS'] as $id => $item) {
    echo "<!-- ITEM $id: CODE = " . ($item['CODE'] ?? 'NO_CODE') . " -->";
    if (isset($item['VALUES'])) {
        foreach ($item['VALUES'] as $key => $value) {
            echo "<!-- VALUE $key: CONTROL_NAME = " . ($value['CONTROL_NAME'] ?? 'NO_CONTROL_NAME') . " -->";
        }
    }
}
?>
<script>
class AjaxFilterPaginator {
    constructor(options = {}) {
        this.options = {
            containerSelector: options.containerSelector || '#ajax-news-container',
            filterSelector: options.filterSelector || '#product-filters',
            paginationSelector: options.paginationSelector || '#news-pagination',
            loadingClass: options.loadingClass || 'loading',
            autoApply: options.autoApply || true
        };
        
        this.currentPage = 1;
        this.currentFilter = {};
        this.isLoading = false;
        this.debounceTimer = null;
        
        this.init();
    }
    
    init() {
        this.bindFilterEvents();
        this.bindPaginationEvents();
        this.bindSearchEvents();
        this.initUrlState();
        this.initAccordions();
    }
    
    bindFilterEvents() {
        const filterForm = document.querySelector(this.options.filterSelector);
        const resetBtn = document.getElementById('reset-section-filter');
        
        if (this.options.autoApply) {
            document.querySelectorAll('.smartfilter-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    this.debouncedApplyFilter(1);
                });
            });
        }
        
        if (resetBtn) {
            resetBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.resetFilter();
            });
        }
    }
    
    bindSearchEvents() {
        const searchForm = document.getElementById('search-form');
        if (searchForm) {
            searchForm.addEventListener('submit', (e) => {
                e.preventDefault();
                this.applySearch();
            });
        }
    }
    
    bindPaginationEvents() {
        document.addEventListener('click', (e) => {
            const paginationLink = e.target.closest('.pagination-btn, .page-link');
            if (paginationLink && !paginationLink.classList.contains('current-page')) {
                e.preventDefault();
                const page = parseInt(paginationLink.dataset.page) || parseInt(paginationLink.textContent);
                if (page && !this.isLoading) {
                    this.loadPage(page);
                }
            }
        });
    }
    
    initAccordions() {
        document.querySelectorAll('.comp-105-filters-body-item-title a').forEach(title => {
            title.addEventListener('click', (e) => {
                e.preventDefault();
                const parent = title.closest('.comp-105-filters-body-item');
                parent.classList.toggle('active');
            });
        });
    }
    
    debouncedApplyFilter(page = 1) {
        if (this.debounceTimer) {
            clearTimeout(this.debounceTimer);
        }
        
        this.debounceTimer = setTimeout(() => {
            this.applyFilter(page);
        }, 500);
    }
    
    applyFilter(page = 1) {
        this.showLoading();
        
        const formData = new FormData();
        formData.append('ajax_filter', 'y');
        
        const filterData = this.collectFilterData();
        Object.keys(filterData).forEach(key => {
            if (Array.isArray(filterData[key])) {
                filterData[key].forEach(value => {
                    formData.append(`${key}[]`, value);
                });
            } else {
                formData.append(key, filterData[key]);
            }
        });
        
        this.currentFilter = filterData;
        this.currentPage = page;
        
        this.sendRequest(formData)
            .then(html => this.processFilterResponse(html))
            .catch(error => this.handleError(error));
    }
    
    applySearch() {
        const searchForm = document.getElementById('search-form');
        const searchInput = searchForm.querySelector('input[name="q"]');
        
        this.showLoading();
        
        const formData = new FormData();
        formData.append('ajax_filter', 'y');
        formData.append('q', searchInput.value);
        
        const filterData = this.collectFilterData();
        Object.keys(filterData).forEach(key => {
            if (key !== 'q' && Array.isArray(filterData[key])) {
                filterData[key].forEach(value => {
                    formData.append(`${key}[]`, value);
                });
            }
        });
        
        this.currentFilter = { ...filterData, q: searchInput.value };
        this.currentPage = 1;
        
        this.sendRequest(formData)
            .then(html => this.processFilterResponse(html))
            .catch(error => this.handleError(error));
    }
    
collectFilterData() {
    const data = {};
    
    // Собираем все чекбоксы через их CONTROL_NAME
    document.querySelectorAll('.smartfilter-checkbox:checked').forEach(checkbox => {
        const controlName = checkbox.name;
        
        // Если это массив (checkbox с [])
        if (controlName.includes('[]')) {
            const baseName = controlName.replace('[]', '');
            if (!data[baseName]) {
                data[baseName] = [];
            }
            data[baseName].push(checkbox.value);
        } else {
            // Одиночное значение
            data[controlName] = checkbox.value;
        }
    });
    
    // Поиск
    const searchInput = document.querySelector('input[name="q"]');
    if (searchInput && searchInput.value) {
        data.q = searchInput.value;
    }
    
    return data;
}
    
    resetFilter() {
        this.showLoading();
        
        document.querySelectorAll('.smartfilter-checkbox').forEach(checkbox => {
            checkbox.checked = false;
        });
        
        const searchInput = document.querySelector('input[name="q"]');
        if (searchInput) {
            searchInput.value = '';
        }
        
        const formData = new FormData();
        formData.append('ajax_filter', 'y');
        formData.append('del_filter', 'Y');
        
        this.currentFilter = {};
        this.currentPage = 1;
        
        this.sendRequest(formData)
            .then(html => this.processFilterResponse(html))
            .catch(error => this.handleError(error));
    }
    
    loadPage(page) {
        if (this.isLoading) return;
        
        this.showLoading();
        this.currentPage = page;
        
        const formData = new FormData();
        formData.append('ajax_page', 'y');
        
        Object.keys(this.currentFilter).forEach(key => {
            if (Array.isArray(this.currentFilter[key])) {
                this.currentFilter[key].forEach(value => {
                    formData.append(`${key}[]`, value);
                });
            } else {
                formData.append(key, this.currentFilter[key]);
            }
        });
        
        formData.append('PAGEN_1', page);
        
        this.sendRequest(formData)
            .then(html => this.processPageResponse(html))
            .catch(error => this.handleError(error));
    }
    
   sendRequest(formData) {
    this.isLoading = true;
    this.showLoading();
    
    return fetch(window.location.href, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => {
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        return response.text();
    })
    .catch(error => {
        console.error('AJAX request failed:', error);
        this.handleError(error);
        throw error;
    })
    .finally(() => {
        this.isLoading = false;
        this.hideLoading();
    });
}
    processFilterResponse(html) {
    const parser = new DOMParser();
    const doc = parser.parseFromString(html, 'text/html');
    
    // Сохраняем текущее состояние чекбоксов
    const currentState = {};
    document.querySelectorAll('.smartfilter-checkbox:checked').forEach(cb => {
        currentState[cb.id] = true;
    });
    
    // Обновляем контейнеры
    const productsContainer = doc.querySelector(this.options.containerSelector);
    if (productsContainer) {
        document.querySelector(this.options.containerSelector).innerHTML = productsContainer.innerHTML;
    }
    
    const filterContainer = doc.querySelector('#ajax-filter-container');
    if (filterContainer) {
        document.querySelector('#ajax-filter-container').innerHTML = filterContainer.innerHTML;
        
        // Восстанавливаем состояние чекбоксов
        Object.keys(currentState).forEach(checkboxId => {
            const checkbox = document.getElementById(checkboxId);
            if (checkbox) {
                checkbox.checked = true;
            }
        });
        
        this.bindFilterEvents();
        this.initAccordions();
    }
    
    this.updateUrl();
    this.scrollToContent();
}
    
    processPageResponse(html) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        
        const productsItems = doc.querySelector('#products-list-items');
        const pagination = doc.querySelector(this.options.paginationSelector);
        
        if (productsItems) {
            document.querySelector('#products-list-items').innerHTML = productsItems.innerHTML;
        }
        
        if (pagination) {
            document.querySelector(this.options.paginationSelector).innerHTML = pagination.innerHTML;
            this.bindPaginationEvents();
        }
        
        this.updateUrl();
        this.scrollToContent();
    }
    
    updateUrl() {
        const params = new URLSearchParams();
        
        Object.keys(this.currentFilter).forEach(key => {
            if (Array.isArray(this.currentFilter[key])) {
                this.currentFilter[key].forEach(value => {
                    params.append(`${key}[]`, value);
                });
            } else {
                params.append(key, this.currentFilter[key]);
            }
        });
        
        if (this.currentPage > 1) {
            params.append('PAGEN_1', this.currentPage);
        }
        
        const newUrl = params.toString() 
            ? `${window.location.pathname}?${params.toString()}`
            : window.location.pathname;
            
        window.history.replaceState({}, '', newUrl);
    }
    
    initUrlState() {
        const urlParams = new URLSearchParams(window.location.search);
        
        const filterData = {};
        
        const categories = urlParams.getAll('product_category[]');
        if (categories.length > 0) {
            filterData.product_category = categories;
            categories.forEach(categoryId => {
                const checkbox = document.querySelector(`input[name="product_category[]"][value="${categoryId}"]`);
                if (checkbox) checkbox.checked = true;
            });
        }
        
        const propertyCodes = ['PRODUCT_FAMILY', 'AREA_OF_USE', 'RESOURCE_CATEGORY', 'DATA_TYPE'];
        propertyCodes.forEach(code => {
            const values = urlParams.getAll(`${code}[]`);
            if (values.length > 0) {
                filterData[code] = values;
                values.forEach(value => {
                    const checkbox = document.querySelector(`input[name="${code}[]"][value="${value}"]`);
                    if (checkbox) checkbox.checked = true;
                });
            }
        });
        
        const searchQuery = urlParams.get('q');
        if (searchQuery) {
            filterData.q = searchQuery;
            const searchInput = document.querySelector('input[name="q"]');
            if (searchInput) searchInput.value = searchQuery;
        }
        
        this.currentFilter = filterData;
        
        const page = urlParams.get('PAGEN_1');
        if (page) {
            this.currentPage = parseInt(page);
            setTimeout(() => this.loadPage(this.currentPage), 100);
        } else if (Object.keys(filterData).length > 0) {
            setTimeout(() => this.applyFilter(1), 100);
        }
    }
    
    showLoading() {
        document.body.classList.add(this.options.loadingClass);
        const container = document.querySelector(this.options.containerSelector);
        if (container) {
            container.style.opacity = '0.7';
            container.style.pointerEvents = 'none';
        }
    }
    
    hideLoading() {
        document.body.classList.remove(this.options.loadingClass);
        const container = document.querySelector(this.options.containerSelector);
        if (container) {
            container.style.opacity = '';
            container.style.pointerEvents = '';
        }
    }
    
    scrollToContent() {
        const contentContainer = document.querySelector(this.options.containerSelector);
        if (contentContainer) {
            contentContainer.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start' 
            });
        }
    }
    
    handleError(error) {
        console.error('AJAX error:', error);
        alert('Произошла ошибка при загрузке данных. Пожалуйста, попробуйте еще раз.');
    }
}

document.addEventListener('DOMContentLoaded', function() {
    window.ajaxPaginator = new AjaxFilterPaginator({
        containerSelector: '#ajax-products-container',
        filterSelector: '#product-filters',
        paginationSelector: '#products-pagination',
        autoApply: true,
        loadingClass: 'page-loading'
    });
});
</script>