<?php

saludo4();
saludo1();
/*
Las funciones pueden ser:
-Funciones sin parametros y sin retorno
-Funciones sin parametros y con retorno
-Funciones con parametros y sin retorno
-Funciones con parametros y con retorno 

function nombreFuncion(parametros, separados, por, comas) {
  return variable/expresion;
} 
*/
//Función básica sin parámetros y sin retorno
function saludo1(){
    echo "Hola\n";
}

saludo1(); //llamar a la funcion


//Función con parámetros y sin retorno
function saludo2($nombre){
    echo "Hola $nombre\n";
}

saludo2("Sam");
saludo2("Juan");
saludo2(2+2);

//Función con parámetros y con retorno
function saludo3($nombre){
    return "Hola $nombre\n";
}

$retorno = saludo3("Con retorno");
echo $retorno;

//Función con parámetro opcional (valor por defecto)
function saludo4($nombre="Invitado"){
    echo "Hola $nombre\n";
}

saludo4();
saludo4("Sam");
/* 
Función anónima (closure)
$nombreFuncion = function(parametros) {
    return valor/expresion;
};
*/

//sin parametros y con retorno
$funcionAnonima = function(){
    return "Desde la funcion anonima\n";
};

echo $funcionAnonima();

/*
Funcion flecha
$nombre = fn(parametros) => expresion;
*/
$flecha = fn() => "Funcion flecha\n";

echo $flecha();

?>