<?php
session_start();
$ci=$_SESSION["ci"];
$sql_c="select * from persona where ci='$ci'";
$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);
$nombre=$fila_c["paterno"]." ".$fila_c["materno"]." ".$fila_c["nombre"];

?>
