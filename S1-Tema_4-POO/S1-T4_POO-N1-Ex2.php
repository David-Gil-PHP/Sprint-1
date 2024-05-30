<?php declare(strict_types = 1);

/* EXERCICI 2
1. Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt.
2. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area().
*/

/**
 * Classe abstracta que representa un figura geomètrica. No necessita ser instanciada inicialment.
 */
abstract class Shape {

    protected float $ample;
    protected float $alt;

    /**
     * Inicialitza l'objecte Shape amb un ample i un alt.
     *
     * @param float $ample L'ample de Shape.
     * @param float $alt L'alt de Shape.
     */
    public function __construct(float $ample, float $alt) {
        $this->ample = $ample;
        $this->alt = $alt;
    }
    /**
     * Funció abstracta que calcula l'àrea de la forma. Implementació en les subclasses.
     * 
     * @param float $ample L'ample de Shape.
     * @param float $alt L'alt de Shape.
     *
     * @return float
     */
    abstract public function calcularArea(float $ample, float $alt) : float;

}

/**
 * Subclasse que hereta de la classe abstracta Shape.
 */
class Triangle extends Shape {
    
    /**
     * Calcula l'àrea del Triangle utilitzant l'ample i l'alt proporcionats.
     * 
     * @param float $ample L'ample del Triangle.
     * @param float $alt L'alt del Triangle.
     *
     * @return float Àrea del Triangle.
     */
    public function calcularArea(float $ample, float $alt): float {
        return ($ample * $alt) / 2;
    }
}

/**
 * Subclasse que hereta de la classe abstracta Shape.
 */
class Rectangle extends Shape {
    
    /**
     * Calcula l'àrea del Rectangle utilitzant l'ample i l'alt proporcionats.
     * 
     * @param float $ample L'ample del Rectangle.
     * @param float $alt L'alt del Rectangle.
     *
     * @return float Àrea del Rectangle.
     */
    public function calcularArea(float $ample, float $alt): float {
        return $ample * $alt;
    }
}

$a = 3.2; $b = 4.4;
//$c = readline("Número: ");

$triangle = new Triangle($a, $b);
echo "L'àrea del Triangle és {$triangle->calcularArea($a, $b)}.\n";

$rectangle = new Rectangle($a, $b);
echo "L'àrea del Rectangle és {$rectangle->calcularArea($a, $b)}.\n";

?>