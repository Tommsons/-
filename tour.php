<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Сайт туристической компании</title>
</head>

<body>
  <?php
  include('tpl/header.php');
  include('tpl/nav.php');
  ?>

  <main class="flex">
    <div class="row">
      <div class="col">
        Актуальная информация о туре:
      </div>
    </div>
    <div class="container-fluid">
      <?php
      include("bdconnect.php");
      $label = 'id';
      $id = false;
      if (!empty($_GET[$label])) {
        $id = $_GET[$label];
      }
      $result = $mysqli->query("SELECT * FROM Tours WHERE id = '$id'");
      $myrow = $result->fetch_assoc();
      $div = '<div class = "row">';
      $div .= '<div class = "col">
        <div class = "tour">';
      $id = $myrow['id'];
      $div .= '<img src = ' . $myrow['photo'] . '>';
      $div .= '<p>' . $myrow['name'] . '</p>';
      $div .= '<p>' . $myrow['programm'] . '</p>';
      $div .= '</div></div>';
      $div .= '</div>';
      echo $div;
      ?>
    </div>
  </main>

  <?php
  include('tpl/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>