<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<meta charset="UTF-8">
	<title>Регистрация</title>
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
			<a href="/register.php" class="top-menu-li">Регистрация</a>
			<a href="/" class="top-menu-li">Вход</a>
		</div>
	</header>

	<form action="" id="form" method="post">
		<input type="email" name="email" placeholder="Эл. почта" required><br><br>
		<input type="password" name="password" placeholder="Пароль" required><br><br>
		<input type="name" name="name" placeholder="Имя" required><br><br>
		<input type="submit" value="Зарегистрироваться">	
	</form>
</body>
</html>