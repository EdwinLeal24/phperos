
<?php
            $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Cursos</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID Curso</th>
                 <th>Nombre</th>
                 <th>Descripcion</th>
                 <th>Fecha Inicio</th>
                 <th>Fecha Fin</th>
                 <th>Activo</th>
                </tr>
                <?php
                    $sql="SELECT * from courses";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id_course']?></td>
            <td><?php echo $mostrar['name']?></td>
            <td><?php echo $mostrar['description']?></td>
            <td><?php echo $mostrar['date_start']?></td>
            <td><?php echo $mostrar['date_end']?></td>
            <td><?php echo $mostrar['active']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_courses1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_courses1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_courses1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>
