<?php 

require 'autoloader.php';

if (isset($_POST['email']) && isset($_POST['password'])  && isset($_POST['name'])) {
	$user = new UserController();
	$user->name = $_POST['name'];
	$user->password = $_POST['password'];
	$user->email = $_POST['email'];
	$user->register();
}

$view = new View();

$view->display('register.php');
