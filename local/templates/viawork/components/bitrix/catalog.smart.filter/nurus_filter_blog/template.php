<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/colors.css',
	'TEMPLATE_CLASS' => 'bx-'.$arParams['TEMPLATE_THEME']
);

if (isset($templateData['TEMPLATE_THEME']))
{
	$this->addExternalCss($templateData['TEMPLATE_THEME']);
}
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
$this->addExternalCss("/bitrix/css/main/font-awesome.css");
?>
	
<div class="col-lg-2 offset-xl-1"  id="ajax-filter-container">
					<div class="comp-47-sidebar show" >
						<div class="comp-47-sidebar-title" >
							<span>Filter By Category</span>
							<i>
								<svg xmlns="http://www.w3.org/2000/svg" width="15" height="8" viewBox="0 0 15 8" fill="none">
									<path d="M13.6992 7.34961L7.34894 0.999329L0.998658 7.34961" stroke="#25282A" stroke-miterlimit="10"></path>
								</svg>
							</i>
						</div>
		<form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get" class="smartfilter">
			<?foreach($arResult["HIDDEN"] as $arItem):?>
			<input type="hidden" name="<?echo $arItem["CONTROL_NAME"]?>" id="<?echo $arItem["CONTROL_ID"]?>" value="<?echo $arItem["HTML_VALUE"]?>" />
			<?endforeach;?>
			<div class="row">
				<?	$arSections = [];
				$rsSections = CIBlockSection::GetList(
					['SORT' => 'ASC', 'NAME' => 'ASC'],
					[
						'IBLOCK_ID' => $arParams['IBLOCK_ID'],
						'ACTIVE' => 'Y',
						'GLOBAL_ACTIVE' => 'Y',
					],
					false,
					['ID', 'NAME', 'CODE', 'SECTION_PAGE_URL']
				);

				while ($arSection = $rsSections->Fetch()) {
					$arFilter = [
						'IBLOCK_ID' => $arParams['IBLOCK_ID'],
						'SECTION_ID' => $arSection['ID'],
						'INCLUDE_SUBSECTIONS' => 'Y',
						'ACTIVE' => 'Y',
						'ACTIVE_DATE' => 'Y',
					];
					$count = CIBlockElement::GetList([], $arFilter, []);
					$arSection['ELEMENT_COUNT'] = $count;
					$arSections[$arSection['ID']] = $arSection;
				}

				$selectedSections = [];
				if (!empty($_REQUEST['arrFilter_SECTION_BINDING'])) {
					$selectedSections = $_REQUEST['arrFilter_SECTION_BINDING'];
					if (!is_array($selectedSections)) {
						$selectedSections = [$selectedSections];
					}
				}
				?>

				<!-- Блок фильтрации по разделам -->
				<ul>
					<? foreach ($arSections as $section){ ?>
						<li><input type="checkbox" name="arrFilter_SECTION_BINDING[]" value="<?= $section['ID'] ?>"	<?= (in_array($section['ID'], $selectedSections)) ? 'checked="checked"' : '' ?>  onclick="this.form.submit()" id="<?= $section['ID'] ?>">
							<label for="<?= $section['ID'] ?>"><?= $section['NAME'] ?> (<?= $section['ELEMENT_COUNT'] ?>)</label>
						</li>	
					<? }; ?>
				</ul>

			</div><!--//row-->
		</form>
	</div>
</div>
<script>
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>

<script>

class AjaxFilterPaginator {
    constructor(options = {}) {
        this.options = {
            containerSelector: options.containerSelector || '#ajax-news-container',
            filterSelector: options.filterSelector || '#section-filter',
            paginationSelector: options.paginationSelector || '#news-pagination',
            loadingClass: options.loadingClass || 'loading',
 
        };
        
        this.currentPage = 1;
        this.currentFilter = {};
        this.isLoading = false;
        
        this.init();
    }
    
    init() {
        this.bindFilterEvents();
        this.bindPaginationEvents();
        this.initUrlState();
    }
    
