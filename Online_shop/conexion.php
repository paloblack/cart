<?php
$bd = 'db701094507';
$usuario = 'dbo701094507';
$pass = 'Carlos922';
$host = 'db701094507.db.1and1.com';
$mysqli = new mysqli($host, $usuario, $pass, $bd);
$mysqli->query("SET NAMES 'utf8'");

if ($mysqli->connect_errno) 
{
	echo "Error de conexion: (" . $conexion->connect_errno .") " . $conexion->connect_error;
}

?>