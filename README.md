# EXAMEN DE LINIO

Se debe resolver el algoritmo enviado por Multiplica con los siguiente requerimientos:

Write a program that prints all the numbers from 1 to 100. However, for
multiples of 3, instead of the number, print "Linio". For multiples of 5 print
"IT". For numbers which are multiples of both 3 and 5, print "Linianos".
But here's the catch: you can use only one `if`. No multiple branches, ternary
operators or `else`.

## Requerimientos del problema

* 1 if
* You can't use `else`, `else if` or ternary
* Unit tests
* Feel free to apply your SOLID knowledge
* You can write the challenge in any language you want. Here at Linio we are
big fans of PHP, Kotlin and TypeScript

## INFORMACION 

El algorimo fue desarrollado con paradigma orientado a objetos. 

Nota: Se desestimó la idea de usar un framework como codeigniter o symfony por considerar ineficiente sumar una gran cantidad de código que no será utilizado.

 
### INSTALACION

El algorimo se encuentra en: ./src/index.php
Las clases se encuentran en: ./src/clases/



## TEST UNIT

Se decidió utilizar la libreria PHPUNIT para realizar las pruebas unitarias a las clases.
 
Las mismas deben ejecutarse desde PHP CLI ( consola )
```
$ ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/numeroTest.php
OK (3 tests, 6 assertions)

$ ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/rangoNumerosTest.php
OK (2 tests, 2 assertions)

```
 

## TECNOLOGÍAS UTILIZADAS

* [PHP 7.3](https://www.php.net/) - El lenguaje utilizado
* [PHP UNIT](https://phpunit.de/) - Framework de testeo
* [COMPOSER](https://getcomposer.org//) - Manejo de dependencias PHP

 
## AUTOR

* **Ing. Adrian Matias Magliola** - (https://github.com/amaglio)
 