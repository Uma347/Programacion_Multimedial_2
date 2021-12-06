<?php
session_start();
$sql_c="UPDATE centro SET estado = 'inscrito' WHERE notramite like $notramite";
echo $sql_c;
mysqli_query($conn, $sql_c);
?>