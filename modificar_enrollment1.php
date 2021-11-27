<html>
<head>
        <title>PHPeros update</title>
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
        <h3>MODIFICAR MATRÍCULA</h3>

            <form action="modificar_enrollment2.php" method="post">
            <label>ID Matrícula</label><input type="text" name="id_enrollment">
            <label>ID Estudiante</label><input type="text" name="id_student">
            <label>ID Course:</label><input type="text" name="id_course">
            <label>Estado</label><select name="status">
                            <option value=0>Inactivo</option>
                            <option value=1>Activo</option>
            <input type="submit" value="Actualizar matrícula">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_enrollment.php"> VOLVER </a></button>
        </section>
        </div>
</div>
        </body>
</html>
