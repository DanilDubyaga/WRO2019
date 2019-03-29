<?php 

class View{

	protected $data = [];

	public function __SET($name, $value){
		$this->data[$name] = $value;
	}

	public function display($path){
		foreach ($this->data as $key => $value) {
			$$key = $value;
		}

		include __DIR__ . '/../views/' . $path;
	}
	
}
