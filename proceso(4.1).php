<?php 
echo "Hola este es el proceso php";
/*Ahora veremos como obtener el valor con PHP
Y decimos: hay una variable con el metodo get 
que se llama usuario,contraseña,password y correo*/
$usuario=$_GET['usuario'];
$password=$_GET['password'];
$correo=$_GET['correo'];
echo "<h1>Bienvenido usuario $usuario</h1>",
"Tu correo es: $correo <br> Tu contraseña es:$password";

/*PARA EL METODO POST
Decimos: hay una variable con el metodo post 
que se llama usuario,contraseña,password y correo*/
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$correo=$_POST['correo'];
echo "<h1>Bienvenido usuario $usuario</h1>",
"Tu correo es: $correo <br> Tu contraseña es:$password";
?>