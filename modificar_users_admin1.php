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
        <h3>MODIFICAR AMINISTRADOR</h3>

            <form action="modificar_users_admin2.php" method="post">

                <label>ID</label><input type="text" name="id_user_admin">
                <label>Usuario</label><input type="text" name="username">
                <label>Nombre</label><input type="text" name="name">
                <label>Email</label><input type="text" name="email">
                <label>Password</label><input type="text" name="password">

                <input type="submit" value="Actualizar administrador">

            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_users_admin.php"> VOLVER </a></button>
        </section>
        </div>
</div>
        </body>
</html>
