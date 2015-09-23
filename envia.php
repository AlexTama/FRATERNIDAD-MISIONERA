<?php

//VERIFICA EL ENVÍO DEL FORMULARIO
if (isset($_POST['enviar'])) {

	/*******************************************/
	/* DATOS DEL USUARIO */
	/* NO DEVUELVE ERRORES SI NO DE HACE EL LLAMADO A LA FUNCIÓN */
	/*******************************************/

	@$asunto_usuario	= $_POST['asunto'];
	@$nombre 			= $_POST['nombre'];
	@$correo 			= $_POST['email'];
	@$mensaje_usuario	= $_POST['mensaje'];		

	/*******************************************/
	/* DATOS PAR EL DESTINATARIO */
	/*******************************************/

	$asunto 	= $asunto_usuario;
	$cabeceras 	= "From: ".$nombre." - ".$correo;
	$mail_to 	= "alextamayop@gmail.com";
	$mensaje 	= $mensaje_usuario;

	/*******************************************/
	/* ENVÍO DEL FORMULARIO */
	/*******************************************/

	if (@mail($mail_to, $asunto, $mensaje, $cabeceras)) {
		include('gracias.php');
	}
}

?>