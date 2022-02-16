<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="swiper/swiper-bundle.min.css">
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
            <a href="item.php" class="menu__product">
              <div class="menu__product-img">
                <img src="styles/images/menu-photo-for-test/1.png" alt="img">
              </div>
              <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
            </a>
					<?php } ?>
        </div>
      </div>

      <div class="menu__product-colection">
        <h3 class="menu__product-title">Шафи металеві для одягу</h3>
        <div class="menu__product-list">
					<?php for ($i = 0; $i < 12; $i++) { ?>
            <a href="item.php" class="menu__product">
              <div class="menu__product-img">
                <img src="styles/images/menu-photo-for-test/1.png" alt="img">
              </div>
              <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
            </a>
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
    <img src="styles/images/logo.png" alt="img">
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
      <div class="menu__burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
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

            <a href="item.php" class="menu__product-colection">
              <div class="menu__constructor">
                <img src="styles/images/constructor.png" alt="img">
                <span>Конструктор шаф металевих для одягу</span>
              </div>
            </a>

            <div class="menu__product-colection">
              <h3 class="menu__product-title">Шафи металеві для одягу</h3>
              <div class="menu__product-list">
								<?php for ($i = 0; $i < 12; $i++) { ?>
                  <a href="item.php" class="menu__product">
                    <div class="menu__product-img">
                      <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                    </div>
                    <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
                  </a>
								<?php } ?>
              </div>
            </div>

            <div class="menu__product-colection">
              <h3 class="menu__product-title">Шафи металеві для одягу</h3>
              <div class="menu__product-list">
								<?php for ($i = 0; $i < 12; $i++) { ?>
                  <a href="item.php" class="menu__product">
                    <div class="menu__product-img">
                      <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                    </div>
                    <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
                  </a>
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
                <a href="item.php" class="menu__product">
                  <div class="menu__product-img">
                    <img src="styles/images/menu-photo-for-test/1.png" alt="img">
                  </div>
                  <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="menu__btn menu__btn-services">
      <div class="menu__burger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <!--        <img src="styles/images/icons/ic_menu.svg" alt="img">-->
      Послуги

      <div class="menu__services-item">
        <div class="menu__services-wrap">
          <a class="menu__services-link" href="services.php">Послуги</a>
          <a class="menu__services-link" href="services.php">Послуги</a>
          <a class="menu__services-link" href="services.php">Послуги</a>
          <a class="menu__services-link" href="services.php">Послуги</a>
        </div>

      </div>
    </div>
    <a class="menu__link menu__link-about" href="about.php">Про компанію</a>
    <a class="menu__link menu__link-contacts" href="/">Контакти</a>
  </div>
  <div class="menu__cart-icon"></div>
  <!--  <img class="menu__cart-icon" src="styles/images/icons/ic_cart.svg" alt="img">-->
</div>
<div class="menu-bcg"></div>

<main class="detail">
  <div class="crumbs">
    <a class="crumbs__link" href="">
      Головна
      <img class="crumbs__arrow" src="styles/images/icons/ic_arrow-crumbs.svg" alt="img">
    </a>
    <a class="crumbs__link" href="">
      Шафи металеві
      <img class="crumbs__arrow" src="styles/images/icons/ic_arrow-crumbs.svg" alt="img">
    </a>
    <span>Однорівневі</span>
  </div>

  <div class="detail__title-wrap">
    <h1 class="detail__title">Шафа металева для одягу ШОМ 1/30</h1>
    <span class="detail__art">Код товару: 0000000</span>
  </div>

  <div class="detail__item">
    <div class="detail__item-photo">
      <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
           class="swiper mySwiper2 detal-slider-big">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/1.png" alt="img"/>
          </div>
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/3.png" alt="img"/>
          </div>
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/3.png" alt="img"/>
          </div>
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/slider.png" alt="img"/>
          </div>
        </div>
      </div>
      <div thumbsSlider="" class="swiper mySwiper detal-slider-small">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/1.png" alt="img"/>
          </div>
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/3.png" alt="img"/>
          </div>
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/3.png" alt="img"/>
          </div>
          <div class="swiper-slide">
            <img src="styles/images/menu-photo-for-test/slider.png" alt="img"/>
          </div>
        </div>
      </div>
    </div>
    <form class="detail__filter filter">
      <div class="filter__size">
        <div class="filter__type">
          <span class="filter__title">Тип шафи:</span>
          <div class="filter__type-wrap">
            <div class="filter__type-title-wrap">
              <span class="filter__item-main">Однорівнева з додатковою поличкою 0</span>
              <img class="filter__icon" src="styles/images/icons/ic_drop-down-arrow.svg" alt="img">
            </div>
            <div class="filter__type-item">
							<?php for ($i = 0; $i < 10; $i++) { ?>
                <label class="filter__item-label" for="name-<?= $i ?>">
                  <span class="filter__item">Однорівнева з додатковою поличкою <?= $i ?></span>
                  <input id="name-<?= $i ?>" name="item-type" type="radio"
                         value="Однорівнева з додатковою поличкою <?= $i ?>">
                </label>
							<?php } ?>
            </div>
          </div>

          <span class="filter__title">Ширина секцій:</span>
          <div class="filter__radio-wrap">
            <label for="name" class="filter__width-wrap active">
              <input id="name" name="some-radio" type="radio" checked>
              <div class="filter__width-radio"></div>
              <span class="filter__width-text">300 мм</span>
            </label>
            <label for="name2" class="filter__width-wrap">
              <input id="name2" name="some-radio" type="radio">
              <div class="filter__width-radio"></div>
              <span class="filter__width-text">400 мм</span>
            </label>
          </div>

          <span class="filter__title">Кількість секцій::</span>
          <div class="filter__radio-wrap">
						<?php for ($i = 0; $i < 15; $i++) { ?>
              <label for="count-<?= $i ?>" class="filter__width-wrap <?= $i === 0 ? 'active' : '' ?>">
                <input id="count-<?= $i ?>" name="some-radio2"
                       type="radio" <?= $i === 0 ? 'checked' : '' ?>>
                <div class="filter__width-radio"></div>
                <span class="filter__width-text"><?= $i ?></span>
              </label>
						<?php } ?>
          </div>
        </div>
      </div>
      <div class="filter__type">
          <span class="filter__title">
            Колір корпусу:
          </span>
        <div class="filter__radio-wrap filter__color">
					<?php for ($i = 0; $i < 4; $i++) { ?>
            <label for="color<?= $i ?>" class="filter__color-item filter__width-wrap ">
              <input id="color<?= $i ?>" name="color-radio" type="radio">
              <div class="filter__width-radio"></div>
              <img class="filter__color-card" src="styles/images/menu-photo-for-test/color.png"
                   alt="img"/>
              <span class="filter__color-name">Сірий (RAL 7035) </span>
              <span class="filter__color-price">+ 180 грн</span>
            </label>
					<?php } ?>
        </div>

        <span class="filter__title">
                    Колір дверки:
                </span>
        <div class="filter__radio-wrap filter__color">
					<?php for ($i = 0; $i < 4; $i++) { ?>
            <label
                for="color-2<?= $i ?>"
                class="filter__color-item filter__width-wrap "
            >
              <input id="color-2<?= $i ?>" name="color-radio-2" type="radio">
              <div class="filter__width-radio"></div>
              <img class="filter__color-card" src="styles/images/menu-photo-for-test/color.png"
                   alt="img"/>
              <span class="filter__color-name">Сірий (RAL 7035) </span>
              <span class="filter__color-price">+ 180 грн</span>
            </label>
					<?php } ?>
        </div>

        <span class="filter__title">
                    Тип замка:
                </span>
        <div class="filter__radio-wrap filter__color filter__lock">
					<?php for ($i = 0; $i < 4; $i++) { ?>
            <label for="lock<?= $i ?>" name="lock<?= $i ?>" class="filter__color-item filter__width-wrap ">
              <input id="lock<?= $i ?>" name="lock" type="radio">
              <div class="filter__width-radio"></div>
              <img class="filter__color-card" src="styles/images/menu-photo-for-test/color.png"
                   alt="img"/>
              <span class="filter__color-name">Сірий (RAL 7035) </span>
              <span class="filter__color-price">+ 180 грн</span>
            </label>
					<?php } ?>
        </div>
      </div>
    </form>

    <div class="detail__sale-wrap sale">
      <div class="sale__item">
        <div class="sale__item-title-wrap">
          <span class="sale__item-title">До 30 тис. грн</span>
          <div class="sale__percent-wrap">
            <span class="sale__percent-title">Знижка</span>
            <span class="sale__percent-percent">0%</span>
          </div>
        </div>
        <div class="sale__price-wrap">
          <span class="sale__price-title">Ціна:</span>
          <span class="sale__price-amount">3000, грн</span>
        </div>
      </div>

      <div class="sale__item">
        <div class="sale__item-title-wrap">
          <span class="sale__item-title">До 30 тис. грн</span>
          <div class="sale__percent-wrap">
            <span class="sale__percent-title">Знижка</span>
            <span class="sale__percent-percent">10%</span>
          </div>
        </div>
        <div class="sale__price-wrap">
          <span class="sale__price-title">Ціна:</span>
          <span class="sale__price-amount">2700, грн</span>
        </div>
      </div>

      <div class="sale__item">
        <div class="sale__item-title-wrap">
          <span class="sale__item-title">До 30 тис. грн</span>
          <div class="sale__percent-wrap">
            <span class="sale__percent-title">Знижка</span>
            <span class="sale__percent-percent">15%</span>
          </div>
        </div>
        <div class="sale__price-wrap">
          <span class="sale__price-title">Ціна:</span>
          <span class="sale__price-amount">2400, грн</span>
        </div>
      </div>
    </div>
  </div>

  <div class="detail__info info">
    <div class="info__title-wrap">
      <div id="settings-title" class="info__title active">Характеристики</div>
      <div id="text-title" class="info__title">Опис</div>
      <div id="photo-title" class="info__title">Фото</div>
    </div>

    <div id="settings" class="info__text-wrap">
      <div class="info__text">
        <p class="info__text-title">Основні характеристики</p>
				<?php for ($i = 1; $i < 10; $i++) { ?>
          <div class="info__text-item">
            <p>Модель</p>
            <p>ШОМ 1/30</p>
          </div>
				<?php } ?>
      </div>

      <div class="info__text">
        <p class="info__text-title">Основні характеристики</p>
				<?php for ($i = 1; $i < 10; $i++) { ?>
          <div class="info__text-item">
            <p>Модель</p>
            <p>ШОМ 1/30</p>
          </div>
				<?php } ?>
      </div>
    </div>

    <div id="text" class="info__text-wrap">
      <div class="info__text info__text-only-wrap">
        <p class="info__only-text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dicta
          minima molestiae odit quibusdam recusandae sapiente voluptate. Fugiat, quisquam totam. Accusamus ad
          aliquid atque beatae consequatur cumque cupiditate deleniti dolorum eligendi eveniet exercitationem
          harum impedit maiores odit quas recusandae temporibus veniam, vero. Deserunt doloribus excepturi
          incidunt minus quod rem temporibus? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut,
          distinctio, perspiciatis? Commodi ducimus eaque harum iste magnam sed veritatis? Quae.
        </p>
      </div>
    </div>
  </div>
</main>


<script src="swiper/swiper-bundle.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>

<script>
    let swiper = new Swiper(".mySwiper", {
        spaceBetween: 24,
        slidesPerView: 3.5,
        freeMode: true,
        watchSlidesProgress: true,
    });
    let swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,

        thumbs: {
            swiper: swiper,
        },
    });
</script>
</body>

</html>