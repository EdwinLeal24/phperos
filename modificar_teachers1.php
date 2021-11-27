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

            <form action="modificar_teachers2.php" method="post">

                <label>ID</label><input type="text" name="id_teacher">
                <label>Nombre</label><input type="text" name="name">
                <label>Apellido</label><input type="text" name="surname">
                <label>Telefono</label><input type="text" name="telephone">
                <label>NIF</label><input type="text" name="nif">
                <label>email</label><input type="text" name="email">

                <input type="submit" value="Actualizar profesor">
            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_teachers.php"> VOLVER </a></button>
        </section>
        </div>
</div>
        </body>
</html>
