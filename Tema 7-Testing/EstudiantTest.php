<?php
// EXERCICI 2
// Practiquem una mica de TDD. Recorda l’exercici 5 del nivell de PHP Bàsics i pensa tests que podries realitzar per provar el seu correcte funcionament. Programa’ls i després ves realitzant el programa a testejar pas a pas segons valides els tests prèviament creats.

require 'Estudiant.php';

class EstudiantTest extends \PHPUnit\Framework\TestCase
{
    public function testClassConstructor(): void
    {
        $estudiant = new Estudiant(12);
        $this->assertNotNull($estudiant);
        $this->assertIsInt($estudiant->nota);
        
        $this->expectException(InvalidArgumentException::class);
        $estudiant = new Estudiant(-1);
        $this->expectException(InvalidArgumentException::class);
        $estudiant = new Estudiant(101);
    }

    public function testVerificarGrau(): void
    {
        $estudiantPrimeraDiv = new Estudiant(rand(60, 100));
        $this->assertEquals("Primera Divisió", $estudiantPrimeraDiv->verificarGrau());

        $estudiantSegonaDiv = new Estudiant(rand(45, 59));
        $this->assertEquals("Segona Divisió", $estudiantSegonaDiv->verificarGrau());

        $estudiantTerceraDiv = new Estudiant(rand(33, 44));
        
        $this->assertEquals("Tercera Divisió", $estudiantTerceraDiv->verificarGrau());

        $estudiantReprovara = new Estudiant(rand(0, 32));
        $this->assertEquals("Reprovarà", $estudiantReprovara->verificarGrau());
    }
}

?>