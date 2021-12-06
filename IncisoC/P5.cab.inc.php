<?php
session_start();
$sql_c="select * from centro where notramite='$notramite'";
$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);
$sql_o="select * from observacion where notramite='$notramite'";
$resultado_o=mysqli_query($conn, $sql_o);
$fila_o=mysqli_fetch_array($resultado_o);
$observacion=$fila_o["observacion"];

?>
