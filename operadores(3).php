<?php 
/*{Un operador nos permite realizar una operación 
entre uno o más valores.
Existen una serie de operadores que podemos utilizar*/
#Operacion de asignacion
$a=10;
$b=3;
//$a+=$b; => $a=$a+$b;
//$a-=$b; => $a=$a-$b;
//$a*=$b; => $a=$a*$b;
//$a/=$b; => $a=$a/$b;
//$a%=$b; => $a=$a%$b;
echo "$a<br>";



#Operadores aritmeticos
echo "SUMA: ", $a+$b;
echo "<br>RESTA: ", $a-$b;
echo "<br>MULTIPLICACION: ", $a*$b;
echo "<br>DIVISION: ", $a/$b;
echo "<br>MODULO: ", $a%$b;
echo "<br>POTENCIA: ", $a**$b;
echo "<br><br>";



#Operadores de comparacion
#Con la variable null
$nulo=null;
echo "<br>Este es un valor nulo: $nulo";

$nulo_es_dif_de_falso=($nulo == false);
echo "<br>Nulo es igual que false:$nulo_es_dif_de_falso";
$nulo_es_dif_de_falso=($nulo === false);
echo "<br>Nulo es exactamente igual que false:$nulo_es_dif_de_falso";
//por que no son del mismo tipo de dato



#Operadores logicos
$c= ($a>$b && $a==0);
echo $c;

 ?>