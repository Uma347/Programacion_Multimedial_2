<?php
include "conexion.inc.php";
$usuario=$_GET["usuario"];
$contrasenia=$_GET["contrasenia"];
$sql="select * from usuarios where ci='".$usuario;
$sql.="' and contrasenia='".$contrasenia."'";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
echo $fila["usuario"]; 
$nombre=$fila["usuario"]; 



if ($fila["ci"]==$usuario and $fila["contrasenia"]==$contrasenia)
{
	session_start();
	$_SESSION["ci"]=$usuario;
	// $_SESSION["nombre"]=$nombre;
	$_SESSION["rol"]=$fila["rol"];
	header("Location: bandeja.php");
}
else
{
	header("Location: index.php");
}
?>
