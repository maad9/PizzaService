<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible"content="IE=edge,chrome=1" />
	<title>Dungeon Editor</title>
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
			2015-03-15<br/>
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			<br/><br/>
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
			Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text Testowy text 
		</div>
		<div id="footer">
			Stopka. 2015-03-15 &copy; Wszelkie prawa zastrzeżone.
		</div>
	</div>
	
</body>
</html>
