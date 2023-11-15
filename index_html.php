<header id="inicio">
    <div>
        <h1>UniProyectos</h1>
    </div>
    <nav class="menu">
        <ul>
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#publicaciones">Publicaciones</a></li>
            <li><a href="#nosotros">Acerca de nosotros</a></li>
            <li><a href="#contactenos">Contactenos</a></li>
            <li class="inicio"><a href="login.php">Ingresar</a></li>
        </ul>
    </nav>
</header>
<main>
    <section class="container" id="publicaciones">
        <div>
            <?php
                include "conexionDB.php";
                $consulta = "SELECT * FROM proyecto WHERE MOD(id, 2) = 1";
                $result = consulta($consulta);
                if($result){
                    $contar = mysqli_num_rows($result);
                    if($contar > 0){
                        while($row = $result->fetch_assoc()){
                            echo '<article>';
                            echo '<h2>' . $row['titulo'] . '</h2>';
                            echo '<p>' . $row['descripcion'] . '</p>';
                            echo '<p>' . $row['informacionAdicional'] . '</p>';
                            echo '</article>';
                        }
                    }else{
                        echo '<article>';
                        echo '<h2>Sin proyectos</h2>';
                        echo '<p>No hay mas proyectos registrados</p>';
                        echo '<p>Por favor ingresa mas proyectos</p>';
                        echo '</article>';
                    }
                }
            ?>
        </div>
        <div>
            <?php
                $consulta = "SELECT * FROM proyecto WHERE MOD(id, 2) = 0";
                $result = consulta($consulta);
                if($result){
                    $contar = mysqli_num_rows($result);
                    if($contar > 0){
                        while($row = $result->fetch_assoc()){
                            echo '<article>';
                            echo '<h2>' . $row['titulo'] . '</h2>';
                            echo '<p>' . $row['descripcion'] . '</p>';
                            echo '<p>' . $row['informacionAdicional'] . '</p>';
                            echo '</article>';
                        }
                    }else{
                        echo '<article>';
                        echo '<h2>Sin proyectos</h2>';
                        echo '<p>No hay mas proyectos registrados</p>';
                        echo '<p>Por favor ingresa mas proyectos</p>';
                        echo '</article>';
                    }
                }
            ?>
        </div>
    </section>
    <section id="nosotros">
        <p>El proyecto PIA, bajo el nombre de Uniproyectos, nace de la urgente necesidad de contar con un sistema especializado capaz de conservar, destacar y promover los proyectos realizados por los estudiantes. En el contexto educativo, es imperativo trascender la noción de que los proyectos desarrollados sean meros entregables destinados al olvido. Uniproyectos no solo aborda esta carencia, sino que también se presenta como una solución única diseñada para asegurar que los proyectos educativos no solo perduren con el tiempo., sino que también impulsen continuamente el aprendizaje y desarrollo académico.</p>
        <br>
        <p>El objetivo principal de Uniproyectos, es promover y conservar los diferentes proyectos estudiantiles para que obtengan reconocimiento y sean presentados al público en general:</p>
        <ul>
            <li>Realizar un análisis detallado para identificar las necesidades y limitaciones en la gestión de proyectos de Uninpahu.</li>
            <li>Implementar una plataforma para mejorar la gestión de proyectos, destacando su conservación y promoviendo su reconocimiento al público.</li>
            <li>Realizar un seguimiento a cada fase del proyecto, comprobando la funcionalidad de cada módulo y realizando pruebas de desarrollo para garantizar su optimo rendimiento y su conformidad a los requerimientos; así mismo que la herramienta pueda acoplarse a diversas situaciones.</li>
        </ul>
    </section>
</main>
<footer>
    <section id="contactenos">
        <a href="#inicio">Inicio</a>
        <a href="mailto:juanechavesp@gmail.com">Correo</a>
    </section>
    <p>@Copyright 2023</p>
</footer>