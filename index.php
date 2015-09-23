<!DOCTYPE html>
<html lang="es">
<head>
	<?php include'INCLUDES/scripts.php'; ?>
	<title>Fraternidad Misionera de la Cruz | Bienvenidos </title>
</head>
<body>

	<!-- HEADER, MENÚ VÍDEO PRINCIPAL -->
	<section id="contenedor" class="container-fluid" style="width:100%; height:100%;">
		<div class="row">
			<div class="col-md-12 text-center">
				<header>

					<!-- MENÚ -->
					<?php include 'INCLUDES/menu.php'; ?>
					
					<!-- VÍDEO -->
					<div style="color:#ffffff; margin: 23% auto; letter-spacing: 1px;">
						<a href=""><img style="width:10%; height=10%; " src="img/playVideo.svg" aria-hidden="true" alt=""></a>
						<h3>NUESTRO HIMNO</h3>
					</div>
				</header>
			</div>			
		</div>
	</section>

	<!-- SECCIÓN BIENVENIDOS CON EL MENSAJE PRINCIPAL DEL SITIO -->
	<section class="container-fluid">
		<div class="row font-color">
			<div class="col-md-12 text-center" style="padding:50px 0 50px;">
				<div class="col-md-offset-3 col-md-6">
					<h1>Bienvenidos</h1>
					<p>El instituto educación y vida y la Fraternidad Misionera de la Cruz estan comprometidos con la calidad educativa de nuestros estudiantes y la evangelización de la comunidad</p>
					<hr>
				</div>
			</div>
		</div>
	</section>
	
	<!-- SLIDER CON FOTOS DE LA FRATERNIDAD -->
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">

						<!-- INTERACTIVE INDICATORS -->
						<?php include 'INCLUDES/index_indicators.php'; ?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

					    <!-- INTERACTIVE GALLERY -->
					    <?php include 'INCLUDES/slide_index.php'; ?>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					</a>
				</div>

	<!-- ORACIÓN DEL EVANGELIZADOR -->
	<section class="container-fluid">
		<div class="row general-color">
			<div class="col-md-12" style="padding:50px 0 50px;">
				<div 
					class="col-md-offset-3 col-md-6 text-center font-color">
					<h4>Padre Nicolás Nicolaes</h4>
					<hgroup>
						<h1>Oración del Evangelizador</h1>
						<hr>
						<p class="text-justify"><i>" Señor Jesús, envíanos tu Espíritu, para que nos transforme en nuestras relaciones contigo, con el Padre, nosotros mismos, la Iglesia y el mundo necesitado de Dios. Que tu Espíritu nos cambie en hombres nuevos, llenos de ardor, dinamismo y entrega total a la difusión de tu mensaje de liberación y salvación, para la felicidad terrena y eterna del hombre de hoy y del mañana. Te solicitamos esta gracia inefable por la intercesión de tu Santísima Madre, la Virgen María a quién nunca niegas nada. Amén"</i></p>
					</hgroup>
					<br>
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