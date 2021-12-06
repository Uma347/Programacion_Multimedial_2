<html>
	<head>
		<title>CEI</title>
        <link href="estilo1.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="fondoi">
        <?php include "cabecera.inc.php";?>
        <br>
        <div class="alineacion2">
        <div class="centro"> 
            <div class="formulario">
                <form action="controlindex.php" method="GET">
                    <div>
                        <div>
                            <h3>INGRESO AL SISTEMA</h3>
                         
                            <div class="alineacion">  
                                <input type="text" name="usuario" value="" placeholder="Ingresa tu CI" required>
                                <div >
                                    <img src="./images/usuario.png"/> 
                                </div>
                            </div><hr>
                        </div> 
                        <div >
                            <div class="alineacion">

                                <input type="password" name="contrasenia" value="" placeholder="Password" required>
                                <div>
                                    <img src="./images/passwd.png"/> 
                                </div>
                            </div><hr>
                        </div>
                        <br>
                        <button type="submit" class="boton1">
                        Acceder
                        </button>
                    </div>
                </form>     
            </div>
        </div> <br>
        <div class="centro"> 
            <img src="./images/centro.png"/> <br>
            <div class="formulario">
                Bienvenido al sistema de inscripción y seguimiento
                para postulantes a centro de estudiantes 
                de la carrera de informática de la UMSA
            </div>
        </div>
        </div> <br>
    
    <div class="alinecion2">
        <h1>2021- 2023</h1>
    </div>
    </body>
</html>






