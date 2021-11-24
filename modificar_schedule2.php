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
    $id_schedule=$_POST['id_schedule'];
    $id_class=$_POST['id_class'];
    $time_start=$_POST['time_start'];
    $time_end=$_POST['time_end'];
    $day=$_POST['day'];

    //Preparamos el UPDATE
    $sql="UPDATE schedule SET id_class = :id_class, time_start = :time_start, time_end = :time_end, day = :day WHERE schedule.id_schedule = :id_schedule";

    //Preparamos la consulta
    $query = $bbdd->prepare($sql);

    //Vinculamos los parametros al nombre de variable especificado
    $query->bindParam(':id_schedule',$id_schedule,PDO::PARAM_INT);
    $query->bindParam(':id_class',$id_class,PDO::PARAM_INT);
    $query->bindParam(':time_start',$time_start,PDO::PARAM_STR, 100);
    $query->bindParam(':time_end',$time_end,PDO::PARAM_STR, 100);
    $query->bindParam(':day',$day,PDO::PARAM_STR, 100);


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


