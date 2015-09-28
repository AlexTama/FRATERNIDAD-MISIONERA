<?php 
/****************************************************************/
/* CONSTANTES CON LA RUTA Y LAS EXTENSIONES */
/****************************************************************/

define("_RUTA_ARMENIA", "img/ARMENIA");
define("_EXTENSION_ARMENIA", ".jpg");

/****************************************************************/
/* IMPRESIÓN DINÁMICA DE LAS FOTOS */
/****************************************************************/

for ($i=0; $i < 3; $i++) {
	$image = ($i+1)._EXTENSION_ARMENIA;

	if ($i == 0) {
		echo '<div class="item active">
				<img img="img-responsive" src="'._RUTA_ARMENIA."/".$image.'">
			</div>';
	}
	else{
		echo '<div class="item">
				<img img="img-responsive" src="'._RUTA_ARMENIA."/".$image.'">
			</div>';
	}
}

 ?>