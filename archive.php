<?php
	//session_start();
	require_once "connect.php";
	$connection = @new mysqli($host,$db_user,$db_password,$db_name);
	if($connection->connect_errno!=0){
		echo "Brak polaczenia z db";
	}
	else{
		//$company = $_SESSION['company'];
		$sql_query = "SELECT * FROM archive";
		$result = $connection->query($sql_query);

		$_SESSION['orders'] = array();
		//echo 'Pizza ';
		//echo 'Adres ';
		//echo 'Telefon '."<br>";
		if($result->num_rows > 0){
			echo '<div class="column">';
                        echo "ID";
                        echo '</div>';
                        echo '<div class="column">';
                        echo "TYP";
                        echo '</div>';
                        echo '<div class="column">';
                        echo "INFO";
                        echo '</div>';
			echo '<div class="column">';
                        echo "LOKACJA";
                        echo '</div>';
                        echo "<br>";
			while($row = $result->fetch_assoc()){
				echo '<div class="column">';
				echo $row['ID'];
				echo '</div>';
				echo '<div class="column">';
				if($row['TYPE'] == 0)
					echo 'Ostra';
				if($row['TYPE'] == 1)
					echo 'Pepperoni';
				if($row['TYPE'] == 2)
					echo '4 Sery';
				if($row['TYPE'] == 3)
					echo 'Hawajska';
				echo '</div>';
				echo '<div class="column">';
				echo $row['INFO'];
				echo '</div>';
				echo '<div class="column">';
				echo $row['LOCATION'];
				echo '</div>';
				echo "<br>";
				//echo '<input type="submit" name="submit1" value="delete"/>';
				//echo '<input type="submit" name="ID" value="'.$row['ID'].'"/>';
			}
		}
		$connection->close();
	}
	
	
	
?>