    bindFilterEvents() {
        const filterForm = document.querySelector(`${this.options.filterSelector} form`);
        const applyBtn = document.getElementById('apply-section-filter');
        const resetBtn = document.getElementById('reset-section-filter');
        
        if (applyBtn) {
            applyBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.applyFilter(1); // Сбрасываем на первую страницу
            });
        }
        
        if (resetBtn) {
            resetBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.resetFilter();
            });
        }
        
        // Авто-применение при изменении чекбоксов (опционально)
        if (this.options.autoApply) {
            document.querySelectorAll('.smartfilter-section-checkbox').forEach(checkbox => {
                checkbox.addEventListener('change', () => {
                    setTimeout(() => this.applyFilter(1), 300);
                });
            });
        }
    }
    
    bindPaginationEvents() {
        // Делегирование событий для пагинации
        document.addEventListener('click', (e) => {
            const paginationLink = e.target.closest('.pagination-btn');
            if (paginationLink && !paginationLink.classList.contains('current-page')) {
                e.preventDefault();
                const page = parseInt(paginationLink.dataset.page);
                if (page && !this.isLoading) {
                    this.loadPage(page);
                }
            }
        });
    }
    
    initPagination() {
        // Переинициализация после AJAX-загрузки
        this.bindPaginationEvents();
    }
    
    applyFilter(page = 1) {
        this.showLoading();
        
        const formData = new FormData();
        formData.append('ajax_filter', 'y');
        
        // Собираем данные фильтра
        const checkboxes = document.querySelectorAll('.smartfilter-section-checkbox:checked');
        checkboxes.forEach(checkbox => {
            formData.append('arrFilter_SECTION_BINDING[]', checkbox.value);
        });
        
        // Сохраняем текущий фильтр
        this.currentFilter = {
            sections: Array.from(checkboxes).map(cb => cb.value)
        };
        
        this.currentPage = page;
        
        this.sendRequest(formData)
            .then(html => this.processFilterResponse(html))
            .catch(error => this.handleError(error));
    }
    
    resetFilter() {
        this.showLoading();
        
        // Сбрасываем чекбоксы
        document.querySelectorAll('.smartfilter-section-checkbox').forEach(checkbox => {
            checkbox.checked = false;
        });
        
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
        
        // Добавляем параметры фильтра
        if (this.currentFilter.sections && this.currentFilter.sections.length > 0) {
            this.currentFilter.sections.forEach(sectionId => {
                formData.append('arrFilter_SECTION_BINDING[]', sectionId);
            });
        }
        
        // Добавляем параметр страницы
        formData.append('PAGEN_1', page);
        
        this.sendRequest(formData)
            .then(html => this.processPageResponse(html))
            .catch(error => this.handleError(error));
    }
    
    sendRequest(formData) {
        this.isLoading = true;
        
        return fetch(window.location.href, {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => {
            if (!response.ok) throw new Error('Network error');
            return response.text();
        })
        .finally(() => {
            this.isLoading = false;
            this.hideLoading();
        });
    }
    
    processFilterResponse(html) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        
        // Обновляем контейнер с новостями
        const newsContainer = doc.querySelector(this.options.containerSelector);
        if (newsContainer) {
            document.querySelector(this.options.containerSelector).innerHTML = newsContainer.innerHTML;
        }
        
        // Обновляем фильтр
        const filterContainer = doc.querySelector('#ajax-filter-container');
        if (filterContainer) {
            document.querySelector('#ajax-filter-container').innerHTML = filterContainer.innerHTML;
            this.bindFilterEvents(); // Перепривязываем события
        }
        
        this.updateUrl();
        this.initPagination();
        this.scrollToNews();
    }
    
    processPageResponse(html) {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, 'text/html');
        
        // Заменяем только контент новостей
        const newsItems = doc.querySelector('#news-list-items');
        const pagination = doc.querySelector(this.options.paginationSelector);
        
        if (newsItems) {
            document.querySelector('#news-list-items').innerHTML = newsItems.innerHTML;
        }
        
        if (pagination) {
            document.querySelector(this.options.paginationSelector).innerHTML = pagination.innerHTML;
            this.initPagination(); // Переинициализируем пагинацию
        }
        
        this.updateUrl();
        this.scrollToNews();
    }
    
    updateUrl() {
        const params = new URLSearchParams();
        
        // Добавляем параметры фильтра
        if (this.currentFilter.sections) {
            this.currentFilter.sections.forEach(sectionId => {
                params.append('arrFilter_SECTION_BINDING[]', sectionId);
            });
        }
        
        // Добавляем страницу, если не первая
        if (this.currentPage > 1) {
            params.append('PAGEN_1', this.currentPage);
        }
        
        const newUrl = params.toString() 
            ? `${window.location.pathname}?${params.toString()}`
            : window.location.pathname;
            
        window.history.replaceState({}, '', newUrl);
    }
    
    initUrlState() {
        // Восстанавливаем состояние из URL
        const urlParams = new URLSearchParams(window.location.search);
        
        // Восстанавливаем фильтр
        const sections = urlParams.getAll('arrFilter_SECTION_BINDING[]');
        if (sections.length > 0) {
            this.currentFilter.sections = sections;
            sections.forEach(sectionId => {
                const checkbox = document.querySelector(`.smartfilter-section-checkbox[value="${sectionId}"]`);
                if (checkbox) checkbox.checked = true;
            });
        }
        
        // Восстанавливаем страницу
        const page = urlParams.get('PAGEN_1');
        if (page) {
            this.currentPage = parseInt(page);
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
    
    scrollToNews() {
        const newsContainer = document.querySelector(this.options.containerSelector);
        if (newsContainer) {
            newsContainer.scrollIntoView({ 
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

// Инициализация
document.addEventListener('DOMContentLoaded', function() {
    window.ajaxPaginator = new AjaxFilterPaginator({
        containerSelector: '#ajax-news-container',
        filterSelector: '#section-filter',
        paginationSelector: '#news-pagination',
        autoApply: false, // true для автоматического применения фильтра
        loadingClass: 'page-loading'
    });
});
</script>