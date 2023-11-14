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
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit hic ea dicta neque! Excepturi ex laborum fugiat perferendis, dolorum atque placeat? Dolor enim officia, quibusdam sapiente aliquid deserunt ut voluptates.</p>
    </section>
</main>
<footer>
    <section id="contactenos">
        <a href="#inicio">Inicio</a>
        <a href="mailto:juanechavesp@gmail.com">Correo</a>
    </section>
    <p>@Copyright 2023</p>
</footer>