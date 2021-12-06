<div class="fecha">
			<div > <a class="boton2" href="salir.php">SALIR</a></div> 
</div> <br>
<div class="alineacion2">
        
        <div class="centro">
            <div class ="formulario"><br>
                <b>Corrige los datos</b> <br><br>
                <hr>
                <div class="fondosc"> <br>
                    Datos Generales<br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                               Nombre del partido
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="nombrefrente" value="<?php echo $fila_c["nombre"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                               Sigla
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="sigla" value="<?php echo $fila_c["sigla"] ?>" placeholder="Ejemplo: GOT" required>
                        </div>
                    </div> <br>
                    Secretaria Ejecutiva <br><br>
                   <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="1ejecutivo" value="<?php echo $fila_c["1ejecutivo"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            2° titular 
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="2ejecutivo" value="<?php echo $fila_c["2ejecutivo"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            3° titular  
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="3ejecutivo" value="<?php echo $fila_c["3ejecutivo"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    Honorable Consejo Facultativo <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="1hcf" value="<?php echo $fila_c["1hcf"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            2° titular 
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="2hcf" value="<?php echo $fila_c["2hcf"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    Consejo Académico Facultativo <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="1caf" value="<?php echo $fila_c["1caf"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    Honorable Consejo de Carrera <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="1hcc" value="<?php echo $fila_c["1hcc"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            2° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="2hcc" value="<?php echo $fila_c["2hcc"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            3° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="3hcc" value="<?php echo $fila_c["3hcc"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>
                    Consejo Académico de Carrera <br><br>
                    <div class="alineacion">
                        <div style="width: 150;">
                            1° titular
                        </div>:
                        <div style="height: 34;" class="borde">
                            <input style="height: 34;" type="text" name="1cac" value="<?php echo $fila_c["1cac"] ?>" placeholder="Nombre completo" required>
                        </div>
                    </div> <br>     
                </div>
            </div>
        </div> <br>
    <div class="centro">
        <img src="./images/centro.png"/> <br> <br>
            <div class="formulario">
            <br>Observación del CEI: 
                    <?php
                    echo $observacion;
                    ?><br><hr>
                Por favor asegúrate de llenar los datos correctamente para cada cargo en el siguiente orden: <br>
                <b>Ap Paterno Ap Materno Nombre</b> 
            </div>
    </div>
</div>
