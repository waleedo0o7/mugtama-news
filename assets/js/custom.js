$(function () {
    initPrimarySlider();
    initDefaultSlider();
    initDefaultFourItemsSlider();

    initMobileCategoriesSlider();

});

function initDefaultSlider() {
    const swiper = new Swiper('.default-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 2,
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

function initDefaultFourItemsSlider() {
    const swiper = new Swiper('.default-four-swiper', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 2,
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
                slidesPerView: 4,
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

function initMobileCategoriesSlider() {
    const swiper = new Swiper('.mobile-categories-swiper', {
        direction: 'horizontal',
        loop: false,
        slidesPerView: 3.5,
        spaceBetween: 20,
        navigation: {
            nextEl: '.mobile-categories-swiper-button-next',
            prevEl: '.mobile-categories-swiper-button-prev',
        },

        breakpoints: {
            768: {
                slidesPerView: 6.5,
                spaceBetween: 20,
            },
        }

    });
}


// mobile menu start

jQuery(document).ready(function ($) {

    const openMenuBtn = document.getElementById("open-menu");
    const closeMenuBtn = document.getElementById("close-menu");

    openMenuBtn.addEventListener("click", function (e) {
        e.preventDefault();
        $("#mobile-menu").fadeIn(0);
    });

    closeMenuBtn.addEventListener("click", function (e) {
        e.preventDefault();
        $("#mobile-menu").fadeOut(0);
    });

    mobileNavMenuRender();

    $("#openSearch").on("click", function () {
        $(".co-mobile-search-wrapper").css("display", "flex");
    });

    $("#close-search").on("click", function () {
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
