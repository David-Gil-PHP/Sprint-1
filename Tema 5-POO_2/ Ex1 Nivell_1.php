<?php declare(strict_types = 1);

/* EXERCICI 1
1. Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments.
2. Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
*/

/**
 * Classe abstracta que representa un Animal.
 */
abstract class Animal {

    protected string $nom;
    /**
     * Funció abstracta que representa la parla d'un Animal.
     *
     * @return void
     */
    abstract public function makeSound() : void;
}

/**
 * Subclasse Gos que hereta de la classe abstracta Animal.
 */
class Gos extends Animal {
    
    /**
     * Mostra per pantalla la parla d'un Gos.
     *
     * @return void
     */
    public function makeSound(): void {
        echo "Bup, bup!\n";
    }
}

/**
 * Subclasse Gat que hereta de la classe abstracta Animal.
 */
class Gat extends Animal {
    
    /**
     * Mostra per pantalla la parla d'un Gat.
     *
     * @return void
     */
    public function makeSound(): void {
        echo "Meu!\n";
    }
}

$gos = new Gos();
echo $gos->makeSound();
$gat = new Gat();
echo $gat->makeSound();

?>