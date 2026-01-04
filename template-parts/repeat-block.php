<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <header class="head">

    <div class="repeat-block">
      <div class="container repeat-block-container">

        <div class="repeat-block-wrapper">
          <div class="seporator"></div>
          <h1 class="repeat-block-title"><?= $page_title ?></h1>
          <ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="breadcrumb-link" href="#">Главная</a>
            </li>
            <li class="breadcrumb-item active">
              <?= $page_title ?>
            </li>
          </ul>
          <!-- /.breadcrumbs -->
        </div>
        <!-- /.repeat-block-wrapper -->

      </div>
      <!-- /.container -->
    </div>
    <!-- /.repeat-block -->

  </header>
  <!-- /.repeat-block -->
  
</body>
</html>