<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de Registro</h1>
    <form action="RecibeFormulario7.php" method="post">
        <label for="nombre">Nombre Completo:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>

        <label for="calificacion">Calificación (0-10):</label>
        <input type="range" id="calificacion" name="calificacion" min="0" max="10"><br><br>

        <label for="color">Elige un color:</label>
        <input type="color" id="color" name="color"><br><br>

        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora"><br><br>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha"><br><br>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="genero">Género:</label>
        <select id="genero" name="genero" required>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>Estado Civil:</label>
        <input type="radio" id="soltero" name="estado_civil" value="Soltero/a" required>
        <label for="soltero">Soltero/a</label>
        <input type="radio" id="casado" name="estado_civil" value="Casado/a">
        <label for="casado">Casado/a</label>
        <input type="radio" id="otro" name="estado_civil" value="Otro">
        <label for="otro">Otro</label><br><br>

        <label for="comentarios">Comentarios:</label>
        <textarea id="comentarios" name="comentarios"></textarea><br><br>

        <input type="checkbox" id="terminos" name="terminos" value="Acepto" required>
        <label for="terminos">Aceptar términos y condiciones</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>