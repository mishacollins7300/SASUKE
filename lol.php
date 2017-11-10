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

<nav class="navbar navbar-expand-lg navbar-alert alert-warning">
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
        <a class="nav-link" href="#">Полезно знать</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Альбомы</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Контакты</button>
    </form>
  </div>
</nav>
</html>

