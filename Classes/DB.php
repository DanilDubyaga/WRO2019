<?php 

class DB{
	public static function connect(){
		$mysqli = mysqli_connect("localhost", "root", "");
		mysqli_select_db($mysqli, 'smartcity');

		return $mysqli;
	}

	public static function query($sql){
		$mysqli = self::connect();
		$res = mysqli_query($mysqli, $sql);
		$arr = [];
		
		while ($row = mysqli_fetch_row($res)) {
			$arr[] = $row;
		}

		return $arr;
	}

	public static function exec($sql){
		$mysqli = self::connect();
		$res = mysqli_query($mysqli, $sql);

		return $res;
	}
}
