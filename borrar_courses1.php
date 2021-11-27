
<html>
<head>
        <title>PHPeros delete</title>
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
        <h1>ELIMINAR CURSO</h1>
            <form action="borrar_courses2.php" method="post">
            <label>ID Curso</label><input type="text" name="id_course">

            <input type="submit" value="Eliminar curso">
            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/select_courses.php"> VOLVER </a></button>
            </section>

</div>
        </body>
</html>
