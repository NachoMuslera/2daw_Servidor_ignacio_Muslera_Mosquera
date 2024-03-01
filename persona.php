<?php
class persona {
    //Atributos de la clase Persona
    protected $nombre;
    protected $dni;
    protected $anoNacimiento;

    //Constructor con tres parámetros
    public function __construct($nombre, $dni, $anoNacimiento) {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->anoNacimiento = $anoNacimiento;
    }

    //Getters y setters
    public function getNombre() {
        return $this->nombre;
    }

    public function getDni() {
        return $this->dni;
    }

    public function getAnoNacimiento() {
        return $this->anoNacimiento;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setDni($dni) {
        $this->dni = $dni;
    }

    public function setAnoNacimiento($anoNacimiento) {
        $this->anoNacimiento = $anoNacimiento;
    }

    //Metodo toString
    public function __toString() {
        return "Nombre: " . $this->nombre . "<br>DNI: " . $this->dni . "<br>Año de Nacimiento: " . $this->anoNacimiento . "<br>";
    }
}
