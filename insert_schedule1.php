
<html>
<head>
        <link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/shared.css" rel="stylesheet">
        <link href="public/css/insert-class/insertClass.css" rel="stylesheet">
    </head>
        <body>
        <?php require 'header.php'?>
        <div class="main-container">
         <h1>AÑADIR HORARIO</h1>
         <br>
            <form action="insert_schedule2.php" method="post">
            <input type="hidden" name="id_schedule"></td>
                <table border="1" class="table">
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
                        <td><input type="date" name="day" value="2021-01-01" min="2021-01-01" max="2022-12-31"></td>
                    </tr>
                </table>
            <br>
            <button class="shared-button" type="submit">Añadir Horario</button>
            </form>

            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_schedule.php"> VOLVER </a></button>
</div>
        </body>
</html>
