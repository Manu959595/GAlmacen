<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Borrar un Proveedor</h1>
    <p class="text-danger">Por favor, revise los datos del proveedor antes de confirmar el borrado.</p>
</div>
<div>
    <?php
        // Recoge el CIF del proveedor enviado por POST
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "proveedores";
        
        // Sentencia SQL preparada para SQLite (Buscamos por CIFprov)
        $sentencia = "SELECT * FROM $tabla WHERE CIFprov = :id";    
        
        $stmt = $c->prepare($sentencia);
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);
        
        // Ejecutamos la consulta
        $resultado = $stmt->execute();

        // Tabla para mostrar resultado con tus estilos
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        // Obtenemos el registro
        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices según tu GAlmacen.sql para la tabla 'proveedores': 
            // 0=CIFprov, 1=nombreprov, 2=direccion, 3=nacionalidad, 4=representante, 5=email, 6=telefono
            
            echo "<tr><td class='text-end w-25'>CIF PROVEEDOR: </td><td class='px-3'><b>", htmlspecialchars($registro[0]), "</b></td></tr>";
            echo "<tr><td class='text-end'>NOMBRE EMPRESA: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            echo "<tr><td class='text-end'>DIRECCIÓN: </td><td class='px-3'>", htmlspecialchars($registro[2]), "</td></tr>";
            echo "<tr><td class='text-end'>NACIONALIDAD: </td><td class='px-3'>", htmlspecialchars($registro[3]), "</td></tr>";
            echo "<tr><td class='text-end'>REPRESENTANTE: </td><td class='px-3'>", htmlspecialchars($registro[4]), "</td></tr>";
            echo "<tr><td class='text-end'>EMAIL: </td><td class='px-3'>", htmlspecialchars($registro[5]), "</td></tr>";
            echo "<tr><td class='text-end'>TELÉFONO: </td><td class='px-3'>", htmlspecialchars($registro[6]), "</td></tr>";
            
        } else {
             echo "<tr><td colspan='2' class='text-center text-danger'>Error: No se encontró el proveedor especificado.</td></tr>";
        }
    
        echo "</table>";    
        
        // Cerramos recursos
        $stmt->close();
        $c->close();
    ?>        
</div>
       
<div class="bg-primary rounded mt-4">    
    <div class="row m-0 p-3 align-items-center"> 
        
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-light border-end">   
            <form action="EliminaProveedor.php" method="post" class="m-0 text-center">           
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                
                <input type="submit" class="btn btn-danger font-weight-bold mb-2" value="CONFIRMAR BORRADO">
                <p class="m-0 small text-warning"><i class="bi bi-exclamation-triangle"></i> Esta acción eliminará al proveedor permanentemente.</p>
            </form>
        </div>
        
        <div class="col-md-6 d-flex justify-content-center align-items-center">                
            <form action="GProveedores.php" method="post" class="m-0">           
                <input type="submit" class="btn btn-light font-weight-bold text-primary" value="CANCELAR Y VOLVER AL LISTADO">
            </form>
        </div>
        
    </div>
</div>

<?php
    //Cargar el marco inferior
    require_once('marcoinf.php');
?>