<html>
<head>
        <title>PHPeros update</title>
        <link href="public/css/app.css" rel="stylesheet">
        <link href="public/css/index.css" rel="stylesheet">
        <link href="public/css/select-class/selectClass.css" rel="stylesheet">
        <link href="public/css/register.css" rel="stylesheet">
        <link href="public/css/shared.css" rel="stylesheet">
    </head>
        <body>
        <?php require 'header.php'?>
        <div class="main-container">
        <div class="container">
        <section class="card">

         <h1>MODIFICAR CURSO</h1>
            <form action="modificar_courses2.php" method="post">
            <label>ID Curso</label><input type="text" name="id_course">
            <label>Nombre</label><input type="text" name="name">
            <label>Descripcion</label><input type="text" name="description">
            <label>Fecha Inicio</label><input type="date" name="date_start" value="2021-01-01" min="2021-01-01" max="2022-12-31">
            <label>Fecha Fin</label><input type="date" name="date_end" value="2021-01-01" min="2021-01-01" max="2022-12-31">
            <label>Activo</label><select name="active">
                            <option value=0>Deshabilitado</option>
                            <option value=1>Habilitado</option>
            <input type="submit" value="Actualizar curso">
            </form>
            <button class="back-button class-button"><a style="text-decoration:none"  href="/select_courses.php"> VOLVER </a></button>
        </body>
</html>
