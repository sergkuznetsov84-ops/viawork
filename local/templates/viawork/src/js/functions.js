jQuery( document ).ready(function() {
    const $window = jQuery(window);
    const $catalogFilterButton = jQuery('.comp-24-filters-main-btn');
    const $catalogFilterBody = jQuery('.comp-24-filters-body');
    const $catalogFilterMobileBody = jQuery('.comp-24-filters-body-mobile');
    const $catalogContentColumn = jQuery('.comp-24-body > .row > .col-12');
    const $catalogFilterOverlay = jQuery('.comp-24-filters .mobile-overlay');
    const $catalogFiltersRoot = jQuery('.comp-24-filters').first();
    const isMobileCatalogFilter = function() {
        return window.matchMedia('(max-width: 991px)').matches;
    };

    const mountMobileCatalogFilter = function() {
        if (!$catalogFilterMobileBody.length || !$catalogFiltersRoot.length) {
            return;
        }

        if (!$catalogFilterMobileBody.parent().is($catalogFiltersRoot)) {
            $catalogFilterMobileBody.appendTo($catalogFiltersRoot);
        }
    };

    const closeMobileCatalogFilter = function() {
        $catalogFilterButton.removeClass('show');
        $catalogFilterMobileBody.removeClass('show');
        $catalogFilterMobileBody.find('.comp-24-filters-body-mobile-content-item-list.show').removeClass('show');
        $catalogFilterOverlay.removeClass('active');
        jQuery('body').removeClass('sm-md-overflow-none');
    };

    const openMobileCatalogFilter = function() {
        $catalogFilterButton.addClass('show');
        $catalogFilterMobileBody.addClass('show');
        $catalogFilterOverlay.addClass('active');
        jQuery('body').addClass('sm-md-overflow-none');
    };

    const syncMobileCatalogFilterState = function() {
        if (!$catalogFilterMobileBody.length) {
            return;
        }

        let checkedCount = 0;
        const selectedItems = [];

        $catalogFilterMobileBody.find('.mobile-filter-option').each(function() {
            const $option = jQuery(this);
            const checkboxId = $option.data('checkbox-id');
            const $checkbox = jQuery('#' + checkboxId);
            const isChecked = $checkbox.is(':checked');

            $option.toggleClass('active', isChecked);

            if (isChecked) {
                checkedCount += 1;
                selectedItems.push(
                    '<div class="selected-filters-item">' +
                        '<span>' + $option.data('filter-value') + '</span>' +
                        '<i data-checkbox-id="' + checkboxId + '">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8" fill="none">' +
                                '<path d="M1 1L7 7" stroke="white" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>' +
                                '<path d="M7 1L1 7" stroke="white" stroke-width="0.548446" stroke-linecap="round" stroke-linejoin="round"></path>' +
                            '</svg>' +
                        '</i>' +
                    '</div>'
                );
            }
        });

        $catalogFilterMobileBody.find('.mobile-filter-apply-count').text(checkedCount);
        $catalogFilterMobileBody.find('.comp-24-filters-body-mobile-selected-filters')
            .toggleClass('show', checkedCount > 0)
            .html(selectedItems.join(''));
        $catalogFilterMobileBody.find('.comp-24-filters-body-mobile-footer .clear-btn').toggleClass('show', checkedCount > 0);
    };

    const syncCatalogFilterLayout = function() {
        if (!$catalogFilterButton.length || !$catalogContentColumn.length) {
            return;
        }

        if (window.matchMedia('(min-width: 992px)').matches && $catalogFilterButton.hasClass('show')) {
            $catalogContentColumn.addClass('col-lg-9 offset-lg-3');
        } else {
            $catalogContentColumn.removeClass('col-lg-9 offset-lg-3');
        }
    };

    syncCatalogFilterLayout();
    mountMobileCatalogFilter();
    syncMobileCatalogFilterState();
    $window.on('resize', function() {
        mountMobileCatalogFilter();
        if (!isMobileCatalogFilter()) {
            closeMobileCatalogFilter();
        }
        syncCatalogFilterLayout();
    });

	    jQuery( document ).ready(function() {
			jQuery('.active-sort').on('click',function() {
				jQuery(".comp-24-filters-sort").toggleClass("show")
			})
	});
    jQuery('.option-odd').on('click',function() {
        jQuery(".comp-24-filters-view-options a").removeClass("active");
        jQuery(this).addClass('active');
        jQuery('.comp-24-body-cards').removeClass('grid-view');
        jQuery('.comp-24-body-cards').addClass('list-view');
        jQuery('.comp-24-body-cards').addClass('odd-view');
    })
    jQuery('.option-even').on('click',function() {
        jQuery(".comp-24-filters-view-options a").removeClass("active");
        jQuery(this).addClass('active');
        jQuery('.comp-24-body-cards').removeClass('list-view');
        jQuery('.comp-24-body-cards').removeClass('odd-view');
        jQuery('.comp-24-body-cards').addClass('grid-view');
    })
	    $catalogFilterButton.on('click', function(event) {
        if (isMobileCatalogFilter()) {
            event.preventDefault();
            event.stopImmediatePropagation();

            if ($catalogFilterMobileBody.hasClass('show')) {
                closeMobileCatalogFilter();
            } else {
                openMobileCatalogFilter();
            }

            return false;
        }

		jQuery(this).toggleClass("show");
		$catalogFilterBody.toggleClass("show");
        syncCatalogFilterLayout();
	});

    jQuery(document).on('click', '.comp-24-mobile-filter-close', function(event) {
        event.preventDefault();
        closeMobileCatalogFilter();
    });

    jQuery(document).on('click', '.comp-24-filters-body-mobile-head .close-btn, .comp-24-filters-body-mobile-content-item-list .close-btn', function(event) {
        event.preventDefault();
        closeMobileCatalogFilter();
    });

    jQuery(document).on('click', '.comp-24-filters-body-mobile-content-item-head', function() {
        jQuery(this).siblings('.comp-24-filters-body-mobile-content-item-list').addClass('show');
    });

    jQuery(document).on('click', '.comp-24-filters-body-mobile-content-item-list .back-btn', function(event) {
        event.preventDefault();
        jQuery(this).closest('.comp-24-filters-body-mobile-content-item-list').removeClass('show');
    });

    jQuery(document).on('click', '.mobile-filter-option', function(event) {
        const $option = jQuery(this);
        const checkboxId = $option.data('checkbox-id');
        const $checkbox = jQuery('#' + checkboxId);

        event.preventDefault();

        if (!$checkbox.length) {
            return;
        }

        $checkbox.prop('checked', !$checkbox.is(':checked')).trigger('change');
        syncMobileCatalogFilterState();
    });

    jQuery(document).on('click', '.mobile-filter-apply-btn', function(event) {
        event.preventDefault();
        $catalogFilterBody.find('.bx_filter_search_button').first().trigger('click');
    });

    jQuery(document).on('click', '.mobile-filter-clear-btn', function(event) {
        event.preventDefault();
        $catalogFilterBody.find('.bx_filter_input_checkbox input:checked').prop('checked', false);
        syncMobileCatalogFilterState();
    });

    jQuery(document).on('click', '.comp-24-filters-body-mobile-selected-filters i', function() {
        const checkboxId = jQuery(this).data('checkbox-id');
        const $checkbox = jQuery('#' + checkboxId);

        if (!$checkbox.length) {
            return;
        }

        $checkbox.prop('checked', false).trigger('change');
        syncMobileCatalogFilterState();
    });

    $catalogFilterOverlay.on('click', function() {
        closeMobileCatalogFilter();
    });

	jQuery('.comp-24-filters-body-item-title').on('click', function() {
		jQuery(this).closest(".comp-24-filters-body-item").find(".comp-24-filters-body-item-list").first().toggleClass("show")
	})
    
    jQuery('.bx_filter_input_checkbox input, label').on('change' , function (params) {
        if (isMobileCatalogFilter()) {
            syncMobileCatalogFilterState();
            return;
        }

        jQuery('.bx_filter_search_button').trigger('click');
    })
   
    jQuery('.selected-filters-item label').on('click', function () {
        jQuery('input[name="' + jQuery(this).attr('fore') + '"]').trigger('click');
    })

});
