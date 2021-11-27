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
        <h2>HORARIOS</h2>
        <table border="1" class="table">
                <tr>
                 <th>ID Horario</th>
                 <th>ID Clase</th>
                 <th>Fecha Comienzo</th>
                 <th>Fecha Fin</th>
                 <th>Dia</th>
                </tr>
                <?php
$sql = "SELECT * from schedule";
$result = mysqli_query($conexion, $sql);
while ($mostrar = mysqli_fetch_array($result)) {
    ?>
            <tr>
            <td><?php echo $mostrar['id_schedule'] ?></td>
            <td><?php echo $mostrar['id_class'] ?></td>
            <td><?php echo $mostrar['time_start'] ?></td>
            <td><?php echo $mostrar['time_end'] ?></td>
            <td><?php echo $mostrar['day'] ?></td>
            </tr>
        <?php
}
?>
        </table>
        <div class="buttons">
            <button class="class-button"><a style="text-decoration:none" href="insert_schedule1.php">AÑADIR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="modificar_schedule1.php">MODIFICAR</a></button>
            <button class="class-button"><a style="text-decoration:none" href="borrar_schedule1.php">ELIMINAR</a></button>
        </div>

        <button class="back-button class-button"><a style="text-decoration:none"  href="/phperos-app/indexAdmin.php"> VOLVER </a></button>
    </div>
    </body>
</html>

