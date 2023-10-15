<?php


    $host="localhost";
    $user="root";
    $password='';
    $base_datos="hospitalform";
 
    
    
    
    $conexion = new  mysqli($host,$user,$password,$base_datos);
    
    
    if($conexion->connect_error){
        
        die("Conexion no establecida" . $conexion->connect_error);
        
    }
    
    /*
    header("Content-Type: application/json");
    $metodo= $_SERVER['REQUEST_METHOD'];
    print_r($metodo);
    */

