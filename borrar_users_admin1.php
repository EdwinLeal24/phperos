
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
            <form action="borrar_users_admin2.php" method="post">

                <label>ID Administrador</label><input type="text" name="id_user_admin">

                <input type="submit" value="Eliminar administrador">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_users_admin.php"> VOLVER </a></button>
        </section>

</div>
        </body>
</html>
