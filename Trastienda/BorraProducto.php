<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Borrar un Producto</h1>
    <p class="text-danger">Por favor, revise los datos del producto antes de confirmar el borrado.</p>
</div>
<div>
    <?php
        // Recoge la variable enviada por POST (id del producto)
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "productos";
        
        // Sentencia SQL preparada para SQLite
        $sentencia = "SELECT * FROM $tabla WHERE id_producto = :id";    
        
        $stmt = $c->prepare($sentencia);
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        
        // Ejecutamos la consulta
        $resultado = $stmt->execute();

        // Inicializamos $foto vacía por si no hay imagen
        $foto = "";

        // tabla para mostrar resultado
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        // Obtenemos el registro (fetchArray)
        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices según tu base de datos (GAlmacen.sql): 
            // 0=id_producto, 1=nombreproducto, 2=descripcion, 3=precio, 4=stock, 5=foto, 6=pais, 7=CIF
            
            echo "<tr><td class='text-end w-25'>ID PRODUCTO: </td><td class='px-3'><b>", htmlspecialchars($registro[0]), "</b></td></tr>";
            echo "<tr><td class='text-end'>NOMBRE: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            echo "<tr><td class='text-end'>DESCRIPCIÓN: </td><td class='px-3'>", htmlspecialchars($registro[2]), "</td></tr>";
            echo "<tr><td class='text-end'>PRECIO: </td><td class='px-3'><b>", number_format($registro[3], 2, ',', '.'), " €</b></td></tr>";
            echo "<tr><td class='text-end'>STOCK ACTUAL: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), "</b></td></tr>";
            echo "<tr><td class='text-end'>PAÍS: </td><td class='px-3'>", htmlspecialchars($registro[6]), "</td></tr>";
            echo "<tr><td class='text-end'>CIF PROVEEDOR: </td><td class='px-3'>", htmlspecialchars($registro[7]), "</td></tr>";
            
            echo "<tr><td class='text-end align-middle'>IMAGEN: </td><td class='px-3'>";
            
            // Asignamos la foto a la variable
            $foto = $registro[5];
            
            // Comprobamos si hay imagen. En productos suelen estar en la carpeta 'imagenes/'
            $ruta_foto = empty($foto) ? 'estilos/caja.png' : 'imagenes/' . $foto;
            echo "<img src='../$ruta_foto' width='80' class='rounded shadow-sm border mb-2'><br>";
            echo "<b>", htmlspecialchars($foto), "</b>";
            
            echo "</td></tr>";      
        } else {
             echo "<tr><td colspan='2' class='text-center text-danger'>Error: No se encontró el producto especificado.</td></tr>";
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
            <form action="EliminaProducto.php" method="post" class="m-0 text-center">           
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <input type="hidden" name="imagen" value="<?php echo htmlspecialchars($foto); ?>">
                
                <input type="submit" class="btn btn-danger font-weight-bold mb-2" value="CONFIRMAR BORRADO">
                <p class="m-0 small text-warning"><i class="bi bi-exclamation-triangle"></i> Esta acción eliminará el producto de forma permanente.</p>
            </form>
        </div>
        
        <div class="col-md-6 d-flex justify-content-center align-items-center">                
            <form action="GProductos.php" method="post" class="m-0">           
                <input type="submit" class="btn btn-light font-weight-bold text-primary" value="CANCELAR Y VOLVER AL LISTADO">
            </form>
        </div>
        
    </div>
</div>

<?php
    //Cargar el marco inferior
    require_once('marcoinf.php');
?>