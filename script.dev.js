"use strict"; // ============open search in mobile============

var searchStatus = true;
var callBtnWidth = $('.header__call-btn').width() + 45;
$('.search').on('click', function (e) {
  if (e.target.classList[0] === 'search__close-icon') {
    searchStatus = true;
    $('.header__call-btn').css('width', "".concat(callBtnWidth, "px"));
    $('.header__call-btn').css('padding', '12px 20px');
    $('.search__close-icon').fadeOut();
    setTimeout(function () {
      $('.header__call-btn').css('opacity', '1');
    }, 400);
    return;
  }

  if ($(window).width() < 450 && searchStatus) {
    searchStatus = false;
    $('.header__call-btn').css('opacity', '0');
    $('.header__call-btn').css('width', "".concat(callBtnWidth, "px"));
    setTimeout(function () {
      $('.header__call-btn').css('padding', '0px');
      $('.header__call-btn').css('width', '0px');
      $('.search__close-icon').fadeIn();
    }, 300);
  }
}); // ============open search in mobile============
// ======= Open language list=============

$('.header__language').on('click', function () {
  $('.header__language-show').fadeToggle(1);
  $('.header__language-icon').toggleClass('active');
}); // ======= Open language list=============
// ============show menu items desktop menu==================

$('.menu__item').mouseenter(function () {
  $('.menu__item').removeClass('active');
  $(this).addClass('active');
  $('.menu__products-position').stop().fadeOut(0);
  $("#item-".concat($(this).attr('id'))).stop().fadeIn();
}); // ============show menu items==================
// =========== mobile menu==============

$('.menu__btn-mobile, .mobile-menu__close').on('click', function () {
  $('.mobile-menu').fadeToggle();
});
$('.mobile-menu__item').on('click', function () {
  $('.mobile-menu__list').fadeOut(1);
  $("#item-mobile-".concat($(this).attr('id'))).fadeIn();
});
$('.mobile-menu__back, .mobile-menu__close').on('click', function () {
  $('.mobile-menu__items').fadeOut();
  $('.mobile-menu__list').fadeIn();
}); // =========== mobile menu==============
//================ set slider=============

var swiper3 = new Swiper(".homeMain", {
  pagination: {
    el: ".swiper-pagination"
  },
  // slidesPerView: 4,
  loop: true,
  autoplay: {
    delay: 5000
  }
});
var homeItem = new Swiper(".home-item-slider", {
  slidesPerView: 5,
  spaceBetween: 20,
  grabCursor: true,
  loop: true,
  autoplay: {
    delay: 3000
  },
  navigation: {
    nextEl: ".next-sale",
    prevEl: ".prev-sale"
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
      spaceBetween: 10
    },
    540: {
      slidesPerView: 2.3,
      spaceBetween: 10
    },
    640: {
      slidesPerView: 3.3,
      spaceBetween: 10
    },
    900: {
      slidesPerView: 4.3,
      spaceBetween: 10
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 20
    }
  }
});
var homeItem2 = new Swiper(".home-item-slider-new", {
  slidesPerView: 5,
  spaceBetween: 20,
  grabCursor: true,
  loop: true,
  autoplay: {
    delay: 3000
  },
  navigation: {
    nextEl: ".next-new",
    prevEl: ".prev-new"
  },
  breakpoints: {
    320: {
      slidesPerView: 1.3,
      spaceBetween: 10
    },
    540: {
      slidesPerView: 2.3,
      spaceBetween: 10
    },
    640: {
      slidesPerView: 3.3,
      spaceBetween: 10
    },
    900: {
      slidesPerView: 4.3,
      spaceBetween: 10
    },
    1200: {
      slidesPerView: 5,
      spaceBetween: 20
    }
  }
}); // let swiper1 = new Swiper(".detal-slider-small", {
//   spaceBetween: 24,
//   slidesPerView: 3.5,
//   freeMode: true,
//   watchSlidesProgress: true,
// });
//
// let swiper2 = new Swiper(".detal-slider-big", {
//   spaceBetween: 10,
//
// });
//================ set slider=============
//================ type filter =============

$('.filter__type-title-wrap').on('click', openFilter);
$('.filter__item').on('click', function () {
  $('.filter__item-main').html($(this).html());
  openFilter();
});

function openFilter() {
  $('.filter__type-wrap').toggleClass('active');
}

$('.filter__width-wrap').on('click', function (e) {
  $(this).parent().find('.filter__width-wrap').removeClass('active');
  $(this).addClass('active');
}); // ===========detail text change========/

$('.info__title').on('click', function () {
  console.log('work');
  $('.info__title').removeClass('active');
  $(this).addClass('active');
});
$('#text-title').on('click', function () {
  $('#text').stop().fadeIn();
  $('#settings').fadeOut();
});
$('#settings-title').on('click', function () {
  $('#settings').fadeIn();
  $('#text').fadeOut();
});
$(document).ready(function () {
  var containerWidth = $('.services__work').width();
  var img = $('.services__work-img');

  if ($(window).width() <= 500) {
    img.css('width', "300px");
    img.css('height', "300px");
  } else {
    console.log($(window).width());
    img.css('width', "".concat(containerWidth / 4 - 25, "px"));
    img.css('height', "".concat(containerWidth / 4 - 25, "px"));
  }
});