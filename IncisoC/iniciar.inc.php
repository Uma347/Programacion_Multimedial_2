<?php
session_start();
include "conexion.inc.php";
include "date.inc.php";
$sql="SELECT COUNT(proceso)FROM seguimiento WHERE usuario like '".$_SESSION["ci"]."' AND fechafin is null";
$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
$nroproceso=$fila[0];
echo $nroproceso;
if($nroproceso==0){
    $sql="insert into tramite (ci,fecha) values('".$_SESSION["ci"]."','".$Date."')";
    mysqli_query($conn, $sql);
    echo $sql;
    $sql="select * from tramite where ci='".$_SESSION["ci"]."' and fecha like '".$Date."'";
    echo $sql;
    $resultado=mysqli_query($conn, $sql);
    $fila=mysqli_fetch_array($resultado);
    echo $fila;
    $notramite=$fila["notramite"];
    $sql_p="SELECT * FROM flujoproceso WHERE tipo like 'I'";
    echo $sql_p.'<br>';
    $resultado_p =mysqli_query($conn, $sql_p);
    $fila_p=mysqli_fetch_array($resultado_p);
    $proceso=$fila_p["proceso"];
    $flujo=$fila_p["flujo"];
    $sql="insert into seguimiento (notramite,usuario,flujo,proceso,fechainicio) values(".$notramite.",'".$_SESSION["ci"]."','".$flujo."','".$proceso."','".$Date."')";
    echo $sql;
    mysqli_query($conn, $sql);
}
header("Location: desflujo.php?flujo=".$flujo." &proceso=".$proceso."&notramite=$notramite");
?>