<?php
session_start();
$sql_c="UPDATE centro SET nombre='".$_GET["nombrefrente"]."', sigla='".$_GET["sigla"]."', 1ejecutivo='".$_GET["1ejecutivo"]."', ";
$sql_c.="2ejecutivo='".$_GET["2ejecutivo"]."', 3ejecutivo='".$_GET["3ejecutivo"]."', 1hcf= '".$_GET["1hcf"]."', 2hcf= '".$_GET["2hcf"]."', ";
$sql_c.="1caf='".$_GET["1caf"]."', 1hcc='".$_GET["1hcc"]."', 2hcc='".$_GET["2hcc"]."', 3hcc='".$_GET["3hcc"]."', 1cac='".$_GET["1cac"]."' ";
$sql_c.="WHERE notramite like '$notramite'";
echo '<br>';
echo $sql_c;
mysqli_query($conn, $sql_c);

?>
