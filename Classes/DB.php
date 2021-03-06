<?php 

class DB
{
	protected $dbh;
	protected $className = 'stdClass';

	public function __construct()
	{
		$this->dbh = new PDO('mysql:dbname=smartcity;host=localhost', 'root', '');
	}

	public function setClassName($className)
	{
		$this->className = $className;
	}

	public function query($sql, $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		$sth->execute($params);
		return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
	}

	public function execute($sql, $params = [])
	{
		$sth = $this->dbh->prepare($sql);
		return $sth->execute($params);;
	}
}
