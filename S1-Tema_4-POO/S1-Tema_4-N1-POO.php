<?php

abstract class FiguraGeometrica {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    abstract public function calcularArea();

    abstract public function calcularPerimetro();

    public function mostrarNombre() {
        echo "Figura: $this->nombre";
    }
}

class Circulo extends FiguraGeometrica {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Círculo");
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }

    public function calcularPerimetro() {
        return 2 * pi() * $this->radio;
    }
}

class Cuadrado extends FiguraGeometrica {
    private $lado;

    public function __construct($lado) {
        parent::__construct("Cuadrado");
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2);
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
}

$circulo = new Circulo(5);
$circulo->mostrarNombre();
echo "Área: " . $circulo->calcularArea();
echo "Perímetro: " . $circulo->calcularPerimetro();

$cuadrado = new Cuadrado(4);
$cuadrado->mostrarNombre();
echo "Área: " . $cuadrado->calcularArea();
echo "Perímetro: " . $cuadrado->calcularPerimetro();


?>