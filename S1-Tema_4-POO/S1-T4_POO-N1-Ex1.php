<?php declare(strict_types = 1);

/* EXERCICI 1
1. Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou.
2. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos).
*/

/**
 * Classe que representa un empleat.
 */
class Employee {

    protected string $nom;
    protected float $sou;

    /**
     * Inicialitza l'objecte Employee amb un nom i un sou.
     *
     * @param string $nom El nom de l'empleat.
     * @param float $sou El sou de l'empleat.
     * @return void
     */
    public function initialize(string $nom, float $sou) : void {

        $this->nom = $nom;
        $this->sou = $sou;
    }

    /**
     * Imprimeix el nom d'Employee i si ha de pagar impostos en funció del seu sou.
     *
     * @return void
     */
    public function print() : void {
        
        $souFormatejat = number_format($this->sou, 2, ",", ".");
        $pagaImpostos = $this->sou > 6000 ? "ha de pagar impostos" : "no ha de pagar impostos";
        echo "El treballador $this->nom amb un sou de {$souFormatejat}€ $pagaImpostos.\n";
    }
}

$employee = new Employee();
$employee->initialize("David", 6000.01);
$employee->print();
$employee->initialize("David", 3000);
$employee->print();

?>