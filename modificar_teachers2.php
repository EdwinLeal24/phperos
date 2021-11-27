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
    $id_teacher=$_POST['id_teacher'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $telephone=$_POST['telephone'];
    $nif=$_POST['nif'];
    $email=$_POST['email'];

    //Preparamos el UPDATE
    $sql="UPDATE teachers SET name = :name, surname = :surname, telephone = :telephone, nif = :nif, email = :email WHERE teachers.id_teacher = :id_teacher";

    //Preparamos la consulta
    $query = $bbdd->prepare($sql);

    //Vinculamos los parametros al nombre de variable especificado
    $query->bindParam(':id_teacher',$id_teacher,PDO::PARAM_INT);
    $query->bindParam(':name',$name,PDO::PARAM_INT);
    $query->bindParam(':surname',$surname,PDO::PARAM_STR, 100);
    $query->bindParam(':telephone',$telephone,PDO::PARAM_STR, 100);
    $query->bindParam(':nif',$nif,PDO::PARAM_STR, 100);
    $query->bindParam(':email',$nif,PDO::PARAM_STR, 100);


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


