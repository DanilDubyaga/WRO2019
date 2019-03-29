<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<meta charset="UTF-8">
	<title>Заказ еды</title>
	<link rel="stylesheet" href="/views/style.css">
	<style>
		.top-menu-li:nth-child(2){
				background-color: rgba(180, 180, 255, 0.2);
		}
	</style>
</head>
<body>
	<header>
		<div class="top-menu">
			<a href="map.php" class="top-menu-li">Карта</a>
			<a href="food.php" class="top-menu-li">Заказ еды</a>
			<div class="top-menu-li name"><?= $name?></div>
			<a href="" class="top-menu-li">Выйти</a>
		</div>
	</header>
</body>
</html>s