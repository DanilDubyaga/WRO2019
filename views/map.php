<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<meta charset="UTF-8">
	<title>Главная</title>
	<link rel="stylesheet" href="/views/style.css">
	<style>
		.top-menu-li:first-child{
				background-color: rgba(180, 180, 255, 0.2);
		}
	</style>
</head>
<body>
	<header>
		<div class="top-menu">
			<a href="map.php" class="top-menu-li">Карта</a>
			<a href="food.php" class="top-menu-li">Заказ еды</a>
			<div class="top-menu-li name"><?= $name ?></div>
			<a href="" class="top-menu-li">Выйти</a>
		</div>
	</header>

	<div id="div" class="div">
		<!-- картинки -->

		<svg id="svg" style="padding: 2px;"> <!-- схема -->
			<line x1="0%" y1="0%" x2="100%" y2="0%" stroke="black" stroke-width="4" />
			<line x1="100%" y1="0%" x2="100%" y2="100%" stroke="black" stroke-width="4" />
			<line x1="100%" y1="100%" x2="0%" y2="100%" stroke="black" stroke-width="4" />
			<line x1="0%" y1="100%" x2="0%" y2="0%" stroke="black" stroke-width="4" />
		</svg>
	</div>

	<script>
		
		window.setInterval(function(){
			var div = document.getElementById("div"); var svg =document.getElementById("svg");
			svg.style.height= Math.round(div.offsetWidth * 0.66)  + "px";
	}, 50);	

	</script>	
</body>
</html>