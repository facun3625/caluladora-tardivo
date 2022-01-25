<?php 
	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "c0230466_cal";    // sera el valor de nuestra BD 
	$usuariodb = "c0230466_cal";    // sera el valor de nuestra BD 
	$clavedb = "bemoLA29wa";    // sera el valor de nuestra BD 

	//Lista de Tablas
	$tabla_db1 = "valores"; 	   // tabla de usuarios
	

	error_reporting(0); //No me muestra errores
	
	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);


	if ($conexion->connect_errno) {
	    echo "Nuestro sitio experimenta fallos....";
	    exit();
	}

?>