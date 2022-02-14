<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <div class="menu__product-collection">
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
              <span class="menu__item-title">
                Шафи металеві
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li id="2" class="menu__item">
              <span class="menu__item-title">
                Супутні матеріали до шаф
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Поштові скриньки
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Пожежні шафи
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Захист зовнішнього блоку кондиціонера
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Захист зовнішнього блоку кондиціонера
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Захист зовнішнього блоку кондиціонера
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Захист зовнішнього блоку кондиціонера
                <span class="menu__list-item-arrow"></span>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
                Захист зовнішнього блоку кондиціонера
                <div class="menu__list-item-arrow"></div>
              </span>
            </li>
            <li class="menu__item">
              <span class="menu__item-title">
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
        <div class="menu__services-item">
          <div class="menu__services-wrap">
            <a class="menu__services-link" href="">Послуги</a>
            <a class="menu__services-link" href="">Послуги</a>
            <a class="menu__services-link" href="">Послуги</a>
            <a class="menu__services-link" href="">Послуги</a>
          </div>
        </div>
      </div>
      <a class="menu__link menu__link-about" href="/">Про компанію</a>
      <a class="menu__link menu__link-contacts" href="/">Контакти</a>
    </div>
    <img class="menu__cart-icon" src="styles/images/icons/ic_cart.svg" alt="img">
  </div>

  <div class="crumbs">
    <a class="crumbs__link" href="">
      Головна
      <img class="crumbs__arrow" src="styles/images/icons/ic_arrow-crumbs.svg" alt="img">
    </a>
    <span>Лазерна порізка металу</span>
  </div>

  <div class="about services">

    <div class="about__info">
      <img src="styles/images/menu-photo-for-test/photo-about.png" alt="img" class="about__img">
    </div>

    <div class="about__text-wrap">
      <span class="about__title">Лазерна порізка металу</span>
      <span class="about__text">
        Лазерна різка являє собою високотехнологічний спосіб обробки заготовок з металу і сталі. Дана методика стає максимально точної і ефективної
        в тих випадках, коли вона проводиться на спеціальних верстатах з ЧПУ (плазморізи з числовим програмним управлінням).
      </span>

      <button class="red-btn">Замовити консультацію</button>
    </div>
  </div>

  <div class="services__price">
    <p class="services__title">Ціни на лазерну порізку металів</p>

    <div class="table-wrap">
      <table class="table">
        <tbody>
          <tr>
            <th>Товщина</th>
            <th>Сталь</th>
            <th>Латунь</th>
            <th>Мідь</th>
            <th>Алюміній</th>
            <th>Нержавійка</th>
          </tr>

          <?php for ($i = 0; $i < 10; $i++) { ?>
            <tr>
              <td>0,50 мм</td>
              <td>10 грн</td>
              <td>10 грн</td>
              <td>10 грн</td>
              <td>10 грн</td>
              <td>10 грн</td>
            </tr>
          <?php } ?>

        </tbody>
      </table>
    </div>

    <button class="question__btn">Замовити дзвінок</button>

  </div>

  <section class="services__work">
    <p class="services__title">Наші роботи</p>
    <div class="services__work-items">
      <img class="services__work-img" src="styles/images/menu-photo-for-test/photo-about.png" alt="img">

      <img class="services__work-img" src="styles/images/menu-photo-for-test/photo-about.png" alt="img">

      <img class="services__work-img" src="styles/images/menu-photo-for-test/photo-about.png" alt="img">

      <img class="services__work-img" src="styles/images/menu-photo-for-test/photo-about.png" alt="img">
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



  <footer class="footer">
    <div class="footer__contacts">
      <span class="footer__title">Контакти</span>

      <div class="footer__cotacts-wrap">
        <span class="footer__contacts-name">Менеджер зі збуту</span>
        <div class="footer__phone-wrap">
          <a href="tel:380987570000">+380987570000</a>
          <a href="tel:380987570000">+380737570000</a>
        </div>
        <a href="mailto:info@levmetal.com">info@levmetal.com</a>
      </div>

      <div class="footer__cotacts-wrap">
        <span class="footer__contacts-name">
          Лазерна порізка, гнуття
          металу, порошкове фарбування
        </span>
        <div class="footer__phone-wrap">
          <a href="tel:380987570000">+380964578245</a>
        </div>
        <a href="mailto:info@levmetal.com">info@levmetal.com</a>
      </div>

      <div class=" footer__cotacts-wrap footer__individual">
        <span class="footer__contacts-name">
          Індивідуальні замовлення
        </span>
        <div class="footer__phone-wrap">
          <a href="tel:380987570000">+380964578245</a>
        </div>
        <a href="mailto:info@levmetal.com">info@levmetal.com</a>
      </div>

      <span class="footer__title">Підписатись на оновлення та знижки</span>
      <div class="footer__input-wrap">
        <input class="footer__input" type="text" placeholder="Введіть ваш email">
        <button class="red-btn">Підписатись</button>
      </div>
    </div>

    <div class="footer__address">
      <span class="footer__title">Адреса</span>
      <span class="footer__text">79037, Україна</span>
      <span class="footer__text">м.Львів, вул. Земельна 28А </span>
      <span class="footer__title">Години роботи:</span>
      <span class="footer__text">пн-пт: 8:30 -17:30</span>
      <span class="footer__title">Email</span>
      <span class="footer__text">info@levmetal.com</span>
      <span class="footer__title">Соціальні мережі:</span>
      <a href="/">
        <img src="styles/images/icons/ic_facebook.svg" alt="img">
      </a>
    </div>

    <div class="footer__customers">
      <a class="footer__title">Клієнтам</a>
      <a href="/" class="footer__text">Про компанію</a>
      <a href="/" class="footer__text">Доставка і оплата</a>
      <a href="/" class="footer__text">Повернення та обмін</a>
      <a href="/" class="footer__text">Оферта</a>
      <a href="/" class="footer__text">Сертифікати якості</a>
      <a href="/" class="footer__text">Блог</a>
      <a href="/" class="footer__text footer__text_color">Прайс</a>
      <a href="/" class="footer__text footer__text_color">Каталог товарів</a>
    </div>
  </footer>

  <script src="swiper/swiper-bundle.min.js"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/script.js"></script>

</body>

</html>