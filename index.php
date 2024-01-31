<?php
session_start();
include('tpl/header.php');
include('tpl/nav.php');
?>

<!doctype html>
<html lang="ru" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-nU14brUcp6StFntEOOEBvcJm4huWjB0OcIeQ3fltAfSmuZFrkAif0T+UtNGlKKQv" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Сайт туристической компании</title>
</head>

<body class="body-top">
  <main class="flex">
    <div class="row">
      <div class="col">
        Наши акции
      </div>
    </div>

    <div class="container-fluid">
      <div id="root">
        <?php
        include("bdconnect.php");
        $result = $mysqli->query("SELECT * FROM tours");
        $div = '<div class = "row tours">';
        $k = 1;
        while ($myrow = $result->fetch_assoc()) {
          $div .= '<div class = "col">
          <div class = "tour">';
          $id = $myrow['id'];
          $div .= '<img src = ' . $myrow['photo'] . '>';
          $div .= '<p><a class="links" ' . "href = tour.php?id=$id>" . $myrow['name'] . '</a></p>';
          $div .= '</div></div>';
          $k++;
        }
        $div .= '</div>';
        echo $div;
        ?>
      </div>
    </div>

    <?php
    include('tpl/footer.php');
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    -->
</body>

</html>