<?php

class Pago
{
    private float $monto;
    private float $tasaInteres;
    private float $pagoAnual;
    private int $numeroAños;

    public function __construct(
        float $monto,
        float $tasaInteres,
        float $pagoAnual,
        int $numeroAños
    ) {
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