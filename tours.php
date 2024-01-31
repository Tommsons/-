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
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Расчет стоимости тура</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="max-width: 600px;">
          <form method="get" action="#" id="orderForm">
            <div class="tour">
              <label for="name" class="label">Выберите тур:</label>
              <select id="inp1">
                <option value="Крым" selected>Крым</option>
                <option value="Кавказ">Кавказ</option>
                <option value="Алтай">Алтай</option>
              </select>
            </div>
            <div class="tour">
              <label for="data" class="label">Выберите дату начала:</label>
              <input type="date" id="inp2">
            </div>
            <div class="tour">
              <label for="number" class="label">Выберите количество участников:</label>
              <select id="inp3">
                <option value="1">1</option>
                <option value="2" selected>2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <div class="tour">
              <label for="email" class="label">Ваш E-mail:</label>
              <input type="email" id="inp4" class="input-xlarge" style="width: 350px;" required="required">
            </div>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Закрыть</button>
            <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('tpl/header.php');
  include('tpl/nav.php');
  ?>

  <main class="flex">
    <div class="row">
      <div class="col">
        Наши туры
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="tour tour2">
            <img src="img\krim.jpg" alt="" class="tour_img">
            <p>Это прекрасная возможность отдохнуть всей семьей!</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Рассчитать
              стоимость</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="tour tour2">
            <img src="img\kavkaz.jpg" alt="" class="tour_img">
            <p>Море, солнце и горы!</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Рассчитать
              стоимость</button>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="tour tour2">
            <img src="img\altai.jpg" alt="" class="tour_img">
            <p>Незабываемые впечатления!</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Рассчитать
              стоимость</button>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php
  include('tpl/footer.php');
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    $('#orderForm').on('submit', function () {
      let tour = $('#inp1').val();
      let date = new Date($('#inp2').val());
      let month = date.getMonth();
      let kol = $('#inp3').val();
      kol = Number(kol);
      let email = $('#inp4').val();
      let stoim = 0;
      if (tour == 'Крым') {
        if ((month == 5) || (month == 6) || (month == 7) || (month == 8)) { stoim = kol * 500; }
        else { stoim = kol * 300; }
      }
      if (tour == 'Кавказ') {
        if ((month == 12) || (month == 1) || (month == 2) || (month == 5) || (month == 6) || (month == 7) | (month == 8)) { stoim = kol * 300; }
        else { stoim = kol * 250; }
      }
      if (tour == 'Алтай') {
        { stoim = kol * 1000; }
      }
      alert('Примерная стоимость вашего тура на ' + kol + ' человек составит ' + stoim + ' у.е. Мы свяжемся с ВАМИ!');
    }
    );
  </script>
</body>

</html>