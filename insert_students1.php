
</html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Añadir Estudiante</h1>
         <br>
            <form action="insert_students2.php" method="post">
            <td><input type="hidden" name="id">
                <table border="1">
                    <tr>
                        <th>Usuario</th>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <th>Password</th>
                        <td><input type="text" name="pass"></td>
                    </tr>
                    <tr>
                        <th>email</th>
                        <td><input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>Apellido</th>
                        <td><input type="text" name="surname"></td>
                    </tr>
                    <tr>
                        <th>Telefono</th>
                        <td><input type="text" name="telephone"></td>
                    </tr>
                    <tr>
                        <th>NIF</th>
                        <td><input type="text" name="nif"></td>
                    </tr>
                    <tr>
                        <th>Fecha Registro</th>
                        <td><input type="date" name="date_registered" value="2021-01-01" min="2021-01-01" max="2022-12-31">></td>
                    </tr>
                </table>
            <br>
            <input type="submit" value="Insertar datos">
            </form>
            <br>
            <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
        </body>
</html>
