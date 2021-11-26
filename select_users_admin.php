<?php
            $conexion=mysqli_connect('localhost','root','','PHPeros');
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <h1>PHPeros Administradores</h1>
    </head>
    <body>
        <p>CONSULTAS A LA BASE DE DATOS:</p>
        <br>
        <table border="1">
                <tr>
                 <th>ID Administrador</th>
                 <th>Usuario</th>
                 <th>Nombre</th>
                 <th>Email</th>
                 <th>Password</th>
                </tr>
                <?php
                    $sql="SELECT * from users_admin";
                    $result=mysqli_query($conexion,$sql);
            while ($mostrar=mysqli_fetch_array($result)){
         ?>
            <tr>
            <td><?php echo $mostrar['id_user_admin']?></td>
            <td><?php echo $mostrar['username']?></td>
            <td><?php echo $mostrar['name']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['password']?></td>
            </tr>
        <?php
        }
         ?>
        </table>
        <p>
        <span class="button2"><b><a style="text-decoration:none" href="insert_users_admin1.php">AÑADIR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="modificar_users_admin1.php">MODIFICAR</a></b></span>
        <span class="button2"><b><a style="text-decoration:none" href="borrar_users_admin1.php">ELIMINAR</a></b></span>
        </p>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>
</html>

