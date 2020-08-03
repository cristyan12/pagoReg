<?php

class Pago
{
    /** @var float */
    private $monto;

    /** @var float */
    private $tasaInteres;

    /** @var float */
    private $pagoAnual;

    /** @var int */
    private $numeroAños;

    public function __construct(float $monto, float $tasaInteres, float $pagoAnual, int $numeroAños)
    {
        $this->monto = $monto;
        $this->tasaInteres = $tasaInteres;
        $this->pagoAnual = $pagoAnual;
        $this->numeroAños = $numeroAños;
    }

    public function payment(): float
    {
        $numerador = ($this->tasaInteres * $this->monto) / $this->pagoAnual;

        $denominador = 1 - ($this->getBase() ** $this->getExponente());

        return $numerador / $denominador;
    }

    private function getBase(): float
    {
        return ($this->tasaInteres / $this->pagoAnual) + 1;
    }

    private function getExponente(): float
    {
        return -($this->pagoAnual * $this->numeroAños);
    }
}