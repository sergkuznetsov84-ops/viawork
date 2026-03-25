jQuery(document).ready(function($) {
    let sortBy = '2';
    let ajaxRequest = null;

    // Открытие/закрытие дропдауна сортировки
    $('.active-sort').on('click', function() {
        $('.comp-24-filters-sort').toggleClass('show');
    });

    // Выбор сортировки
    $('.comp-24-filters-sort-options a').on('click', function(e) {
        e.preventDefault();

        const newSort = $(this).attr('id').replace('sort-option_', '');

        if (newSort === sortBy) {
            $('.comp-24-filters-sort').removeClass('show');
            return;
        }

        sortBy = newSort;

        // Обновляем текст активной сортировки
        $('.active-sort a').text($(this).text());

        // Закрываем дропдаун
        $('.comp-24-filters-sort').removeClass('show');

        // Запускаем AJAX
        loadProductsWithSort();
    });

    // ====================== AJAX ДЛЯ БИТРИКС ======================
    function loadProductsWithSort() {
        if (ajaxRequest && ajaxRequest.readyState !== 4) {
            ajaxRequest.abort();
        }

        const $body = $('.comp-24-body');
        $body.addClass('loading');
        $('.loading-spinner').fadeIn(200);

        ajaxRequest = $.ajax({
            url: '/local/ajax/catalog_sort.php',
            type: 'POST',
            data: {
                sort: sortBy,
                SECTION_ID: window.currentSectionId || ''
            },
            success: function(html) {
                // Превращаем полученный HTML в jQuery объект
                const $newContent = $('<div>').html(html);

                // === ЗАМЕНА .comp-24-body-cards ===
                const $newCards = $newContent.find('.comp-24-body-cards');
                if ($newCards.length) {
                    const $existingCards = $body.find('.comp-24-body-cards');
                    if ($existingCards.length) {
                        $existingCards.replaceWith($newCards);
                    } else {
                        // Если по какой-то причине нет — добавляем в .row
                        let $row = $body.find('.row');
                        if ($row.length === 0) $row = $('<div class="row"></div>').appendTo($body);
                        $row.append($newCards);
                    }
                }

                // === ЗАМЕНА ПАГИНАЦИИ ===
                const $newPagination = $newContent.find('.comp-24-pagination');
                if ($newPagination.length) {
                    const $existingPagination = $body.find('.comp-24-pagination');
                    if ($existingPagination.length) {
                        $existingPagination.replaceWith($newPagination);
                    } else {
                        $body.append($newPagination);
                    }
                }

                // Удаляем возможные лишние <br>, которые часто приходят из Битрикс
                $body.find('br').remove();

                // Убираем состояние загрузки
                $body.removeClass('loading');
                $('.loading-spinner').fadeOut(200);
            },

            error: function(xhr, status) {
                if (status !== 'abort') {
                    console.error('Sort AJAX error:', status);
                }
                $body.removeClass('loading');
                $('.loading-spinner').fadeOut(200);
            }
        });
    }

    // Закрытие дропдауна при клике вне
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.comp-24-filters-sort').length) {
            $('.comp-24-filters-sort').removeClass('show');
        }
    });

    // Восстановление сортировки из URL
    const urlParams = new URLSearchParams(window.location.search);
    const urlSort = urlParams.get('sort');
    if (urlSort) {
        sortBy = urlSort;
        const $opt = $('#sort-option_' + sortBy);
        if ($opt.length) $('.active-sort a').text($opt.text());
    }
});