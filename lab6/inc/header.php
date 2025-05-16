<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="utf-8" />
	<link type="text/css" rel="stylesheet" href="css/styles.css">
	<title>lab6 Сіроклин</title>
	<?php
	if (isset($JS_FILES) && (count($JS_FILES) > 0)) {
		foreach($JS_FILES as $jsfile) {
			echo '<script src="js/'.$jsfile.'_script.js"></script>';
		}
	}
	?>
</head>
<body>
	<div class="wrapper">
		<header>
			<div class="head">
				<div class="head-logo"><a href="index.php"><img src="img/logo.png" /></a></div>
				<div class="head-left">
					<a href="#" class="a-subscribtion"><span>підписка</span></a>
					<a href="#" class="a-price"><span>прайс</span></a>
					<a href="#" class="a-deliver"><span>замовлення</span></a>
					<a href="#" class="a-shop"><span>інтернет-магазин</span></a>
					<a href="#" class="a-report"><span>звіти</span></a>
				</div>
				<div class="head-right">
					<div class="login-menu">
						<div><span>ЛОГИН</span><input type="text"></div>
						<div><span>ПАРОЛЬ</span><input type="text"></div>
						<button>УВІЙТИ</button>
					</div>
					<div class="litle-menu">
						<a href="#" class="b-before">&nbsp</a>
						<a href="#" class="b-magazine">ГАЗЕТА ></a>
						<a href="#" class="b-stock">ТОВАРИ ></a>
						<a href="#" class="b-friends">ПАРТНЕРИ ></a>
						<a href="#" class="b-subscribtion">ПІДПИСКА ></a>
						<a href="#" class="b-register">РЕЄСТРАЦІЯ ></a>
					</div>
				</div>
			</div>
		</header>
		<main>
			<div class="news"><span>Новини</span></div>
			<div class="title">
				<ul>