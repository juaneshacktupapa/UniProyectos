<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Login pagina UniProyectos">
    <meta name="keywords" content="Login, UniProyectos">
    <link rel="stylesheet" href="css/form.css">
    <link rel="shortcut icon" href="imagenes/favicon.ico" type="image/x-icon">
    <title>UniProyectos</title>
    <script src="js/main.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Establecer el valor por defecto en "usuarios"
            document.getElementById('tipoRegistro').value = 'usuarios';
        
            // Llamar a la función mostrarCamposRegistro al cargar la página
            mostrarCamposRegistro();
        });
    </script>
</head>
<body>
    <?php
        include "registro_html.php";
        include "post.php";
    ?>
</body>
</html>