<!DOCTYPE >
<html>
	<head>
	   <link rel="stylesheet" href="my_layout.css" type="text/css" />
	   <?php
	   include 'php/conectare.php';
	   ?>	
	</head>
	<body>
		<h1>Agenda Telefonica</h1>
		<hr />
		<nav>
			<a href="index.html">Acasa</a> |
			<a href="conectare.php">Conectare</a> |
			<a href="adaugare.php">Adaugare</a> |
			<a href="vizualizare.php">Vizualizare</a> |
			<a href="stergere.php">Stergere</a> |
			<a href="deconectare.php">Deconectare</a>
		</nav>
		<hr />
  
		<form action="php/conectare.php" method="post">
			Host: <input type="text" name="host" /><br />
			Utilizator: <input type="text" name="utilizator" /><br />
			Parola: <input type="password" name="parola" /><br />
			Baza de date: <input type="text" name="bazadedate" /><br />
			<input type="submit" value="Conectare"  /><br />
		</form>
		
		
 
	</body>
</html>