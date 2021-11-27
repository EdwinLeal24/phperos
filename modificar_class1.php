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
        <h3>MODIFICAR CLASE</h3>

        <form action="modificar_class2.php" method="post">
        <label>Id_Class:</label><input type="text" name="id_class">
            <label>Id_Teacher:</label><input type="text" name="id_teacher">
            <label>Id_Course:</label><input type="text" name="id_course">
            <label>Id_Schedule:</label><input type="text" name="id_schedule">
            <label>Name:</label><input type="text" name="name">
            <label>Color:</label><input type="text" name="color">
            <input type="submit" value="Actualizar clase">
        </form>
        <button class="back-button class-button"><a style="text-decoration:none"  href="/select_class.php"> VOLVER </a></button>
        </section>
</div>
</div>
    </body>

</html>
