
<?php
$page_title = 'О компании';

include_once('template-parts/repeat-block.php');

$block_title = "мы - эксперты в области производства химии"; 
include_once('template-parts/about-experts-block.php');
include_once('template-parts/features-slider-block-dark.php');

$block_title = "Наше производство"; 
include_once('template-parts/production-block-about.php');
include_once('template-parts/founder-block.php');

$block_title = "Исследовательский центр Aliance production"; 
include_once('template-parts/slider-research.php');

include_once('template-parts/clients-block.php');
include_once('header-page.php');?>
<?php include_once('footer.php');?>


<style>
  .research {
    margin-bottom: 9.475rem;
  }
  /* experts */
  .experts-photo-2,
  .experts-photo-3 {
    display: none;
  }
  .experts-content {
    /* max-width: 720px; */
    /* padding-top: 50px; */
  }
  .experts-text {
    margin-bottom: 0;
  }
  .experts-text-2,
  .experts-text:last-child {
    display: none;
  }

  .slider-button-prev,
  .slider-button-next {
    border: 1px solid rgba(235, 235, 240, 1);
  }
  .slider-button-prev svg,
  .slider-button-next svg {
    color: rgba(235, 235, 240, 1);
  }

  /* about-production */
  .about-production-text-3 {
    display: none;
  }
  .about-production-list-2 {
    display: none;
  }
  .about-production-list li:nth-child(3),
  .about-production-list li:nth-child(6) {
    margin-bottom: 0;
  }
  .about-production-image-2 {
    display: none;
  }

  /* blog-block */
  .blog-section-title {
    margin-bottom: 28px;
  }
  .blog-card {
    max-width: 705px;
  }
  .blog-card-title,
  .blog-card-text,
  .button-link,
  .blog-card::before {
    display: none;
  }
  .blog-variation {
    overflow: hidden;
  }
  .blog-slider-footer {
    justify-content: end;
  }

  /* .clients */
  .clients {
    margin-bottom: 230px;
  }

  .section-cta {
    padding-top: 94px;
  }

  .footer-top {
    padding-top: 50px;
  }

  @media (max-width: 1200px) {
    .about-production-list li:nth-child(3) {
      margin-bottom: 15px;
    }
  }

  @media (max-width: 576px) {
    .head {
      margin-bottom: 52px;
    }
    .experts-photo-1 {
      max-width: 345px;
      height: 345px;
    }
    .experts-content {
      padding-top: 50px;
    }
    .experts-section-title {
      letter-spacing: 1.2px;
      margin-top: 18px;
    }


    .header-features-item {
      max-width: 73.2%;
      padding: 20px 26px 14px 26px;
    }
    .header-features-text-dark {
      font-size: 14px;
      margin-top: 18px;
    }
    .slider-button-next {
      padding-left: 25px;
    }
    .features-dark-container {
      margin-bottom: 61px;
    }

    .about-production {
      margin-bottom: 100px;
    }
    .about-production-section-title {
      letter-spacing: 1.2px;
      margin-top: 18px;
      margin-bottom: 34px;
    }
    .about-production-image-1 {
      margin-bottom: 28px;
    }
    .about-production-text-1 {
      margin-bottom: 10px;
    }
    .about-production-text-2 {
      margin-bottom: 30px;
    }

    .founder {
      margin-bottom: 100px;
    }
    .founder-photo {
      margin-bottom: 18px;
    }
    .button-link {
      display: flex;
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

    .clients {
      margin-bottom: 101px;
    }
    .clients-section-title {
      font-size: 36px;
      margin-bottom: 25px;
    }

    .section-cta {
      padding-top: 46px;
      padding-bottom: 50px;
    }
    .cta-form-title {
      font-size: 36px;
    }

    .footer-info {
      margin-bottom: 18px;
    }

  }
</style>