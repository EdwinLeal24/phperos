
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
        <h2>CURSOS</h2>

        <table border="1" class="table">
                <tr>
                 <th>ID Curso</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 <th>Fecha Inicio</th>
                 <th>Fecha Fin</th>
                 <th>Activo</th>
                </tr>
                <?php
$sql = "SELECT * from courses";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
            <tr>
            <td><?php echo $mostrar['id_course'] ?></td>
            <td><?php echo $mostrar['name'] ?></td>
            <td><?php echo $mostrar['description'] ?></td>
            <td><?php echo $mostrar['date_start'] ?></td>
            <td><?php echo $mostrar['date_end'] ?></td>
            <td><?php echo $mostrar['active'] ?></td>
            </tr>
        <?php
}
?>
        </table>
        <div class="buttons">
            <button class="class-button"><a style="text-decoration:none" href="insert_courses1.php">AÑADIR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="modificar_courses1.php">MODIFICAR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="borrar_courses1.php">ELIMINAR</a></button>
        </div>

        <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app"> VOLVER </a></button>
    </body>
</html>
