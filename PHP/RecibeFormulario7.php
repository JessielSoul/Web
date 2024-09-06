<?php
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

echo "<h2>Datos Recibidos</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Campo</th><th>Valor</th></tr>";
echo "<tr><td>Nombre Completo</td><td>$nombre</td></tr>";
echo "<tr><td>Edad</td><td>$edad</td></tr>";
echo "<tr><td>Calificación</td><td>$calificacion</td></tr>";
echo "<tr><td>Color</td><td style='background-color:$color;'>$color</td></tr>";
echo "<tr><td>Hora</td><td>$hora</td></tr>";
echo "<tr><td>Fecha</td><td>$fecha</td></tr>";
echo "<tr><td>Correo Electrónico</td><td>$email</td></tr>";
echo "<tr><td>Género</td><td>$genero</td></tr>";
echo "<tr><td>Estado Civil</td><td>$estado_civil</td></tr>";
echo "<tr><td>Comentarios</td><td>$comentarios</td></tr>";
echo "<tr><td>Aceptó términos y condiciones</td><td>$terminos</td></tr>";
echo "</table>";
?>
