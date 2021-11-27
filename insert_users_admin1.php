
<html>
    <head>
    <link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/shared.css" rel="stylesheet">
        <link href="public/css/insert-class/insertClass.css" rel="stylesheet">
    </head>
        <body>
        <?php require 'header.php'?>
        <div class="main-container">
         <h1>AÑADIR ADMINISTRADOR</h1>
         <br>
            <form action="insert_users_admin2.php" method="post">
            <td><input type="hidden" name="id_user_admin">
                <table border="1" class="table">
                    <tr>
                        <th>Usuario</th>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="text" name="password"></td>
                    </tr>
                </table>
            <br>
            <button class="shared-button" type="submit">Añadir administrador</button>
            </form>

            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_users_admin.php"> VOLVER </a></button>
</div>
        </body>
</html>
