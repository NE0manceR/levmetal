


<div class="home">
  <section class="home__main-slider-wrap">

    <div class="main-slider">
      <div class="swiper homeMain">
        <div class="swiper-wrapper">
					<?php for ($i = 0; $i < 3; $i++) { ?>
            <div class="swiper-slide">
              <img class="main-slider__img" src="<?= SERVER_URL ?>style/images/menu-photo-for-test/image 25.png"
                   alt="img">
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

    <h2 class="slider-title">Конструктор</h2>

    <div class="main-items">
      <a href="/" class="main-items__card">
        <img class="main-items__card-img" src="<?= SERVER_URL ?>style/images/menu-photo-for-test/slider.png" alt="img">
        <p class="main-items__card-text">Склади шафу сам</p>
      </a>

      <a href="/" class="main-items__card">
        <img class="main-items__card-img" src="<?= SERVER_URL ?>style/images/menu-photo-for-test/image 25.png" alt="img">
        <p class="main-items__card-text">Склади шафу сам</p>
      </a>

      <a href="/" class="main-items__card">
        <img class="main-items__card-img" src="<?= SERVER_URL ?>style/images/menu-photo-for-test/slider.png" alt="img">
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
                <a href=""><img class="item-card__img" src="<?= SERVER_URL ?>style/images/menu-photo-for-test/3.png" alt="img"></a>
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
      <img class="swiper-button-next next-sale" src="<?= SERVER_URL ?>style/images/icons/ic_slider-arrow-right.svg" alt="img">
      <img class="swiper-button-prev prev-sale" src="<?= SERVER_URL ?>style/images/icons/ic_slider-arrow-left.svg" alt="img">
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
                <a href=""><img class="item-card__img" src="<?= SERVER_URL ?>style/images/menu-photo-for-test/3.png" alt="img"></a>
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
      <img class="swiper-button-next next-new" src="<?= SERVER_URL ?>style/images/icons/ic_slider-arrow-right.svg" alt="img">
      <img class="swiper-button-prev prev-new" src="<?= SERVER_URL ?>style/images/icons/ic_slider-arrow-left.svg" alt="img">
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <section class="partners">
    <h2 class="partners__title">Наші партнери</h2>
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
      <span class="footer__text footer__text-position">м.Львів, вул. Земельна 28А </span>
      <span class="footer__title">Години роботи:</span>
      <span class="footer__text">пн-пт: 8:30 -17:30</span>
      <span class="footer__title">Email</span>
      <span class="footer__text">info@levmetal.com</span>
      <span class="footer__title">Соціальні мережі:</span>
      <a href="/">
        <img src="<?= SERVER_URL ?>style/images/icons/ic_facebook.svg" alt="img">
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
</div>
