<header id="hnproyecto">
    <h1>Nuevo Proyecto</h1>
</header>
<main>
    <form action="" method="post" id="form_publicar">
        <!-- Aquí van todos los campos de la BD -->
        <label for="titulo">Título del Proyecto</label>
        <input type="text" name="titulo" id="titulo" placeholder="Título del Proyecto" required>

        <label for="descripcion">Descripción del Proyecto</label>
        <textarea name="descripcion" id="descripcion" placeholder="Descripción del Proyecto" required></textarea>

        <label for="area">Área del Proyecto</label>
        <select name="area" id="area" required>
            <option value="" disabled selected>Selecciona un area</option>            
            <option value="tecnologia">Tecnología</option>
            <option value="medioAmbiente">Medio Ambiente</option>
            <option value="salud">Salud</option>
            <option value="educacion">Educación</option>
            <option value="arteCultura">Arte y Cultura</option>
            <option value="ciencias">Ciencias</option>
            <option value="deportes">Deportes</option>
            <option value="negocios">Negocios</option>
            <option value="social">Social</option>
            <option value="ingenieria">Ingeniería</option>
            <option value="investigacion">Investigación</option>
            <option value="tecnologiaInformacion">Tecnología de la Información</option>
            <option value="sostenibilidad">Sostenibilidad</option>
            <option value="innovacion">Innovación</option>
            <option value="entretenimiento">Entretenimiento</option>
            <option value="diseño">Diseño</option>
            <option value="finanzas">Finanzas</option>
            <option value="energia">Energía</option>
            <option value="arquitectura">Arquitectura</option>
            <option value="gastronomia">Gastronomía</option>
            <option value="derecho">Derecho</option>
            <option value="marketing">Marketing</option>
            <option value="agricultura">Agricultura</option>
            <option value="musica">Música</option>
            <option value="psicologia">Psicología</option>
            <option value="turismo">Turismo</option>
            <option value="recursosHumanos">Recursos Humanos</option>
            <option value="comunicacion">Comunicación</option>
            <option value="desarrolloSostenible">Desarrollo Sostenible</option>
            <option value="robotica">Robótica</option>
            <option value="inteligenciaArtificial">Inteligencia Artificial</option>
            <option value="realidadVirtual">Realidad Virtual</option>
            <option value="ciberseguridad">Ciberseguridad</option>
            <option value="cienciaDatos">Ciencia de Datos</option>
            <option value="biomedicina">Biomedicina</option>
            <option value="espacioAstronomia">Espacio y Astronomía</option>
            <option value="disenoGrafico">Diseño Gráfico</option>
            <option value="nanotecnologia">Nanotecnología</option>
            <option value="educacionFinanciera">Educación Financiera</option>
            <option value="filantropia">Filantropía</option>
        </select>

        <label for="areaTematica">Área Temática del Proyecto</label>
        <input type="text" name="areaTematica" id="areaTematica" placeholder="Área Temática del Proyecto" required>

        <label for="estado">Estado del Proyecto</label>
        <select name="estado" id="estado" required>
            <option value="" disabled selected>Selecciona un estado</option>            
            <option value="planeacion">Planeación</option>
            <option value="en_proceso">En Proceso</option>
            <option value="completado">Completado</option>
            <option value="en_revision">En Revisión</option>
            <option value="pendiente">Pendiente</option>
            <option value="aprobado">Aprobado</option>
            <option value="rechazado">Rechazado</option>
            <option value="otro">Otro</option>
        </select>

        <label for="ubicacion">Ubicación del Proyecto</label>
        <input type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación del Proyecto" required>

        <label for="correo">Correo de Contacto</label>
        <input type="email" name="correo" id="correo" placeholder="Correo de Contacto" required>

        <label for="telefono">Teléfono de Contacto</label>
        <input type="number" name="telefono" id="telefono" placeholder="Teléfono de Contacto" required>

        <label for="fechaInicio">Fecha de Inicio</label>
        <input type="date" name="fechaInicio" id="fechaInicio" required>

        <label for="fechaFin">Fecha de Fin</label>
        <input type="date" name="fechaFin" id="fechaFin" required>

        <label for="informacionAdicional">Información Adicional</label>
        <textarea name="informacionAdicional" id="informacionAdicional" placeholder="Información Adicional" required></textarea>

        <div class="acciones">
            <button type="submit" name="publicar">Publicar</button>
        </div>
    </form>
</main>