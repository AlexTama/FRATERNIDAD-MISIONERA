<!DOCTYPE html>
<html lang="es">
<head>
	<?php include'INCLUDES/scripts.php'; ?>
	<title>Fraternidad Misionera de la Cruz | Nuestra Historia </title>
</head>
<body>

	<!-- HEADER -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center">
				<header>
					<!-- MENÚ -->
					<?php include 'INCLUDES/menu.php' ?>
				</header>
			</div>
			<img class="img-responsive" src="img/encabezado_historia.jpg" alt="Nuestra Historia">
		</div>
	</section>

	<!-- CONTENIDO INFORMATIVO, BOTÓN Y LÍNEA DEL TIEMPO -->
	<section class="container-fluid">
		<div class="row">

			<!-- ******************** OUR STORY PART 1 ******************** -->
			<div class="col-md-12 text-center" style="padding:50px 0 50px">
				<div style="padding-bottom:50px">
					<button type="button" class="ghost-button" data-toggle="modal" data-target="#myModal">HISTORIA COMPLETA</button>
				</div>

				<!-- TIMELINE ELEMENT´s -->
				<div id="horizontal-line-story"></div>
				<div id="vertical-line-story"></div>

				<!-- SECTION FOR INFORMATION -->
				<div class="col-md-4">
					<p class="text-box text-center">
						En el año 1955 el Padre Nicolás Nicolaes logra fundar una institución evangelizadora dentro de la Iglesia Católica, llamada Fraternidad Misionera de la Cruz
					</p>
				</div>

				<!-- SECTION FOR GRAPHICS ELEMENT´S -->
				<div class="col-md-4 text-center container-circle" style="padding:10px 0 10px">
					<!-- TIMELINE ELEMENT´S -->
					<div class="circle"></div>
				</div>

				<!-- SECTION FOR IMAGE -->
				<div class="col-md-4">
					<img class="img-responsive" src="img/resena1.jpg" alt="">
				</div>
			</div>
			<!-- ****************************************************** -->
			
			<!-- ******************** OUR STORY PART 2 ******************** -->
			<div class="col-md-12 text-center" style="padding:50px 0 50px">			
				<!-- TIMELINE ELEMENT´s -->
				<div id="horizontal-line-story" style="top:90px;"></div>
				
				<!-- SECTION FOR IMAGE -->
				<div class="col-md-4">
					<img class="img-responsive" src="img/resena2.jpg" alt="">
				</div>
				
				<!-- SECTION FOR GRAPHICS ELEMENT´S -->
				<div class="col-md-4 text-center container-circle" style="padding:10px 0 10px">
					<!-- TIMELINE ELEMENT´S -->
					<div class="circle"></div>
				</div>
				
				<!-- SECTION FOR INFORMATION -->
				<div class="col-md-4">
					<p class="text-box text-center">
						Durante 50 años la FMC siguiendo las inspiraciones del fundador ha sido un ejército de vanguardia en la misión evangelizadora de la iglesia Católica.
					</p>
				</div>
			</div>
			<!-- ****************************************************** -->

			<!-- ******************** OUR STORY PART 3 ******************** -->
			<div class="col-md-12 text-center" style="padding:50px 0 50px">				
				<!-- TIMELINE ELEMENT´s -->
				<div id="horizontal-line-story" style="top:88px;"></div>

				<!-- SECTION FOR INFORMATION -->
				<div class="col-md-4">
					<p class="text-box text-center">
						Para el Padre Nicolás Nicolaes la tecnología moderna constituye un instrumento por excelencia de evangelización. Se preocupa por utilizar medios masivos sin descuidar el contacto de persona a persona
					</p>
				</div>

				<!-- SECTION FOR GRAPHICS ELEMENT´S -->
				<div class="col-md-4 text-center container-circle" style="padding:10px 0 10px">
					<!-- TIMELINE ELEMENT´S -->
					<div class="circle"></div>
				</div>

				<!-- SECTION FOR IMAGE -->
				<div class="col-md-4">
					<img class="img-responsive" src="img/resena3.jpg" alt="">
				</div>
			</div>
			<!-- ****************************************************** -->

			<!-- ******************** OUR STORY PART 4 ******************** -->
			<div class="col-md-offset-4 col-md-4" style="padding:10px 0 20px">
				<!-- TIMELINE ELEMENT´S -->
				<div class="circle"></div>

				<!-- SECTION FOR INFORMATION -->
				<div style="padding-top:30px; padding-bottom:30px;">
					<p class="text-box text-center">
						A la luz de Jesús en la Cruz y bajo la protección de Nuestra señora de los Dolores, la FMC continúa hoy su misión evangelizadora al servicio de Cristo y su Iglesia.
						<br>
						<br>
						Damos gracias al Creador por sus bendiciones en los 50 años de nuestra fundación.
					</p>
				</div>

				<!-- SECTION FOR IMAGE -->				
				<img class="img-responsive" src="img/resena4.jpg" alt="">
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<?php include 'INCLUDES/footer.php'; ?>

	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'INCLUDES/animation_scripts.php'; ?>

	<!-- ****************************************************************************************** -->
	<!-- VENTANA MODAL CON LA INFORMACIÓN COMPLETA DIRECCIONADO DESDE EL BOTÓN -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        	<h4 class="modal-title text-center" id="myModalLabel">NUESTRA HISTORIA</h4>
		      	</div>
		      	<div class="modal-body">		      
		        	<p>
		        		A partir de una inquietud sentida durante su vida sacerdotal y de muchos años de lucha, el padre Nicalás Nicolaes logra fundar en el año 1955 una institución evangelizadora dentro de la Iglesia Católica, llamada Fraternidad Misionera de la Cruz.
		        		<br><br>
		        		La razón de ser de esta fundación es la santificación de los miembros y la difusión del evangelio en los ambientes del mundo actual, saliendoal encuentro de las personas necesitadas de Dios. Sin ruido, sin renombre, sin distintivo. Como levadura en la masa.
		        		<br><br>
						Durante 50 años la <b>FMC</b> siguiendo las inspiraciones del fundador ha sido un ejército de vanguardia en la misión evangelizadora de la Iglesia Católica.
						<br><br>
						Para el padre Nicolás Nicolaes la tecnología moderna constituye un instrumento por excelencia de evangelización. El se preocuoa por utilizar los medios masivos sin descuidar el contacto de persona a persona. Todos los momentos y espacios de la vida cotidiana han de ser aprovechados por la difusión del mensaje de Cristo. Solo así, la <b>FMC</b> logrará realizar su carisma.
						<br><br>
						A la luz de Jesús en la Cruz y bajo la protección de Nuestra Señora de los Dolores, la <b>FMC</b> continúa hoy su misión evangelizadora al servicio de Cristo y su Iglesia.
						<br><br>
						Damos gracias al Creador por sus bendiciones en los 50 años de nuestra fundación.
		        	</p>
		      	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      	</div>
	    	</div>
	  	</div>
	</div>
	<!-- ****************************************************************************************** -->
	
</body>
</html>