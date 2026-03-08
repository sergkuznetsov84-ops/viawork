(function() {
    function syncBodyScrollLock() {
        document.body.classList.toggle(
            "sm-md-overflow-none",
            document.querySelector(".header.show") !== null
        );
    }

    function resetHeaderState(header) {
        if (!header) {
            return;
        }

        header.classList.remove("show", "mobile-dropdown");

        header.querySelectorAll(".nav-list-item-link.active").forEach(function(link) {
            link.classList.remove("active");
        });
        header.querySelectorAll(".nav-list-item-dropdown.show").forEach(function(dropdown) {
            dropdown.classList.remove("show");
        });
        header.querySelectorAll(".search-btn.active").forEach(function(button) {
            button.classList.remove("active");
        });
        header.querySelectorAll(".search-dropdown.show").forEach(function(dropdown) {
            dropdown.classList.remove("show");
        });
        header.querySelectorAll(".language-btn.active").forEach(function(button) {
            button.classList.remove("active");
        });
        header.querySelectorAll(".language-dropdown.show").forEach(function(dropdown) {
            dropdown.classList.remove("show");
        });
        header.querySelectorAll(".nav-list-item-dropdown-item-body-mobile.show").forEach(function(panel) {
            panel.classList.remove("show");
        });
    }

    document.addEventListener("click", function(event) {
        var burger = event.target.closest(".header .header-bars");

        if (!burger) {
            return;
        }

        event.preventDefault();
        event.stopImmediatePropagation();

        var currentHeader = burger.closest(".header");
        var shouldOpen = !currentHeader.classList.contains("show");

        document.querySelectorAll(".header.show").forEach(function(header) {
            if (header !== currentHeader) {
                resetHeaderState(header);
            }
        });

        currentHeader.querySelectorAll(".language-btn.active").forEach(function(button) {
            button.classList.remove("active");
        });
        currentHeader.querySelectorAll(".language-dropdown.show").forEach(function(dropdown) {
            dropdown.classList.remove("show");
        });
        currentHeader.querySelectorAll(".search-btn.active").forEach(function(button) {
            button.classList.remove("active");
        });
        currentHeader.querySelectorAll(".search-dropdown.show").forEach(function(dropdown) {
            dropdown.classList.remove("show");
        });

        currentHeader.classList.toggle("show", shouldOpen);
        currentHeader.classList.remove("mobile-dropdown");

        syncBodyScrollLock();
    }, true);

    document.addEventListener("click", function(event) {
        var closeButton = event.target.closest(".header .header-bars-right");

        if (!closeButton) {
            return;
        }

        event.preventDefault();
        event.stopImmediatePropagation();

        resetHeaderState(closeButton.closest(".header"));
        syncBodyScrollLock();
    }, true);
})();
