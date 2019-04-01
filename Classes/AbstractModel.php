<?php 

class AbstractModel
{
	static protected $table;

	protected $data = [];

	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}

	public function __get($k)
	{
		return $this->data[$k];
	}

	public function insert()
	{
		$cols = array_keys($this->data);
		$data = [];
		foreach ($cols as $col) {
			$data[':'.$col] = $this->data[$col];
		}

		$db = new DB();
		$sql = '
			INSERT INTO '. static::$table .'
			('. implode(', ', $cols).')
			 VALUES
			 ('. implode(', ', array_keys($data)).')
		 ';
		
		return $db->execute($sql, $data);
	}

	public function findOneByColumn($column, $value)
	{
		$db = new DB();
		$db->setClassName(get_called_class());
		$sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';
		$res = $db->query($sql, [':value' => $value]);
		if(!empty($res)){
			return $res[0];
		}
		return false;
	}
}
