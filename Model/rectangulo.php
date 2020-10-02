<?php

include 'figura.php';
class Rectangulo extends Figura {

    // Constructor
    public function __construct($base, $altura) {
        // Llama al constructor padre
        parent::__construct($base, $altura);
    }

    // Métodos propios
    public function calculoArea() {
        $area = ($this->base * $this->altura);
        return $area;
    }

    public function calculoPerimetro() {
        $perimetro = (($this->base)*2 + ($this->altura)*2);
        return $perimetro;
    }

}

?>