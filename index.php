<?php

require_once "pago.php";

$pago = new Pago(10000.00, 0.075, 12, 5);
$elPago = number_format($pago->payment(), 2);

echo 'El pago es: ' . '$' . $elPago;