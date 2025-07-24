<?php
//Definicion de una clase
class Persona{

    //propiedades o atributo
    public $numIdentidad;
    public $nombre;
    public $genero;
    public $edad;

    //constructor
    public function __construct($numIdentidad, $nombre, $genero, $edad){
        $this->numIdentidad = $numIdentidad;
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->edad = $edad;
    }

    //funciones o metodos
    public function presentar(){
        echo "Hola mi nombre es ".$this->nombre." y tengo ".$this->edad." años.";
    }
}

//objetos
$persona1 = new Persona("0801-1999-65892", "Juana", "F", "26");
$persona2 = new Persona("0801-2000-56982", "Marcos", "M", "25");

$personas = [$persona1, $persona2];

//print_r($personas);

//echo $persona2->nombre;

class CuentaBancaria{
    //propiedades
    public $saldo;
    public $numCuenta;
    public $nombrePersona;

    //constructor
    public function __construct($saldo, $numCuenta, $nombrePersona){
        $this->saldo = $saldo;
        $this->nombrePersona = $nombrePersona;
        $this->numCuenta = $numCuenta;  
    }

    //funciones
    public function estadoCuenta(){
        echo "Nombre dueño: ".$this->nombrePersona."\nNum cuenta: ".$this->numCuenta."\nSaldo Actual: ".$this->saldo."\n";
    }

    public function depositar($monto){
        if($monto<=0){
            echo "No se puede depositar monto\n";
        }else{
            $this->saldo += $monto;
            echo "Saldo actual: ".$this->saldo."\n";
        }
    }

    public function retirar($monto){
        if($monto>0 && $monto<=$this->saldo){
            $this->saldo -= $monto;
            echo "Saldo actual: ".$this->saldo."\n";
        }else{
            echo "No se puede realizar el retirto\n";
        }
    }
}

$cuenta= new CuentaBancaria(10000,"20258874547","Samantha");

$cuenta->estadoCuenta();

//realizar retiro valido
$cuenta->retirar(5000);
$cuenta->estadoCuenta();
//retiro invalido
$cuenta->retirar(7000);
$cuenta->retirar(-985);
$cuenta->estadoCuenta();

//deposito valido
$cuenta->depositar(10000);
$cuenta->depositar(-41548);
$cuenta->estadoCuenta();
?>