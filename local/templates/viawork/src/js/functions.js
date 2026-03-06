jQuery( document ).ready(function() {
    const $window = jQuery(window);
    const $header = jQuery('.header').first();
    const $body = jQuery('body');

    if ($header.length) {
        const toggleFixedHeader = function() {
            const scrollTop = $window.scrollTop();
            const headerHeight = $header.outerHeight();
            const isFixed = scrollTop > 120;

            $header.toggleClass('is-fixed', isFixed);
            $body.css('padding-top', isFixed ? headerHeight + 'px' : '');
        };

        toggleFixedHeader();
        $window.on('scroll resize', toggleFixedHeader);
    }

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
    jQuery('.comp-24-filters-main-btn').on('click', function() {
		jQuery(this).toggleClass("show"), jQuery(".comp-24-filters-body").toggleClass("show")
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
