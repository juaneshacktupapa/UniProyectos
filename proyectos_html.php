<header id="hproyectos">
    <div>
        <h1>Proyectos</h1>
    </div>
    <nav class="menuvp">
        <ul>
            <li><a href="#hproyectos">Proyectos</a></li>
            <li><a href="publicacion.php">Publicar</a></li>
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
</main>