<!--Get y Post son metodos con los que el navegador puede 
enviar información al servidor.
 	GET  Información se envía de forma visible
 	POST Información se envía de forma no visible **Mas usado
FORMULARIOS
Estos metodos los podemos ocupar en formularios, 
por lo que crearemos uno.-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET Y POST</title>
</head>
<style type="text/css">
	table, tr,td{
		border: 1px solid black;
	}
</style>
<body>
	<center>
		<!--Esto despues de acabar el diseño del formulario

		Primero veremos con el metodo "get" y despues con el metodo "post"
		Esta linea dice: cuando presiones el boton submit,
		envias la informacion a proceso.php por el metodo get
		-->
		<form name="formulario" action="proceso.php" method="get">
			<!--Por lo que hay que crear el archivo de este proceso.
			Es un metodo inseguro, ya que revela los datos por la url-->
		<!--<form name="formulario" action="proceso.php" method="post">-->
		<table>
			<h1>Formulario:</h1>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="usuario" placeholder="Escribe tu usuario"></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="password" name="password" placeholder="Contaseña"></td>
			</tr>
			<tr>
				<td>Correo:</td>
				<td><input type="email" name="correo" placeholder="Correo electronico"></td>
			</tr>
			<!--colspan es una propiedad para juntar columnas como en excel-->
			<tr>
				<td colspan="2" align="right"><input type="submit" name="" value="Registrarse" ></td>
			<!--Un 'button' es solo eso, un botón, al cual puede agregar funcionalidad adicional usando Javascript. El 'submit' tiene la funcionalidad predeterminada de enviar el formulario en el que se encuentra (aunque tambien se le puede agregar una funcionalidad adicional utilizando Javascript).-->
			</tr>
		</table>
	</form>
	</center>
</body>
</html>