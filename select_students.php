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
        <h2>ESTUDIANTES</h2>
        <table border="1" class="table">
                <tr>
                 <th>Usuario</th>
                 <th>Email</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Telefono</th>
                 <th>NIF</th>
                 <th>Fecha Registro</th>
                </tr>
                <?php
$sql = "SELECT * from students";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
            <tr>
            <td><?php echo $mostrar['username'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['name'] ?></td>
            <td><?php echo $mostrar['surname'] ?></td>
            <td><?php echo $mostrar['telephone'] ?></td>
            <td><?php echo $mostrar['nif'] ?></td>
            <td><?php echo $mostrar['date_registered'] ?></td>
            </tr>
        <?php
}
?>
         </table>
        <div class="buttons">
            <button class="class-button"><a style="text-decoration:none" href="insert_students1.php">AÑADIR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="modificar_students1.php">MODIFICAR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="borrar_students1.php">ELIMINAR</a></button>
        </div>

        <button class="back-button class-button"><a style="text-decoration:none"  href="/indexAdmin.php"> VOLVER </a></button>
    </div>

    </body>
</html>

