<?php 
/*Realizar tareas conforme a acontecimientos*/
#Condicion if-else
$a=5;
$b=10;
if ($a>$b){
echo "$a es mayor que $b";
}else if($a == $b){
echo "$a es igual que $b";
}else
echo "$a es menor que $b";

echo "<br><br>";
#Switches
$dia="sabado";
switch ($dia) {
	case 'sabado':
		echo "Hoy es sabado";
		break;
	case 'domingo':
	echo "Hoy es domingo";
	break;
	
	default:
		echo "No es un dia de la semana";
		break;
}

#Ciclo While
$n =1;
while ($n <= 10) {
	echo "$n <br>";
	$n++;
}

#Ciclo do-while
$p=1;
do{
	echo "$p <br>";
	$p++;
}while ($p <= 10);

#Ciclo for 
for($i=0;$i<5;$i++){
	echo "$i <br>";
}
?>