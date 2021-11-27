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

        <section class="login-container">
        <h1>ELIMINAR ESTUDIANTE</h1>

            <form action="borrar_teachers2.php" method="post">

                <label>ID Profesor</label><input type="text" name="id_teacher">

                <input type="submit" value="Eliminar profesor">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/select_teachers.php"> VOLVER </a></button>
        </section>

</div>
        </body>
</html>
