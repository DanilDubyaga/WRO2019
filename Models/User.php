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
		$sql = 'SELECT * FROM '. static::$table .' WHERE email = :email';
		if ($db->query($sql, [':email' => $this->email])) {
			return true;
		}
		return false;
	}
}
