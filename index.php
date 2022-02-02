<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles/style.css">
  <title>Document</title>
</head>

<body>

  <div class="mobile-menu">
    <div class="mobile-menu__close-wrap">
      <img class="mobile-menu__close" src="styles/images/icons/ic_close-search.svg" alt="img">
    </div>

    <ul class="menu__items-list mobile-menu__list">
      <?php for ($i = 1; $i < 10; $i++) { ?>
        <li id="<?= $i ?>" class="menu__item mobile-menu__item">
          <span>
            Захист зовнішнього блоку кондиціонера
            <div class="menu__list-item-arrow"></div>
          </span>
        </li>
      <?php } ?>
    </ul>

    <div id="item-mobile-1" class="mobile-menu__items">
      <div class="mobile-menu__back">
        <img src="styles/images/icons/ic_menu-arrow-black.svg" alt="img">
        До меню
      </div>

      <div class="mobile-menu__items-wrap">
        <div class="menu__product-colection">
          <h3 class="menu__product-title">Шафи металеві для одягу</h3>
          <div class="menu__product-list">
            <?php for ($i = 0; $i < 12; $i++) { ?>
              <div class="menu__product">
                <div class="menu__product-img">
                  <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                </div>
                <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
              </div>
            <?php } ?>
          </div>
        </div>

        <div class="menu__product-colection">
          <h3 class="menu__product-title">Шафи металеві для одягу</h3>
          <div class="menu__product-list">
            <?php for ($i = 0; $i < 12; $i++) { ?>
              <div class="menu__product">
                <div class="menu__product-img">
                  <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                </div>
                <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div id="item-mobile-2" class="mobile-menu__items">
      <div class="mobile-menu__back">
        <img src="styles/images/icons/ic_menu-arrow-black.svg" alt="img">
        До меню
      </div>

      <div class="mobile-menu__items-wrap">
        <div class="menu__product-colection">
          <h3 class="menu__product-title">Шафи металеві для одягу</h3>
          <div class="menu__product-list">
            <div class="menu__product">
              <div class="menu__product-img">
                <img src="styles/images/menu-photo-for-test/1.png" alt="img">
              </div>
              <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <header class="header">
    <a class="header__logo" href="/">
      <img src="styles/images/logo.svg" alt="img">
    </a>

    <div class="header__content">
      <div class="header__contacts">
        <div class="header__phone-wrap">
          <a class="header__phone" href="/">
            <img src="styles/images/icons/ic_kyiv-star.svg" alt="img">
            +380987570000
          </a>
          <a class="header__phone" href="/">
            <img src="styles/images/icons/ic_life.svg" alt="img">
            +380987570000
          </a>
        </div>
        <button class="red-btn header__call-btn">Замовити дзвінок</button>
        <div class="header__search-wrap search">
          <div class="search__icon"></div>
          <input placeholder="Пошук товару" class="search__input" type="text">
          <img class="search__close-icon" src="styles/images/icons/ic_close-search.svg" alt="img">
        </div>
      </div>

      <div class="header__language">
        <img class="header__lang-flag" src="styles/images/ua-language.svg" alt="img">
        <img class="header__laguage-icon" src="styles/images/icons/ic_drop-down-arrow.svg" alt="img">
        <div class="header__language-show">
          <div class="header__language-list">
            <div class="header__language-wrap">
              <img class="header__lang-flag" src="styles/images/ua-language.svg" alt="img">
              <span>Українська</span>
            </div>
            <div class="header__language-wrap">
              <img class="header__lang-flag" src="styles/images/ua-language.svg" alt="img">
              <span>Українська</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </header>
  <div class="menu">
    <div class="menu__btn-wrap">
      <div class="menu__btn menu__btn-mobile">
        <img src="styles/images/icons/ic_menu.svg" alt="img">
      </div>
      <div class="menu__btn menu__btn-items">
        <img src="styles/images/icons/ic_menu.svg" alt="img">
        Товари
        <div class="menu__items-container">
          <ul class="menu__items-list">
            <li id="1" class="menu__item">
              <span>
                Шафи металеві
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li id="2" class="menu__item">
              <span>
                Супутні матеріали до шаф
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Поштові скриньки
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Пожежні шафи
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span>
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
          </ul>

          <div id="item-1" class="menu__products-position">
            <div class="menu__products-wrap">
              <div class="menu__product-colection">
                <h3 class="menu__product-title">Шафи металеві для одягу</h3>
                <div class="menu__product-list">
                  <?php for ($i = 0; $i < 12; $i++) { ?>
                    <div class="menu__product">
                      <div class="menu__product-img">
                        <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                      </div>
                      <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
                    </div>
                  <?php } ?>
                </div>
              </div>

              <div class="menu__product-colection">
                <h3 class="menu__product-title">Шафи металеві для одягу</h3>
                <div class="menu__product-list">
                  <?php for ($i = 0; $i < 12; $i++) { ?>
                    <div class="menu__product">
                      <div class="menu__product-img">
                        <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                      </div>
                      <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>

          <div id="item-2" class="menu__products-position">
            <div class="menu__products-wrap">
              <div class="menu__product-colection">
                <h3 class="menu__product-title">Шафи металеві для одягу</h3>
                <div class="menu__product-list">
                  <div class="menu__product">
                    <div class="menu__product-img">
                      <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                    </div>
                    <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <div class="menu__btn menu__btn-services">
        <img src="styles/images/icons/ic_menu.svg" alt="img">
        Послуги
      </div>
      <a class="menu__link menu__link-about" href="/">Про компанію</a>
      <a class="menu__link menu__link-contacts" href="/">Контакти</a>
    </div>
    <img class="menu__cart-icon" src="styles/images/icons/ic_cart.svg" alt="img">
  </div>

  <main class="home">
    <section class="home__main-slider-wrap">

      <div class="main-slider">
        <div class="swiper homeMain">
          <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 3; $i++) { ?>
              <div class="swiper-slide">
                <img class="main-slider__img" src="styles/images/menu-photo-for-test/image 25.png" alt="img">
                <div class="main-slider__btn-wrap">
                  <p class="main-slider__title">Шафи металеві для одягу</p>
                  <a class="red-btn" href="/">Детальніше</a>
                </div>
              </div>
            <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>

      <div class="main-items">
        <a href="/" class="main-items__card">
          <img class="main-items__card-img" src="styles/images/menu-photo-for-test/slider.png" alt="img">
          <p class="main-items__card-text">Склади шафу сам</p>
        </a>

        <a href="/" class="main-items__card">
          <img class="main-items__card-img" src="styles/images/menu-photo-for-test/image 25.png" alt="img">
          <p class="main-items__card-text">Склади шафу сам</p>
        </a>

        <a href="/" class="main-items__card">
          <img class="main-items__card-img" src="styles/images/menu-photo-for-test/slider.png" alt="img">
          <p class="main-items__card-text">Склади шафу сам</p>
        </a>
      </div>

    </section>

    <section class="home__slider">
      <h2 class="slider-title">Знижки</h2>
      <div class="slider">
        <div class="swiper home-item-slider">
          <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 10; $i++) { ?>
              <div class="swiper-slide">
                <div class="item-card sale">
                  <a href=""><img class="item-card__img" src="styles/images/menu-photo-for-test/3.png" alt="img"></a>
                  <h5 class="item-card__title">Скринька поштова на 4 квартири ЯП-04С</h5>
                  <div class="item-card__price-block">
                    <div class="item-card__price-wrap">
                      <span class="item-card__old-price">708 грн</span>
                      <span class="item-card__price">508 <span>грн</span></span>
                    </div>
                    <div class="item-card__cart">
                      <div class="item-card__cart-icon"></div>
                      <div class="item-card__phone-icon"></div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <img class="swiper-button-next next-sale" src="styles/images/icons/ic_slider-arrow-right.svg" alt="img">
        <img class="swiper-button-prev prev-sale" src="styles/images/icons/ic_slider-arrow-left.svg" alt="img">
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="home__slider">
      <h2 class="slider-title">Новинки</h2>
      <div class="slider">
        <div class="swiper home-item-slider-new">
          <div class="swiper-wrapper">
            <?php for ($i = 0; $i < 10; $i++) { ?>
              <div class="swiper-slide">
                <div class="item-card new">
                  <a href=""><img class="item-card__img" src="styles/images/menu-photo-for-test/3.png" alt="img"></a>
                  <h5 class="item-card__title">Скринька поштова на 4 квартири ЯП-04С</h5>
                  <div class="item-card__price-block">
                    <div class="item-card__price-wrap">
                      <span class="item-card__old-price">708 грн</span>
                      <span class="item-card__price">508 <span>грн</span></span>
                    </div>
                    <div class="item-card__cart">
                      <div class="item-card__cart-icon"></div>
                      <div class="item-card__phone-icon"></div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
        <img class="swiper-button-next next-new" src="styles/images/icons/ic_slider-arrow-right.svg" alt="img">
        <img class="swiper-button-prev prev-new" src="styles/images/icons/ic_slider-arrow-left.svg" alt="img">
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <section class="partners">
      <h2 class="slider-title partners__title">Наші партнери</h2>
      <div class="partners__items">
        <?php for ($i = 0; $i < 10; $i++) { ?>
          <div class="partners__item">
          </div>
        <?php } ?>
      </div>
    </section>

    <section class="question">
      <div class="question__wrap">
        <span class="question__text">
          Залишились питання? Залиште контакти
          та ми зв’яжемось з Вами найближчим часом
        </span>
        <div class="question__input-wrap">
          <input class="question__input" type="text" placeholder="+38063">
          <button class="question__btn">Замовити дзвінок</button>
        </div>
      </div>

    </section>

  </main>
  <script src="swiper/swiper-bundle.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/script.js"></script>

  <script>

  </script>
</body>

</html>