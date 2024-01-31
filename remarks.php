<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
  <link rel="stylesheet" href="css\style.css">
  <title>Отзывы</title>
</head>

<body class="body-top">
  <header class="container">
    <h2>Оставьте свой отзыв</h2>
  </header>

  <?php
  include('tpl/nav.php');
  ?>

  <form action="save_remarks.php" method="post">
    <p>
      <label>Тема сообщения:<br></label>
      <textarea name="tema" cols="38" rows="3"></textarea>
    </p>
    <p>
      <label>Введите текст сообщения:<br></label>
      <textarea name="text" cols="38" rows="6"></textarea>
    </p>
    <input type="submit" name="submit" class="btn btn-primary" value="Сохранить">
  </form>

  <?php
  include('tpl/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>