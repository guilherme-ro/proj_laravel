$(document).ready(function() {
    $(".nav-button").click(function() {
        $(".nav-button").toggleClass("change");
    });

    $(window).scroll(function() {
        let position = $(this).scrollTop();
        if (position >= 200) {
            $(".nav-menu").addClass("custom-navbar");
        } else {
            $(".nav-menu").removeClass("custom-navbar");
        }
    });

    // Get the current year for the copyright
    $("#year").text(new Date().getFullYear());

    // Init Scrollspy
    $("body").scrollspy({ target: "#main-nav" });

    // Smooth Scrolling
    $("#main-nav a").on("click", function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                800,
                function() {
                    window.location.hash = hash;
                }
            );
        }
    });

    $("#explore-head-section a").on("click", function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                800,
                function() {
                    window.location.hash = hash;
                }
            );
        }
    });

    $("#create-head-section a").on("click", function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                800,
                function() {
                    window.location.hash = hash;
                }
            );
        }
    });

    $("#main-footer a").on("click", function(event) {
        if (this.hash !== "") {
            event.preventDefault();

            const hash = this.hash;

            $("html, body").animate(
                {
                    scrollTop: $(hash).offset().top
                },
                800,
                function() {
                    window.location.hash = hash;
                }
            );
        }
    });

    $(".delete").on("submit", function() {
        return confirm("Are you sure?");
    });
});
