<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Modificar Profesor</h1>
         <br>
            <form action="modificar_teachers2.php" method="post">

                <table border="1">
                <tr>
                        <th>ID</th>
                        <td><input type="text" name="id_teacher">
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
                        <th>email</th>
                        <td><input type="text" name="email"></td>
                    </tr>
                </table>
            <br>
            <input type="submit" value="Insertar datos">
            </form>
            <br>
            <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
        </body>
</html>
