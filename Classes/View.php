<?php 

class View
{
	protected $data = [];

	public function __set($k, $v)
	{
		$this->data[$k] = $v;
	}

	public function display($path)
	{
		foreach ($this->data as $key => $value){
			$$key = $value;
		}

		include __DIR__ . '/../views/' . $path;
	}	
}
