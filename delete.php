<?php
	require_once "connect.php";
	
	mysql_connect("$host","$db_user","$db_password");
	mysql_select_db("$db_name");

		echo "Polaczono";
		$ID = $_POST['ID'];
		$sql_delete = "DELETE FROM orders WHERE ID='$ID'";
		$sql_update = "UPDATE orders SET COMPLETED='1' WHERE ID='$ID'";
		$sql_move = "INSERT INTO archive SELECT * FROM orders WHERE COMPLETED = 1";

		mysql_query($sql_update);
		mysql_query($sql_move);
		mysql_query($sql_delete);

		mysql_close();
	header('Location: getorders2.php');	
?>

