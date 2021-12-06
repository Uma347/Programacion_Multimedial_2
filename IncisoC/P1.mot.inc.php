<?php
$sql_c="INSERT INTO centro (nombre,sigla,1ejecutivo,2ejecutivo,3ejecutivo,1hcf,2hcf,1caf,1hcc,2hcc,3hcc,1cac,notramite,estado) ";
$sql_c.="VALUES('".$_GET["nombrefrente"]."','".$_GET["sigla"]."','".$_GET["1ejecutivo"]."','".$_GET["2ejecutivo"]."','".$_GET["3ejecutivo"]."','";
$sql_c.=$_GET["1hcf"]."','".$_GET["2hcf"]."','".$_GET["1caf"]."','".$_GET["1hcc"]."','".$_GET["2hcc"]."','".$_GET["3hcc"]."','".$_GET["1cac"]."','";
$sql_c.=$notramite."','postulante')";
echo '<br>';
echo $sql_c;
mysqli_query($conn, $sql_c);
?>
