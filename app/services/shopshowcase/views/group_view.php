<?php
	/*
	<link rel="<?= SERVER_URL ?>styleheet" type="text/css" href="<?=SERVER_URL.'style/'.$_SESSION['alias']->alias.'/shop.css'?>">

<main class="container">
	<?php $path__breadcrumbs = APP_PATH . 'views/@commons/__breadcrumbs.php';
	if(file_exists($path__breadcrumbs))
		require $path__breadcrumbs;

	if($this->userCan()) { ?>
		<a href="<?=SERVER_URL?>admin/<?=$_SESSION['alias']->link?>" class="pull-right m-hide" target="_blank"><i class="fas fa-user-cog"></i> Редагувати</a>
	<?php } ?>

	<h1><?=$_SESSION['alias']->name?></h1>
	<?php if(!empty($filters)) { ?>
		<i class="fas fa-sliders-h hide m-show"></i>
	<?php }
	if(!empty($_SESSION['alias']->list))
		echo "<p class=\"short\">{$_SESSION['alias']->list}</p>"; ?>

	<div class="d-flex m-wrap catalog bordered">
		<?php $class = 'w100';
		if(!empty($filters)) {
			$class = 'w80';
			echo '<aside class="w20 m-w100">';
			require_once '__filter.php';
			echo "</aside>";
		} ?>
		<article class="<?=$class?> m-w100">
			<?php if(!empty($subgroups)) {
				echo "<section class='subgroups d-flex wrap'>";
				foreach ($subgroups as $subgroup) {
					echo '<a href="'.SITE_URL.$subgroup->link.'">';
					if($subgroup->photo)
						echo '<img src="'.IMG_PATH.$subgroup->subgroup_photo.'" alt="'.IMG_PATH.$subgroup->name.'">';
					echo "<span>{$subgroup->name}</span></a>";
				}
				if($addDiv = count($subgroups) % 4)
					while ($addDiv++ < 4) {
						echo "<a class='empty'></a>";
					}
				echo "</section>";
			}

			if(!empty($products)) {
				echo "<section class='d-flex wrap products'>";
				foreach ($products as $product) {
					require '__product_subview.php';
				}
				$addDiv = count($products) % 3;
				if($addDiv)
					while ($addDiv++ < 3) {
						echo "<a class='empty'></a>";
					}
				echo "</section>";

				echo "<div class='pull-right mt-15'>Знайдено: {$_SESSION['option']->paginator_total} страв</div>";

				$this->load->library('paginator');
				echo $this->paginator->get();
			}
			elseif($_SESSION['option']->showProductsParentsPages || empty($subgroups))
			{
				if($use_filter)
					$errors = $this->text('за даним запитом товари не знайдено');
				else
					$errors = $this->text('В даній групі відсутні товари'); ?>
				<div class="p-15">
					<div class="alert alert-danger">
									<h4><?=$this->text('Вибачте,', 0)?></h4>
									<p><?=$errors?></p>
							</div>
				</div>
						<?php }

			if(empty($_GET['page']) && !$use_filter && (!empty($_SESSION['alias']->list) || !empty($_SESSION['alias']->text))) {
				echo '<section class="description">';
				// if(!empty($_SESSION['alias']->list))
				// 	echo "<p class=\"short\">{$_SESSION['alias']->list}</p>";
				if(!empty($_SESSION['alias']->videos)) {
										$this->load->library('video');
										$this->video->show_many($_SESSION['alias']->videos);
								}
								echo $_SESSION['alias']->text;
								echo "</section>";
			} ?>
		</article>
	</div>
</main>
 */
?>

<div class="crumbs">
  <a class="crumbs__link" href="">
    Головна
    <img class="crumbs__arrow" src="<?= SERVER_URL ?>style/images/icons/ic_arrow-crumbs.svg" alt="img">
  </a>
	
	<?php
		$i = 0;
		foreach ($_SESSION["alias"]->breadcrumbs as $name => $link) {
			; ?>
			
			<?php if ($i !== 0) { ?>
        <span>
            <?= $name ?>
            <img class="crumbs__arrow" src="<?= SERVER_URL ?>style/images/icons/ic_arrow-crumbs.svg" alt="img">
            </span>
			<?php }
			$i++ ?>
		
		<?php } ?>
</div>

