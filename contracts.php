
<?php
$page_title = 'Контрактное производство';
include_once('template-parts/repeat-block.php');
include_once('template-parts/production-block.php');?>

<section class="seo">
  <div class="container seo-container">
    <h3 class="seo-title">SEO Заголовок</h3>
    <p class="seo-text">
      Также как дальнейшее развитие различных форм деятельности предполагает независимые способы реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: курс на социально-ориентированный национальный проект играет важную роль в формировании как самодостаточных, так и внешне зависимых концептуальных решений. Внезапно, интерактивные прототипы набирают популярность среди определенных слоев населения, а значит, должны быть...
    </p>
    <a class="seo-read-more" href="#">
      <svg class="seo-read-more-icon" width="24" height="24">
        <use href="img/sprite.svg#load"></use>
      </svg>  
      Читать больше
    </a>
  </div>
</section>

<?php
include_once('header-page.php');?>
<?php include_once('footer.php');?>

<style>
  .production {
    margin-bottom: 100px;
  }
  .seo-container {
    padding-left: 10px;
  }
  .input-group-wrapper {
    margin-bottom: 1.675rem;
  }

  @media (max-width: 576px) {
    .production {
      margin-bottom: 43px;
    }

    .seo-container {
      padding-left: 0;
    }

    .input-group-wrapper {
      margin-bottom: 10px;
    }    
  }
</style>