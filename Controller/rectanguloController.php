<?php

require_once '../Model/rectangulo.php';
$base = $_GET['base'];
$altura = $_GET['altura'];

$rectangulo = new Rectangulo($base, $altura);
$rectangulo->setBase($base);
$rectangulo->setAltura($altura);


echo "Base: ";
echo $rectangulo->getBase();
echo '<br>';
echo "Altura: ";
echo $rectangulo->getAltura();
echo '<br>';
echo "El área del rectángulo es: ";
echo $rectangulo->calculoArea();
echo '<br>';
echo "El perímetro del rectángulo es: ";
echo $rectangulo->calculoPerimetro();

?>
