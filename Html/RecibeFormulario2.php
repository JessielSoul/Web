<?php
echo "Datos:";
echo "<br>";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$hora = $_POST['hora'];
$dia = $_POST['día'];
$semana = $_POST['semana'];
$mes = $_POST['mes'];
$calendario = $_POST['calendario'];

echo 'Hola: '.$nombre. ', tu correo es: ' . $email . ', el mensaje recibido es: ' . $mensaje;

echo "<br>";

echo "Hola: $nombre, tu correo es: $email, el mensaje recibido es: $mensaje";

echo "<br>";

echo "Es la hora: $hora, del día: $dia, en la semana: $semana, del mes: $mes, del calendario $calendario";