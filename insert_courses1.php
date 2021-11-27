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
         <h2>AGREGAR CURSO</h2>
         <br>
            <form action="insert_courses2.php" method="post">
            <input type="hidden" name="id_course"></td>
                <table border="1" class="table">
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
            <button class="shared-button" type="submit">Insertar curso</button>
        </form>

            <button class="back-button class-button"><a class="white-link" style="text-decoration:none"  href="/select_courses.php"> VOLVER </a></button>
        </body>
</html>
