
<html>
    <head>
        <link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/select-class/selectClass.css" rel="stylesheet">
        <link href="public/css/register.css" rel="stylesheet">
        <link href="public/css/shared.css" rel="stylesheet">
    </head>
        <body>
        <?php require 'header.php'?>
        <div class="main-container">
        <div class="container">

        <section class="card">
        <h3>MODIFICAR HORARIO</h3>

            <form action="modificar_schedule2.php" method="post">

                <label>ID Horario</label><input type="text" name="id_schedule">
                <label>ID Clase</label><input type="text" name="id_class">
                <label>Hora Inicio</label><input type="time" name="time_start"  min="00:00" max="23:59" step="60">
                <label>Hora Fin</label><input type="time" name="time_end"  min="00:00" max="23:59" step="60">
                <label>Día</label><input type="date" name="day" value="2021-01-01" min="2021-01-01" max="2022-12-31">

                <input type="submit" value="Actualizar horario">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_schedule.php"> VOLVER </a></button>
        </section>
        </div>
</div>
        </body>
</html>
