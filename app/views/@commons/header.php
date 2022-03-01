<?php
	$all_g = $this->load->function_in_alias('shop', '__get_Groups', -1);
	
	$countElements = 0;
	foreach ($all_g as $item) {
		if($item->parent == 0) {
			$countElements++;
		}
	}
?>

<div class="mobile-menu">
  <div class="mobile-menu__close-wrap">
    <img class="mobile-menu__close" src="<?= SERVER_URL ?>style/images/icons/ic_close-search.svg" alt="img">
  </div>

  <ul class="menu__items-list mobile-menu__list">
		<?php for ($i = 1; $i < 2; $i++) { ?>
      <li id="<?= $i ?>" class="menu__item mobile-menu__item">
        <div class="menu__item-title">
          Захист зовнішнього блоку кондиціонера
          <div class="menu__list-item-arrow"></div>
        </div>
      </li>
		<?php } ?>
  </ul>

  <div id="item-mobile-1" class="mobile-menu__items">
    <div class="mobile-menu__back">
      <img src="<?= SERVER_URL ?>style/images/icons/ic_menu-arrow-black.svg" alt="img">
      До меню
    </div>

    <div class="mobile-menu__items-wrap">
      <div class="menu__product-colection">
        <h3 class="menu__product-title">Шафи металеві для одягу</h3>
        <div class="menu__product-list">
					<?php for ($i = 0; $i < 2; $i++) { ?>
            <a href="item.php" class="menu__product">
              <div class="menu__product-img">
                <img src="<?= SERVER_URL ?>style/images/menu-photo-for-test/1.png" alt="img">
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
                <img src="<?= SERVER_URL ?>style/images/menu-photo-for-test/1.png" alt="img">
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
      <img src="<?= SERVER_URL ?>style/images/icons/ic_menu-arrow-black.svg" alt="img">
      До меню
    </div>

    <div class="mobile-menu__items-wrap">
      <div class="menu__product-colection">
        <h3 class="menu__product-title">Шафи металеві для одягу</h3>
        <div class="menu__product-list">
          <div class="menu__product">
            <div class="menu__product-img">
              <img src="<?= SERVER_URL ?>style/images/menu-photo-for-test/1.png" alt="img">
            </div>
            <span class="menu__product-name">Конструктор металевих шаф для одягу</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<header class="header">
  <a class="header__logo" href="<?= SITE_URL ?>">
    <img src=" <?= SERVER_URL ?>style/images/logo.png" alt="img">
  </a>

  <div class="header__content">
    <div class="header__contacts">
      <div class="header__phone-wrap">
        <a class="header__phone" href="/">
          <img src=" <?= SERVER_URL ?>style/images/icons/ic_kyiv-star.svg" alt="img">
          +380987570000
        </a>
        <a class="header__phone" href="/">
          <img src="<?= SERVER_URL ?>style/images/icons/ic_life.svg" alt="img">
          +380987570000
        </a>
      </div>
      <button class="red-btn header__call-btn">Замовити дзвінок</button>
      <label class="header__search-wrap search">
        <span class="search__icon"></span>
        <input placeholder="Пошук товару" class="search__input" type="text">
        <img class="search__close-icon" src="<?= SERVER_URL ?>style/images/icons/ic_close-search.svg" alt="img">
      </label>
    </div>

    <div class="header__language">
      <img class="header__lang-flag" src="<?= SERVER_URL ?>style/images/language-icons/ua-language.svg" alt="img">
      <img class="header__language-icon" src="<?= SERVER_URL ?>style/images/icons/ic_drop-down-arrow.svg" alt="img">
      <div class="header__language-show">
        <div class="header__language-list">
          <div class="header__language-wrap">
            <img class="header__lang-flag" src="<?= SERVER_URL ?>style/images/language-icons/ua-language.svg" alt="img">
            <span>Українська</span>
          </div>
          <div class="header__language-wrap">
            <img class="header__lang-flag" src="<?= SERVER_URL ?>style/images/language-icons/ru-language.svg" alt="img">
            <span>Російська</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</header>

<div class="menu-wrap">
  <div class="menu">
    <div class="menu__btn-wrap">
      <div class="menu__btn menu__btn-mobile">
        <img src="<?= SERVER_URL ?>style/images/icons/ic_menu.svg" alt="img">
      </div>
      <div class="menu__btn menu__btn-items">
        <div class="menu__burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        Товари
        <div class="menu__items-container">
          <ul class="menu__items-list <?= $countElements > 9 ? 'menu__items-list-scroll' : '' ?> ">
						<?php foreach ($all_g as $group_link) { ?>
							<?php if($group_link->parent == 0) {?>
                <li id="<?= $group_link->id ?>" class="menu__item">
                  <span>
                    <?= $group_link->name ?>
                    <span class="menu__list-item-arrow"></span>
                  </span>
                </li>
							<?php } ?>
						<?php } ?>
          </ul>
					<?php foreach ($all_g as $subLink1) { ?>
						<?php if($subLink1->parent == 0) {?>
              <div id="item-<?= $subLink1->id ?>" class="menu__products-position">
                <div class="menu__products-wrap">
                  <a href="item.php" class="menu__product-colection">
                    <div class="menu__constructor">
                      <img src="<?= SERVER_URL ?>style/images/constructor.png" alt="img">
                      <span>Конструктор шаф металевих для одягу</span>
                    </div>
                  </a>
									<?php foreach ($all_g as $subLink2) {?>
										<?php if ($subLink2->parent == $subLink1->id && $subLink2->haveChild) {?>
                      <div class="menu__product-colection">
                        <h3 class="menu__product-title"><?= $subLink2->name ?></h3>
                        <div class="menu__product-list">
													<?php foreach ($all_g as $subLink3) {?>
														<?php if ($subLink3->parent == $subLink2->id && $subLink2->haveChild !== 1) {?>
                              <a href="<?=SERVER_URL . $subLink3->link ?>" class="menu__product">
                                <div class="menu__product-img">
                                  <img src="<?= IMG_PATH . $subLink3->photo ?>" alt="<?= $subLink3->name ?>">
                                </div>
                                <span class="menu__product-name"><?= $subLink3->name ?></span>
                              </a>
														<?php } ?>
													<?php } ?>
                        </div>
                      </div>
										<?php } ?>
									<?php } ?>
                </div>
              </div>
						<?php } ?>
					<?php } ?>
        </div>
      </div>
      <div class="menu__btn menu__btn-services">
        <div class="menu__burger">
          <span></span>
          <span></span>
          <span></span>
        </div>
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
    <!--  <img class="menu__cart-icon" src="<?= SERVER_URL ?>style/images/icons/ic_cart.svg" alt="img">-->
  </div>
</div>
<div class="menu-bcg"></div>