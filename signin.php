<?php
	session_start();
	require_once "connect.php";
	$connection = @new mysqli($host,$db_user,$db_password,$db_name);
	if($connection->connect_errno!=0){
		echo "Brak polaczenia z db";
	}
	else{
		$login = $_POST['login'];
		$password = $_POST['password'];
		$sql_query = "SELECT * FROM users WHERE login='$login' AND password='$password'";
		if($sql_result = @$connection->query($sql_query)){
			$sql_users = $sql_result->num_rows;
			if($sql_users==1){
				$sql_record = $sql_result->fetch_assoc();
				$_SESSION['login'] = $sql_record['login'];
				$_SESSION['isconnected'] = true;
				$sql_result->free_result();
				header('Location: panel.php');
			}
			else{
				$_SESSION['failure']='<spqn style="color:red">Wrong login or password!</span>';
				header('Location: login.php');
			}
		}
		
		$connection->close();
	}
	
	
	
?>
