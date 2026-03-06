jQuery( document ).ready(function() {
    const $window = jQuery(window);
    const $header = jQuery('.header').first();
    const $body = jQuery('body');
    const $catalogFilterButton = jQuery('.comp-24-filters-main-btn');
    const $catalogFilterBody = jQuery('.comp-24-filters-body');
    const $catalogContentColumn = jQuery('.comp-24-body > .row > .col-12');

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

    if ($header.length) {
        const syncHeaderOffset = function() {
            const headerHeight = $header.outerHeight();
            $body.css('padding-top', headerHeight + 'px');
        };

        syncHeaderOffset();
        $window.on('resize', syncHeaderOffset);
    }

    syncCatalogFilterLayout();
    $window.on('resize', syncCatalogFilterLayout);

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
	    $catalogFilterButton.on('click', function() {
		jQuery(this).toggleClass("show");
		$catalogFilterBody.toggleClass("show");
        syncCatalogFilterLayout();
	})

	jQuery('.comp-24-filters-body-item-title').on('click', function() {
		jQuery(this).closest(".comp-24-filters-body-item").find(".comp-24-filters-body-item-list").first().toggleClass("show")
	})
    
    jQuery('.bx_filter_input_checkbox input, label').on('change' , function (params) {
        jQuery('.bx_filter_search_button').trigger('click');
    })
   
    jQuery('.selected-filters-item label').on('click', function () {
        jQuery('input[name="' + jQuery(this).attr('fore') + '"]').trigger('click');
    })

});
