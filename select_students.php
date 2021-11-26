<?php
            $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Estudiantes</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID</th>
                 <th>Usuario</th>
                 <th>Password</th>
                 <th>Email</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Telefono</th>
                 <th>NIF</th>
                 <th>Fecha Registro</th>
                </tr>
                <?php
                    $sql="SELECT * from students";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id']?></td>
            <td><?php echo $mostrar['username']?></td>
            <td><?php echo $mostrar['pass']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['name']?></td>
            <td><?php echo $mostrar['surname']?></td>
            <td><?php echo $mostrar['telephone']?></td>
            <td><?php echo $mostrar['nif']?></td>
            <td><?php echo $mostrar['date_registered']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_students1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_students1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_students1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>

