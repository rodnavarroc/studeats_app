<?php

$mysqli = new mysqli("localhost", "root", "", "studeats"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

//datos a introducir en la DB para crear el negocio
$nombre_solicitante = $_POST['nombre_solicitante'];
$correo_solicitante = $_POST['correo_solicitante'];
$nombre_negocio = $_POST['nombre_negocio'];
$rango_precios = $_POST['rango_precios'];
$ubicacion_negocio = $_POST['ubicacion_negocio'];
$horarios_negocio = $_POST['horarios_negocio'];
$telefono_negocio = $_POST['telefono_negocio'];
$nnombre = str_replace(' ', '', $nombre_negocio); //quitar espacios al nombre del negocio para nombrar la carpeta del negocio

$consulta = "INSERT INTO negocios (propietario, correo, nombre_negocio, alias_negocio, rango_precios, ubicacion, horarios, telefono) VALUES ('$nombre_solicitante','$correo_solicitante','$nombre_negocio','$nnombre','$rango_precios','$ubicacion_negocio','$horarios_negocio','$telefono_negocio')";

if ($resultado = $mysqli->query($consulta)) { 

	//la consulta tuvo exito pero falta ingresar los productos y las fotos
}
else
{
    echo "Error en el registro del negocio a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}

// ======== SUBIR FOTO PRINCIPAL ========== //
$target_path = '../negocios/'.$nnombre."/"; //ruta para almacenar las fotos del negocio en el servidor
if (!file_exists($target_path)) mkdir($target_path, 0777, true); //crear el directorio en la ruta de arriba
$target_path = $target_path . "fotoPrincipal.jpg"; //nombrar la foto
move_uploaded_file($_FILES['fotoPrincipal']['tmp_name'], $target_path); //subir la foto a la carpeta

// ======== SUBIR 1er FOTO SLIDER ========== //
$target_path = '../negocios/'.$nnombre."/"; //ruta para almacenar las fotos del negocio en el servidor
$target_path = $target_path . "fotoSlider1.jpg"; //nombrar la foto
move_uploaded_file($_FILES['fotoSlider1']['tmp_name'], $target_path); //subir la foto a la carpeta

// ======== SUBIR 2da FOTO SLIDER ========== //
$target_path = '../negocios/'.$nnombre."/"; //ruta para almacenar las fotos del negocio en el servidor
$target_path = $target_path . "fotoSlider2.jpg"; //nombrar la foto
move_uploaded_file($_FILES['fotoSlider2']['tmp_name'], $target_path); //subir la foto a la carpeta

// ======== SUBIR 3era FOTO SLIDER ========== //
$target_path = '../negocios/'.$nnombre."/"; //ruta para almacenar las fotos del negocio en el servidor
$target_path = $target_path . "fotoSlider3.jpg"; //nombrar la foto
move_uploaded_file($_FILES['fotoSlider3']['tmp_name'], $target_path); //subir la foto a la carpeta

//datos a introducir en la DB para crear los productos
$nArts = $_POST['productosIngresados']; //numero de productos ingresados por el usuario
//insertar cada producto ingresado en la tabla de productos
for ($i= 1; $i <= $nArts; $i++) { 
	$artc = $_POST['precios_neg'.$i]; //almacenar el nombre del articulo
	if(isset($artc)) 
	{ 
		$consulta = "INSERT INTO productos_negocios (nombre_negocio, producto) VALUES ('$nnombre','$artc')"; 
		$mysqli->query($consulta);
	}
}

header("Location: ../negocio.php?ref=".$nnombre); //regresar a inicio

mysqli_close($mysqli); //cerrar la base de datos

?>