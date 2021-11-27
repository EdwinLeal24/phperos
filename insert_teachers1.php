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
         <h1>AÑADIR PROFESOR</h1>
         <br>
            <form action="insert_teachers2.php" method="post">
            <td><input type="hidden" name="id_teacher">
                <table border="1">
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
            <button class="shared-button" type="submit">Añadir profesor</button>

            </form>

            <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/select_teachers.php"> VOLVER </a></button>
</div>
        </body>
</html>
