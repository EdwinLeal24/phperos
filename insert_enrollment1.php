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
         <h1>AÑADIR MATRICULA</h1>
         <br>
            <form action="insert_enrollment2.php" method="post">
            <input type="hidden" name="id_enrollment"></td>
                <table border="1" class="table">
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
            <button class="shared-button" type="submit">Añadir matricula</button>
            </form>

            <button class="back-button class-button"><a style="text-decoration:none"  href="/select_enrollment.php"> VOLVER </a></button>
</div>
        </body>
</html>