<div class="product-group">
  <div class="product-group__filter">
    <div class="product-group__filter-wrap">
      <h3 class="product-group__title">
        Ширина секцій:
        <img src="<?= SERVER_URL ?>style/images/icons/ic_drop-down-arrow.svg" alt="icon">
      </h3>
      <div class="product-group__elements">
        <label class="product-group__label" for="filter1">
          <input id="filter1" type="checkbox">
          <div class="product-group__checkbox"></div>
          <span>300 mm</span>
        </label>

        <label class="product-group__label" for="filter2">
          <input id="filter2" type="checkbox">
          <div class="product-group__checkbox"></div>
          <span>300 mm</span>
        </label>
      </div>
    </div>

    <div class="product-group__filter-wrap">
      <h3 class="product-group__title">
        Ширина секцій:
        <img src="<?= SERVER_URL ?>style/images/icons/ic_drop-down-arrow.svg" alt="icon">
      </h3>
      
      <div class="product-group__elements">
        <label class="product-group__label" for="filter3">
          <input id="filter3" type="checkbox">
          <div class="product-group__checkbox"></div>
          <span>300 mm</span>
        </label>

        <label class="product-group__label" for="filter4">
          <input id="filter4" type="checkbox">
          <div class="product-group__checkbox"></div>
          <span>300 mm</span>
        </label>
      </div>
    </div>
	
	
	  <?php if($products)
		  foreach ($products as $product) {
			  if($product->old_price > $product->price) {
				  ?>
          <ul class="list list-unstyled setCheck">
            <li>
              <input id="sale" class="styled setInput" type="checkbox" name="sale" value="1" <?= isset($_GET['sale']) ? 'checked' : '' ?> >
              <label for="sale" >
							  <?= $this->text('Акційні'); ?></span>
              </label>
            </li>
          </ul>
				  <?php break; }
		  }
		
		  if($filters) { foreach ($filters as $filter) {
			  usort($filter->values, function($a, $b) { return strcmp($a->name, $b->name); });
			  if(count($filter->values) > 1) { ?>
          <div class="catalogName"><?=$filter->name?></div>
          <ul class="setCheck">
					  <?php foreach ($filter->values as $value) {
						  $checked = '';
						  if(isset($_GET[$filter->alias]) && is_array($_GET[$filter->alias]) && in_array($value->id, $_GET[$filter->alias])) $checked = 'checked';
						  ?>
              <li>
                <input id="filter-<?=$filter->id?>-<?=$value->id?>" class="styled setInput" type="checkbox" name="<?=$filter->alias?>[]" value="<?=$value->id?>" <?=$checked?> >
                <label for="filter-<?=$filter->id?>-<?=$value->id?>" >
								  <?=$value->name?>
                </label>
              </li>
					
					  <?php } ?>
          </ul>
			  <?php } } }else{?>
        <div class="catalogName">Немає даних для фільтрування</div>
		  <?php } ?>
	
	  <?php if($products){
		  $money = array(); $x = 0;
		  foreach ($products as $product) {
			  $money[$x] = $product->price;
			  $x++;}
		  sort($money); foreach ($money as $minmoney) {
			  $min = $minmoney;
			  break;
		  }
		  rsort($money); foreach ($money as $maxmoney) {
			  $max = $maxmoney;
			  break;
		  }
		  if($max > $min) { ?><br>
        <div class="catalogName"><?=$this->text('Вартість')?></div>
        <div class="price-range" data-start-min="<?=$min?>" data-start-max="<?=$max?>" data-min="0" data-max="<?=$max + $min?>" data-step="0.01">
          <input type="hidden" name="price_min" id="mimim">
          <input type="hidden" name="price_max" id="maxi">
          <div class="ui-range-values">
            <div class="ui-range-value-min">
              <span></span>грн
              <input type="hidden">
            </div>
            <div class="ui-range-value-max">
              <span></span>грн
              <input type="hidden">
            </div>
          </div>
          <div class="ui-range-slider"></div>
        </div>
        <br><br>
		
		  <?php } } ?>
    

  </div>
  <div class="product-group__items-wrap">
    <span class="title">
      Однорівневі металеві шафи для одягу
    </span>
    <div class="item-wrap">
    
			<?php if (!empty($products)) {
				foreach ($products as $items) { ?>
          <div
              class="item-card <?= empty($items->old_price_in) ? '' : 'sale'; ?> <?= !empty($items->novynka) ? 'new' :
								'' ?>"
          >
            <a href="<?= SERVER_URL . $items->link ?>">
              <img
                  class="item-card__img"
                  src="<?= IMG_PATH . $items->thumb_photo ?>"
                  alt="img"
              >
            </a>
            <h5 class="item-card__title"><?= $items->name ?></h5>
            <div class="item-card__price-block">
              <div class="item-card__price-wrap">
								<?php if (!empty($items->old_price_in)) { ?>
                  <span class="item-card__old-price"><?= $items->old_price_in ?> грн</span>
								<?php } ?>
                <span class="item-card__price"><?= $items->price ?> <span>грн</span></span>
              </div>
              <div class="item-card__cart">
                <div class="item-card__cart-icon"></div>
                <div class="item-card__phone-icon"></div>
              </div>
            </div>
          </div>
				<?php }
			} ?>
    </div>
  </div>
</div>
	
	