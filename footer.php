<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

  <section class="section calltoaction">

    <div class="bg-gray section-cta">
      <picture class="cta-image">
        <source type="image/webp" srcset="img/cta.webp">
        <source type="image/png" srcset="img/cta.png">
        <img src="img/cta.png" loading="lazy" alt="call to action">
      </picture>
      <!-- <img class="cta-image" src="img/cta.png" alt="call to action"> -->

      <div class="cta-form-wrapper container">
        <form class="cta-form" method="POST" action="handler.php">
          <h2 class="section-title cta-form-title">Хотите сотрудничать?</h2>
          <p class="cta-form-text">
            Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже
            в
            самых сложных случаях!
          </p>
      
          <div class="input-group-wrapper">
            <div class="input-group">
              <input class="input" id="user-name" type="text" name="username" placeholder=" " maxlength="100" required>
              <label class="input-group-label" for="user-name">Имя</label>
            </div>
            <!-- /.input-group -->
      
            <div class="input-group">
              <input class="input phone-mask" id="user-phone" type="tel" name="userphone" placeholder=" " maxlength="30" required>
              <label class="input-group-label" for="user-phone">+_ (___) __-__-___</label>
            </div>
            <!-- /.input-group -->
          </div>
          <!-- /.input-group-wrapper -->
      
          <div class="cta-form-footer">
            <button class="button cta-form-button" type="submit">Отправить заявку</button>
            <div class="cta-notification">
              <svg class="cta-notification-icon" width="14" height="14">
                <use href="img/sprite.svg#shield"></use>
              </svg>
              <p class="cta-notification-text">
                Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
              </p>
            </div>
          </div>
          <!-- /.calltoaction-form-footer -->
      
        </form>
      </div>
      <!-- /.calltoaction-form-wrapper -->
    </div>
    <!-- /.bg-gray section-cta -->

  </section>
  <!-- /.section calltoaction -->

  <footer class="footer">
    <div class="container footer-container">
      
      <div class="footer-top">
        <svg class="footer-logo">
          <use href="img/sprite.svg#logo"></use>
        </svg>
        <a class="footer-phone" href="tel:+79996861014">+7 (999) 686-10-14</a>

        <div class="footer-info">
          <div class="footer-info-address">
            <svg class="footer-info-icon-mark" width="24" height="24">
              <use href="img/sprite.svg#mark"></use>
            </svg>
            <address>г. Мосвка, Холодильный пер. 4к1с8</address>
          </div>
          <div class="footer-info-email">
            <svg class="footer-info-icon-mail" width="24" height="24">
              <use href="img/sprite.svg#mail"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru">a.dragunov@tdaliance.ru</a>
          </div>
        </div>
        <!-- /.footer-info -->

        <div class="footer-socials">
          <a class="footer-socials-link" href="#">
            <svg class="footer-socials-icon" width="24" height="24">
              <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a class="footer-socials-link" href="#">
            <svg class="footer-socials-icon" width="24" height="24">
              <use href="img/sprite.svg#inst"></use>
            </svg>
          </a>
        </div>
        <!-- /.footer-social -->

      </div>
      <!-- /.footer-top -->
    </div>
    <!-- /.container -->

    <div class="footer-seporator"></div>
    <!-- /.footer-seporator -->

    <div class="container footer-container">
      <div class="footer-bottom">

        <div class="footer-menu-wrapper">
          <h2 class="footer-menu-title">Контрактное производство</h2>
          <ul class="footer-menu-list footer-menu-columns-2">
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="autochemicals.php">Автомобильная химия</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Бытовая химия</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Дезинфицирующие средства</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Пищевые аэрозоли</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Косметическая продукция</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Краски аэрозольные</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper footer-menu-wrapper-2">
          <h2 class="footer-menu-title">Собственные марки</h2>
          <ul class="footer-menu-list">
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="autochemicals-ag-tech.php">Автохимия AG-Tech</a>
            </li>
            <li class="footer-menu-item">
              <a class="footer-menu-link" href="#">Автохимия AP</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

        <div class="footer-menu-wrapper footer-menu-wrapper-3">
          <ul class="footer-menu-list footer-menu-list-bottom">
            <li class="footer-menu-item footer-menu-item-mb">
              <a class="footer-menu-link footer-menu-link-bold" href="about.php">О компании</a>
            </li>
            <li class="footer-menu-item footer-menu-item-mb">
              <a class="footer-menu-link footer-menu-link-bold" href="blog.php">Новости</a>
            </li>
            <li class="footer-menu-item footer-menu-item-mb">
              <a class="footer-menu-link footer-menu-link-bold" href="contakts.php">Контакты</a>
            </li>
          </ul>
        </div>
        <!-- /.footer-menu-wrapper -->

      </div>
      <!-- /.footer-bottom -->
    </div>
    <!-- /.container -->

    <div class="footer-seporator"></div>
    <!-- /.footer-seporator -->

    <div class="container footer-container">
      <div class="footer-wrapper">
        <div class="footer-legal">
          <p class="footer-copyright">
            &copy; <?php echo date('d.m.Y') ?> «Aliance Production». Все права защищены.
          </p>
          <a class="footer-policy" href="politics.php">Политики конфиденциальности</a>
        </div>
        <div class="footer-author">
          <span class="made-in made-in-desctop">Сделано в</span>
          <span class="made-in made-in-mobile">Дизайн и разработка:</span>
          <svg class="made-in-icon" width="52" height="11">
            <use href="img/sprite.svg#ruso"></use>
          </svg>
        </div>
        <!-- /.footer-author -->
        <!-- /.footer-legal -->
      </div>
      <!-- /.footer-wrapper -->
    </div>
    <!-- /.container -->
  </footer>
  <!-- /.footer -->


  <div class="modal" id="feedback-modal">
    <div class="modal-dialog">
      <h2 class="modal-title">Есть вопросы?</h2>
      <a class="modal-close" data-toggle="modal" data-target="#feedback-modal" href="#">
        <svg class="modal-close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-text">
        Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в
        самых сложных случаях!
      </p>

      <form class="modal-form" method="POST" action="handler.php">

        <div class="input-group-wrapper input-group-vertical">
          <div class="input-group modal-input-group">
            <input class="input modal-input" id="modal-user-name" type="text" name="username" placeholder=" " maxlength="100" required>
            <label class="input-group-label modal-input-label" for="modal-user-name">Имя</label>
          </div>
          <!-- /.input-group -->
        
          <div class="input-group modal-input-group">
            <input class="input modal-input phone-mask" id="modal-user-phone" type="tel" name="userphone" placeholder=" " maxlength="30" required>
            <label class="input-group-label modal-input-label" for="modal-user-phone">+_ (___) __-__-___</label>
          </div>
          <!-- /.input-group -->
        </div>
        <!-- /.input-group-wrapper -->
        
        <div class="modal-form-footer">
          <button class="button modal-form-button" type="submit">Отправить заявку</button>
          <div class="cta-notification">
            <svg class="cta-notification-icon" width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="cta-notification-text">
              Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
        <!-- /.modal-form-footer -->

      </form>
      <!-- /.modal-form -->

    </div>
  </div>
  <!-- /.modal -->


  <div class="modal modal-thank" id="alert-modal">
    <div class="modal-dialog modal-thank-dialog">
      <img class="modal-thank-image" src="img/thanks.svg" alt="thank image">
      <h2 class="modal-title">Спасибо за заявку!</h2>
      <a class="modal-close" data-toggle="modal" data-target="#alert-modal" href="#">
        <svg class="modal-close-icon" width="24" height="24">
          <use href="img/sprite.svg#close"></use>
        </svg>
      </a>
      <p class="modal-text">
        Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
      </p>
      <a class="button modal-form-button modal-thank-button" href="index.php">Вернуться на главную</a>
    </div>
  </div>
  <!-- /.modal-thank -->







  <script src="js/swiper-bundle.min.js"></script>
  <script src="js/just-validate.production.min.js"></script>
  <!-- <script src="https://unpkg.com/imask"></script> -->
  <script src="js/main.js"></script>  
  
</body>
</html>        

