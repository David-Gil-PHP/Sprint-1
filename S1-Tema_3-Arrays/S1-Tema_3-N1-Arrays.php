<?php

// EXERCICI 1
print "******* EXERCICI 1 *******\n";
$array = [1,2,3,4,5];
foreach ($array as $a) {
    echo $a;
}
echo "\n\n";

// EXERCICI 2
print "******* EXERCICI 2 *******\n";
$x = array(10, 20, 30, 40, 50, 60);
echo "Mida de l'array original:\n";
var_dump($x);
array_shift($x);
echo "Nova mida de l'array:\n\n";
var_dump($x);

// EXERCICI 3
print "******* EXERCICI 3 *******\n";
$paraules = array("Hola", "Php", "Html");
$caracter = "l";
echo teCaracter($paraules, $caracter) ? "Totes les paraules de l'array tenen la lletra ".$caracter."\n\n" : "Hi ha una paraula com a mínim que no té la lletra ".$caracter."\n\n";

function teCaracter($array, $c) {
    $caracterTrobat = true;

    for ($i=0; $i < sizeof($array) && $caracterTrobat; $i++) {
        if ( stristr($array[$i], $c) === false )
            $caracterTrobat = false;
    }
    return $caracterTrobat;
}

// EXERCICI 4
print "******* EXERCICI 4 *******\n";
$persona = array("nom"=>"David", "edat"=>"40", "email"=>"xxx@mail.com", "menjar favorit"=>"pizza");
var_dump($persona);

?>