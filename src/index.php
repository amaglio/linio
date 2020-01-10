<?php

/**
 * @Autor: Ing. Adrian Matias Magliola
 * @Fecha: 08/01/2020
 * @Descripcion: listar numeros del 1 al 100, mostrando cada número excepto aquellos múltiplos de 3, donde debe mostrar "Linio", los múltiplos de 5, que debe mostrar "IT" y  aquellos múltiplos de 3 y 5 debe mostrar "Linianos".
 * @Restricciones: 
 * 						1- Se debe utilizar un solo "if".
 * 				  		2 - El rango comienza en 1.
 *         				3- No se puede usar "operadores ternarios", "switch", "else" o "ifelse".
 *         				
 * @Solución: busca los multiplos de 3 y los guarda en un array, lo mismo hace con los multiplos de 5. Hace una intersección de ambos array y se obtiene un array con los múltiplos de 3 y de 5. Se crea un array de "vector de multiplos"  y se recorre el rango preguntando si esta en el array. Caso afirmativo muestra la "key", sino muestra el numero.
 * 
 */

// Descomentar si se desea enviar la cantidad por PHP CLI. Ejemplo:  user@cpu:$ php linio.pho CANTIDAD
// $cantidad = (!empty($argv[1])) ? $argv[1] : 100

require_once 'class/numero.class.php';
require_once 'class/rangonumeros.class.php';

$cantidad = 100;
$numero_tres = new Numero\Numero( 3, "Linio", $cantidad );
$numero_cinco = new Numero\Numero( 5, "IT", $cantidad );

$rango_numeros = new RangoNumeros\RangoNumeros( $numero_tres , $numero_cinco  );
$rango_numeros->imprimir_rango_numeros($cantidad);