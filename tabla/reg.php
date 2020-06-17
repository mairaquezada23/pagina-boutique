<?php
	//conexion con la base de datos y el servidor
	$conexion = mysql_connect ("localhost","root","", "usuarios");
	if(!$conexion){
		echo'
		Erroral conectar la base de datos';
	}
	else{
		echo'
		Conectando la base de datos';

	}

	//obtenemos los valores del formulario
	$nombre = $_POST['nombreusuar'];
	$email = $_POST['emailusuar'];
	$mensaje = $_POST['mensajeusuar'];

	//Obtiene la longitus de un string
	$req = (strlen($nombre)*strlen($email)*strlen($mensaje)) or die("No se han llenado todos los campos");
	
	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO datos VALUES('','$nombres','$email','$mensaje')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'

		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>