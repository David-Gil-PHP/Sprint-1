<?php
// EXERCICI 2
// Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar pas a pas segons valides els tests prèviament creats.

class Estudiant
{
    public const GRAU_PRIMERA = "Primera Divisió";
    public const GRAU_SEGONA = "Segona Divisió";
    public const GRAU_TERCERA = "Tercera Divisió";
    public const GRAU_REPROVAR = "Reprovarà";
    
    public int $nota;
    public string $grau = "No calificat";

    public function __construct(int $nota = 0)
    {
        if ($nota < 0 || $nota > 100)
            throw new InvalidArgumentException("La nota ha de ser un número entre 0 i 100.");
        
        $this->nota = $nota;
    }

    public function verificarGrau() : string
    {
        if ($this->nota >= 60)
            $this->grau = self::GRAU_PRIMERA;
        elseif ($this->nota >= 45 && $this->nota < 60)
            $this->grau = self::GRAU_SEGONA;
        elseif ($this->nota >= 33 && $this->nota < 45)
            $this->grau = self::GRAU_TERCERA;
        else
            $this->grau = self::GRAU_REPROVAR;

        echo "El grau de l'estudiant amb nota {$this->nota}% és: '{$this->grau}'\n\n";
        return $this->grau;
    }
}

?>