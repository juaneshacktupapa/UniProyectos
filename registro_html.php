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
            <label for="nombres">Nombres:</label>
            <input type="text" name="nombres" id="nombres" placeholder="Nombres" required>
            
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
        
            <label for="correoPersonal">Correo electrónico personal:</label>
            <input type="email" name="correoPersonal" id="correoPersonal" placeholder="Correo electrónico personal" required>
        
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>
        
            <label for="numeroCelular">Número de celular:</label>
            <input type="tel" name="numeroCelular" id="numeroCelular" placeholder="Número de celular" required>
        
            <label for="numeroFijo">Número fijo:</label>
            <input type="tel" name="numeroFijo" id="numeroFijo" placeholder="Número fijo">
        
            <label for="tipoDocumento">Tipo de documento:</label>
            <select name="tipoDocumento" id="tipoDocumento" required>
                <option value="Cédula de Ciudadanía">Cédula de Ciudadanía</option>
                <option value="Tarjeta de Identidad">Tarjeta de Identidad</option>
                <option value="Cédula de Extranjería">Cédula de Extranjería</option>
                <option value="Pasaporte">Pasaporte</option>
                <option value="Registro Civil de Nacimiento">Registro Civil de Nacimiento</option>
            </select>

            <label for="numeroDocumento">Número de documento:</label>
            <input type="number" name="numeroDocumento" id="numeroDocumento" placeholder="Número de documento" required>
        
            <label for="fechaNacimiento">Fecha de nacimiento:</label>
            <input type="date" name="fechaNacimiento" id="fechaNacimiento" required>
        
            <label for="paisNacimiento">País de nacimiento:</label>
            <select name="paisNacimiento" id="paisNacimiento" required> </select>

            <label for="ciudadNacimiento">Ciudad de nacimiento:</label>
            <input type="text" name="ciudadNacimiento" id="ciudadNacimiento" placeholder="Ciudad de nacimiento" required>
        
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
        
            <label for="estadoCivil">Estado civil:</label>
            <select name="estadoCivil" id="estadoCivil" required>
                <option value="Soltero(a)">Soltero(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viudo(a)">Viudo(a)</option>
                <option value="Unión Libre o Conviviente">Unión Libre o Conviviente</option>
            </select>
            
            <label for="sexo">Sexo (M/F):</label>
            <select name="sexo" id="sexo" required>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil" placeholder="Ingrese su perfil">
                <option value="Profesor">Profesor</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Público General">Público General</option>
            </select>
        
            <label for="universidad">Universidad:</label>
            <input type="text" name="universidad" id="universidad" placeholder="Universidad" required>
        
            <label for="correoInstitucional">Correo institucional:</label>
            <input type="email" name="correoInstitucional" id="correoInstitucional" placeholder="Correo institucional" required>
        
            <label for="grado">Grado académico:</label>
            <select name="grado" id="grado" placeholder="Ingrese su perfil">
                <option value="preescolar">Preescolar</option>
                <option value="primaria">Educación Primaria</option>
                <option value="secundaria">Educación Secundaria</option>
                <option value="tecnico">Educación Técnica</option>
                <option value="tecnologico">Educación Tecnológica</option>
                <option value="profesional">Educación Profesional</option>
                <option value="especializacion">Especialización</option>
                <option value="maestria">Maestría</option>
                <option value="doctorado">Doctorado</option>
            </select>
        
            <label for="aceptaTerminos">Acepta términos y condiciones:</label>
            <input type="checkbox" name="aceptaTerminos" id="aceptaTerminos" required>
    
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