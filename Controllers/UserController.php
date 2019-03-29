<?php 

class UserController{
	public $name;
	public $password;
	public $email;

	public function register(){
		$user = new User();
		$user->name = $this->name;
		$user->password = $this->password;
		$user->email = $this->email;

		if (!$user->isset()) {
			$res = $user->add();
			return $res;
		}
		return false;
	}
}
