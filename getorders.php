<?php
	//session_start();
	require_once "connect.php";
	$connection = @new mysqli($host,$db_user,$db_password,$db_name);
	if($connection->connect_errno!=0){
		echo "Brak polaczenia z db";
	}
	else{
		//$company = $_SESSION['company'];
		$sql_query = "SELECT * FROM orders";
		$result = $connection->query($sql_query);

		$_SESSION['orders'] = array();
		//echo 'Pizza ';
		//echo 'Adres ';
		//echo 'Telefon '."<br>";
		if($result->num_rows > 0){
			echo "ID | TYP | INFO | LOKACJA"."<br>";
			while($row = $result->fetch_assoc()){
				echo '<form action="delete.php" method="post">';
				echo $row['ID']." | ";
				if($row['TYPE'] == 0)
					echo 'Ostra | ';
				if($row['TYPE'] == 1)
					echo 'Pepperoni | ';
				if($row['TYPE'] == 2)
					echo '4 Sery | ';
				if($row['TYPE'] == 3)
					echo 'Hawajska | ';
				echo $row['INFO']."| ";
				echo $row['LOCATION']." ";
				echo '<input type="submit" name="ID" value="'.$row['ID'].'"/>';
				echo '</form>';
			}
		}
		$connection->close();
	}
	
	
	
?>
