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
    $id_enrollment=$_POST['id_enrollment'];
    $id_student=$_POST['id_student'];
    $id_course=$_POST['id_course'];
    $status=$_POST['status'];

    //Preparamos el UPDATE
    $sql="UPDATE enrollment SET id_student = :id_student, id_course = :id_course, status = :status WHERE enrollment.id_enrollment = :id_enrollment";

    //Preparamos la consulta
    $query = $bbdd->prepare($sql);

    //Vinculamos los parametros al nombre de variable especificado
    $query->bindParam(':id_enrollment',$id_enrollment,PDO::PARAM_INT);
    $query->bindParam(':id_student',$id_student,PDO::PARAM_INT);
    $query->bindParam(':id_course',$id_course,PDO::PARAM_INT);
    $query->bindParam(':status',$status,PDO::PARAM_INT);


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


