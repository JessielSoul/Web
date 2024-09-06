<?php
echo "Campos:";
echo "<br>";

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$calificacion = $_POST['calificacion'];
$color = $_POST['color'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$estado_civil = $_POST['estado_civil'];
$comentarios = $_POST['comentarios'];
$terminos = isset($_POST['terminos']) ? 'Sí' : 'No';

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
