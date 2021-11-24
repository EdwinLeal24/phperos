<?php

//Insercion con PDO

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
    <head>
        <title>PHPeros insert</title>
    </head>

    <body>
        <?php

            //INformacion enviada por el formulario
            $id_user_admin=$_POST['id_user_admin'];
            $username=$_POST['username'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            //Preparamos el INSERT
            $sql="insert into users_admin(Id_User_Admin,Username,Name,Email,Password)
            values(:id_user_admin,:username,:name,:email,:password)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id_user_admin',$id_user_admin,PDO::PARAM_INT);
            $sql->bindParam(':username',$username,PDO::PARAM_INT);
            $sql->bindParam(':name',$name,PDO::PARAM_STR, 100);
            $sql->bindParam(':email',$email,PDO::PARAM_STR, 100);
            $sql->bindParam(':password',$password,PDO::PARAM_STR, 100);

            //Ejecutamos la consulta
            $sql->execute();

            //Comprobamos que ha ido bien
            $lastInsertId = $bbdd->lastInsertId();
            if($lastInsertId>0){
                echo "<div class='content alert alert-primary' > Gracias, $username , ahora eres administrador/a. </div>";
            }
            else{
                echo "<div class= 'content alert alert-primary' > No se pueden agregar datos, ya lo siento. </div>";
            }

        ?>

    </body>


</html>
