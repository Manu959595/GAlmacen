<?php

// Reanudar la sesión iniciada
session_start();
// Recoge el nombre del usuario de la sesión
$nombre=$_SESSION['LOGIN'];
// Cerramos la sesión iniciada
session_destroy();

    // Carga el marco superior
	require_once('marcosup.php');

?>
 <div class="py-5 bg-info" style="height:100%; width:100%; position:absolute; right:0px; bottom:0px; background-image: url(imagenes/Entrada.jpg);	background-position: bottom left;	background-size: 100%;	background-repeat: no-repeat;">

	  <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 text-center">
            <h2 class="text-primary">Sistema de Información Turaniana</h2>            
            <br>			
            <div class="bg-dark-opaque text-warning" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.9));	background-position: top right;	background-size: 100%;	background-repeat: repeat;">
              <h3>"<?php echo $_SESSION['LOGIN']?>" Ha abandonado la sesion. </h3>
            </div>
          </div>
        </div>
      </div>
  </div>
<?php

    //Carga el marco inferior
	require_once('marcoinf.php');
?>	
  
