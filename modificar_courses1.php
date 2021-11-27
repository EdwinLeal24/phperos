<html>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
        <body>
         <h1>PHPeros Modificar Curso</h1>
         <br>
            <form action="modificar_courses2.php" method="post">

                <table border="1">
                    <tr>
                        <th>ID Curso</th>
                        <td><input type="text" name="id_course"></td>
                    </tr>
                    <tr>
                        <th>Nombre</th>
                        <td><input type="text" name="name"></td>
                    </tr>
                    <tr>
                        <th>Descripcion</th>
                        <td><input type="text" name="description"></td>
                    </tr>
                    <tr>
                        <th>Fecha Inicio</th>
                        <td><input type="date" name="date_start" value="2021-01-01" min="2021-01-01" max="2022-12-31">></td>
                    </tr>
                    <tr>
                        <th>Fecha Fin</th>
                        <td><input type="date" name="date_end" value="2021-01-01" min="2021-01-01" max="2022-12-31">></td>
                    </tr>
                    <tr>
                        <th>Activo</th>
                        <td><select name="active">
                            <option value=0>Deshabilitado</option>
                            <option value=1>Habilitado</option>
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
