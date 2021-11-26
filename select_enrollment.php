<?php
            $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Matriculas</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID Matricula</th>
                 <th>ID Estudiante</th>
                 <th>ID Curso</th>
                 <th>Estado</th>
                </tr>
                <?php
                    $sql="SELECT * from enrollment";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id_enrollment']?></td>
            <td><?php echo $mostrar['id_student']?></td>
            <td><?php echo $mostrar['id_course']?></td>
            <td><?php echo $mostrar['status']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_enrollment1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_enrollment1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_enrollment1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>
