<?php

/*EJEMPLO 1 TRY...CATCH 
$server = "127.0.0.1"; //localhost
$user = "root";
$password = "";
$db= "alumnos";

try{
    $conexion = new mysqli($server, $user, $password, $db);
}catch(Exception $e){
    echo "Ocurrio un error: ". $e->getMessage()."\n";
}

//var_dump($conexion);

echo "Continua el codigo\n";*/

/*EJEMPLO 2*/

function division($num1, $num2){
    if($num2 === 0){
        throw new Exception("No se puede dividir por 0");
    }

    return $num1/$num2;
}

try{
    $resultado = division(12,0);
    echo "$resultado \n";
}catch(Exception $e){
    echo "Ocurrio un error: ". $e->getMessage()."\n";
}



?>