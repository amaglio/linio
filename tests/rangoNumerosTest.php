<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require "./src/class/numero.class.php"; 
require "./src/class/rangonumeros.class.php"; 

final class rangonumerosTest extends TestCase
{   
    /**
     * [Comprueba que la variable sea de la clase RangoNumeros ]
     */
    public function testClass(): void
    {   
        $numero_tres = new Numero\Numero( 3, "Linio", 100 );
        $numero_cinco = new Numero\Numero( 5, "IT", 100 );
        $rango_numeros = new RangoNumeros\RangoNumeros( $numero_tres , $numero_cinco  );

        $this->assertInstanceOf(RangoNumeros\RangoNumeros::class,$rango_numeros);
    }

     /**
     * [Comprueba que el rango impreso sea el rango esperado por el enunciado del algoritmo ] 
     */
    public function testImprimir(): void
    {   
        $numero_tres = new Numero\Numero( 3, "Linio", 100 );
        $numero_cinco = new Numero\Numero( 5, "IT", 100 );
        $rango_numeros = new RangoNumeros\RangoNumeros( $numero_tres , $numero_cinco  );
 
        $this->expectOutputString('1 2 Linio 4 IT Linio 7 8 Linio IT 11 Linio 13 14 Linianos 16 17 Linio 19 IT Linio 22 23 Linio IT 26 Linio 28 29 Linianos 31 32 Linio 34 IT Linio 37 38 Linio IT 41 Linio 43 44 Linianos 46 47 Linio 49 IT Linio 52 53 Linio IT 56 Linio 58 59 Linianos 61 62 Linio 64 IT Linio 67 68 Linio IT 71 Linio 73 74 Linianos 76 77 Linio 79 IT Linio 82 83 Linio IT 86 Linio 88 89 Linianos 91 92 Linio 94 IT Linio 97 98 Linio IT '); 
        

        print($rango_numeros->imprimir_rango_numeros(100));
    }
 
 
} 