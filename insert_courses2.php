<?php
    $bbdd = new PDO('mysql:host=localhost;dbname=PHPeros', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
?>

<html>
<link rel="stylesheet" href="styles.css">

    <body>
        <?php

            //Informacion enviada por el formulario
            $id_course=$_POST['id_course'];
            $name=$_POST['name'];
            $description=$_POST['description'];
            $date_start=$_POST['date_start'];
            $date_end=$_POST['date_end'];
            $active=$_POST['active'];
            $id_course = $id_course++;

            //Preparamos el INSERT
            $sql="insert into courses(Id_Course,Name,Description,Date_Start,Date_End,Active)
            values(:id_course,:name,:description,:date_start,:date_end,:active)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id_course',$id_course,PDO::PARAM_INT);
            $sql->bindParam(':name',$name,PDO::PARAM_STR, 100);
            $sql->bindParam(':description',$description,PDO::PARAM_STR, 100);
            $sql->bindParam(':date_start',$date_start,PDO::PARAM_STR, 100);
            $sql->bindParam(':date_end',$date_end,PDO::PARAM_STR, 100);
            $sql->bindParam(':active',$active,PDO::PARAM_INT);

            //Ejecutamos la consulta
            $sql->execute();

            //Comprobamos que ha ido bien
            $lastInsertId = $bbdd->lastInsertId();
            if($lastInsertId>0){
                echo "<div class='content alert alert-primary' > Gracias, tu curso es: $name </div>";
            }
            else{
                echo "<div class= 'content alert alert-primary' > No se pueden agregar datos, ya lo siento. </div>";
            }

        ?>
<br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>

    </body>


</html>
