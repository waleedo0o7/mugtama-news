$(function () {
    initPrimarySlider();
    initDefaultSlider();
    toggleMobileMenu();
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


function toggleMobileMenu() {
    $(".open-mobile-menu").on("click", function(){
        $(".top-nav-wrapper").toggleClass("show");
    });
}