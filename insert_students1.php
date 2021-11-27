
</html>
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
         <h1>AÑADIR ESTUDIANTE</h1>
         <br>
            <form action="insert_students2.php" method="post">
            <td><input type="hidden" name="id">
                <table border="1" class="table">
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
                        <td><input type="date" name="date_registered" value="2021-01-01" min="2021-01-01" max="2022-12-31"></td>
                    </tr>
                </table>

            <button class="shared-button" type="submit">Añadir Horario</button>
            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_students.php"> VOLVER </a></button>
        </body>
</html>
