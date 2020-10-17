<?php

require 'HumanBeign.php';

// $obj = new HumanBeign();
// echo $obj->sayHi('Cristyan');

echo strtoupper("<pre>Clases anónimas en PHP</pre>");

$saludo = new class('Hola desde una clase anonima de php') {
    private string $comunidad = 'SO';

    public function __construct(string $comunidad)
    {
        $this->comunidad = $comunidad;
    }

    public function __toString()
    {
        return $this->comunidad;
    }
};

echo get_class($saludo);

// require_once "pago.php";

// $pago = new Pago(10000.00, 0.075, 12, 5);
// $elPago = number_format($pago->payment(), 2);

// echo 'El pago es: ' . '$' . $elPago;

// require 'bubble.php';

// $arr = [99, -10, 100123, 18, -978, 5623, 463, -9, 287, 49];
// $result = bubble_sort($arr);
// print('Array original: ');
// foreach ($arr as $a) {
//     print(" $a");
// }

// print("<br><br>");

// print("El array ordenado es:");
// foreach ($result as $a) {
//     print("<pre>{$a}</pre>");
// }
