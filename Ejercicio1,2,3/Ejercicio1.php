<?php
//print es un constructor de lenguaje
print 'Hola';
//La operación anterior es equivalente a
print("esta es otra manera de imprimir un mensaje");

/**echo vs print
Ambos son constructores de lenguaje que muestran cadenas de texto con diferencias algo sutiles.
Esta es la forma y tipo de cada uno:
//*int print ( string $arg )
//*void echo ( string $arg1 [, string $... ] )

De la definición anterior podemos deducir que:
//*print imprime una cadena, 
//! echo puede imprimir más de una separadas por coma:
*/
echo "<br>"; echo "<br>"; echo "<br>";
echo "<b><h1>echo vs print</h1></b>";
print 'este es un print';
echo "<br>";
echo 'Echo', 'Esta funcion imprime mas de un mensaje, separados por una , ';

/**Estas dos funciones imprimen los detalles de una variable, incluyendo su valor, 
en un formato legible por el humano. Si es un array o un objeto 
también imprimen los detalles de cada elemento. Se utilizan frecuentemente durante la depuración 
de código, situación en la que var_dump suele ser más útil por la mayor información que proporciona. 
Las diferencias:
//* 1) Si el valor de la variable es una cadena de texto,var_dump 
//* imprime la cadena entre dobles comillas, print_r no.

//*2 print_r no imprime nada visible para false y cadenas vacías.

//*3 var_dump proporciona información sobre el tamaño y tipo de datos de la variable, en el caso de arrays
//* y objetos, de los elementos que la componen. print_r no da información sobre el tamaño de la variable
//* ni sobre el tipo de datos.

//*! EJEMPLO:

 */

echo "<h4>Ejemplo de print_r</h4>";

$a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a); // $a contiene ahora la salida de print_r

//Sacar el valor de una variable
$numero = 6.3;
print_r ($numero);

echo "<br>"; echo "<br>";
echo "<h1>print_r vs var_dump</h1>";
echo "<h4>Ejemplo de var_drump </h4>";
$Estudiante = array
(
array("Yesenia","Yechito0","yes"),
array("Huerta"),
array("Stilynsoon","Sykes","Berryman")
);
var_dump ($Estudiante)

?>