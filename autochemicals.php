<?php
$page_title = 'Автомобильная химия';
include_once('template-parts/repeat-block-image.php');

$block_title = "Контрактное производство автомобильной химии"; 
include_once('template-parts/about-experts-block.php');

include_once('template-parts/features-slider-block-dark.php');

$block_title = "Изготовление автохимии"; 
include_once('template-parts/production-block-about.php');?>

<div class="chemicals">
  <div class="container chemicals-container">
    <div class="chemicals-wrapper">
      <div class="chemicals-content">
        <div class="seporator"></div>
        <h2 class="section-title chemicals-section-title">Виды автохимии</h2>
        <p class="chemicals-text">
          Но современная методология разработки позволяет оценить значение прогресса профессионального сообщества. Есть над чем задуматься: тщательные исследования конкурентов набирают популярность среди определенных слоев населения, а значит, должны быть ассоциативно распределены по отраслям.
        </p>
        <ul class="chemicals-list">
          <li class="chemicals-list-item">Антискотч</li>
          <li class="chemicals-list-item">Многоцелевая смазка</li>
          <li class="chemicals-list-item">Жидкий ключ</li>
          <li class="chemicals-list-item">Высокотемпературная смазка</li>
          <li class="chemicals-list-item">Универсальный очиститель деталей</li>
          <li class="chemicals-list-item">Силиконовая смазка</li>
          <li class="chemicals-list-item">Цепная смазка</li>
          <li class="chemicals-list-item">Медная смазка</li>
          <li class="chemicals-list-item">Графитовая смазка</li>
          <li class="chemicals-list-item">Очиститель кондиционера пенный</li>
          <li class="chemicals-list-item">Очиститель тормозных дисков</li>
          <li class="chemicals-list-item">Очиститель битумных пятен</li>
          <li class="chemicals-list-item">Очиститель кондционера</li>
          <li class="chemicals-list-item">Очиститель дросельной заслонки</li>
          <li class="chemicals-list-item">Очиститель обивки </li>
          <li class="chemicals-list-item">Тефлоновая смазка</li>
          <li class="chemicals-list-item">Очиститель двигателя</li>
          <li class="chemicals-list-item">Универсальный очиститель</li>
          <li class="chemicals-list-item">Чернитель шин</li>
          <li class="chemicals-list-item">Чернитель шин + очистка</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- /.chemicals -->

<?php
$block_title = "Исследовательский центр Aliance production"; 
include_once('template-parts/slider-research.php');

include_once('template-parts/section-steps-block.php');
include_once('template-parts/clients-block.php');
include_once('header-page.php');?>
<?php include_once('footer.php');?>


