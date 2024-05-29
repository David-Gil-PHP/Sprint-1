<?php
// EXERCICI 1
print "******* EXERCICI 1 *******\n";
$integer = 1;
$double = 2.2;
$string = "Hello, world!";
$boolean = true;

var_dump($integer);
var_dump($double);
var_dump($string);
var_dump($boolean);

// EXERCICI 2
print "******* EXERCICI 2 *******\n";
$curs = "Aquest és el curs de PHP\n";

print($string)."\n";
print(strtoupper($string))."\n";
print(strlen($string))."\n";
print(strrev($string))."\n";
print($string." ".$curs)."\n";

define("NOM", "David");
echo "<h1>El meu nom és ".NOM."</h1>\n";

// EXERCICI 3
print "******* EXERCICI 3a *******\n";
$x = 2; $y = 7;
$n = 4; $m = 1;

// Operacions amb x i y
print "x = $x, y = $y\n";
print "La suma de x i y és ".($x + $y)."\n";
print "La resta de x i y és ".($x - $y)."\n";
print "El producte de x i y és ".($x * $y)."\n";
print "El mòdul de x i y és ".($x % $y)."\n\n";

// Operacions amb n i m
print "n = $n, m = $m\n";
print "La suma de n i m és ".($n + $m)."\n";
print "La resta de n i m és ".($n - $m)."\n";
print "El producte de n i m és ".($n * $m)."\n";
print "El mòdul de n i m és ".($n % $m)."\n\n";

print "El doble de x és ".($x * 2).", de y és ".($y * 2).", de n és ".($n * 2)." i de m és ".($m * 2)."\n";
print "La suma de totes les variables és ".($x + $y + $n + $m)."\n";
print "El producte de totes les variables és ".($x * $y * $n * $m)."\n\n";

// Calculadora
$operacio = "*";
print "******* EXERCICI 3b - Calculadora *******\n";
print "L'operació matemàtica és: ".calcular($n, $m, $operacio)."\n\n";
function calcular(int $a, int $b, String $operacio) {

    switch ($operacio) {
        case "+":
            return $a + $b;
            break;
        case "-":
            return $a - $b;
            break;
        case "*":
            return $a * $b;
            break;
        case "/":
            return $a / $b;
            break;
        default:
            return "Operació no vàlida\n";
            break;
    }
}

// EXERCICI 4
print "******* EXERCICI 4 *******\n";
$num;
$saltComptador = rand(1, 5);
$probabilitat = rand(0, 100);

if ($probabilitat < 50) $num = 10;
else $num = rand(1, 25);

imprimirComptador($num, $saltComptador);

function imprimirComptador($n, $salt) {

    print("Comptador fins al número ".$n." de ".$salt." en ".$salt.":\n");
    for ($i = $salt; $i <= $n; $i = $i+$salt) {
        print($i."\n");
    }
}

// EXERCICI 5
print "******* EXERCICI 5 *******\n";
$nota = rand(0, 100);
$grau = verificarGrauEstudiant($nota);
print("El grau de l'estudiant amb nota {$nota}% és: '{$grau}'\n\n");

function verificarGrauEstudiant($nota) : String {
    if ($nota >= 60)
        $grau = "Primera Divisió";
    elseif ($nota >= 45 && $nota < 60)
        $grau = "Segona Divisió";
    elseif ($nota >= 33 && $nota < 45)
        $grau = "Tercera Divisió";
    else
        $grau = "reprovarà";

    return $grau;
}

// EXERCICI 6
print "******* EXERCICI 6 *******\n";
echo isBitten() ? "Charlie em mossegarà\n\n" : "Charlie NO em mossegarà\n\n";
function isBitten() {
    if (rand(0, 100) >= 50) return true;
    else return false;
}

?>