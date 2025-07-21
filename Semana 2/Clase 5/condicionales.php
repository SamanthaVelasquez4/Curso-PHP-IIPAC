<?php
    //variable
    $a = 100;
    $b = 10;

    /*SINTAXIS IF 
        if (CONDICION){
            LINEAS
            A EJECUTAR
        }
        CONTINUA CON EL CODIGO
    */

   /* if ($a < $b) {
        echo "La variable a es menor que la variable b\n";
    }
    
    echo "Continuamos con el código\n";*/

    

    /* SINTAXIS IF ELSE
        if (CONDICION){
            LINEAS A EJECUTAR SI SE CUMPLE
        } else {
            LINEAS A EJECUTAR SI NO SE CUMPLE
        }
        CONTINUA CON EL CODIGO
     */

    /*if ($a < $b) {
        echo "La variable a es menor que la variable b\n";
    }else{
        echo "La variable a es mayor o igual que la variable b\n";
    }

    echo "Continuamos con el código\n";*/

    /* SINTAXIS IF ELSE IF
        if (CONDICION){
            LINEAS A EJECUTAR SI SE CUMPLE
        } else if (CONDICION2){
            LINEAS A EJECUTAR SI SE CUMPLE CONDICION2
        } else {
            LINEAS A EJECUTAR SI NO SE CUMPLE NINGUNA CONDICION
        }
        CONTINUA CON EL CODIGO
     */

    /*if ($a < $b) {
        echo "La variable a es menor que la variable b\n";
    }else if ($a == $b) {
        echo "La variable a es igual que la variable b\n";
    }else{
        echo "La variable a es mayor que la variable b\n";
    }

    //SINTAXIS ALTERNATIVA
    if ($a < $b):
        echo "La variable a es menor que la variable b\n";
    elseif ($a == $b):
        echo "La variable a es igual que la variable b\n";
    else:
        echo "La variable a es mayor que la variable b\n";
    endif;*/

    /*SINTAXIS SWITCH
    switch (variable){
        case valor1: variable == valor1
            //codigo a ejecutar si variable == valor1
            break;
        case valor2:
            //codigo a ejecutar si variable == valor2
            break;
        default:
            //codigo a ejecutar si no se cumple ningun caso
    } */

    //CONVERTIR DE NUMERO A DIA DE LA SEMANA
    $dia = 3; //1-7

    switch ($dia){
        case 1:
            echo "Lunes\n";
            break;
        case 2:
            echo "Martes\n";
            break;
        case 3:
            echo "Miércoles\n"; 
            break;
        case 4:
            echo "Jueves\n";
            break;
        case 5: 
            echo "Viernes\n";
            break;
        case 6: 
            echo "Sabado\n";
            break;
        case 7: 
            echo "Domingo\n";
            break;
        default:
            echo "Número de día no válido\n";
    }

?>