<?php

	define("HOST", "localhost");
	define("USER", "root");
	define("PSWD", "root");
	define("DBNM", "netflix");

	function connect(){
		$conn = new mysqli(HOST,USER,PSWD,DBNM);
		if ($conn) {
			return $conn;
		}
		return null;
	}
?>