<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>vizualizare</title>
  <meta name="description" content="">
  <meta name="author" content="mihai cornel">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  <link rel="stylesheet" href="my_layout.css" type="text/css" />
</head>

<body>
  <div>
    <header>
      <h1>Agenda Telefonica</h1>
    </header>
    <hr />
    <nav>
      <a href="index.html">Acasa</a> |
      <a href="conectare.php">Conectare</a> |
      <a href="adaugare.php">Adaugare</a> |
      <a href="vizualizare.php">Vizualizare</a> |
      <a href="stergere.php">Stergere</a> | 
      <a href="deconectare.php">Deconectare </a>
    </nav>
    <hr />
    <?php
    include_once 'php/conectare.php';
	
	conectare();
	mysql_select_db(test);
	$sql= "SELECT * FROM Persoana";
	$result = mysql_query($sql);
	if(mysql_numrows($result) > 0 ){
		while ($row = mysql_fetch_array($result)){
			$id = $row['Id'];
			$nume = $row['Nume'];
			$email = $row['Email'];
			$telefon = $row['Telefon'];
			
			echo "<table>";
			echo "<tr><td>Id:</td><td>$id</td></tr>";
			echo "<tr><td>Nume:</td><td>$nume</td></tr>";
			echo "<tr><td>E-mail:</td><td>$email</td></tr>";
			echo "<tr><td>Telefon:</td><td>$telefon</td></tr>";
			echo "</table>";
			echo "<hr>";
		}
	}else {
		echo "Conectarea a esuat!" .mysql_error();
	}
	
    ?>

    <div>
      
    </div>

    <footer>
     <p>&copy; Copyright  by mihai cornel</p>
    </footer>
  </div>
</body>
</html>
