<?php
	
	$destino = "dmatiaszurita@gmail.com";
	// VAMOS A RECIBIR LOS DATOS DE LOS DISTINTOS INPUTS 
	// Y LOS ALMACENAMOS EN LAS VARIABLES
	 
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	$contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;

	mail($destino, $asunto, $mensaje);
	header("Location:gracias.html");

?>