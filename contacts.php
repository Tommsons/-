<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
  <link rel="stylesheet" href="css\style.css">
  <title>Сайт туристической компании</title>
</head>

<body class="body-top">
  <?php
  include('tpl/header.php');
  include('tpl/nav.php');
  ?>

  <main class="flex">
    <?php
    include("bdconnect.php");
    $result = $mysqli->query("SELECT * FROM remarks");
    $table = "<table>";
    $k = 1;
    while ($myrow = $result->fetch_assoc()) {
      $table .= "<tr>";
      $table .= "<td>" . $myrow['tema'] . "</td>";
      $table .= "<td>" . $myrow['text'] . "</td>";
      $table .= "</tr>";
      $k++;
    }
    $table .= "</table>";
    echo $table;
    ?>
  </main>

  <?php
  include('tpl/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>