<?php

namespace App\Tests\Service;

use App\Service\Calculadora;
use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSuma(): void
    {
        $obj = new Calculadora();
        $this->assertEquals(3, $obj->sumar(1,2));
    }
}
