<?php
            $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Horarios</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID Horario</th>
                 <th>ID Clase</th>
                 <th>Fecha Comienzo</th>
                 <th>Fecha Fin</th>
                 <th>Dia</th>
                </tr>
                <?php
                    $sql="SELECT * from schedule";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id_schedule']?></td>
            <td><?php echo $mostrar['id_class']?></td>
            <td><?php echo $mostrar['time_start']?></td>
            <td><?php echo $mostrar['time_end']?></td>
            <td><?php echo $mostrar['day']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_schedule1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_schedule1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_schedule1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>

