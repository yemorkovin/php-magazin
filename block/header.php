<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Доставка еды</title>
	<link href="css/itc-slider.css" rel="stylesheet">
  	
</head>
<body>
<div class="navbar">
	<a href="mailto:admin@site.ru" >admin@site.ru</a>
	<a href="tel:8915823234">8915823234</a>	
	<a href="cart.php">Корзина 
		<?php 
			if(isset($_SESSION['id'])){
				$count = explode(',', $_SESSION['id']);
				echo '(<span style="color: #fff">'.count($count).'</span>)';
			}
		?>
	</a>
</div>
<header class="row">
	<div class="item w40">
		<img src="images/logo.jpg" alt="логотип" class="logo" />
	</div>
	<div class="item w60">
		<ul class="main_menu">
			<li>
				<a href="index.php">Главная</a>
			</li>
			<li>
				<a href="catalog.php">Каталог</a>
			</li>
			<li>
				<a href="contacts.php">Контакты</a>
			</li>
			<li>
				<a href="news.php">Новости</a>
			</li>
		</ul>
	</div>
</header>