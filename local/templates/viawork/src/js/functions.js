jQuery( document ).ready(function() {
    const $window = jQuery(window);
    const $catalogFilterButton = jQuery('.comp-24-filters-main-btn');
    const $catalogFilterBody = jQuery('.comp-24-filters-body');
    const $catalogContentColumn = jQuery('.comp-24-body > .row > .col-12');
    const $catalogFilterOverlay = jQuery('.comp-24-filters .mobile-overlay');
    const isMobileCatalogFilter = function() {
        return window.matchMedia('(max-width: 991px)').matches;
    };

    const ensureMobileCatalogFilterShell = function() {
        if (!$catalogFilterBody.length || $catalogFilterBody.find('.comp-24-mobile-filter-head').length) {
            return;
        }

        const buttonLabel = $catalogFilterButton.find('span').first().text().trim() || 'Filter Products';

        $catalogFilterBody.prepend(
            '<div class="comp-24-mobile-filter-head">' +
                '<div class="comp-24-mobile-filter-title">' + buttonLabel + '</div>' +
                '<button type="button" class="comp-24-mobile-filter-close" aria-label="Close filter">' +
                    '<span></span><span></span>' +
                '</button>' +
            '</div>'
        );

        $catalogFilterBody.append(
            '<div class="comp-24-mobile-filter-footer">' +
                '<button type="button" class="comp-24-mobile-filter-apply">Apply</button>' +
            '</div>'
        );
    };

    const closeMobileCatalogFilter = function() {
        $catalogFilterButton.removeClass('show');
        $catalogFilterBody.removeClass('show mobile-sheet');
        $catalogFilterOverlay.removeClass('active');
        jQuery('body').removeClass('sm-md-overflow-none');
    };

    const openMobileCatalogFilter = function() {
        ensureMobileCatalogFilterShell();
        $catalogFilterButton.addClass('show');
        $catalogFilterBody.addClass('mobile-sheet show');
        $catalogFilterOverlay.addClass('active');
        jQuery('body').addClass('sm-md-overflow-none');
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
    $window.on('resize', function() {
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

            if ($catalogFilterBody.hasClass('show')) {
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

    jQuery(document).on('click', '.comp-24-mobile-filter-apply', function(event) {
        event.preventDefault();
        $catalogFilterBody.find('.bx_filter_search_button').first().trigger('click');
    });

    $catalogFilterOverlay.on('click', function() {
        closeMobileCatalogFilter();
    });

	jQuery('.comp-24-filters-body-item-title').on('click', function() {
		jQuery(this).closest(".comp-24-filters-body-item").find(".comp-24-filters-body-item-list").first().toggleClass("show")
	})
    
    jQuery('.bx_filter_input_checkbox input, label').on('change' , function (params) {
        if (isMobileCatalogFilter()) {
            return;
        }

        jQuery('.bx_filter_search_button').trigger('click');
    })
   
    jQuery('.selected-filters-item label').on('click', function () {
        jQuery('input[name="' + jQuery(this).attr('fore') + '"]').trigger('click');
    })

});
