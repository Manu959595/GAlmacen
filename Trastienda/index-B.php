<?php require_once("gest/Zseguridad.php");
// Al ser una página de acceso restringido añadimos el módulo de seguridad
	//Iniciamos código PHP
	//Cargar el marco superior de la trastienda
	require_once('marcosup-B.php');
	// Fin del código PHP
?>
<!-- -->   
<div class="py-5 bg-dark" style="height:100%; width:100%; position:absolute; right:0px; bottom:0px; background-image: url(imagenes/GestorNoticiasTuraniana.png);	background-position: bottom left;	background-size: 50%;	background-repeat: no-repeat;">
	
    <div class="container">
      <div class="row">
	    <div class="bg-none text-info col-6">			
			<div class="bg-dark-opaque text-info" >
				<img src="imagenes/GestorNoticiasTuraniana.png" width="100%" >
			</div>
        </div>
        <div class="bg-none text-info col-6">			
			<div class="bg-dark-opaque text-info" >
				<h3 class="display-4">Sistema de Información Turaniana</h3>
				<h1>Gestión de noticias</h1>
				<h2>
				   <a class="nav-link" href="ANoticias-B.php" title="Alta de Noticias">
					<span class="bi bi-clipboard-plus-fill"> Nueva Noticia</span>
				   </a>
				</h2>
			</div>
        </div>
      </div>
    </div>

</div>
<?php
	//Iniciamos código PHP
	//Cargar el marco inferior
	require_once('marcoinf.php');
	// Fin del código PHP
?>  
  
