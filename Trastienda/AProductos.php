<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
    <div class="col-10 mt-3">
        <h1>Alta de Proveedor</h1>
    </div>

    <div class="p-2">
        <form name="fichaProveedor" action="VisorAltaProveedor.php" method="POST">       
            
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group mb-3">   
                        <label for="cifprov" class="font-weight-bold">CIF del Proveedor (ID):</label>
                        <input type="text" class="form-control" name="cifprov" id="cifprov" maxlength="20" placeholder="Ej: A12121212" required>
                    </div>

                    <div class="form-group mb-3">   
                        <label for="nombreprov" class="font-weight-bold">Nombre de la Empresa:</label>
                        <input type="text" class="form-control" name="nombreprov" id="nombreprov" maxlength="100" required>
                    </div>  
                    
                    <div class="form-group mb-3">   
                        <label for="direccion" class="font-weight-bold">Dirección Postal:</label>
                        <input type="text" class="form-control" name="direccion" id="direccion" maxlength="200">
                    </div> 

                    <div class="form-group mb-3">   
                        <label for="nacionalidad" class="font-weight-bold">Nacionalidad:</label>
                        <input type="text" class="form-control" name="nacionalidad" id="nacionalidad" maxlength="50" placeholder="Ej: Española">
                    </div> 
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">   
                        <label for="representante" class="font-weight-bold">Persona de Contacto / Representante:</label>
                        <input type="text" class="form-control" name="representante" id="representante" maxlength="100">
                    </div>

                    <div class="form-group mb-3">   
                        <label for="email" class="font-weight-bold">Correo electrónico:</label>
                        <input type="email" class="form-control" name="email" id="email" maxlength="100" required>
                    </div> 
                    
                    <div class="form-group mb-3">   
                        <label for="telefono" class="font-weight-bold">Teléfono de contacto:</label>
                        <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20">
                    </div>

                    <div class="alert alert-info mt-4">
                        <small><i class="bi bi-info-circle"></i> Al dar de alta un proveedor, el sistema generará automáticamente un usuario de acceso con su CIF y una contraseña provisional.</small>
                    </div>
                </div>
            </div>

            <div class="form-group text-center bg-primary p-3 rounded mt-3">
                <input type="submit" class="btn btn-light font-weight-bold px-4" value="Guardar Proveedor">
                    &nbsp;&nbsp;&nbsp; 
                <input type="reset" class="btn btn-warning px-4" value="Borrar Formulario">   
            </div>                              
        </form>        
        
        <div class="row mt-4">    
            <div class="col-12 text-center p-2 bg-primary text-white rounded">                
                <form action="GProveedores.php" method="post" class="m-0">
                    <p class="mb-1">Volver al listado...</p>
                    <input type="image" src="estilos/BTNVOLVER.jpg" name="volver" height="30" alt="Volver a Gestión de Proveedores">
                </form>
            </div>
        </div>
    </div>                

<?php 
    // Carga el marco inferior
    require_once('marcoinf.php');
?>