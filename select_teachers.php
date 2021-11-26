<?php
            $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Profesores</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID Profesor</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Telefono</th>
                 <th>NIF</th>
                 <th>Email</th>
                </tr>
                <?php
                    $sql="SELECT * from teachers";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id_teacher']?></td>
            <td><?php echo $mostrar['name']?></td>
            <td><?php echo $mostrar['surname']?></td>
            <td><?php echo $mostrar['telephone']?></td>
            <td><?php echo $mostrar['nif']?></td>
            <td><?php echo $mostrar['email']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_teachers1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_teachers1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_teachers1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>
