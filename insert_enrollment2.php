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
            $id_enrollment=$_POST['id_enrollment'];
            $id_student=$_POST['id_student'];
            $id_course=$_POST['id_course'];
            $status=$_POST['status'];

            //Preparamos el INSERT
            $sql="insert into enrollment(Id_Enrollment,Id_Student,Id_Course,Status)
            values(:id_enrollment,:id_student,:id_course,:status)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id_enrollment',$id_enrollment,PDO::PARAM_INT);
            $sql->bindParam(':id_student',$id_student,PDO::PARAM_INT);
            $sql->bindParam(':id_course',$id_course,PDO::PARAM_INT);
            $sql->bindParam(':status',$status,PDO::PARAM_INT);

            //Ejecutamos la consulta
            $sql->execute();

            //Comprobamos que ha ido bien
            $lastInsertId = $bbdd->lastInsertId();
            if($lastInsertId>0){
                echo "<div class='content alert alert-primary' > Gracias, el estado del enrollment es $status </div>";
            }
            else{
                echo "<div class= 'content alert alert-primary' > No se pueden agregar datos, ya lo siento. </div>";
            }

        ?>

    </body>


</html>
