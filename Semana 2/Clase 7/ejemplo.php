<?php
/*
CALCULADORA
1. Suma
2. Resta
3. Multiplicación
4. División
5. Salir
*/

//Funciones
function imprimirMenu(){
    echo "----------Menu---------\n";
    echo "1. Suma\n2. Resta\n3. Multiplicación\n4. División\n5. Salir\n";
}

function suma(){
    $num1 = readline("Ingrese el primer numero: ");
    $num2 = readline("ingrese el segundo numero: ");
    echo "La suma es igual a = ".$num1+$num2."\n";
}

$resta = fn($numero1, $numero2) => $numero1-$numero2;

$multiplicacion = function(){
    $num1 = readline("Ingrese el primer numero: ");
    $num2 = readline("ingrese el segundo numero: ");
    echo "La multiplicacion es igual a = ".$num1*$num2."\n";
};

function division(){
    $num1 = readline("Ingrese el primer numero: ");
    $num2 = readline("ingrese el segundo numero: ");
    if($num2 ==0){
        echo "Division invalida\n";
    }else{
        echo "La resta es igual a = ".$num1/$num2."\n";
    }
    
}

//variables


do{
    //Imprimir el menu
    imprimirMenu();
    $opcion = readline("Ingrese su opción: ");

    switch($opcion):
        case 1:
            suma();
            break;
        case 2:
            $num1 = readline("Ingrese el primer numero: ");
            $num2 = readline("ingrese el segundo numero: ");
            echo "La resta es = ".$resta($num1, $num2)."\n";
            break;
        case 3:
            $multiplicacion();
            break;
        case 4:
            division();
            break;
        case 5:
            echo "Gracias por usar la calculadora\n";
            break;
        default:
            echo "Opcion invalida\n";
            break;
    endswitch;

}while($opcion != 5);
?>