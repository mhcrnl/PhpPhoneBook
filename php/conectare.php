<?php

    $localhost = $_POST['host'];
    $mysql_user = $_POST['utilizator'];
    $mysql_password = $_POST['parola'];
	$db_name = $_POST['bazadedate'];
	
    function conectare()
	{
		if ($con = mysql_connect($localhost, $mysql_user, $mysql_password)) {
			if (mysql_select_db($db_name)) {
				
			} else { echo "Conexiunea a esuat : " .mysql_error();
				
			}
			
		} else {
			echo "Conexiunea a esuat : " .mysql_error();
		}
			
	}
	function deconectare(){
		mysql_close($con);
	}
    
	//include 'adaugare.php';
?>