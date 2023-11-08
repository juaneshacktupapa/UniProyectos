<header>
    <h1>Regístrate</h1>
</header>
<main>
    <form action="" method="post">
        <!-- Aquí van todos los campos de la BD -->
        <label for="tipoRegistro">Selecciona el tipo de registro:</label>
        <select id="tipoRegistro" onchange="mostrarCamposRegistro()">
            <option value="usuarios">Usuarios</option>
            <option value="empresas">Empresas</option>
        </select>

        <div id="usuarios" style="display: block">
            <!-- Campos de registro para Usuarios -->
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            <br>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="Correo">
            <br>
            <label for="Contraseña">Contraseña</label>
            <input type="text" name="nombre" id="nombre" placeholder="Contraseña">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            <br>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="Correo">
            <br>
            <label for="Contraseña">Contraseña</label>
            <input type="text" name="nombre" id="nombre" placeholder="Contraseña">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            <br>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="Correo">
            <br>
            <label for="Contraseña">Contraseña</label>
            <input type="text" name="nombre" id="nombre" placeholder="Contraseña">
        </div>

        <div id="empresas" style="display: none">
            <!-- Campos de registro para Empresas -->
            <label for="nombre">Empresa</label>
            <input type="text" name="nombre" id="nombre" placeholder="Ingrese el nombre">
            <br>
            <label for="correo">Correo</label>
            <input type="email" name="correo" id="correo" placeholder="Correo">
            <br>
            <label for="Contraseña">Contraseña</label>
            <input type="text" name="nombre" id="nombre" placeholder="Contraseña">
            <br>
        </div>
        <div class="acciones">
            <button type="submit" name="registrar">Registrarse</button>
            <br>
            <p>¿Ya tienes una cuenta?</p>
            <a href="login.php">Iniciar sesión</a>
        </div>
    </form>
</main>