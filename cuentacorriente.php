<?php
class cuentacorriente {
    protected $titular;
    protected $saldo;
    protected $limite;

    public function __construct($titular, $saldo = 0, $limite = 100) {
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->limite = $limite;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getLimite() {
        return $this->limite;
    }

    public function setLimite($limite) {
        $this->limite = $limite;
    }

    public function SacarDinero($cantidad) {
        $nuevoSaldo = $this->saldo - $cantidad;
        $saldoMinimo = -$this->limite;

        if ($nuevoSaldo >= $saldoMinimo) {
            $this->saldo = $nuevoSaldo;
            echo "Retiro de €$cantidad realizado correctamente.<br>";
        } else {
            echo "No se puede realizar el retiro. Saldo insuficiente.<br>";
        }
    }

    public function IngresarDinero($cantidad) {
        $gastosOperacion = 3;
        $this->saldo += ($cantidad - $gastosOperacion);
        echo "Ingreso de €$cantidad realizado correctamente.<br>";
    }

    public function toString() {
        echo "Titular: " . $this->titular->getNombre() . "<br>";
        echo "Saldo: €" . $this->saldo . "<br>";
    }

    public function Bizum50() {
        for ($i = 0; $i < 10; $i++) {
            $this->SacarDinero(5);
        }
    }

    public function comision() {
        $comision = $this->saldo * 0.05;
        $this->saldo -= $comision;
        echo "Se aplicó una comisión del 5%. Nueva comisión: €$comision. Nuevo saldo: €$this->saldo.<br>";
    }
}
