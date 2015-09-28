<!DOCTYPE html>
<html lang="es">
<head>
	<?php include'INCLUDES/scripts.php'; ?>
	<title>Fraternidad Misionera de la Cruz | Obras </title>
</head>
<body>
	
	<!-- HEADER -->
	<section class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<!-- MENÚ -->
				<?php include 'INCLUDES/menu.php' ?>
			</div>
		</div>
	</section>

	<!-- CONTENIDO OBRAS -->
	<section class="containder-fluid">
		<div class="row">
			<div class="col-md-12 text-center" style="padding-bottom:50px;">
				<h1 class="font-color" style="margin:15% 0 10%;">Obras</h1>

				<!-- SECTION ABOUT OUR WORK -->
				<div class="col-md-4 text-center">
					<img class="img-circle" src="img/seccion_obras_manizales.jpg" alt="">
					<h4 class="font-color lead">Santuario de la Virgen de los Pobres</h4>
					<div>
						<button type="button" data-toggle="modal" data-target="#firstModal" class="ghost-button" href="" target="_blank">VER GALERÍA</button>
					</div>										
				</div>

				<div class="col-md-4 text-center">
					<img class="img-circle" src="img/seccion_obras_instituto_educacion_vida.jpg" alt="">
					<h4 class="font-color lead">Instituto Educación y Vida</h4>
					<div>
						<a class="ghost-button" href="http://www.eduvida.com.co" target="_blank">IR AL SITIO</a>
					</div>
				</div>

				<div class="col-md-4 text-center">
					<img class="img-circle" src="img/seccion_obras_centro_armenia.jpg" alt="">
					<h4 class="font-color lead">Casa de Convivencia Florida Cruz</h4>
					<div>
						<button type="button" class="ghost-button" data-toggle="modal" data-target="#secondModal" class="ghost-button">VER GALERÍA</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- FOOTER -->
	<?php include 'INCLUDES/footer.php'; ?>

	<!-- SCRIPTS FOR ANIMATION -->
	<?php include 'INCLUDES/animation_scripts.php'; ?>

	<!-- ****************************************************************************************** -->
	<!-- MODAL SECTION FOR SLIDE THE PICTURES -->
	<!-- ****************************************************************************************** -->

	<!-- MODAL SECTION FOR SANTUARIO DE LA VIRGEN DE LOS POBRES Y LAS NACIONES -->
	<div id="firstModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
		    <div class="modal-content">

		    	<div class="modal-header">
		    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    		<h4 class="modal-title text-center" id="myModalLabel">SANTUARIO DE LA VIRGEN DE LOS POBRES Y LAS NACIONES</h4>
		    	</div>

		    	<div class="modal-body">
		    		
		    		<!-- SLIDER -->
		    		<div id="carousel-b" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">

							<!-- INTERACTIVE INDICATORS -->
							<?php include 'INCLUDES/indicadores.php'; ?>			
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							
							<!-- INTERACTIVE GALLERY -->
						    <?php include'INCLUDES/slider_manizales.php'; ?>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-b" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-b" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>

		    	</div>
		    </div>
		</div>
	</div>

	<!-- ****************************************************************************************** -->
	<!-- MODAL SECTION FOR CASA DE CONVIVENCIA FLORIDA CRUZ -->
	<div id="secondModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
	  	<div class="modal-dialog modal-lg">
	    	<div class="modal-content">

	    		<div class="modal-header">
	    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    			<h4 class="modal-title text-center" id="myModalLabel">CASA DE CONVIVENCIA FLORIDA CRUZ</h4>
	    		</div>

	    		<div class="modal-body">

					<!-- SLIDER -->
		    		<div id="carousel-c" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">

							<!-- INTERACTIVE INDICATORS -->
							<?php include'INCLUDES/armenia_indicators.php'; ?>			
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							
							<!-- INTERACTIVE GALLERY -->
							<?php include 'INCLUDES/slider_armenia.php'; ?>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-c" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-c" role="button" data-slide="next">
						    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						</a>
					</div>
		    	</div>
	    	</div>
	  	</div>
	</div>
</body>
</html>