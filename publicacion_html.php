<header id="hnproyecto">
    <h1>Nuevo Proyecto</h1>
</header>
<main>
    <form action="" method="post" id="form_publicar">
        <!-- Aquí van todos los campos de la BD -->
        <label for="isbn">ISBN</label>
        <input type="number" name="isbn" id="isbn" placeholder="Ingrese el isbn">
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
        <label for="idcategoria">Categoria</label>
        <select name="idcategoria" id="idcategoria">
            <?php echo $options; ?>
        </select>
        <br>
        <label for="isbn">ISBN</label>
        <input type="number" name="isbn" id="isbn" placeholder="Ingrese el isbn">
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
        <label for="idcategoria">Categoria</label>
        <select name="idcategoria" id="idcategoria">
            <?php echo $options; ?>
        </select>
        <br>
        <label for="isbn">ISBN</label>
        <input type="number" name="isbn" id="isbn" placeholder="Ingrese el isbn">
        <br>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
        <label for="idcategoria">Categoria</label>
        <select name="idcategoria" id="idcategoria">
            <?php echo $options; ?>
        </select>
        <br>
        <div class="acciones">
            <button type="submit" name="publicar">Publicar</button>
        </div>
    </form>
</main>