<?php

var_dump(5);

//var_dump(2 + 4 + 5 + 8);
//
//var_dump(!!!true);
//
//var_dump(2 + 3 / 3 / 2 ** 2 % 2);
//
//var_dump(!(null ?? false || 5 < 10));
//
//var_dump ($value = 3 > 2 && 5 == 4 || !true || !false);
//
//var_dump($e = true || $x = 'foo' && true);
//var_dump($e);
//var_dump($x);
//
//var_dump($e = true || $x = 'foo');
//var_dump($e);
//var_dump($x);
//
//var_dump($e = true or $x = 'foo');
//var_dump($e);
//var_dump($x);
//
//var_dump("es " . (5 > 10 ? "verdad" : "mentira"));

// var_dump(match(1){1,2,3,4 => "No Apto", 5,6,7,8,9,10 => "Apto"});






// Expresiones
// Aritmeticas

// Formula Calculo Círculo

//define ("PI", 3.1416);
//$r = 10;
//var_dump (PI * $r ** 2);


// Formula de perímetro de un reactangulo
//$b = 10;
//$a = 2;
//var_dump(($a + $b) * 2);


// Formula gravitación universal

//define ("G", 6.674E-11);
//$m1 = 800;
//$m2 = 500;
//$d = 3;
//var_dump(G * $m1 * $m2 / $d ** 2);

// Expresion para transformar una nota numérica en una cadena
$nota = 8;
var_dump(match($nota) {1,2,3,4 => "Insuficiente", 5 => "Suficiente", 6 => "Bien", 7, 8 =>"Notable", 9, 10 =>"Sobresaliente"});
// Expresión booleana que dice si un año es bisiesto
//$anyo = 2012;
//var_dump(($anyo % 4 == 0 && $anyo % 100 != 0) || $anyo % 400 == 0);

// Expresión que decide si una persona es mayor de edad o no dada su edad y deja el valor en la variable adulto
$edad = 3;
var_dump ($adulto = $edad > 18);



