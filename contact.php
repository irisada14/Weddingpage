<?php 
	include("conectar.php");

	$comando = $_POST['comand'];
	switch ($comando) {
	    case "catorce":
	        echo catorce();
	        break; 
		case "doce":
	        echo doce();
	        break; 	         
	}

	function catorce(){
		$Query = "INSERT INTO mensajes (nombre, mail, mensaje) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['msj']."')";	
		$Result = conectar('exec',$Query);
		$var = array(
				'Arreglo1' => $Result
			);
		echo json_encode($var);
		exit();		
	}

?>