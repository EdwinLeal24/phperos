<?php

//Update con PDO

//Credenciales usuario

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'PHPeros');

//Conexion

try
{
    //Ejecucion de variables conectando a la BBDD y aplicando UTF8
    $bbdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}

catch (PDOException $e)
{
    exit("Error: " . $e->getMessage());
}

?>


<html>
<link rel="stylesheet" href="styles.css">
    <body>

    <?php
    //Informacion enviada por el formulario
    $id_user_admin=$_POST['id_user_admin'];
    $username=$_POST['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    //Preparamos el UPDATE
    $sql="UPDATE users_admin SET username = :username, name = :name, email = :email, password = :password WHERE users_admin.id_user_admin = :id_user_admin";

    //Preparamos la consulta
    $query = $bbdd->prepare($sql);

    //Vinculamos los parametros al nombre de variable especificado
    $query->bindParam(':id_user_admin',$id_user_admin,PDO::PARAM_INT);
    $query->bindParam(':username',$username,PDO::PARAM_INT);
    $query->bindParam(':name',$name,PDO::PARAM_STR, 100);
    $query->bindParam(':email',$email,PDO::PARAM_STR, 100);
    $query->bindParam(':password',$password,PDO::PARAM_STR, 100);


    //Ejecutamos la consulta
    $query->execute();

    //Comprobamos que ha ido bien
    $lastInsertId = $bbdd->lastInsertId();

    if($query->rowCount() > 0)
    {
        $count = $query -> rowCount();
        echo "<div class='content alert alert-primary' > Se ha podido actualizar el registro </div>";
    }
    else{
        echo "<div class= 'content alert alert-primary' > No se puede actualizar el registro, ya lo siento. </div>";
    }


    ?>
        <br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>
    </body>

</html>


