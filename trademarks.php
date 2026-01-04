
<?php
  $page_title = 'Собственные торговые марки';
include_once('template-parts/repeat-block.php');
include_once('template-parts/trademarks-block.php');
include_once('header-page.php');?>
<?php include_once('footer.php')?>
  

<style>
  .repeat-block-title {
    letter-spacing: 0.7px;
  }
  .trademarks {
    margin-bottom: 224px;
  }
  .footer-top {
    padding-top: 50px;
  }

  @media (max-width: 576px) {
    .trademarks {
      margin-bottom: 100px;
    }

    .bg-gray {
      padding-bottom: 50px;
    }
  }
</style>