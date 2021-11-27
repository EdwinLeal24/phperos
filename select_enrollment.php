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
        <h2>Matriculas</h2>

        <table border="1" class="table">
                <tr>
                 <th>ID Matricula</th>
                 <th>ID Estudiante</th>
                 <th>ID Curso</th>
                 <th>Estado</th>
                </tr>
                <?php
$sql = "SELECT * from enrollment";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
            <tr>
            <td><?php echo $mostrar['id_enrollment'] ?></td>
            <td><?php echo $mostrar['id_student'] ?></td>
            <td><?php echo $mostrar['id_course'] ?></td>
            <td><?php echo $mostrar['status'] ?></td>
            </tr>
        <?php
}
?>
        </table>

        <div class="buttons">
            <button class="class-button"><a style="text-decoration:none" href="insert_enrollment1.php">AÑADIR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="modificar_enrollment1.php">MODIFICAR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="borrar_enrollment1.php">ELIMINAR</a></button>
        </div>

        <button class="back-button class-button"><a style="text-decoration:none"  href="/indexAdmin.php"> VOLVER </a></button>
    </div>
    </body>
</html>
