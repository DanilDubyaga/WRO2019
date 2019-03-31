<?php

/**
 * Class User
 * @property $name
 * @property $password
 * @property $email
 */
class User extends AbstractModel
{
	static protected $table = 'users';

	public function add()
	{
		$this->password = password_hash($this->password, PASSWORD_DEFAULT);
		return $this->insert();
	}

	public function isset()
	{
		$db = new DB();
		$db->setClassName('User');
		if ($db->query('SELECT * FROM '. static::$table .' WHERE email = :email', [':email' => $this->email])) {
			return true;
		}
		return false;
	}
}
