(function() {
    function init() {
        const header = document.querySelector('header.header');
        const closeBtns = document.querySelectorAll('.header-bars-right'); 

        function forceFullReset() {
            if (header) {
                header.classList.remove('show', 'mobile-dropdown');
            }
            
            document.querySelectorAll('.catalog-col-item').forEach(col => {
                col.style.display = ''; 
            });

            document.querySelectorAll('.nav-list-item-dropdown-item-body-mobile.show').forEach(m => m.classList.remove('show'));
            
            const productsParent = document.querySelector('.dropdown-parent-item');
            if (productsParent) {
                productsParent.querySelector('.nav-list-item-link')?.classList.remove('active');
                productsParent.querySelector('.nav-list-item-dropdown')?.classList.remove('show');
            }
        }

        document.querySelector('.menu-trigger-products')?.addEventListener('click', function() {
            if (window.innerWidth <= 991 && header) {
                header.classList.add('mobile-dropdown');
                document.querySelectorAll('.catalog-col-item').forEach(c => c.style.display = '');
            }
        });

        document.querySelectorAll('.nav-list-item-dropdown-item-head').forEach(el => {
            el.addEventListener('click', function(e) {
                if (window.innerWidth <= 991) {
                    const mobileBody = this.closest('.nav-list-item-dropdown-item-wrapper').querySelector('.nav-list-item-dropdown-item-body-mobile');
                    if (mobileBody) {
                        e.preventDefault();
                        mobileBody.classList.add('show');
                    }
                }
            });
        });

        document.querySelectorAll('.inner-back-btn a, .back-btn a').forEach(el => {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                const deepMenu = this.closest('.nav-list-item-dropdown-item-body-mobile');
                if (deepMenu) {
                    deepMenu.classList.remove('show');
                    document.querySelectorAll('.catalog-col-item').forEach(c => c.style.display = '');
                } else {
                    header?.classList.remove('mobile-dropdown');
                }
            });
        });

        closeBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                setTimeout(forceFullReset, 50);
            });
        });
    }
    if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
    else init();
})();
