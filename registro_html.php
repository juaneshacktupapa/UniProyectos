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
            <input type="tel" name="numeroFijo" id="numeroFijo" placeholder="Número fijo" required>
        
            <label for="tipoDocumento">Tipo de documento:</label>
            <select name="tipoDocumento" id="tipoDocumento" required>
                <option value="" disabled selected>Selecciona un tipo de documento</option>
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
                <option value="" disabled selected>Selecciona un estado civil</option>    
                <option value="Soltero(a)">Soltero(a)</option>
                <option value="Casado(a)">Casado(a)</option>
                <option value="Divorciado(a)">Divorciado(a)</option>
                <option value="Viudo(a)">Viudo(a)</option>
                <option value="Unión Libre o Conviviente">Unión Libre o Conviviente</option>
            </select>
            
            <label for="sexo">Sexo (M/F):</label>
            <select name="sexo" id="sexo" required>
                <option value="" disabled selected>Selecciona un sexo</option>    
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
        
            <label for="perfil">Perfil:</label>
            <select name="perfil" id="perfil" placeholder="Ingrese su perfil" required>
                <option value="" disabled selected>Selecciona un perfil</option>
                <option value="Profesor">Profesor</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Público General">Público General</option>
            </select>
        
            <label for="universidad">Universidad:</label>
            <input type="text" name="universidad" id="universidad" placeholder="Universidad" required>
        
            <label for="correoInstitucional">Correo institucional:</label>
            <input type="email" name="correoInstitucional" id="correoInstitucional" placeholder="Correo institucional" required>
        
            <label for="grado">Grado académico:</label>
            <select name="grado" id="grado" placeholder="Ingrese su perfil" required>
                <option value="" disabled selected>Selecciona un grado</option>
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
            <label for="nombre">Nombre de la Empresa</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre de la Empresa" required>
            
            <label for="razonSocial">Razón Social</label>
            <input type="text" name="razonSocial" id="razonSocial" placeholder="Razón Social" required>
            
            <label for="correo">Correo Electrónico</label>
            <input type="email" name="correo" id="correo" placeholder="Correo Electrónico" required>

            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" required>

            <label for="numeroFijo">Número Fijo</label>
            <input type="tel" name="numeroFijo" id="numeroFijo" placeholder="Número Fijo" required>

            <label for="numeroCelular">Número de Celular</label>
            <input type="tel" name="numeroCelular" id="numeroCelular" placeholder="Número de Celular" required>

            <label for="NIT">NIT</label>
            <input type="text" name="NIT" id="NIT" placeholder="NIT" required>

            <label for="tipoEmpresa">Tipo de Empresa</label>
            <select name="tipoEmpresa" id="tipoEmpresa" required>
                <option value="" disabled selected>Selecciona un tipo de empresa</option>
                <option value="Empresas Individuales o de Propietario Único">Empresas Individuales o de Propietario Único</option>
                <option value="Sociedad de Responsabilidad Limitada (SRL)">Sociedad de Responsabilidad Limitada (SRL)</option>
                <option value="Corporaciones">Corporaciones</option>
                <option value="Empresas Familiares">Empresas Familiares</option>
                <option value="Empresas Multinacionales">Empresas Multinacionales</option>
                <option value="Empresas Pequeñas y Medianas (PYME)">Empresas Pequeñas y Medianas (PYME)</option>
                <option value="Empresas de Tecnología">Empresas de Tecnología</option>
                <option value="Empresas Manufactureras">Empresas Manufactureras</option>
                <option value="Empresas de Servicios">Empresas de Servicios</option>
                <option value="Empresas sin Fines de Lucro">Empresas sin Fines de Lucro</option>
                <option value="Empresas de Comercio Electrónico">Empresas de Comercio Electrónico</option>
                <option value="Empresas de Consultoría">Empresas de Consultoría</option>
                <option value="Empresas de Alimentación y Bebidas">Empresas de Alimentación y Bebidas</option>
                <option value="Empresas de Energía y Recursos Naturales">Empresas de Energía y Recursos Naturales</option>
                <option value="Empresas de Entretenimiento y Medios">Empresas de Entretenimiento y Medios</option>
            </select>

            <label for="descripcion">Descripción de la Empresa</label>
            <textarea name="descripcion" id="descripcion" placeholder="Descripción de la Empresa" required></textarea>

            <label for="area">Área de la Empresa</label>
            <select name="areaEmpresa" id="areaEmpresa" required>
                <option value="" disabled selected>Selecciona un area</option>
                <option value="Ventas">Ventas</option>
                <option value="Marketing">Marketing</option>
                <option value="Recursos Humanos">Recursos Humanos</option>
                <option value="Finanzas">Finanzas</option>
                <option value="Tecnología de la Información (TI)">Tecnología de la Información (TI)</option>
                <option value="Operaciones">Operaciones</option>
                <option value="Desarrollo de Software">Desarrollo de Software</option>
                <option value="Servicio al Cliente">Servicio al Cliente</option>
                <option value="Logística">Logística</option>
                <option value="Investigación y Desarrollo (I+D)">Investigación y Desarrollo (I+D)</option>
                <option value="Producción">Producción</option>
                <option value="Comunicaciones">Comunicaciones</option>
                <option value="Administración">Administración</option>
                <option value="Calidad">Calidad</option>
                <option value="Legal">Legal</option>
                <option value="Educación y Formación">Educación y Formación</option>
                <option value="Diseño">Diseño</option>
                <option value="Publicidad">Publicidad</option>
                <option value="Salud y Seguridad">Salud y Seguridad</option>
                <option value="Compras">Compras</option>
            </select>

            <label for="tamaño">Tamaño de la Empresa</label>
            <select name="tipoEmpresa" id="tipoEmpresa" required>
                <option value="" disabled selected>Selecciona un tamaño</option>    
                <option value="Microempresa">Microempresa</option>
                <option value="Pequeña Empresa">Pequeña Empresa</option>
                <option value="Mediana Empresa">Mediana Empresa</option>
                <option value="Gran Empresa">Gran Empresa</option>
            </select>

            <label for="sitioWeb">Sitio Web</label>
            <input type="url" name="sitioWeb" id="sitioWeb" placeholder="Sitio Web" required>

            <label for="pais">País</label>
            <select name="pais" id="pais" required> </select>

            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" id="direccion" placeholder="Dirección" required>

            <label for="nombreRepresentanteLegal">Nombre del Representante Legal</label>
            <input type="text" name="nombreRepresentanteLegal" id="nombreRepresentanteLegal" placeholder="Nombre del Representante Legal" required>

            <label for="cargoRepresentanteLegal">Cargo del Representante Legal</label>
            <input type="text" name="cargoRepresentanteLegal" id="cargoRepresentanteLegal" placeholder="Cargo del Representante Legal" required>

            <label for="correoRepresentanteLegal">Correo del Representante Legal</label>
            <input type="email" name="correoRepresentanteLegal" id="correoRepresentanteLegal" placeholder="Correo del Representante Legal" required>

            <label for="numeroRepresentanteLegal">Número del Representante Legal</label>
            <input type="tel" name="numeroRepresentanteLegal" id="numeroRepresentanteLegal" placeholder="Número del Representante Legal" required>

            <label for="aceptaTerminos">Acepta términos y condiciones:</label>
            <input type="checkbox" name="aceptaTerminos" id="aceptaTerminos" required>
        </div>
        <div class="acciones">
            <br>
            <button type="submit" name="registrar">Registrarse</button>
            <br>
            <p>¿Ya tienes una cuenta?</p>
            <a href="login.php">Iniciar sesión</a>
        </div>
    </form>
</main>