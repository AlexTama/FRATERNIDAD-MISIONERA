<?php 
/****************************************************************/
/* CONSTANTES CON LA RUTA Y LAS EXTENSIONES */
/****************************************************************/

define("_RUTA", "img/MANIZALES");
define("_EXTENSION", ".jpg");

/****************************************************************/
/* IMPRESIÓN DINÁMICA DE LAS FOTOS */
/****************************************************************/

for ($i=0; $i < 20; $i++) {
	$image = ($i+1)._EXTENSION;

	if ($i == 0) {
		echo '<div class="item active">
				<img img="img-responsive" src="'._RUTA."/".$image.'">
			</div>';
	}
	else{
		echo '<div class="item">
				<img img="img-responsive" src="'._RUTA."/".$image.'">
			</div>';
	}
}
?>