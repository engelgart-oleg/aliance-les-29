<!DOCTYPE html>
<html lang="ru">
<head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <title><?= $page_title ?> - Aliance Production</title>
  </head>
<body>

  <div class="mobile-menu">
  
    <ul class="mobile-menu-nav">
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="about.php">О компании</a>
      </li>
  
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="contracts.php">Контрактное производство</a>
  
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="autochemicals.php">Автомобильная химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Бытовая химия</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Дезинфицирующие средства</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Пищевые аэрозоли</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Косметическая продукция</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Краски аэрозольные</a>
          </li>
        </ul>
        <!-- /.mobile-submenu -->
  
      </li>
  
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="trademarks.php">Собственные марки</a>
        <ul class="mobile-submenu">
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="autochemicals-ag-tech.php">Автохимия AG-Tech</a>
          </li>
          <li class="mobile-submenu-item">
            <a class="mobile-submenu-link" href="#">Автохимия AP</a>
          </li>
        </ul>
        <!-- /.mobile-submenu -->
      </li>
  
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="blog.php">Новости</a>
      </li>
      <li class="mobile-menu-nav-item">
        <a class="mobile-menu-nav-link" href="contacts.php">Контакты</a>
      </li>
    </ul>
    <!-- /.mobile-menu-nav -->
  
    <a class="mobile-phone" href="tel:+74996861014">+7 (499) 686-10-14</a>
  
    <div class="mobile-info">
      <div class="mobile-info-address">
        <svg class="mobile-socials-icon-vk" width="24" height="24">
          <use href="img/sprite.svg#mark"></use>
        </svg>
        <address>г. Москва, Холодильный пер. 4к1с8</address>
      </div>
      <div class="mobile-info-email">
        <svg class="mobile-socials-icon-vk" width="24" height="24">
          <use href="img/sprite.svg#mail"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
      </div>
    </div>
    <!-- /.mobile-info -->
  
    <div class="mobile-socials">
      <a class="mobile-socials-icon" href="#">
        <svg class="mobile-socials-icon-vk" width="24" height="24">
          <use href="img/sprite.svg#vk"></use>
        </svg>
      </a>
      <a class="mobile-socials-icon" href="#">
        <svg class="mobile-socials-icon-inst" width="24" height="24">
          <use href="img/sprite.svg#inst"></use>
        </svg>
      </a>
    </div>
    <!-- /.mobile-socials -->
  
  </div>
  <!-- /.mobile-menu -->
  
  <nav class="navbar navbar-light">
  
    <a class="mobile-menu-toggle" href="#">
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
      <div class="mobile-menu-line"></div>
    </a>
    <!-- /.mobile-menu-toggle -->
  
    <a class="header-logo" href="./">
      <svg class="logo-svg logo-light">
        <use href="img/sprite.svg#logo-light"></use>
      </svg>
      <svg class="logo-svg logo-dark">
        <use href="img/sprite.svg#logo"></use>
      </svg>
    </a>
    <!-- /.logo-link -->
  
    <ul class="header-nav">
      <li class="header-nav-item">
        <a class="header-nav-link" href="about.php">О компании</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="contracts.php">Контрактное производство</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="trademarks.php">Собственные торговые марки</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="blog.php">Новости</a>
      </li>
      <li class="header-nav-item">
        <a class="header-nav-link" href="contacts.php">Контакты</a>
      </li>
    </ul>
    <!-- /.header-nav -->
  
    <div class="header-phone">
      <svg class="phone-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <a class="header-phone-link" href="tel:+74996861014">+7 (499) 686-10-14</a>
    </div>
    <!-- /.header-phone -->
  
    <button class="navbar-button navbar-button-light button" data-toggle="modal" data-target="#feedback-modal">
      <svg class="button-icon" width="24" height="24">
        <use href="img/sprite.svg#phone"></use>
      </svg>
      <span class="button-text">Получить консультацию</span>
    </button>
    <!-- /.header-button /.button -->
  
  </nav>
  <!-- /.navbar -->



  



  <?php include_once('footer.php')?>
  


</body>
</html>