<?php
    $bbdd = new PDO('mysql:host=localhost;dbname=PHPeros', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
?>

<html>
<link rel="stylesheet" href="styles.css">

    <body>
        <?php

            //INformacion enviada por el formulario
            $id_teacher=$_POST['id_teacher'];
            $name=$_POST['name'];
            $surname=$_POST['surname'];
            $telephone=$_POST['telephone'];
            $nif=$_POST['nif'];
            $email=$_POST['email'];
            $id_teacher=$id_teacher++;

            //Preparamos el INSERT
            $sql="insert into teachers(Id_Teacher,Name,Surname,Telephone,Nif,Email)
            values(:id_teacher,:name,:surname,:telephone,:nif,:email)";

            //Preparamos la consulta
            $sql = $bbdd->prepare($sql);


            //Vinculamos los parámetros al nombre de variable especificado
            $sql->bindParam(':id_teacher',$id_teacher,PDO::PARAM_INT);
            $sql->bindParam(':name',$name,PDO::PARAM_STR,100);
            $sql->bindParam(':surname',$surname,PDO::PARAM_STR, 100);
            $sql->bindParam(':telephone',$telephone,PDO::PARAM_INT);
            $sql->bindParam(':nif',$nif,PDO::PARAM_STR, 100);
            $sql->bindParam(':email',$nif,PDO::PARAM_STR, 100);

            //Ejecutamos la consulta
            $sql->execute();

            //Comprobamos que ha ido bien
            $lastInsertId = $bbdd->lastInsertId();
            if($lastInsertId>0){
                echo "<div class='content alert alert-primary' > Gracias, señor/a $name $surname </div>";
            }
            else{
                echo "<div class= 'content alert alert-primary' > No se pueden agregar datos, ya lo siento. </div>";
            }

        ?>
<br>
        <span class="button"><b><a style="text-decoration:none"  href="index"> VOLVER </a></b></span><br><br>

    </body>


</html>
