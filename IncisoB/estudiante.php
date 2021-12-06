<?php   
	session_start();
	$sql="select * from seguimiento where usuario='".$_SESSION["ci"]."' and fechafin is null";
	$resultado=mysqli_query($conn, $sql);
	$fila=mysqli_fetch_array($resultado);
	$sql_n="select concat(paterno,' ',materno,' ',nombre)as nombre from persona where ci='".$_SESSION["ci"]."'";
	$resultado_n=mysqli_query($conn, $sql_n);
	$fila_n=mysqli_fetch_array($resultado_n);
	$nombre=$fila_n["nombre"]; 

	$sql_sc="select * from centro c, tramite t where t.ci='".$_SESSION["ci"]."' and t.notramite like c.notramite";
	$resultado_sc=mysqli_query($conn, $sql_sc);
	$fila_sc=mysqli_fetch_array($resultado_sc);
	$estado=$fila_sc['estado'];
	?> 
	<div class ="formulario">
		<table>
				<tr><td>CI</td><td>: <?php echo $_SESSION["ci"]; ?> </td> </tr>
				<tr><td>Estudiante</td><td>: <?php echo $nombre; ?> </td> </tr>
		</table>
	</div>
	<br>
	<div class ="contenedor">
		<div>
			Fecha de Inscripción: <br>
			24-11-21 al 16-11-21
		</div><br>
			<?php
				if(empty($fila)){
					$sql2="select * from seguimiento where usuario='".$_SESSION["ci"]."' ";
					$resultado2=mysqli_query($conn, $sql2);
					$fila2=mysqli_fetch_array($resultado2);
					if(empty($fila2)){
						echo '<a class="boton3" href="iniciar.inc.php"> Iniciar inscripcion</a>';
					}else{
						if ($estado=='inscrito') {
							echo 'Tu solicitud fue aprobada tu partido está inscrito';
						}else{
							if ($estado=='rechazado') {
								echo 'Tu solicitud fue rechazada por que los datos no son válidos';
							}else{
								echo 'Tu solicitud de inscripción ha sido enviada por favor espera los resultados';
							}
						}
						
					}
				}else{
					echo 'Inscripción iniciada';
					echo "<br><br>";
				}
			?>
			<table class="tabla">
				<?php
					if(!empty($fila)){
						echo '<tr><th>Detalles</th><th style="width:20%;">Acción</th></tr>';
					}
					while($fila)
					{
						
						echo "<tr>";
						echo "<td> N° Trámite: ".$fila["notramite"]."<br>";
						echo "Flujo - Proceso: ".$fila["flujo"]." - ".$fila["proceso"]."<br>";
						echo "Fecha de Inicio: ".$fila["fechainicio"]."<br>";
						echo "Estado: Pendiente ";
				?>
					<td style='width:20%;'>
					<a class="boton3" href='desflujo.php?flujo=<?php echo $fila["flujo"]?>&proceso=<?php echo $fila["proceso"]?>&notramite=<?php echo $fila["notramite"]?>'>
						Mostrar </a> <br>		
				<?php		
						$fila=mysqli_fetch_array($resultado);
						}	
				?>
			</table>
	</div>
	
	
	