<?php

echo "El tipo y valor del literal 5 es: ";
var_dump(5);
echo "</br>";

echo "El tipo y valor de la expresión 2 + 4 + 5 + 8 es: ";
var_dump(2 + 4 + 5 + 8);
echo "</br>";

echo "El tipo y valor de la expresión !!!true es: ";
var_dump(!!!true);
echo "</br>";

echo "El tipo y valor de la expresión 2 + 3 / 3 / 2 ** 2 % 2 es: ";
var_dump(2 + 3 / 3 / 2 ** 2 % 2);
echo "</br>";

echo "El tipo y valor de la expresión !(null ?? false || 5 < 10) es: ";
var_dump(!(null ?? false || 5 < 10));
echo "</br>";

echo "El tipo y valor de la expresión \$value = 3 > 2 && 5 == 4 || !true || !false es: ";
var_dump ($value = 3 > 2 && 5 == 4 || !true || !false);
echo "</br>";

echo "El tipo y valor de la expresión \$e = true || \$x = 'foo' es: ";
var_dump($e = true || $x = 'foo');
var_dump($e);
var_dump($x);
echo "</br>";

echo "El tipo y valor de la expresión \$e = false or \$x = 'foo' es: ";
var_dump($e = false or $x = 'foo');
var_dump($e);
echo "</br>";

echo "El tipo y valor de la expresión \"es \" . (5 > 10 ? \"verdad\" : \"mentira\") es: ";
var_dump("es " . (5 > 10 ? "verdad" : "mentira"));
echo "</br>";

echo "El tipo y valor de la expresión match(1){1,2,3,4 => \"No Apto\", 5,6,7,8,9,10 => \"Apto\" es: ";
var_dump(match(1){1,2,3,4 => "No Apto", 5,6,7,8,9,10 => "Apto"});
echo "</br>";


// Construye expresiones



// Fórmula de perímetro de un reactángulo
echo "El perímetro de un rectángulo es: ";
$b = 10;
$a = 2;
var_dump(($a + $b) * 2);
echo "</br>";

// Fórmula Cálculo Área Círculo
echo "El área del círculo es: ";
define ("PI", 3.1416);
$r = 10;
var_dump (PI * $r ** 2);
echo "</br>";


// Formula gravitación universal
echo "La fuerza de gravitación es: ";
define ("G", 6.674E-11);
$m1 = 800;
$m2 = 500;
$d = 3;
var_dump(G * $m1 * $m2 / $d ** 2);
echo "</br>";


// Expresion para transformar una nota numérica en una cadena
echo "Conversión de nota numérica a nota simbólica: ";
$nota = 8;
var_dump(match($nota) {1,2,3,4 => "Insuficiente", 5 => "Suficiente", 6 => "Bien", 7, 8 =>"Notable", 9, 10 =>"Sobresaliente"});
echo "</br>";

// Expresión de año es bisiesto
echo "Expresión de año bisiesto: ";
$anyo = 2012;
var_dump(($anyo % 4 == 0 && $anyo % 100 != 0) || $anyo % 400 == 0);
echo "</br>";

// Expresión de fecha correcta
echo "Expresión de fecha correcta: ";
$anyo= 2000;
$mes = 12;
$dia = 30;
$fechaCorrecta = ($anyo > 1700) && ($anyo < 2200) &&  ($mes >= 1) && ($mes <= 12) && ($dia >= 1) &&
         ($dia <= match ($mes) {1,3,5,7,8,10,12 => 31,
                       4,6,9,11 => 30,
                       2 => ((($anyo % 4 == 0 && $anyo % 100 != 0) || $anyo % 400 == 0)) ? 29 : 28
         });
         
var_dump($fechaCorrecta);
echo "</br>";

// Conversion de tipos
echo "El valor entero de true es: ";
var_dump((int) true);
echo "</br>";
echo "El valor entero de false es: ";
var_dump((int) false);
echo "</br>";
echo "El valor entero de la cadena vacía es: ";
var_dump((int) "");
echo "</br>";
echo "El valor entero de la \"10\" es: ";
var_dump((int) "10");
echo "</br>";
echo "El valor entero de la \"hola\" es: ";
var_dump((int) "hola");
echo "</br>";
echo "El valor entero del número decimal 10.6 es: ";
var_dump((int) 10.6);
echo "</br>";
echo "El valor null es: ";
var_dump((int) null);



// Expresión mayor de edad
echo "Expresión mayor de edad: ";
$anyoActual = 2021;
$mesActual = 10;
$diaActual = 29;
$anyoNac = 2003;
$mesNac = 4;
$diaNac = 21;
var_dump($anyoActual - $anyoNac - (int)(($mesNac > $mesActual) || ($mesNac === $mesActual) && ($diaNac > $diaActual)) >= 18);
echo "</br>";        



