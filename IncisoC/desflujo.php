<html>
	<head>
		<title>CEI</title>
        <link href="estilo1.css" rel="stylesheet" type="text/css" />
	</head>
<body>
	<?php
	session_start();
	include "cabecera.inc.php";
	include "conexion.inc.php";
	$flujo=$_GET["flujo"];
	$proceso=$_GET["proceso"];
	$notramite=$_GET["notramite"];

	$sql="select * from flujoproceso where flujo='".$flujo."' and proceso='".$proceso."'";
	$resultado=mysqli_query($conn, $sql);
	$fila=mysqli_fetch_array($resultado);
	if ($fila['rol']!=$_SESSION["rol"]) {
		echo $fila['rol'].'<br>';
		echo $_SESSION["rol"].'<br>sesiooooooooo';
		header("Location: bandeja.php");
	}
	include $fila['formulario'].'.cab.inc.php';
	// }
	if($fila['tipo']=='C'){
		$sql_c="select * from flujocondicionante  where proceso='".$proceso."'";
		$resultado_c=mysqli_query($conn, $sql_c);
		$fila_c=mysqli_fetch_array($resultado_c);
		include 'condicional.php';
	}else{
	?>	
	<form action="motflujo.php" method="GET">
		<?php
		include $fila['formulario'].'.inc.php';
		?>
		<div class="alinecion2">
			<br>
			<input type="hidden" value="<?php echo $fila['formulario'];?>" name="formulario"/>
			<input type="hidden" value="<?php echo $flujo?>" name="flujo"/>
			<input type="hidden" value="<?php echo $proceso?>" name="proceso"/>
			<input type="hidden" value="<?php echo $notramite?>" name="notramite"/>
			<div>  <a style=""href="bandeja.php"class="boton4">&nbsp; &nbsp; Salir &nbsp; &nbsp;</a>
			<input  class="boton4" type="submit" value="Siguiente" name="Siguiente"/>
			</div>
	   	</div>
	</form>	
	<?php
		}
	?>
</body>
</html>