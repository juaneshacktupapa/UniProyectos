<?php
    error_reporting(E_ALL);

    include "conexionDB.php";

    $empresaLog = 1;
    $usuarioLog = 1;

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST["registrar"])){

            $tipoRegistro = $_POST["tipoRegistro"];
            
            // Accede a los campos específicos según el tipo de registro
            
            if ($tipoRegistro === "usuarios") {

                // Procesa campos específicos para usuarios
                
                $nombres = $_POST["nombres"];
                $apellidos = $_POST["apellidos"];
                $correoPersonal = $_POST["correoPersonal"];
                $contrasena = $_POST["contrasena"];
                $numeroCelular = $_POST["numeroCelular"];
                $numeroFijo = $_POST["numeroFijo"];
                $tipoDocumento = $_POST["tipoDocumento"];
                $numeroDocumento = $_POST["numeroDocumento"];
                $fechaNacimiento = $_POST["fechaNacimiento"];
                $paisNacimiento = $_POST["paisNacimiento"];
                $ciudadNacimiento = $_POST["ciudadNacimiento"];
                $direccion = $_POST["direccion"];
                $estadoCivil = $_POST["estadoCivil"];
                $sexo = $_POST["sexo"];
                $perfil = $_POST["perfil"];
                $universidad = $_POST["universidad"];
                $correoInstitucional = $_POST["correoInstitucional"];
                $grado = $_POST["grado"];
                $aceptaTerminos = isset($_POST["aceptaTerminos"]) ? 1 : 0; // Si se marcó el checkbox, se almacena "Sí", de lo contrario, "No"
                $fechaHoraRegistro = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actuales del servidor
                
                $sexoBooleano = ($sexo === "M") ? 1 : 0;
                
                $consulta = "SELECT * FROM usuarios WHERE correoPersonal = '$correoPersonal'";
                $resultUsuarios = consulta($consulta);
                
                
                $consulta = "SELECT * FROM empresas WHERE correo = '$correoPersonal'";
                $resultEmpresas = consulta($consulta);
                
                if (mysqli_num_rows($resultUsuarios) > 0 || mysqli_num_rows($resultEmpresas) > 0) {
                    mensaje("Ups!, correo y/o contraseña incorrectos, por favor valida tus credenciales :)");
                }else{
                    $consulta = "INSERT INTO usuarios (nombres, apellidos, correoPersonal, contrasena, numeroCelular, numeroFijo, tipoDocumento, numeroDocumento, fechaNacimiento, paisNacimiento, ciudadNacimiento, direccion, estadoCivil, sexo, perfil, universidad, correoInstitucional, grado, aceptaTerminos, fechaHoraRegistro) VALUES ('$nombres', '$apellidos', '$correoPersonal', '$contrasena', $numeroCelular, $numeroFijo, '$tipoDocumento', $numeroDocumento, '$fechaNacimiento', '$paisNacimiento', '$ciudadNacimiento', '$direccion', '$estadoCivil', '$sexoBooleano', '$perfil', '$universidad', '$correoInstitucional', '$grado', $aceptaTerminos, '$fechaHoraRegistro')";
                    
                    $result = consulta($consulta);
                    
                    if ($result){
                        mensaje("Datos almacenados correctamente");
                        echo "<script>window.location.href='login.php?mensaje=Bienvenido';</script>";
                        exit();
                    }
                    if (!$result) {
                        echo "Error en la consulta: " . mysqli_error($conexion);
                    }
                }
                    
            } elseif ($tipoRegistro === "empresas") {
                
                // Procesa campos específicos para empresas

                $nombre = $_POST["nombre"];
                $razonSocial = $_POST["razonSocial"];
                $correo = $_POST["correo"];
                $contrasena = $_POST["contrasenaE"];
                $numeroFijo = $_POST["numeroFijoE"];
                $numeroCelular = $_POST["numeroCelularE"];
                $NIT = $_POST["NIT"];
                $tipoEmpresa = $_POST["tipoEmpresa"];
                $descripcion = $_POST["descripcion"];
                $area = $_POST["area"];
                $tamaño = $_POST["tamaño"];
                $sitioWeb = $_POST["sitioWeb"];
                $pais = $_POST["pais"];
                $direccion = $_POST["direccionE"];
                $nombreRepresentanteLegal = $_POST["nombreRepresentanteLegal"];
                $cargoRepresentanteLegal = $_POST["cargoRepresentanteLegal"];
                $correoRepresentanteLegal = $_POST["correoRepresentanteLegal"];
                $numeroRepresentanteLegal = $_POST["numeroRepresentanteLegal"];
                $aceptaTerminos = isset($_POST["aceptaTerminosE"]) ? 1 : 0; // Si se marcó el checkbox, se almacena "Sí", de lo contrario, "No"
                $fechaHoraRegistro = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actuales del servidor

                $consulta = "SELECT * FROM usuarios WHERE correoPersonal = '$correo'";
                $resultUsuarios = consulta($consulta);
                
                $consulta = "SELECT * FROM empresas WHERE correo = '$correo'";
                $resultEmpresas = consulta($consulta);
                
                if (mysqli_num_rows($resultUsuarios) > 0 || mysqli_num_rows($resultEmpresas) > 0) {
                    mensaje("Ups!, correo y/o contraseña incorrectos, por favor valida tus credenciales :)");
                }else{
                    $consulta = "INSERT INTO empresas (nombre, razonSocial, correo, contrasena, numeroFijo, numeroCelular, NIT, tipoEmpresa, descripcion, area, tamaño, sitioWeb, pais, direccion, nombreRepresentanteLegal, cargoRepresentanteLegal, correoRepresentanteLegal, numeroRepresentanteLegal, aceptaTerminos, fechaHoraRegistro) VALUES ('$nombre', '$razonSocial', '$correo', '$contrasena', $numeroFijo, $numeroCelular, $NIT, '$tipoEmpresa', '$descripcion', '$area', '$tamaño', '$sitioWeb', '$pais', '$direccion', '$nombreRepresentanteLegal', '$cargoRepresentanteLegal', '$correoRepresentanteLegal', $numeroRepresentanteLegal, $aceptaTerminos, '$fechaHoraRegistro')";  

                    $result = consulta($consulta);
                    
                    if ($result){
                        mensaje("Datos almacenados correctamente");
                        echo "<script>window.location.href='login.php?mensaje=Bienvenido';</script>";
                        exit();
                    }

                    if (!$result) {
                        echo "Error en la consulta: " . mysqli_error($conexion);
                    }
                }    
            }
        }

        if(isset($_POST["publicar"])){
            $titulo = $_POST["titulo"];
            $descripcion = $_POST["descripcion"];
            $area = $_POST["area"];
            $areaTematica = $_POST["areaTematica"];
            $estado = $_POST["estado"];
            $ubicacion = $_POST["ubicacion"];
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $fechaInicio = $_POST["fechaInicio"];
            $fechaFin = $_POST["fechaFin"];
            $fechaHoraRegistro = date("Y-m-d H:i:s"); // Obtiene la fecha y hora actuales del servidor
            $informacionAdicional = $_POST["informacionAdicional"];
            $imagenProyectoNombre = $titulo . basename($_FILES["imagenProyecto"]["name"]);
            $temporal = $_FILES["imagenProyecto"]["tmp_name"];
            
            $imagen = guardarImagenes($imagenProyectoNombre, $temporal);

            $consulta = "INSERT INTO proyecto (titulo, descripcion, area, areaTematica, estado, ubicacion, correo, telefono, fechaInicio, fechaFin, fechaRegistro, informacionAdicional, imagen) VALUES ('$titulo', '$descripcion', '$area', '$areaTematica', '$estado', '$ubicacion', '$correo', '$telefono', '$fechaInicio', '$fechaFin', '$fechaHoraRegistro', '$informacionAdicional', '$imagen')";
    
            $result = consulta($consulta);
            
            if ($result){
                $consulta = "SELECT MAX(id) AS id_Proyecto FROM proyecto;";
                $result = consulta($consulta);
                
                if($result){
                    $row = mysqli_fetch_assoc($result);
                    $id_Proyecto = $row['id_Proyecto'];
                    $consulta = "INSERT INTO pro_usu (id_Proyecto, id_Usuario, id_Empresas) VALUES ($id_Proyecto, $usuarioLog, $empresaLog);";
                    $result = consulta($consulta);
                    
                    if($result){
                        mensaje("Datos almacenados correctamente");
                        echo "<script>window.location.href='proyectos.php?mensaje=Bienvenido';</script>";
                        exit();
                    }
                }
            }

            if (!$result) {
                echo "Error en la consulta: " . mysqli_error($conexion);
            }  
        }
        
        if(isset($_POST["ingresar"])){
            
            $correo = $_POST["correo"];
            $contrasena = $_POST["contrasena"];
            
            if(empty($correo) || empty($contrasena)){
                mensaje("Ups!, por favor llena todos los campos de ingreso");
            }else{
                $correo = $_POST["correo"];
                $contrasena =trim($_POST["contrasena"]);
                ingreso($correo, $contrasena);
            }
        }
    }

    function ingreso($correo, $contrasena){
        
        $consulta = "SELECT * FROM usuarios WHERE correoPersonal = '$correo'";
        
        $result = consulta($consulta);
           
        if(mysqli_num_rows($result) > 0){
            
            $consulta = "SELECT * FROM usuarios WHERE correoPersonal = '$correo' AND contrasena = '$contrasena'";
        
            $result = consulta($consulta);
            
            if(mysqli_num_rows($result) > 0){
                mensaje("¡Bienvenido a UniProyectos!");

                $consulta = "SELECT id FROM usuarios WHERE correoPersonal = '$correo'";
                $usuarioLog = consulta($consulta);
                
                echo "<script>window.location.href='publicacion.php?mensaje=Bienvenido';</script>";
                exit();
            }else{
                mensaje("Ups!, correo y/o contraseña incorrectos por favor valida tus credenciales :)");
            }
        }else{
            $consulta = "SELECT * FROM empresas WHERE correo = '$correo'";
        
            $result = consulta($consulta);
            
            if(mysqli_num_rows($result) > 0){

                $consulta = "SELECT * FROM empresas WHERE correo = '$correo' AND contrasena = '$contrasena'";
                $result = consulta($consulta);

                if(mysqli_num_rows($result) > 0){
                    mensaje("¡Bienvenido a UniProyectos!");
                    
                    $consulta = "SELECT id FROM empresas WHERE correo = '$correo'";
                    $empresaLog = consulta($consulta);
                    
                    echo "<script>window.location.href='proyectos.php?mensaje=Bienvenido';</script>";
                    exit();
                }else{
                    mensaje("Ups!, correo y/o contraseña incorrectos, por favor valida tus credenciales :)");
                }
            }else{
                mensaje("Ups!, al parecer aun no te has registrado, por favor registrate :)");
                echo "<script>window.location.href='registro.php?mensaje=Registrate';</script>";
            }
        }
    }

    function mensaje($mensaje){
        echo "
            <div id='mensaje' class='mensaje' style='display: flex; text-align: center; align-items: center; justify-content: center;'>
                <p>$mensaje</p>
            </div>";
        echo "
            <script>
                const mensaje = document.getElementById('mensaje');
                mensaje.style.display = 'block';
                setTimeout(() => {
                    mensaje.style.display = 'none';
                }, 5000);
            </script>
            ";
    }
    
    function guardarImagenes($imagenProyectoNombre, $temporal){
        $directorio = "uploads/";
        $destino = $directorio . $imagenProyectoNombre;
        $check = getimagesize($temporal);
        
        if ($check !== false) {
            if(file_exists($destino)){
                mensaje("Ups!, la imagen ya existe, por favor valida el nombre de la imagen :)");
            }
            else{
                if (move_uploaded_file($temporal, $destino)){
                    return $destino;
                }else{
                    mensaje("Ups!, la imagen no pudo ser cargado, por favor carga de nuevo la imagen :)");
                }
            }
        } else {
            mensaje("Ups!, el archivo no es una imagen, por favor valida el formato :)");
        } 
    }  
?>