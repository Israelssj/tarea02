<?php

	$Nombre = $_POST['NombreLibro'];
	$Descripcion = $_POST['Descripcion'];
	
	
    $contenido=
"Nombre: $Nombre
Descripcion: $Descripcion";

	$archivo = fopen("libros2.txt", "w");
	fwrite($archivo,$contenido);
     
?>

<?php

				$lecturaArchivo = fopen("libros2.txt", "r");

				while (!feof($lecturaArchivo)) {
					$linea = fgets($lecturaArchivo);
					echo nl2br($linea);
				}

				fclose($lecturaArchivo);

			?>
</heady>
<body> 
	<div>
	<h2>Datos guardados con exito.

    </h2>
</div>
</body>
</html>