<?php
$name = "Даниил";
$surname = "салюков";
$age = 16;
$vk = 'https://vk.com/id144488548';
$SITY = 'УЛЬЯНОВСК';
$about = 'ученик ';
?>
<!Doctype html>
<html>
<head>
	<title><?= $surname . '' . $name; ?></title>
	<meta charset = "utf-8">
	<style type = "text/css">
	body{
		font-family: sans-serif;
	}

	dl{
		display: table-row;
	}

	dt, dd {
		display: table-cell;
		padding: 3px 8px;
	}
    </style> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>

<nav class="navbar navbar-expand-lg navbar-alert alert-light">
  <a class="navbar-brand" href="#">Главная</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Участники</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Альбомы</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Сложнааа</h1>
    <p class="lead">Я не дезайнер, поэтому некрасиво:р</p>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://pp.userapi.com/c841535/v841535584/31151/Tq1VJKa8ZTU.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">ТИПА ЗАГОЛОВОК</h4>
      <p class="card-text">Представим, что здесь какой-нибудь интересный текст</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://pbs.twimg.com/media/Cx6nXdbXcAEpcT3.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">ЕШО ОДИН ЗАГОЛОВОК</h4>
      <p class="card-text">ПОмОгиТЕ</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 15 years ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="http://www.moepp.com/wp-content/uploads/2017/01/moepp27951-th-dream-eater-merry.png" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">КАРД ТИТЛ</h4>
      <p class="card-text">ВИЛ КЭРИИИ ОНН ВИЛ КЭЭЭРИИ ОНН</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 246464 веков ago</small>
    </div>
  </div>
</div><div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="https://pp.userapi.com/c841037/v841037180/257dd/cATBmAsnggY.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">АААААА</h4>
      <p class="card-text">Вернись уже в коноху</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated много лет ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://pp.userapi.com/c840137/v840137870/3129a/KxFHcdTnWUM.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">хм</h4>
      <p class="card-text">Картинки уже заканчиваются</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 999 years ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://pp.userapi.com/c621707/v621707179/1168c/lnfqMpEIvtk.jpg" alt="Card image cap">
    <div class="card-body">
      <h4 class="card-title">ааа</h4>
      <p class="card-text">лень писат что-то сорян</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated хы ago</small>
    </div>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    Featured
  </div>
  <div class="card-body">
    <h4 class="card-title">ВАЖНЫЕ(не) НОВОСТИ</h4>
    <p class="card-text">Передумал:р</p>
    <a href="#" class="btn btn-primary">)</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<div class="media">
  <img class="align-self-start mr-3" src="http://bookinews.ru/foto_rss/681475069428892127_middle.jpg" alt="Generic placeholder image">
  <div class="media-body">
    <h5 class="mt-0">Привет</h5>
    <p>тутутутутутууттутууттутуутуттуутутлохтутуутутутутутутутутутут</p>
    <p>Всо</p>
  </div>
</div>

</html>

