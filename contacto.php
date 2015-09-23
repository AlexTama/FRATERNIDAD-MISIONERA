<!DOCTYPE html>
<html lang="es">
<head>
	<?php include'INCLUDES/scripts.php'; ?>
	<title>Fraternidad Misionera de la Cruz | Contacto </title>
</head>
<body>

	<!-- HEADER -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 font-color" style="margin:15% 0 10%;">
				<!-- MENÚ -->
				<?php include 'INCLUDES/menu.php' ?>
				<div class="col-md-offset-4 col-md-4 text-center">
					<h1>Contáctenos</h1>
					<p>Envíanos un mensaje para poder atender sus solitudes y responderlas para el servicio de ustedes.</p>					
				</div>
			</div>
		</div>
	</section>

	<!-- FORMULARIO DE CONTACTO -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12" style="padding:80px 0 80px; background-color:#326E7B; border-bottom:1px solid #ffffff;">
				<div class="col-md-offset-4 col-md-4">
					<form action="envia.php" method="post">
						<div class="form-group">					    	
					    	<input type="text" name="asunto" class="form-control" id="exampleInputEmail1" placeholder="Asunto" style="border-radius: 0px !important; -moz-border-radius: 0; -webkit-border-radius: 0;">
					  	</div>
					  	<div class="form-group">					    	
					    	<input type="text" name="nombre" class="form-control new-input-style" id="exampleInputEmail1" placeholder="Nombre" style="border-radius: 0px !important; -moz-border-radius: 0; -webkit-border-radius: 0;">
					  	</div>
					 	<div class="form-group">					    	
					    	<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" style="border-radius: 0px !important; -moz-border-radius: 0; -webkit-border-radius: 0;" require>
					  	</div>
					  	<div class="form-group">					    	
					    	<textarea class="form-control" name="mensaje" rows="6" placeholder="Mensaje" style="resize:none; border-radius: 0px !important; -moz-border-radius: 0; -webkit-border-radius: 0;"></textarea>
					  	</div>					  	
					  	<button type="submit" class="btn btn-primary" style="border-radius: 0px !important; -moz-border-radius: 0; -webkit-border-radius: 0;">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<?php include 'INCLUDES/footer.php'; ?>

	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'INCLUDES/animation_scripts.php'; ?>
</body>
</html>