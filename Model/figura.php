<?php

class Figura {
    // Atributos
    protected $base; // Modificador PROTECTED Para que puedan ver las clases que heredan de Figuras
    protected $altura;
    // Constructor
    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }
    

    /**
     * Get the value of base
     */ 
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set the value of base
     *
     * @return  self
     */ 
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get the value of altura
     */ 
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */ 
    public function setAltura($altura)
    {
        $this->altura = $altura;

        return $this;
    }

    // Funciones propias
    public function calculaArea() {
       echo "Calculará el área";
    }

    public function calculaPerimetro() {
        echo "Calculará el perímetro"; 
    }
}

?>