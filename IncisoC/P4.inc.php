<div class="fecha">
	<div > <a class="boton2" href="salir.php">SALIR</a></div> 
</div> <br>
<div class="alineacion2">
        
        <div class="centro">
            <div class ="formulario"><br>
                <b>Datos Aceptados por CEI </b> <br><br>
                <hr>
                <div class="fondosc"> <br>
                    Datos Generales<br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                               Nombre del partido
                        </div><?php echo ': '.$fila_sc["nombre"] ?>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                               Sigla
                        </div><?php echo ': '.$fila_sc["sigla"] ?>
                    </div> <br>
                    Secretaria Ejecutiva <br><br>
                   <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div><?php echo ': '.$fila_sc["1ejecutivo"] ?>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            2° titular 
                        </div><?php echo ': '.$fila_sc["2ejecutivo"] ?>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            3° titular  
                        </div><?php echo ': '.$fila_sc["3ejecutivo"] ?>
                    </div> <br>
                    Honorable Consejo Facultativo <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div><?php echo ': '.$fila_sc["1hcf"] ?>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            2° titular 
                        </div><?php echo ': '.$fila_sc["2hcf"] ?>
                    </div> <br>
                    Consejo Académico Facultativo <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div><?php echo ': '.$fila_sc["1caf"] ?>
                    </div> <br>
                    Honorable Consejo de Carrera <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div><?php echo ': '.$fila_sc["1hcc"] ?>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            2° titular
                        </div><?php echo ': '.$fila_sc["2hcc"] ?>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            3° titular
                        </div><?php echo ': '.$fila_sc["3hcc"] ?>
                    </div> <br>
                    Consejo Académico de Carrera <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div><?php echo ': '.$fila_sc["1cac"] ?>
                    </div> <br>     
                </div>
            </div>
        </div> <br>
    <div class="centro">
        <img src="./images/hoja.png"/> <br> <br>
            <div class="formulario">
                Nro de Trámite: <?php echo $notramite ?> <br>
                Proceso: <?php echo $proceso ?> <br>
            </div>
    </div>
</div>