<?php 
//SINTAXIS
function nombre_funcion($parametros_que_recibe){
	//Acciones que ejecuta
}
#Funciones sin parametros
function saludar(){
	echo "Hola a todos <br>";
}
saludar();

#Funcion con parametros
function despedirse($despedida){
	echo "Esto es un $despedida <br>";
}
despedirse("Adios");

#Funcion con retorno
function suma($numero1,$numero2){
	return $numero1+$numero2;
}
echo "La suma de 5 mas 3 es:".suma(5,3);


 ?>