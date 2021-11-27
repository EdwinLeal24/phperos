<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Modificar Clase</h1>
         <br>
            <form action="modificar_class2.php" method="post">
                <table border="1">
                    <tr>
                        <th>ID Clase</th>
                        <td><input type="text" name="id_class"></td>
                    </tr>

                    <tr>
                        <th>ID Profesor</th>
                        <td><input type="text" name="id_teacher"></td>
                    </tr>
                    <tr>
                        <th>ID Curso</th>
                        <td><input type="text" name="id_course"></td>
                    </tr>
                    <tr>
                        <th>ID Horario</th>
                        <td><input type="text" name="id_schedule"></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <td><input type="text" name="color"></td>
                    </tr>
                </table>
            <br>
            <input type="submit" value="Insertar datos">
            </form>
            <br>
            <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
        </body>
</html>
