<?php 
	try{
		$connection = new PDO("mysql:host=localhost;dbname=eshop","root","");
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

	function getUser($login){
		global $connection;

		try {
			$query = $connection->prepare("select * FROM users where login = ?");
			$query->execute([$login]);
			$result = $query->fetch();
		}
		catch(Exception $e){
			echo $e->getMessage();
		}

		return $result;
	}

	function registerUser($login, $password, $fullname){
		global $connection;

		try {
			$query = $connection->prepare("INSERT INTO users(login, password, fullname) values (?,?,?)");
			$query->execute([$login, $password, $fullname]);
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	}



?>