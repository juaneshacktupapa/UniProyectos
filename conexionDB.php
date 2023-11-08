<?php

    function conectar(){

        $host = "127.0.0.1";
        $user = "root";
        $password = "";
        $data_base = "UniProyectos";

        //Conexion
        $connection = new mysqli($host, $user, $password, $data_base);

        if(!$connection){
            die("conexion fallida, pruebe nuevamente". mysqli_connect_error());
        }

        return $connection;
    }
    
    function consulta($query){
        $connection = conectar();
        $result = mysqli_query($connection, $query);
        return $result;
        desconectar($connection);
    }

    function desconectar($connection){
        mysqli_close($connection);
    }


?>  



