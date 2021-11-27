<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Modificar Matrícula</h1>
         <br>
            <form action="modificar_enrollment2.php" method="post">

                <table border="1">
                <tr>
                        <th>ID Matrícula</th>
                        <td><input type="text" name="id_enrollment"></td>
                    </tr>
                    <tr>
                        <th>ID Estudiante</th>
                        <td><input type="text" name="id_student"></td>
                    </tr>
                    <tr>
                        <th>ID Curso</th>
                        <td><input type="text" name="id_course"></td>
                    </tr>
                    <tr>
                        <th>Estado</th>
                        <td><select name="status">
                            <option value=0>Inactivo</option>
                            <option value=1>Activo</option>
                        </td>
                    </tr>
                </table>
            <br>
            <input type="submit" value="Insertar datos">
            </form>
            <br>
            <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
        </body>
</html>
