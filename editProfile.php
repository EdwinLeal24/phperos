
</html>
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
        <h3>MODIFICAR ESTUDIANTE</h3>

            <form action="modificar_students2.php" method="post">

            <label>ID</label><input type="text" name="id">
                <label>Usuario</label><input type="text" name="username">
                <label>Password</label><input type="text" name="pass">
                <label>email</label><input type="text" name="email">
                <label>Nombre</label><input type="text" name="name">
                <label>Apellido</label><input type="text" name="surname">
                <label>Telefono</label><input type="text" name="telephone">
                <label>NIF</label><input type="text" name="nif">
                <label>Fecha Registro</label><input type="date" name="date_registered" value="2021-01-01" min="2021-01-01" max="2022-12-31">

                <input type="submit" value="Actualizar estudiante">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/index.php"> VOLVER </a></button>
        </section>
        </div>
</div>

        </body>
</html>
