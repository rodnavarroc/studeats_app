<?php

$mysqli = new mysqli("localhost", "root", "", "studeats"); //conectar a la base de datos

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

//datos a introducir en la DB
$nombre = $_POST['nombre'];
$calificacion = $_POST['calificacion'];
$comment = $_POST['comment'];
$lugar = $_GET['ref']; 

$consulta = "INSERT INTO comentarios (lugar,nombre_usuario,calificacion,comentario) VALUES ('$lugar','$nombre','$calificacion','$comment')";

if ($resultado = $mysqli->query($consulta)) { //la consulta tuvo exito
    header("Location: ../".$lugar.".php");
}
else
{
    echo "Error en el registro a la base de datos: ".mysqli_error($mysqli); //o mostrar un error
}
mysqli_close($mysqli); //cerrar la base de datos

?>