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
        require "index_html.php";
    ?>
    <script type="text/javascript">
      (function(d, t) {
          var v = d.createElement(t), s = d.getElementsByTagName(t)[0];
          v.onload = function() {
            window.voiceflow.chat.load({
              verify: { projectID: '660753d91db525bfcb194883' },
              url: 'https://general-runtime.voiceflow.com',
              versionID: 'production'
            });
          }
          v.src = "https://cdn.voiceflow.com/widget/bundle.mjs"; v.type = "text/javascript"; s.parentNode.insertBefore(v, s);
      })(document, 'script');
    </script>
</body>
</html>