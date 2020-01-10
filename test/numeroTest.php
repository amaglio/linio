<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

require "./src/class/numero.class.php"; 

final class NumeroTest extends TestCase
{   
    /**
     * [Comprueba que la variable sea de la clase Numero ]
     */
    public function testClass(): void
    {   
        $numero_tres = new Numero\Numero( 3, "Linio", 100 );
        $this->assertInstanceOf(Numero\Numero::class,$numero_tres);

        $numero_cinco = new Numero\Numero( 5, "IT", 100 );
        $this->assertInstanceOf(Numero\Numero::class,$numero_cinco);
    }

    /**
     * [Comprueba la funcion get_etiqueta de la clase ]
     */
    public function testLabel(): void
    {   
        $numero_tres = new Numero\Numero( 3, "Linio", 100 );
        $this->assertEquals('Linio', $numero_tres->get_etiqueta());

        $numero_cinco = new Numero\Numero( 5, "IT", 100 );
        $this->assertEquals('IT', $numero_cinco->get_etiqueta());
    }

     /**
     * [Comprueba la funcion get_multiplos de la clase ]
     */
    public function testMultiplos(): void
    {   
        $numero_tres = new Numero\Numero( 3, "Linio", 100 );
        $multiplos_de_3 = array(3,6,9,12,15,18,21,24,27,30,33,36,39,42,45,48,51,54,57,60,63,66,69,72,75,78,81,84,87,90,93,96,99);
        $this->assertEquals($multiplos_de_3, $numero_tres->get_multiplos());

        $numero_cinco = new Numero\Numero( 5, "Linio", 100 );
        $multiplos_de_5 = array(5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100);
        $this->assertEquals($multiplos_de_5, $numero_cinco->get_multiplos());
    }

    
 
} 