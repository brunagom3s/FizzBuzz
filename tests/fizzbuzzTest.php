<?php
use PHPUnit\Framework\TestCase;
use App\Fizzbuzz;

final class FizzbuzzTest extends TestCase
{

    public function testCondiçaoDeFizz ()
    {   
        $numero = 3;
        $calculadora = New FizzBuzz();

        $resultado = $calculadora->dividir($numero);
        
        $this->assertSame("Fizz", $resultado);

    }

    public function testCondiçaoDeBuzz ()
    {   
        $numero = 5;
        $calculadora = New FizzBuzz();

        $resultado = $calculadora->dividir($numero);
        
        $this->assertSame("Buzz", $resultado);

    }

    public function testCondiçaoDeFizzBuzz ()
    {   
        $numero = 15;
        $calculadora = New FizzBuzz();

        $resultado = $calculadora->dividir($numero);
        
        $this->assertSame("FizzBuzz", $resultado);

    }

    public function testOutro ()
    {   
        $numero = 2;
        $calculadora = New FizzBuzz();

        $resultado = $calculadora->dividir($numero);
        
        $this->assertSame("Nao é divisivel", $resultado);

    }

}