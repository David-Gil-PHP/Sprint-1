<!-- EXERCICI 3
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct)
-->

<?php

class MyClass {
    public function __toString() {
        $text = "Això és un text de prova que es retornarà en majúscules.";
        return strtoupper($text);
    }
}

$obj = new MyClass();
echo $obj;

?>