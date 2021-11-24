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
    $id_class=$_POST['id_class'];
    $id_teacher=$_POST['id_teacher'];
    $id_course=$_POST['id_course'];
    $id_schedule=$_POST['id_schedule'];
    $name=$_POST['name'];
    $color=$_POST['color'];

    //Preparamos el UPDATE
    $sql="UPDATE class SET name = :name, id_teacher = :id_teacher, id_course = :id_course, id_schedule = :id_schedule, color = :color WHERE class.id_class = :id_class";

    //Preparamos la consulta
    $query = $bbdd->prepare($sql);

    //Vinculamos los parametros al nombre de variable especificado
    $query->bindParam(':id_class',$id_class,PDO::PARAM_INT);
    $query->bindParam(':id_teacher',$id_teacher,PDO::PARAM_INT);
    $query->bindParam(':id_course',$id_course,PDO::PARAM_INT);
    $query->bindParam(':id_schedule',$id_schedule,PDO::PARAM_INT);
    $query->bindParam(':name',$name,PDO::PARAM_STR, 100);
    $query->bindParam(':color',$color,PDO::PARAM_STR, 100);


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


