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
        <h2>CLASES</h2>

        <table border="1" class="table">
                <tr>
                 <th>ID Clase</th>
                 <th>ID Profesor</th>
                 <th>ID Curso</th>
                 <th>ID Horario</th>
                 <th>Nombre</th>
                 <th>Color</th>
                </tr>
                <?php
$sql = "SELECT * from class";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
            <tr>
            <td><?php echo $mostrar['id_class'] ?></td>
            <td><?php echo $mostrar['id_teacher'] ?></td>
            <td><?php echo $mostrar['id_course'] ?></td>
            <td><?php echo $mostrar['id_schedule'] ?></td>
            <td><?php echo $mostrar['name'] ?></td>
            <td><?php echo $mostrar['color'] ?></td>
            </tr>
        <?php
}
?>
        </table>
        <div class="buttons">
            <button class="class-button"><a style="text-decoration:none" href="insert_class1.php">AÑADIR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="modificar_class1.php">MODIFICAR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="borrar_class1.php">ELIMINAR</a></button>
        </div>
        <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app"> VOLVER </a></button>

</div>
    </body>
</html>
