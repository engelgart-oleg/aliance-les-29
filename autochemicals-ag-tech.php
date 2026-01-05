<?php 
$page_title = 'Автохимия AG-TECH';
include_once('template-parts/repeat-block-image.php');

$block_title = 'Собственное производство автохимия AG-Tech';
include_once('template-parts/about-experts-block.php');
include_once('template-parts/features-slider-block-dark.php');?>

<div class="distributor">
  <div class="container distributor-container">
    <div class="distributor-content">
      <div class="seporator"></div>
      <h2 class="section-title distributor-section-title">Генеральный дистрибьютор премиальной автохимии</h2>
      <p class="distributor-text">
        Внезапно, активно развивающиеся страны третьего мира могут быть объявлены нарушающими общечеловеческие нормы этики и морали.
      </p>
      <ul class="distributor-list">
        <li class="distributor-list-item">
          <a class="distributor-list-item-link" href="#">
            <svg class="distributor-list-item-link-icon" width="24" height="24">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Полное описание товаров            
          </a>
        </li>
        <li class="distributor-list-item">
          <a class="distributor-list-item-link" href="#">
            <svg class="distributor-list-item-link-icon" width="24" height="24">
              <use href="img/sprite.svg#car"></use>
            </svg>
            Актуальные цены            
          </a>
        </li>
        <li class="distributor-list-item">
          <a class="distributor-list-item-link" href="#">
            <svg class="distributor-list-item-link-icon" width="24" height="24">
              <use href="img/sprite.svg#brush"></use>
            </svg>
            Лаки и краски            
          </a>
        </li>
        <li class="distributor-list-item">
          <a class="distributor-list-item-link" href="#">
            <svg class="distributor-list-item-link-icon" width="24" height="24">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Химические производства            
          </a>
        </li>
      </ul>
      <a class="button distributor-button" href="#" download="">
        <svg class="distributor-button-icon" width="24" height="24">
          <use href="img/sprite.svg#download"></use>
        </svg>
        Скачать каталог
      </a>
    </div>
  </div>
</div>
<!-- /.distributor -->

<?php
$block_title = "Исследовательский центр Aliance production";
include_once('template-parts/slider-research.php');
include_once('template-parts/section-steps-block.php');
include_once('template-parts/clients-block.php');
include_once('header-page.php');?>
<?php include_once('footer.php');?>


<style>
  .head {
    padding-top: 93px;
  }
  .repeat-block-title {
    letter-spacing: 0.2px;
  }
  .breadcrumb-link-dn {
    display: none;
  }

  .research {
    margin-bottom: 151px;
  }
  .research-wrapper {
    margin-bottom: 1.975rem;
  }

  /* experts */
  .experts-content-wrapper {
    align-items: center;
  }
  .experts-photo-1,
  .experts-photo-2 {
    display: none;
  }
  .experts-content {
    max-width: 720px;
    padding-top: 0;
  }
  .experts-text-1 {
    display: none;
  }

  .header-features-text-dark {
    margin-top: 24px;
  }

  .autochemicals-image-1 {
    display: none;
  }

  /* blog-block */
  .blog-section-title {
    margin-bottom: 30px;
  }
  .blog-card-title,
  .blog-card-text,
  .button-link,
  .blog-card::before {
    display: none;
  }
  .blog-variation,
  .blog-container-variation,
  .blog-slider-variation {
    overflow: visible;
  }
  .blog-slider-footer {
    justify-content: end;
  }

  .steps-button-link {
    display: flex;
  }

  .clients {
    margin-bottom: 228px;
  }

  .section-cta {
    padding-bottom: 85px;
  }

  @media (max-width: 768px) {
    .distributor {
      padding-bottom: 225px;
      background-image: url(../img/distributor-bg-2.webp), url(../img/distributor-bg-2.png);
      background-size: cover, 375px 264px;
      background-position: 70% 280px;
    }
    .distributor-content {
      max-width: 100%;
    }
  }


  @media (max-width: 576px) {
    .navbar {
        height: 68px;
    }

    .head {
      padding-top: 68px;
    }
    .repeat-block-wrapper {
      padding-left: 0;
    }

    .experts-photo-3 {
      width: 345px;
      height: 430px;
      margin-bottom: 32px;
    }
    .experts-section-title {
      letter-spacing: 1.2px;
      margin-top: 20px;
      margin-bottom: 15px;
    }
    .experts-text-3 {
      max-width: 340px;
    }

    .features-dark-container {
      margin-bottom: 100px;
    }
    .header-features-item-dark {
      padding-bottom: 13px;
    }
    .header-features-text-dark {
      font-size: 14px;
    }
    .slider-button-next {
      padding-left: 25px;
    }

    .distributor {
      padding-top: 48px;
      padding-bottom: 450px;
      background-size: 300%;
      background-position: 64% 448px;
    }
    .distributor-container {
      padding-left: 0;
    }
    .distributor-section-title {
      letter-spacing: 1px;
      margin-top: 20px;
      margin-bottom: 15px;
    }
    .distributor-text {
      font-size: 14px;
      margin-bottom: 28px;
    }
    .distributor-list {
      columns: 1 auto;
      margin-bottom: 52px;
    }
    .distributor-list-item {
      font-size: 14px;
    }
    .distributor-list-item:nth-child(2) {
      margin-bottom: 1.45rem;
    }
    .distributor-button {
      width: 100%;
      padding-left: 82px;
      gap: 13px;
    }

    .research {
      margin-bottom: 99px;
    }
    .research-container {
      padding-left: 0;
    }
    .research-section-title {
      font-size: 34px;
      letter-spacing: 0.6px;
      margin-top: 20px;
      margin-bottom: 17px;
    }
    .research-content {
      margin-bottom: 10px;
    }
    .research-text {
      font-size: 14px;
      line-height: 155%;
    }
    .research-card {
      min-width: 345px;
      height: 195px;
    }
    .research-wrapper {
      margin-bottom: 20px;
    }
    .research-card-image {
      min-width: 345px;
      height: 195px;
    }
    .research-button-link {
      display: none;
    }

    .steps-section {
      margin-bottom: 98px;
    }
    .steps-section-title {
      margin-top: 20px;
    }

    .clients {
      margin-bottom: 100px;
    }
    .clients-section-title {
      margin-top: 18px;
    }

    .section-cta {
      padding-bottom: 38px;
    }

    .footer-info {
      margin-bottom: 19px;
    }
}

@media (max-width: 480px) {
  .distributor {
    padding-bottom: 360px;
    background-position: 70% 490px;
  }
}

@media (max-width: 375px) {
  .distributor {
    padding-bottom: 315px;
    background-position: 62% 565px;
    margin-bottom: 100px;
  }
}
</style>
