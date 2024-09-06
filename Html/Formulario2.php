<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario 2</title>
</head>
<body>

    <form action="RecibeFormulario2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input name="nombre" type="text" id="nombre" placeholder="Escribe tu nombre">
        <br>
        <label for="email">Email:</label>
        <input name="email" type="email" id="email">
        <br>
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
        <br>

        <label for="hora">
            <span>Hora:</span>
            <input type="time" id="hora" name="hora">
        </label>

        <label for="día">
            <span>Día:</span>
            <input type="date" id="día" name="día">
        </label>

        <label for="semana">
            <span>Semana:</span>
            <input type="week" id="semana" name="semana">
        </label>

        <label for="mes">
            <span>Mes:</span>
            <input type="month" id="mes" name="mes">
        </label>

        <label for="calendario">
            <span>Calendario:</span>
            <input type="datetime-local" id="calendario" name="calendario">
        </label>

        <p>Intereses</p>
        <label for="futbol">
            <input id="futbol" type="checkbox" value="futbol"> Futbol
        </label>
        
        <label for="voleibol">
            <input id="voleibol" type="checkbox" value="voleibol"> Voleibol
        </label>
        
        <br>

        <p>¿Eres alumno?</p>
        <label for="voleibol">
            <input id="voleibol" type="radiobutton">
        </label>

        <br>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>