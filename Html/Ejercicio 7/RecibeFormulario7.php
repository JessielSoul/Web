<?php
echo "Campos:";
echo "<br>";

$nombre = $_GET['nombre'];
$edad = $_GET['edad'];
$calificacion = $_GET['calificacion'];
$color = $_GET['color'];
$hora = $_GET['hora'];
$fecha = $_GET['fecha'];
$email = $_GET['email'];
$genero = $_GET['genero'];
$estado_civil = $_GET['estado_civil'];
$comentarios = $_GET['comentarios'];
$terminos = isset($_GET['terminos']) ? 'Sí' : 'No';

echo "Nombre Completo: $nombre";
echo "<br>";
echo "Edad: $edad";
echo "<br>";
echo "Calificación: $calificacion";
echo "<br>";
echo "Color: $color";
echo "<br>";
echo "Hora: $hora";
echo "<br>";
echo "Fecha: $fecha";
echo "<br>";
echo "Correo Electrónico: $email";
echo "<br>";
echo "Género: $genero";
echo "<br>";
echo "Estado Civil: $estado_civil";
echo "<br>";
echo "Comentarios: $comentarios";
echo "<br>";
echo "Aceptó Términos y Condiciones: $terminos";
?>
