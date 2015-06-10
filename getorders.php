<?php
	session_start();
	require_once "connect.php";
	$connection = @new mysqli($host,$db_user,$db_password,$db_name);
	if($connection->connect_errno!=0){
		echo "Brak polaczenia z db";
	}
	else{
		$company = $_SESSION['company'];
		$sql_query = "SELECT * FROM orders WHERE company='$company'";
		$result = $connection->query($sql_query);

		$_SESSION['orders'] = array();

		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				echo $row['typ'].";";
				echo $row['adres'].";";
				echo $row['telefon'].'<input type="submit" value="Usun"/>'."<br>";
			}
		}
		$connection->close();
	}
	
	
	
?>
