<?php

class User{
	public $name;
	public $password;
	public $email;

	public function add(){
		$hash = password_hash($this->password, PASSWORD_DEFAULT);
		$res = DB::exec("INSERT INTO users(name, password, email) VALUES('$this->name', '$hash', '$this->email')");
		
		return $res;
	}

	public function isset(){
		if (DB::query("SELECT * FROM users WHERE email = '$this->email'")) {
			return true;
		}
		return false;
	}
}
