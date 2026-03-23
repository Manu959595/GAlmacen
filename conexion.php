<?php
#--------------------------------------------
#  La forma de utilizar este archivo es con la siguiente instrucción en la primera línea:

#  php require_once('gest/conexion.php');

#  require 'gest/conexion.php';

#---------------------------------------------------
	// Crea la gase de datos y recoge la conexión en la variable $c
	//$c=new SQLite3('db/gestproy_sqlite.db') or die("¡No se puede abrir la base de datos!");
	$c=new SQLite3('db/GAlmacen.db') or die("¡No se puede abrir la base de datos!");
	// Las siguientes sentencias se pueden utilizar para crear la estructura de tablas
	// Construye la Sentencia SQL para crear las tablas de la BD
	//$query="	";
	// Ejecuta la sentencia SQL
	//$c->exec($query);
?>