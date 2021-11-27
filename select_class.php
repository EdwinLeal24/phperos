<?php
    $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Clases</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID Clase</th>
                 <th>ID Profesor</th>
                 <th>ID Curso</th>
                 <th>ID Horario</th>
                 <th>Nombre</th>
                 <th>Color</th>
                </tr>
                <?php
                    $sql="SELECT * from class";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id_class']?></td>
            <td><?php echo $mostrar['id_teacher']?></td>
            <td><?php echo $mostrar['id_course']?></td>
            <td><?php echo $mostrar['id_schedule']?></td>
            <td><?php echo $mostrar['name']?></td>
            <td><?php echo $mostrar['color']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_class1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_class1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_class1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>
