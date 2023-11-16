<?php
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login pagina UniProyectos">
    <meta name="keywords" content="Login, UniProyectos">
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <title>UniProyectos</title>
</head>
<body>
    <?php
        require "login_html.php";
        include "post.php";
    ?>
</body>
</html>