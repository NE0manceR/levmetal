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
  $('.header__laguage-icon').toggleClass('active');
}); // ======= Open language list=============
// ============show menu items==================

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

var swiper = new Swiper(".homeMain", {
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
var homeItem = new Swiper(".home-item-slider-new", {
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
});