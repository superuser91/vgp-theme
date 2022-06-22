const swiper = new Swiper(".newsboard", {
  slidesPerView: 1,
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  loop: true,
});

const swiper2 = new Swiper(".character", {
  slidesPerView: 1,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
  },
  loop: true,
});
