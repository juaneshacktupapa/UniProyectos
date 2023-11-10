<?php
    error_reporting(E_ALL);

    include "conexionDB.php";

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

                $consulta = "INSERT INTO usuarios (nombres, apellidos, correoPersonal, contrasena, numeroCelular, numeroFijo, tipoDocumento, numeroDocumento, fechaNacimiento, paisNacimiento, ciudadNacimiento, direccion, estadoCivil, sexo, perfil, universidad, correoInstitucional, grado, aceptaTerminos, fechaHoraRegistro) VALUES ('$nombres', '$apellidos', '$correoPersonal', '$contrasena', $numeroCelular, $numeroFijo, '$tipoDocumento', $numeroDocumento, '$fechaNacimiento', '$paisNacimiento', '$ciudadNacimiento', '$direccion', '$estadoCivil', '$sexoBooleano', '$perfil', '$universidad', '$correoInstitucional', '$grado', $aceptaTerminos, '$fechaHoraRegistro')";
                    
                $result = consulta($consulta);
                
                if ($result){
                    echo "Datos almacenados correctamente";
                }
                if (!$result) {
                    echo "Error en la consulta: " . mysqli_error($conexion);
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
                
                $consulta = "INSERT INTO empresas (nombre, razonSocial, correo, contrasena, numeroFijo, numeroCelular, NIT, tipoEmpresa, descripcion, area, tamaño, sitioWeb, pais, direccion, nombreRepresentanteLegal, cargoRepresentanteLegal, correoRepresentanteLegal, numeroRepresentanteLegal, aceptaTerminos, fechaHoraRegistro) VALUES ('$nombre', '$razonSocial', '$correo', '$contrasena', $numeroFijo, $numeroCelular, $NIT, '$tipoEmpresa', '$descripcion', '$area', '$tamaño', '$sitioWeb', '$pais', '$direccion', '$nombreRepresentanteLegal', '$cargoRepresentanteLegal', '$correoRepresentanteLegal', $numeroRepresentanteLegal, $aceptaTerminos, '$fechaHoraRegistro')";  

                $result = consulta($consulta);
                
                if ($result){
                    echo "Datos almacenados correctamente";
                }

                if (!$result) {
                    echo "Error en la consulta: " . mysqli_error($conexion);
                }    
            }
        }

        // if(isset($_POST["publicar"])){

        // }

        // if(isset($_POST["ingresar"])){
            
        //     if(empty($_POST["correo"]) || empty($_POST["contrasena"])){

        //         echo "<div id='msg' class='msg' style='color: #7f0001; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold; font-style: oblique;'>Por favor, llene todos los campos de ingreso para continuar</div>" . mysqli_connect_error();
        //         echo "<script>
        //             setTimeout(function(){

        //                 var mensajeExitoso = document.getElementById('msg');

        //                 if(mensajeExitoso){
        //                     mensajeExitoso.style.display = 'none';
        //                 }
        //             },4000); //3s dilay
        //         </script>";
    
        //     }else{

        //         $correo = $_POST["correo"];
        //         $contraseña =trim($_POST["contrasena"]);
        //         ingreso($correo, $contraseña);
        //     }
        // }

        // function ingreso($correo, $contraseña){
       
        //     $query = "SELECT * FROM usuarios WHERE correoPersonal = '$correo' AND contrasena = '$contraseña' ";
        //     $result = consulta($query);
    
        //     //muestra si la consulta se envia correctamente
        //     #var_dump($result);
           
            
    
        //     if(mysqli_num_rows($result) > 0){
                
        //         echo "<div id='msg' class='msg' style='color: #7f0001; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold; font-style: oblique;'>Bienvenid@ a Uniproyectos!</div>" . mysqli_connect_error();
        //         echo "<script>
        //                 setTimeout(function(){
    
        //                     var mensajeExitoso = document.getElementById('msg');
    
        //                     if(mensajeExitoso){
        //                         mensajeExitoso.style.display = 'none';
        //                     }
        //                 },4000); //3s dilay
        //             </script>";
        //             header("Location: publicacion.php?mensaje=Bienvenido");
        //             exit();  
        //     }else{
                
        //         $query = "SELECT * FROM usuarios WHERE correoPersonal = '$correo' AND contrasena = '$contraseña' ";
        //         $result = consulta($query);
    
        //         if($result){
    
        //             echo "<div id='msg' class='msg' style='color: #ffff; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;'>Contraseña y/o correo incorrecto verifique he intente nuevamente</div>";
        //             echo "<script>
        //                 setTimeout(function(){
    
        //                     var mensajeExitoso = document.getElementById('msg');
    
        //                     if(mensajeExitoso){
        //                         mensajeExitoso.style.display = 'none';
        //                     }
        //                 },4000); //3s dilay
        //                 </script>";    
        //         }        
        //     }
        // }
        
        // // exit();
    
    }
?>