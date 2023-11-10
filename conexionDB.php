<?php
    error_reporting(E_ALL);
        
    function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "uniproyectos";

        $conexion = mysqli_connect($servername, $username, $password, $database);

        if(!$conexion){
         die("Conexion fallida: ". mysqli_connect_error());
        }

         //echo "<br> Conexion exitosa <br> <br>";

        return $conexion;
    }

     function consulta($consulta){
        $conexion = conectar();
        $result = mysqli_query($conexion, $consulta);
        desconectar($conexion);
        return $result;
    }

     function desconectar($conexion){
        mysqli_close($conexion); 
    }
?>