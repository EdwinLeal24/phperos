<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'PHPeros');
 
/* Attempt to connect to MySQL database */
//$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
//if($link === false){
//    die("ERROR: Could not connect. " . mysqli_connect_error());
//}

try
{
    $bbdd = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}

catch (PDOException $e)

{
    exit("Error: " . $e->getMessage());
}

?>

<html>
    <head>
        <title>PHPeros</title>
        <style>
            span {width:60px;display:inline-block;}
            span:nth-child(2) {width:250px;}
        </style>
    </head>
    <body>
        <h1>PHPeros</h1>
        <p>SELECT * FROM courses</p>
        <?php
            //Consultas en base de datos
            $sql = "SELECT * FROM courses";

            //Preparacion de consulta
            $query = $bbdd -> prepare($sql);

            //Ejecucion de consulta
            $query -> execute();

            //Asignacion de resultados y devolucion de filas
            $results = $query -> fetchAll(PDO::FETCH_OBJ);

            //Si hay resultados, foreach
            if (count($results) > 0) {
                foreach($results as $result) {
                    echo "<div>
                    <span>".$result -> id_course."</span>
                    <span>".$result -> name."</span>
                    <span>".$result -> description."</span>
                    <span>".$result -> date_start."</span>      
                    <span>".$result -> date_end."</span>
                    <span>".$result -> active."</span>
                    <span><a href_\"modificar.php?id=".$result -> id_course."\">Modificar</a></span>
                    <span><a href_\"borrar.php?id=".$result -> id_course."\">Borrar</a></span>
                    </div>";
                }
            }
            else
            {
                echo 'No hay resultados';
            }
        ?>
        <p>
            <a href="insert.php">Añadir un curso</a>
        </p>
    

    </body>


</html>
