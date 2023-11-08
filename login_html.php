<header>
    <h1>Iniciar sesión</h1>
</header>
<main>
    <br>
    <div id="login">
        <form action="login.php" method="post" id="form_login">
            <label for="correo">Correo electrónico</label>
            <input type="email" name="correo" id="correo" placeholder="Correo electrónico">
            <br>
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña" placeholder="Contraseña">
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