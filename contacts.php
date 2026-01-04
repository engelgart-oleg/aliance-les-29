
<?php
$page_title = 'Контакты';
include_once('template-parts/repeat-block.php');?>

<section class="contacts">
  <div class="container contacts-container">
    <div class="contacts-wrapper">

      <a class="contacts-phone" href="tel:+74996861014">+7 (499) 686-10-14</a>

      <div class="contacts-address">
        <svg class="contacts-icon" width="36" height="36">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address>г. Москва, Холодильный пер. 4к1с8</address>
      </div>

      <div class="contacts-email">
        <svg class="contacts-icon" width="36" height="36">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
      </div>

      <div class="contacts-socials">
        <a class="contacts-socials-link" href="#">
          <svg class="contacts-socials-link-icon-vk" width="36" height="36">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a class="contacts-socials-link" href="#">
          <svg class="contacts-socials-link-icon-inst" width="36" height="36">
            <use href="img/sprite.svg#inst"></use>
          </svg>
        </a>
     </div>
     <!-- /.mobile-socials -->

    </div>
    <!-- /.contacts-wrapper -->
  </div>
</section>
<!-- /.contacts -->

<div class="contacts-map">
  <div class="container contacts-map-container">
    <div style="position:relative;overflow:hidden;">
      <iframe class="contacts-map-iframe" src="https://yandex.kz/map-widget/v1/?ll=37.624058%2C55.709414&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgozMjk2NDQ0NTc1EkbQoNC-0YHRgdC40Y8sINCc0L7RgdC60LLQsCwg0KXQvtC70L7QtNC40LvRjNC90YvQuSDQv9C10YDQtdGD0LvQvtC6LCA0IgoNCn8WQhVx1l5C&z=17.06" 
        width="600" height="400" frameborder="1" allowfullscreen="true" style="position:relative;">
      </iframe>
    </div>
  </div>
</div>
<!-- /.contacts-map -->

<?php include_once('header-page.php');?>
<?php include_once('footer.php');?> 


<style>
  .repeat-block {
    padding-bottom: 3.225rem;
  }
  .repeat-block-title {
    letter-spacing: .008px;
  }
  .section-cta {
    padding-top: 90px;
  }
  .footer-top {
    padding-top: 50px;
  }

  @media (max-width: 1200px) {
    .head {
      margin-bottom: 50px;
    }
    .contacts {
      margin-bottom: 50px;
    }
    .contacts-phone {
      font-size: 28px;
      margin-right: 0;
    }
    .contacts-address,
    .contacts-email {
      font-size: 16px;
      margin-right: 0;
    }
    .contacts-map {
      margin-bottom: 100px;
    }
  }

  @media (max-width: 992px) {
    .contacts-wrapper {
      flex-direction: column;
      align-items: start;
    }
    .contacts-phone {
      font-size: 32px;
      padding-left: 0;
      margin-bottom: 32px;
    }
    .contacts-address,
    .contacts-email {
      font-size: 20px;
      margin-bottom: 30px;
    }
  }

  @media (max-width: 576px) {
    .repeat-block {
      padding-bottom: 50px;
    }    

    .contacts-address {
      max-width: 300px;
      gap: 22px;
    }
    .contacts-address,
    .contacts-email {
      align-items: start;
    }
    .contacts-map {
      margin-bottom: 95px;
    }
    .contacts-map-iframe {
      width: 345px;
      height: 500px;
    }

    .section-cta {
      padding-top: 47px;
    }

    .footer-top {
      padding-top: 52px;
    }
  }
</style>