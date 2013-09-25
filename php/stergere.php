<?php
    $id = mysql_escape_string($_POST['id']);
	$nume= mysql_escape_string($_POST['nume']);
	
	include_once 'php/conectare.php';
	
	conectare();
	
	if ($id != "") {
		$sterge = " id LIKE '%id%'";
	}
	if ($nume != "") {
		if ($id != "") {
			$annadir = "OR";
		}
		$sterge  = "$annadir nume LIKE '%$nume%'";
	}
	$consulta = "SELECT * FROM Persoana $sterge Order BY Nume";
	$result = mysql_query($consulta);
	
	
?>