<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Modificar Administrador</h1>
         <br>
            <form action="modificar_users_admin2.php" method="post">
                <table border="1">
                <tr>
                        <th>ID</th>
                        <td><input type="text" name="id_user_admin"></td>
                    </tr>
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
            <input type="submit" value="Insertar datos">
            </form>
            <br>
            <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
        </body>
</html>
