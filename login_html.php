<header>
    <a href="index.php" id="linkIndex">Inicio</a>
    <h1>Iniciar sesión</h1>
</header>
<main>
    <br>
    <div id="login">
        <form action="login.php" method="post" id="form_login">
            <label for="correo">Correo electrónico</label>
            <input type="email" name="correo" id="correo" placeholder="Correo electrónico">
            <br>
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
            <br>
            <div class="acciones">
                <button type="submit" name="ingresar">Ingresar</button>
                <br>
                <p>¿Aún no te has registrado?</p>
                <a href="registro.php">Regístrate</a>
            </div>
        </form>
    </div>
</main>