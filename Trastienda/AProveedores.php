<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
    <div class="col-10 mt-3">
        <h1>Alta de Usuario</h1>
    </div>

    <div class="p-2">
        <form name="ficha" action="VisorAltaUsuario.php" method="POST" enctype="multipart/form-data">       
            
            <div class="form-group mb-3">   
                <label for="nick">Nick o Login del usuario: (Preferiblemente DNI del usuario)</label>
                <input type="text" class="form-control" name="nick" id="nick" size="40" required>
            </div>  
            
            <div class="form-group mb-3">   
                <label for="clave">Contraseña del usuario: (Clave de acceso al sistema)</label>
                <input type="password" class="form-control" name="clave" id="clave" size="40" required>
            </div> 
            
            <div class="form-group mb-3">   
                <label for="nombape">Nombre y Apellidos del usuario:</label>
                <input type="text" class="form-control" name="nombape" id="nombape" size="40" required>
            </div>  
            
            <div class="form-group mb-3">   
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" size="40" required>
            </div> 
            
            <div class="form-group mb-3">   
                <label for="poblacion">Población:</label>
                <input type="text" class="form-control" name="poblacion" id="poblacion" size="40">
            </div> 
            
            <div class="form-group mb-3">   
                <label for="telefono">Teléfono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" size="40">
            </div> 
            
            <div class="form-group mb-4">   
                <label for="FOTO">Imagen: (Sólo admite formatos PNG o JPG. Y tamaño menor de 200Kb)</label><br>
                <small class="text-muted">(Si no seleccionas archivo, cargará esta imagen)</small><br>
                <img src="estilos/iconopersona.png" width="50px" alt="Imagen por defecto" class="mb-2">
                <br>
                <input type="file" class="form-control-file" name="FOTO" id="FOTO" accept="image/png, image/jpeg"> 
            </div> 

            <div class="form-group text-center bg-primary p-3 rounded">
                <input type="submit" class="btn btn-light font-weight-bold" value="Enviar datos">
                    &nbsp;&nbsp;&nbsp; 
                <input type="reset" class="btn btn-warning" value="Borrar los datos">   
            </div>                              
        </form>        
        
        <div class="row mt-3">    
            <div class="col-12 text-center p-2 bg-primary text-white rounded">                
                <form action="GUsuarios.php" method="post" class="m-0">
                    <p class="mb-1">Volver...</p>
                    <input type="image" src="estilos/BTNVOLVER.jpg" name="volver" height="30" alt="Volver a Gestión de Usuarios">
                </form>
            </div>
        </div>
    </div>                

<?php 
    // Carga el marco inferior
    require_once('marcoinf.php');
?>