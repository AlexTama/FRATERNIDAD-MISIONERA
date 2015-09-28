<?php 
/****************************************************************/
/* CONSTANTES CON LA RUTA Y LAS EXTENSIONES */
/****************************************************************/

define("_RUTA_INDEX", "img/SLIDER_INDEX");
define("_EXTENSION_INDEX", ".jpg");

/****************************************************************/
/* IMPRESIÓN DINÁMICA DE LAS FOTOS */
/****************************************************************/

for ($i=0; $i < 2; $i++) {
	$image = ($i+1)._EXTENSION_INDEX;

	if ($i == 0) {
		echo '<div class="item active">
				<img img="img-responsive" src="'._RUTA_INDEX."/".$image.'">
			</div>';
	}
	else{
		echo '<div class="item">
				<img img="img-responsive" src="'._RUTA_INDEX."/".$image.'">
			</div>';
	}
}

 ?>