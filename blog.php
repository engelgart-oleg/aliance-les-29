
<?php
$page_title = 'Блог';
include_once('template-parts/repeat-block.php');
include_once('template-parts/blog-block.php');
include_once('header-page.php');?>
<?php include_once('footer.php');?>
  
<style>
  .seporator {
    width: 135px;
  }
  /* blog-block */
  .blog {
    margin-bottom: 215px;
  }
  .blog-slider-wrapper {
    flex-wrap: wrap;
    row-gap: 30px;
    margin-bottom: 108px;
  }
  .blog-card {
    flex-basis: 48.9%;
  }
  .button-link {
    display: none;
  } 
  .blog-slider-footer {
  }
  .blog-buttons {
    display: none;
  }
  .swiper-pagination {
    display: flex;
  }
  .blog-slider {
    overflow-x: hidden;
  }
  .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
      width: 240px;
  }
  .swiper-pagination-bullet:nth-child(6),
  .swiper-pagination-bullet:nth-child(7),
  .swiper-pagination-bullet:nth-child(8),
  .swiper-pagination-bullet:nth-child(9),
  .swiper-pagination-bullet:nth-child(10) {
    display: none;
  }
  .blog-slider-footer {
    margin: 0;
  }

  @media (max-width: 1710px) {
    .blog-card {
      flex-basis: 48.9%;
    }
    .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
      left: 78%;
    }
  }
  
  @media (max-width: 1460px) {
    .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
      left: 77%;
    }
  }

  @media (max-width: 1370px) {
    .blog-card {
      flex-basis: 48.8%;
    }
  }

  @media (max-width: 1200px) {
    .blog-slider-wrapper {
      column-gap: 20px;
      row-gap: 20px;
    }
    .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
      left: 71%;
    }
  }

  @media (max-width: 1024px) {
    .blog-card {
      flex-basis: 48.8%;
    }
  }

  @media (max-width: 992px) {
    .blog-slider-wrapper {
      column-gap: 10px;
      row-gap: 10px;
    }
    .blog-card {
      flex-basis: 49%;
    }
    .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
      left: 50%;
      transform: translateX(-50%)
    }
  }

  @media (max-width: 768px) {
    .blog-card {
      flex-basis: 100%;
    }
  }

  @media (max-width: 576px) {
    .blog {
      margin-bottom: 90px;
    }
    .blog-slider-wrapper {
      margin-bottom: 106px;
    }
    .swiper-pagination.swiper-pagination-bullets.swiper-pagination-horizontal {
      left: 172px;
      gap: 28px;
    }
    .swiper-pagination-bullet-active {
      width: 49px;
      height: 48px;
    }
  }
</style>