<?php
    require "conexionDB.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){


        if(isset($_POST["enviar"])){
        
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $correo = $_POST["correo"];
            $contraseña =$_POST["contraseña"];
            enviarUsuarios($nombre, $apellido, $correo, $contraseña);

        }elseif (isset($_POST["ingresar"])){

            if(empty($_POST["correo"]) || empty($_POST["contraseña"])){

                echo "<div id='msg' class='msg' style='color: #7f0001; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold; font-style: oblique;'>Por favor, llene todos los campos de ingreso para continuar</div>" . mysqli_connect_error();
                echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";
    
            }else{

                $correo = $_POST["correo"];
                $contraseña =trim($_POST["contraseña"]);
                ingreso($correo, $contraseña);
            }    
        }    
    }
    

    function enviarUsuarios($nombre, $apellido, $correo, $contraseña){

        $query = "SELECT * FROM usuarios WHERE correo = '$correo' ";
        $result = consulta($query);

        if(mysqli_num_rows($result) > 0){
            echo "<div id='msg' class='msg' style='color: #7f0001; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold; font-style: oblique;'>Error en el registro, ya se encuentra registrado</div>" . mysqli_connect_error();
            echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";
        }else{

            $query = "INSERT INTO usuarios(nombre, apellido, correo, contraseña) VALUES ('$nombre','$apellido', '$correo', '$contraseña' )";
            $result = consulta($query);

            if($result === TRUE){
                echo "<div id='msg' class='msg' style='color: #ffff; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;'>Se registro correctamente. Bienvenid@ $nombre!</div>";
                echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";  
            }
            else{
                echo "No se ha podido registrar, verifique e intente nuevamente" . mysqli_connect_error();

            }    
        }
    }
    
    function ingreso($correo, $contraseña){
       
        $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' ";
        $result = consulta($query);

        //muestra si la consulta se envia correctamente
        #var_dump($result);
       
        

        if(mysqli_num_rows($result) > 0){
            
            echo "<div id='msg' class='msg' style='color: #7f0001; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold; font-style: oblique;'>Bienvenid@ a Uniproyectos!</div>" . mysqli_connect_error();
            echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";
                header("Location: publicacion.php");
                exit();  
        }else{
            
            $query = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña' ";
            $result = consulta($query);

            if($result){

                echo "<div id='msg' class='msg' style='color: #ffff; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;'>Contraseña y/o correo incorrecto verifique he intente nuevamente</div>";
                echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                    </script>";    
            }        
        }
    }
?>

