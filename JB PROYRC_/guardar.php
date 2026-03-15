<?php

$conexion = new mysqli("localhost","root","","jbproyec");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$servicio = $_POST['servicio'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO solicitudes (nombre,email,servicio,mensaje)
VALUES ('$nombre','$email','$servicio','$mensaje')";

$conexion->query($sql);

echo "Solicitud enviada correctamente";

?>