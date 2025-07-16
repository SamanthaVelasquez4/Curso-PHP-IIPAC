<?php
    //Variable
    $numero = 10; //int
    $nombre = "Juan"; //string
    $a= "Sam"; //string
    $b= 15.52; //float
    $bandera = false; //bool

    echo "La variable numero es: $numero \n";
    echo "La variable nombre es: $nombre \n";
    echo "La variable a es: $a \n";
    echo "La variable b es: $b \n";
    echo "La variable bandera es: $bandera \n";

    //Operadores aritmeticos
    $suma = $numero + $b;
    $resta = $numero - $b;
    $multiplicacion = $numero * $b;
    $division = $numero / $b;

    echo "La suma de numero y b es: $suma \n";
    echo "La resta de numero y b es: $resta \n";
    echo "La multiplicación de numero y b es: $multiplicacion \n";
    echo "La división de numero y b es: $division \n";    
    
    //operadores de incremento y decremento
    $numero++;
    $numero ++;
    $numero++;
    echo "El valor de numero después de incrementar es: $numero \n";
    $numero--;
    echo "El valor de numero después de decrementar es: $numero \n";


    //Operadores de comparación
    $esIgual = ($numero == $b); //falso = 0
    $esDiferente = ($numero != $b); //verdadero = 1

    echo "¿El numero es diferente a b? $esDiferente\n";
    echo "¿El numero es igual a b? $esIgual\n";

    $esMenor = ($numero < $b); //falso = 0
    $esMayor = ($numero > $b); //verdadero = 1

    echo "¿El numero es menor que b? $esMenor\n";
    echo "¿El numero es mayor que b?". $esMayor. "\n";   

    //Operadores lógicos
    $and = ($numero < $b) && true && true;
    echo $and."\n";

    $or = false || false || false;
    echo $or."\n";
    
?> 
