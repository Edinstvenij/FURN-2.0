<!-- header -->
<?php
$title = 'Product';
require_once 'blocks/header.php' ?>
<!-- END header -->


<section class="product-preview-wrapper">
  <div class="product-preview">
    <!-- Slider main container -->
    <div class="swiper product-preview__slider">
      <!-- Additional required wrapper -->
      <div class="swiper-wrapper product-preview__slider-wrapper">
        <!-- Slides -->
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/1-product-noize-table.webp" type="image/webp">
              <img src="img/product/1-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/2-product-noize-table.webp" type="image/webp">
              <img src="img/product/2-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/3-product-noize-table.webp" type="image/webp">
              <img src="img/product/3-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/4-product-noize-table.webp" type="image/webp">
              <img src="img/product/4-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
        <div class="swiper-slide product-preview__slider-slide">
          <div class="product-preview__slider-wrapper-img">
            <picture>
              <source srcset="img/product/5-product-noize-table.webp" type="image/webp">
              <img src="img/product/5-product-noize-table.png" alt="SITTING">
            </picture>
          </div>
        </div>
      </div>
      <!-- If we need navigation buttons -->
      <div class="product-preview__slider-row-button">
        <div class="product-preview__slider-button-prev">
          <div class="product-preview__slider-wrapper-button">
            <img src="img/product/arrow-left.svg" alt="">
          </div>
        </div>
        <div class="product-preview__slider-button-next">
          <div class="product-preview__slider-wrapper-button">
            <img src="img/product/arrow-right.svg" alt="">
          </div>
        </div>
      </div>
      <!-- If we need titles and order buttons -->
      <div class="col product-preview__slider-col">
        <div class="product-preview__slider-col-wrapper">
          <h2 class="product-preview__slider-product-name">liquid table</h2>
          <button class="product-preview__slider-product-order-button">Check price</button>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product-info">
  <div class="product-info__wrapper">
    <div class="row product-info__row">
      <div class="col product-info__info-col">
        <h2 class="product-info__info-link">PRODUCT INFORMATION</h2>
        <ul class="product-info__info-ul">
          <li class="product-info__info-li">UPHOLSTERY : stainless steel</li>
          <li class="product-info__info-li">width: 630 mm</li>
          <li class="product-info__info-li">depth: 450 mm</li>
          <li class="product-info__info-li">height: 800 mm</li>
          <li class="product-info__info-li">worktop: 300 mm</li>
        </ul>
        <a class="product-info__info-link" href="#">HOW TO CARE </a>
        <!-- <a class="product-info__info-link" href="img/download/fabric options.pdf">FABRIC CATALOG</a> -->
        <a class="product-info__info-link" href="img/download/LIQUID_TABLE_3D_2D.rar">DOWNLOAD 2D 3D</a>
        <a class="product-info__info-link" href="delivery.php">SHIPPING INFORMATION</a>
      </div>
      <div class="product-info__wrapper-row-img">
        <div class="product-info__wrapper-img ">
          <picture>
            <source srcset="img/product/1-info-product-noize-table.webp" type="image/webp">
            <img src="img/product/1-info-product-noize-table.png" alt="">
          </picture>
        </div>
        <div class="product-info__wrapper-img">
          <picture>
            <source srcset="img/product/2-info-product-noize-table.webp" type="image/webp">
            <img src="img/product/2-info-product-noize-table.png" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- popup order -->
<?php require_once 'blocks/popup-order.php' ?>
<!-- END popup order -->

<!-- footer -->
<?php require_once 'blocks/footer.php' ?>
<!-- END footer -->