<?php
session_start();
$sql_r="UPDATE centro SET estado = 'rechazado' WHERE notramite like $notramite";
echo $sql_r;
mysqli_query($conn, $sql_r);
?>