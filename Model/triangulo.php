<?php
include 'figura.php';
// Todas las clases son públicas
class Triangulo extends Figura {

    // Constructor (pone valores a los atributos y reserva memoria)
    public function __construct($base, $altura) {
        // Llama al constructor padre
        parent::__construct($base, $altura);
    }

    // Métodos propios
    public function calculoArea() {
        $area = ($this->base * $this->altura)/2;
        return $area;
    }

    public function calculoPerimetro() {
        $hipotenusa = sqrt( pow($this->base, 2) + pow($this->altura, 2) );
        $perimetro = $this->base + $this->altura + $hipotenusa;
        $perimetro = round($perimetro, 2);
        return $perimetro;
    }
}

?>