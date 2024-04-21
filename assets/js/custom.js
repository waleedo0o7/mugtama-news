$(function () {
    initPrimarySlider();
    initDefaultSlider();
});

function initDefaultSlider() {
    const swiper = new Swiper('.default-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 3,
        spaceBetween: 20,
        navigation: {
            nextEl: '.default-swiper-button-next',
            prevEl: '.default-swiper-button-prev',
        },

        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        }

    });
}

function initPrimarySlider() {
    const swiper = new Swiper('.primary-swiper', {
        direction: 'horizontal',
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,
        navigation: {
            nextEl: '.primary-button-next',
            prevEl: '.primary-button-prev',
        },
        pagination: {
            el: '.primary-swiper-pagination',
            type: 'bullets',
            clickable: true
        }

    });
}


// mobile menu start

jQuery(document).ready(function ($) {

    const openMenuBtn = document.getElementById("openMenu");
    const closeMenuBtn = document.getElementById("closeMenu");

    openMenuBtn.addEventListener("click", function (e) {
        e.preventDefault();
        $("#mobileMenu").fadeIn(0);
    });

    closeMenuBtn.addEventListener("click", function (e) {
        e.preventDefault();
        $("#mobileMenu").fadeOut(0);
    });

    mobileNavMenuRender();

    $("#openSearch").on("click", function () {
        $(".co-mobile-search-wrapper").css("display", "flex");
    });

    $("#closeSearch").on("click", function () {
        $(".co-mobile-search-wrapper").css("display", "none");
    });

});


function mobileNavMenuRender() {
    const navExpand = [].slice.call(document.querySelectorAll(".nav-expand"));
    const backLink =
        `  <li class="nav-item">
                            <a class="nav-link nav-back-link" href="javascript:;">
                                رجوع
                            </a>
                        </li>
                    `;

    navExpand.forEach((item) => {
        item
            .querySelector(".nav-expand-content")
            .insertAdjacentHTML("afterbegin", backLink);
        item
            .querySelector(".nav-link")
            .addEventListener("click", () => item.classList.add("active"));
        item
            .querySelector(".nav-back-link")
            .addEventListener("click", () => item.classList.remove("active"));
    });

}

// mobile menu end
