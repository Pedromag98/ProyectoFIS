<?php
		// Conectando, seleccionando la base de datos
		$user="root";
		$pass="";
		$server="localhost";
		$db="examendep";
		$con=mysqli_connect($server,$user,"",$db) or die("Error al conectar a la Base de Datos".mysql_error());
		return $con;
		?>