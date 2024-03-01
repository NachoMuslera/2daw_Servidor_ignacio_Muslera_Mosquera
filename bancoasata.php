<?php

include 'persona.php';
include 'cuentacorriente.php';

class bancoasata {
    protected $cuentas = [];

    //Metodo para agregar cuentas al array
    public function agregarCuenta($cuenta) {
        $this->cuentas[] = $cuenta;
    }

    //Metodo para mostrakr la informacion
    public function mostrarCuentas() {
        foreach ($this->cuentas as $cuenta) {
            echo $cuenta->__toString() . "<br>";
        }
    }
}

 //Creacion
$titular1 = new Persona("Leo Messi", "1236822A", 1985);
$titular2 = new Persona("Cristiano Ronaldo", "9168292K", 1990);


$cuenta1 = new CuentaCorriente($titular1, 0, 100);
$cuenta2 = new CuentaCorriente($titular2, 500, 200);


$banco = new bancoasata();


$banco->agregarCuenta($cuenta1);
$banco->agregarCuenta($cuenta2);

// Probar funcionalidades solicitadas
$cuenta1->sacarDinero(200);
$cuenta2->ingresarDinero(100);
$cuenta1->comision(); 
$cuenta2->comision(); 
$cuenta2->bizum50(); 

// Mostrar
$banco->mostrarCuentas();

