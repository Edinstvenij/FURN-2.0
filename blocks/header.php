<?php
$filters = [
  'all',
  'table',
  'sitting',
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/swiper.css" />
  <link rel="stylesheet" href="css/style.min.css">
  <title><?= $title ?></title>
</head>

<body>
  <div class="header__nav-overlay"></div>
  <header class="header-all-product
  <?php if ($_SERVER['REQUEST_URI'] != '/all-product.php' && $_SERVER['REQUEST_URI'] != '/delivery.php' && $_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/') {
    echo 'header-product-preview';
  } ?>">
    <div class="container">
      <div class="row row-jcsb row-ai-center">
        <div class="wrapper-img wrapper-header-all-product-logo
         <?php if ($_SERVER['REQUEST_URI'] != '/all-product.php' && $_SERVER['REQUEST_URI'] != '/delivery.php' && $_SERVER['REQUEST_URI'] != '/designer.php' && $_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/') {
            echo 'animation-turn';
          } ?>">

          <a href="/"><img src="img/mini-logo.svg" alt=""></a>
        </div>
        <?php if ($_SERVER['REQUEST_URI'] != '/delivery.php' && $_SERVER['REQUEST_URI'] != '/designer.php' && $_SERVER['REQUEST_URI'] != '/index.php' && $_SERVER['REQUEST_URI'] != '/') { ?>
          <nav class="catalog">
            <ul class="catalog__ul">
              <?php if ($_SERVER['REQUEST_URI'] != '/all-product.php') { ?>
                <?php foreach ($filters as $value) : ?>
                  <li class="catalog__li" data-filter="<?= $value ?>"><a href="all-product.php"><?= $value ?></a></li>
                <?php endforeach ?>
              <?php } else { ?>
                <?php foreach ($filters as $value) : ?>
                  <li class="catalog__li" data-filter="<?= $value ?>"><?= $value ?></li>
                <?php endforeach ?>
              <?php } ?>
            </ul>
            <span class="header__open-close header-all-product__nav-open"></span>
          </nav>
        <?php } else { ?>
          <span class="header__open-close header-all-product__nav-open"></span>
        <?php } ?>
      </div>
    </div>

    <!-- block navigation -->
    <?php require_once 'blocks/navigation.php' ?>
    <!-- END block navigation -->
  </header>