<?php
	$id = $_POST['id'];
    $nume = $_POST['Nume'];
	$email = $_POST['Email'];
	$telefon = $_POST['Telefon'];
	
	mysql_select_db('test');
	
	$sql= "INSERT INTO Persoana (Id, Nume, Email, Telefon)
	 VALUES ('$id','$nume', '$email', '$telefon')";
	
	mysql_query($sql);
	
	if (mysql_affected_rows() > 0) {
		echo "Persoana a fost adaugata cu succes!";
	} else {
		echo "Persoana nu a putut fi adaugata!" . mysql_error();
	}
	
	include_once 'index.php';
?>