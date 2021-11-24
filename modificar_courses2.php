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
    <head>
        <title>PHPeros Update</title>
    </head>

    <body>

    <?php
    //Informacion enviada por el formulario
    $id_course=$_POST['id_course'];
    $name=$_POST['name'];
    $description=$_POST['description'];
    $date_start=$_POST['date_start'];
    $date_end=$_POST['date_end'];
    $active=$_POST['active'];

    //Preparamos el UPDATE
    $sql="UPDATE courses SET name = :name, description = :description, date_start = :date_start, date_end = :date_end, active = :active WHERE courses.id_course = :id_course";

    //Preparamos la consulta
    $query = $bbdd->prepare($sql);

    //Vinculamos los parametros al nombre de variable especificado
    $query->bindParam(':id_course',$id_course,PDO::PARAM_INT);
    $query->bindParam(':name',$name,PDO::PARAM_STR, 100);
    $query->bindParam(':description',$description,PDO::PARAM_STR, 100);
    $query->bindParam(':date_start',$date_start,PDO::PARAM_STR, 100);
    $query->bindParam(':date_end',$date_end,PDO::PARAM_STR, 100);
    $query->bindParam(':active',$active,PDO::PARAM_INT);


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

    </body>

</html>


