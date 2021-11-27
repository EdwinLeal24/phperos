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
        <h1>ELIMINAR CLASE</h1>
        <form action="borrar_class2.php" method="post">
            <label>Id_Class:</label><input type="text" name="id_class">
            <input type="submit" value="Eliminar clase">
        </form>
        <button class="back-button class-button"><a style="text-decoration:none"  href="/select_class.php"> VOLVER </a></button>
        </section>

</div>
    </body>

</html>
