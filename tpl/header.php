<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://unpkg.com/react@16/umd/react.development.js"></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
  <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
  <title>Сайт туристической компании</title>
</head>

<body class="body-top">

  <div class="content">
    <header class="container-fluid">
      <div class="row">
        <div class="col-3">
          <img src="img\logo.png" alt="logo" id="logo">
        </div>
        <div class="col-9">
          <h1>Путешествуй с нами!</h1>
          <div class="code">
            <?php
            if (empty($_SESSION['login']) or empty($_SESSION['id'])) {
              ?>
              <div id="auth_block">
                <div id="link_register">
                  <a href="registr.php">Регистрация</a>
                </div>
                <div id="link_auth">
                  <a href="avtor.php">Авторизация</a>
                </div>
              </div>
              <?php
            } else {
              ?>
              <div id="exit_block">
                <div id="link_remark">
                  <a href="remarks.php">Вы можете оставить отзыв</a>
                </div>
                <div id="link_exit">
                  <a href="exit.php">Выход</a>
                </div>
              </div>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </header>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>