<style>
  .breadcrumb-link-db {
    display: none;
  }
  /* experts */
  .experts-content-wrapper {
    align-items: center;
  }
  .about-production-section-title {
    letter-spacing: 0.3px;
  }
  .experts-photo-1,
  .experts-photo-3 {
    display: none;
  }
  .experts-content {
    max-width: 720px;
    padding-top: 0;
  }
  .experts-text-1 {
    display: none;
  }  

  /* header-features */
  .header-features-text-dark {
    margin-top: 24px;
  } 

  /* about-production */
  .about-production {
    margin-bottom: 256px;
  }
  .about-production-text-1,
  .about-production-text-2 {
    display: none;
  }
  .about-production-text-3 {
    margin-bottom: 1.7625rem;
  }
  .about-production-list-1 {
    display: none;
  }
  .about-production-list-2 {
    max-width: 700px;
    margin-left: -6px;
  }
  .about-production-list li:nth-child(1), 
  .about-production-list li:nth-child(2), 
  .about-production-list li:nth-child(3), 
  .about-production-list li:nth-child(4), 
  .about-production-list li:nth-child(5), 
  .about-production-list li:nth-child(6), 
  .about-production-list li:nth-child(7), 
  .about-production-list li:nth-child(8) {
    margin-bottom: 1.05rem;
  }
  .about-production-list li:nth-child(4),
  .about-production-list li:nth-child(8) {
    margin-bottom: 0;
  }
  .about-production-image-1 {
    display: none;
  }

  /* blog-block */
  .blog-section-title {
    margin-bottom: 27px;
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

  .section-steps {
    margin-bottom: 8.375rem;
  }
  .steps-button-link {
    display: flex;
  }

  .steps-title {
    margin-top: 34px;
  }

  .clients {
    margin-bottom: 230px;
  }

  .section-cta {
    padding-bottom: 83px;
  }

  @media (max-width: 1460px) {
    .about-production-image-2 {
      max-width: 650px;
    }
  }

  @media (max-width: 1280px) {
    .about-production-image-2 {
      max-width: 550px;
    }
  }

  @media (max-width: 1200px) {
    .about-production-image-2 {
      position: relative;
      top: 20px;
      left: 20px;
      width: 100%;
    }
  }

  @media (max-width: 992px) {
    .about-production-image-2 {
      left: 10px;
    }
  }

  @media (max-width: 576px) {
    .repeat-block-wrapper {
      padding-left: 0;
    }

    .experts-photo-2 {
      max-width: 345px;
      height: 430px;
      margin-bottom: 33px;
    }
    .experts-section-title {
      letter-spacing: 0.1rem;
      margin-top: 18px;
      margin-bottom: 16px;
    }
    .experts-text-3 {
      max-width: 340px;
    }

    .features-dark-container {
      margin-bottom: 61px;
    }
    .header-features-text-dark {
      font-size: 14px;
    }
    .header-features-item {
      padding-bottom: 13px;
    }
    .slider-button-next {
      padding-left: 25px;
    }

    .about-production {
      margin-bottom: 136px;
    }
    .about-production-section-title {
      letter-spacing: 1.2px;
      margin-top: 17px;
      margin-bottom: 16px;
    }
    .about-production-text-3 {
      margin-bottom: 27px;
    }   
    .about-production-list-2 {
      columns: 1;
    }
    .about-production-list li:nth-child(1),
    .about-production-list li:nth-child(2),
    .about-production-list li:nth-child(3),
    .about-production-list li:nth-child(4),
    .about-production-list li:nth-child(5),
    .about-production-list li:nth-child(6),
    .about-production-list li:nth-child(7),
    .about-production-list li:nth-child(8) {
      margin-bottom: 0.85rem;
    }
    .about-production-image-2 {
      top: 35px;
      left: 0;
      max-width: 375px;
    }

    .chemicals {
      margin-bottom: 102px;
    }
    .chemicals-container {
      padding-left: 0;
    }
    .chemicals-section-title {
      margin-top: 19px;
      margin-bottom: 10px;
    }
    .chemicals-text {
      font-size: 14px;
      margin-bottom: 32px;
    }
    .chemicals-list {
      padding-left: 30px;
    }
    .chemicals-list-item:nth-child(11), 
    .chemicals-list-item:nth-child(12), 
    .chemicals-list-item:nth-child(13), 
    .chemicals-list-item:nth-child(14), 
    .chemicals-list-item:nth-child(15) {
      margin-left: 0;
    }
    .chemicals-list-item:nth-child(16), 
    .chemicals-list-item:nth-child(17), 
    .chemicals-list-item:nth-child(18), 
    .chemicals-list-item:nth-child(19), 
    .chemicals-list-item:nth-child(20) {
      margin-left: 0;
    }
    .chemicals-list-item {
      font-size: 14px;
    }
    .chemicals-list-item:nth-child(5), 
    .chemicals-list-item:nth-child(10), 
    .chemicals-list-item:nth-child(14) {
      max-width: 100%;
    }
    .chemicals-list-item {
      margin-bottom: 22px;
    }
    .chemicals-list-item::before {
      width: 14px;
    }
    .chemicals-list-item:nth-child(5), 
    .chemicals-list-item:nth-child(10), 
    .chemicals-list-item:nth-child(15) {
      margin-bottom: 22px;
    }

    /* research slider-research */
    .research {
      margin-bottom: 100px;
    }
    .research-container {
      padding-left: 0;
      margin-bottom: 34px;
    }
    .research-section-title {
      margin-top: 18px;
      margin-bottom: 16px;
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

    .steps-title {
      margin-top: 15px;
    }

    .clients {
      margin-bottom: 100px;
    }

    .section-cta {
      padding-bottom: 37px;
    }    
  }
</style>
