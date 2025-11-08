var sliderTwo = new Swiper(".categories-slider", {
    slidesPerView: 8,
    spaceBetween: 10,
    loop: true,
    navigation: {
      nextEl: ".categories-next",
      prevEl: ".categories-prev",
    },
  
    breakpoints: {
      0: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      480: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1300: {
        slidesPerView: 5,
        spaceBetween: 15,
      },
      1400: {
        slidesPerView: 6,
      },
      1550: {
        slidesPerView: 7,
      },
      1600: {
        slidesPerView: 8,
        spaceBetween: 20,
      },
    },
  });
  var sliderTwo = new Swiper(".trending-slider", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".categories-next",
      prevEl: ".categories-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
      500: {
        slidesPerView: 2,
      },
      840: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      1400: {
        slidesPerView: 4,
      },
      1600: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  });
