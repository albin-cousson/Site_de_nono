var swiper = new Swiper('.swiper-container', {
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
        el: '.swiper-pagination',
    },
  });

var swiper = new Swiper('.swiper-container-responsive', {
    effect: 'flip',
    grabCursor: true,
    pagination: {
        el: '.swiper-pagination-responsive',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});


let url_complete = new URL(window.location.href)
let search = new URLSearchParams(url_complete.search.slice("true"))

if (search.has("second_article")){
    window.location.href="#second_article"
}

