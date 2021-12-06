<?php     
		session_start();
		include "conexion.inc.php";
		$sql="select * from seguimiento where usuario='CEI' and fechafin is null";
		$resultado=mysqli_query($conn, $sql);
		$fila=mysqli_fetch_array($resultado);
		$sql="select * from centro where estado='inscrito'";
		$resultado2=mysqli_query($conn, $sql);
		$centro=mysqli_fetch_array($resultado2);
		$sql_n="select concat(paterno,' ',materno,' ',nombre)as nombre from persona where ci='".$_SESSION["ci"]."'";
		$resultado_n=mysqli_query($conn, $sql_n);
		$fila_n=mysqli_fetch_array($resultado_n);
		$nombre=$fila_n["nombre"];
		?> 
	<div class ="formulario">
		<div class ="alineacion2">
			<div class ="centro">
				BANDEJA DE CEI
				<table>
					<tr><td>CI del usuario</td><td>: <?php echo $_SESSION["ci"]; ?> </td> </tr>
					<tr><td>Nombre Completo</td><td>: <?php echo $nombre; ?></td> </tr>
				</table>
			</div> <br>
			<div class ="centro">
			Postulantes inscritos hasta la fecha:
			<table class="tabla">
			<?php
				if(!empty($centro)){
					echo '<tr><th>Nombre</th><th>Sigla</th>';
				}?>
			</table>
			<div class="fondosc3">
			
			<table style="background: none;"class="tabla">
						<?php
						while($centro)
						{
							echo "<tr>";
							echo "<td>".$centro["nombre"]."</td>";
							echo "<td>".$centro["sigla"]."</td>";
							echo "</tr>";
							$centro=mysqli_fetch_array($resultado2);
						}	
						?>
						
			</table></div>

			

			</div>
		</div>
	</div> <br>
	<div class="contenedor">
		<div>
			Fecha de Inscripción: <br>
			24-11-21 al 16-11-21
		</div><br>
		<table class="tabla">
			<?php
				if(!empty($fila)){
					echo '<tr><th>Trámite</th><th>Flujo</th><th>Proceso</th><th>Fecha Inicio</th><th>Acción</th></tr>';
				}?>
		</table>
		<div class="fondosc3">
		<table class="tabla">
			<?php
				if(!empty($fila)){
					while($fila)
					{
						echo "<tr>";
						echo "<td>".$fila["notramite"]."</td>";
						echo "<td>".$fila["flujo"]."</td>";
						echo "<td>".$fila["proceso"]."</td>";
						echo "<td>".$fila["fechainicio"]."</td>";
						echo "<td><a ";
						echo "href='desflujo.php?flujo=$fila[flujo]&proceso=$fila[proceso]&notramite=$fila[notramite]&inicio=$fila[fechainicio]&id=$fila[id]'";
						echo ">Mostrar<a/></td>";
						echo "</tr>";
						$fila=mysqli_fetch_array($resultado);
					}
				}else{
					echo 'No existen tramites pendientes';
				}
						
				?>
		</table>
		</div><br>	
	
	</div> 