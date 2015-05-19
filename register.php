<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1" />
	<title>Pizza Service</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>


	<div id="container">
		<div id="logo">
			LOGO
		</div>
		<?php
			if(isset($_SESSION['isconnected'])){
				include("menuL.php");
			}
			else
				include("menuNL.php");
		?>
		<!--<div id="sidebar">
			<div class="optionL">Wiki</div>
			<div class="optionL">Pierwsze kroki</div>		
			<div class="optionL">Kontakt</div>			 
			<div class="optionL">Premium</div>
			<div class="optionL">English</div>
			<div class="optionL">Polski</div>
			<div style="clear:both"></div>		
		</div>-->
		<div id="content">
			<form action="registerin.php" method="post">
				Imie:<br/><input type="text" name="name"/><br/>
				Nazwisko:<br/><input type="password" name="surname"/><br/>
				Nazwa pizzerii:<br/><input type="text" name="company"/><br/>
				Kod<br/><input type="password" name="key"/><br/>
				Miasto<br/><input type="text" name="city"/><br/>
				Adres<br/><input type="text" name="adress"/><br/>
				Kod pocztowy<br/><input type="text" name="postcode"/><br/>
				<br/><br/>
				Akceptuje regulamin<input type="checkbox" id="acceptRules"/>
				<br/>
				<input type="submit" value="Zarejestruj" />	
			</form>
		<?php
			if(isset($_SESSION['failure']))
			{
				echo $_SESSION['failure'];
			}
		?>	
		</div>
		<div id="footer">
			Stopka.&copy; Wszelkie prawa zastrzeżone.
		</div>
	</div>
	
</body>
</html>
