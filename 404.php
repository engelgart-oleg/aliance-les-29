
<div class="page-exist">
  <div class="container page-exist-container">
    <div class="page-exist-wrapper">
      <h1 class="page-exist-num">404</h1>
      <h2 class="page-exist-title">Страница не найдена</h2>
      <p class="page-exist-text">
        Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную или напишите нам.
      </p>
      <a class="button page-exist-button" href="/">Вернуться на главную</a>
    </div>
  </div>
</div>
<div class="footer-seporator"></div>

<?php include_once('header-page.php');?>
<?php include_once('footer.php');?>


<style>
  .calltoaction {
    display: none;
  }

  @media (max-width: 576px) {
    .page-exist {
      padding-top: 150px;
      padding-bottom: 98px;
    }
    .page-exist-wrapper {
      padding-left: 0;
    }
    .page-exist-num {
      font-size: 190px;
    }
    .page-exist-title {
      font-size: 20px;
    }
    .page-exist-text {
      font-size: 14px;
      margin-bottom: 48px;
    }
    .page-exist-button {
      font-size: 14px;
      padding: 20px 90px;
    }

    .footer-top {
      margin-bottom: 3px;
    }
    .footer-phone {
      margin-bottom: 21px;
    }
  }
</style>