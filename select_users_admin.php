<?php
$conexion = mysqli_connect('localhost', 'root', '', 'PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
    <link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/select-class/selectClass.css" rel="stylesheet">
    </head>
    <body>
        <?php require 'header.php'?>

        <div class="main-container">
        <h2>ADMINISTRADORES</h2>
        <table border="1" class="table">
                <tr>
                 <th>ID Administrador</th>
                 <th>Usuario</th>
                 <th>Nombre</th>
                 <th>Email</th>
                </tr>
                <?php
$sql = "SELECT * from users_admin";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
            <tr>
            <td><?php echo $mostrar['id_user_admin'] ?></td>
            <td><?php echo $mostrar['username'] ?></td>
            <td><?php echo $mostrar['name'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            </tr>
        <?php
}
?>
        </table>
        <div class="buttons">
            <button class="class-button"><a style="text-decoration:none" href="insert_users_admin1.php">AÑADIR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="modificar_users_admin1.php">MODIFICAR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="borrar_users_admin1.php">ELIMINAR</a></button>
        </div>

        <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/indexAdmin.php"> VOLVER </a></button>
    </div>

    </body>
</html>

