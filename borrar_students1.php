
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
            <form action="borrar_students2.php" method="post">

                <label>ID Alumno</label><input type="text" name="id">

                <input type="submit" value="Eliminar alumno">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_students.php"> VOLVER </a></button>
        </section>

</div>
        </body>
</html>
