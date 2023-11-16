<?php
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Index pagina UniProyectos">
    <meta name="keywords" content="Index, UniProyectos">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <title>UniProyectos</title>
</head>
<body>
    <?php
        include "consulta.php";
        require "proyectos_html.php";
    ?>
</body>
</html>