<?php

require_once '../Model/triangulo.php';
$base = $_GET['base'];
$altura = $_GET['altura'];

$triangulo1 = new Triangulo($base, $altura);
$triangulo1->setBase($base);
$triangulo1->setAltura($altura);


echo "Base: ";
echo $triangulo1->getBase();
echo '<br>';
echo "Altura: ";
echo $triangulo1->getAltura();
echo '<br>';
echo "El área del triángulo es: ";
echo $triangulo1->calculoArea();
echo '<br>';
echo "El perímetro del triángulo es: ";
echo $triangulo1->calculoPerimetro();

?>
