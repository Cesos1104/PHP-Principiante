<?php 
//Una variable se declara anteponiento un $
#Variable numerica
$numero = 5;
echo $numero;
echo "<br> Este es el numero: $numero";
//Aqui no es necesario concatenar las variables como en javascript
//Aunque si lo podemos hacer con un punto '.'
var_dump($numero);//Muestra el tipo de dato

#Variable texto
$palabra="palabra";
echo "<br> Esto es una $palabra";


#Variable booleana 
$booleanaT=true;
echo "<br>Esto es verdadero: $booleanaT";
$booleanaF=false;
echo "<br>Esto es falso: $booleanaF";
/*En php el booleano false se imprime como un valor vacio 
otros lenguajes de programacion lo asignan como 0 */


#Variable arreglo
//Variables que nos permiten almacenar mas de un dato, ejemplo:
$colores= array("rojo","verde","azul");
echo "<br>Estos son los colores:$colores[0] $colores[1] $colores[2]";
//Los indices, al igual que javascript comienzan con 0

#Variable arreglo con propiedades, diccionario
$verduras = array("lechuga"=>12,"jitomate"=>20);
//vamos a asignar una clave y un valor 
echo "<br>El precio de la verdura lechuga es: $verduras[lechuga]";
//Para llamar a una variable atravez de nombres y no de indices

#Variable objeto
$coche = (object)["llantas"=>4,"gasolina"=>false,"razon"=>"No hay"];
//Propiedad y atributo
echo "<br>Esto es una variable de tipo objeto: $coche->llantas";

#Variable null
$nulo=null;
echo "<br>Este es un valor nulo: $nulo";


 ?>