
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Añadir Horario</h1>
         <br>
            <form action="insert_schedule2.php" method="post">
            <input type="hidden" name="id_schedule"></td>
                <table border="1">
                    <tr>
                        <th>ID Clase</th>
                        <td><input type="text" name="id_class""></td>
                    </tr>
                    <tr>
                        <th>Hora Inicio</th>
                        <td><input type="time" name="time_start"  min="00:00" max="23:59" step="60"></td>
                    </tr>
                    <tr>
                        <th>Hora Fin</th>
                        <td><input type="time" name="time_end"  min="00:00" max="23:59" step="60"></td>
                    </tr>
                    <tr>
                        <th>Día</th>
                        <td><input type="date" name="day" value="2021-01-01" min="2021-01-01" max="2022-12-31">></td>
                    </tr>
                </table>
            <br>
            <input type="submit" value="Insertar datos">
            </form>
            <br>
            <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
        </body>
</html>
