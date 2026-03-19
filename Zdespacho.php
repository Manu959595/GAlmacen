<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
      
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
			// Comprueba si viene (por el método GET) un valor para mostrar ventana de mensaje
			if (isset($_GET['errorusuario'])) 
			{						
				//Cargamos la ventana modal por si hay que mostrar mensajes.							
				$texto="NO es correcto. Por favor, compruebe nombre de usuario y contraseña.";
				include ("Trastienda/gest/ModalMensajes.php");
			?>
				<script>
					$(document).ready(function()
					{
						$("#Mensaje").modal("show");
					});
				</script>
			<?php
			}
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
?>

<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("llave");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>


  <div class="py-5 bg-info">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-primary">Acceso al sistema como usuario registrado</h1>
        </div>
      </div>
      <div class="text-center row">
        <div class="col-md-3">          
        </div>   
        <div class="col-md-6  text-primary">
		<!-- Formulario que toma las credenciales de acceso y llama al visor de comprobación Zcontrol.php -->
            <form action="Zcontrol.php" method="POST">   
                <hr>
                <h3 class="text-center">
                    <i class="bi bi-person-bounding-box"> Usuario</i><br>
                    <input type="Text" name="usuario" value="" size="30" maxlength="50">
                </h3>
                <hr>

                      <h3 class="text-center">
                        <i class="bi bi-upc-scan"> Contraseña</i><br>
                        <input ID="llave" type="Password" name="llave" value="" size="25" maxlength="50">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                     
                      </h3>

                <hr>
                <input type="Submit" class="btn btn-success" value="ENTRAR"> - 
                <input type="reset"  class="btn btn-warning" value="BORRAR">
            </form>
        </div>
        <div class="col-md-3">          
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
  
