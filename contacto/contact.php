<?php 

/*******************************************/
/* DATOS DEL USUARIO */
/* NO DEVUELVE ERRORES SI NO DE HACE EL LLAMADO A LA FUNCIÓN */
/*******************************************/

@$_asunto	= $_POST['asunto'];
@$_nombre 	= $_POST['nombre'];
@$_correo 	= $_POST['email'];
@$_mensaje	= $_POST['mensaje'];

/*******************************************/
/* DATOS PAR EL DESTINATARIO */
/*******************************************/

$asunto 	= $_asunto;
$cabeceras 	= "From: ".$nombre." - ".$correo;
$mail_to 	= "alextamayop@gmail.com";
$mensaje 	= $_mensaje;

/*******************************************/
/* ENVÍO DEL FORMULARIO */
/*******************************************/

if (@mail($mail_to, $asunto, $mensaje, $cabeceras)) {
	include('gracias.php');
}

/*******************************************/
/* MANEJO DE ERRORES */
/*******************************************/

else{
	error_log("!No se pudo enviar el mensaje, intentelo nuevamente");
}

 ?>