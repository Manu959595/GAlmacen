<?php 
    // Iniciar el buffer de salida por si hay redirecciones
    ob_start();
    
    // Iniciamos código PHP
    // Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Editar datos de un Producto</h1>
</div>
    <?php
        // Cargamos la conexión SQLite3
        require_once('conexion.php'); 
        
        // Recoge el ID del producto enviado por POST
        $id_prod = isset($_POST['id']) ? $_POST['id'] : '';    

        // Si no hay ID, error y fuera
        if (empty($id_prod)) {
            echo "<div class='alert alert-danger'>Error: No se ha especificado ningún producto para modificar.</div>";
            exit; 
        }

        $tabla = "productos";
        
        // Sentencia SQL preparada para buscar por ID de producto
        $sentencia = "SELECT * FROM $tabla WHERE id_producto = :id";    
        $stmt = $c->prepare($sentencia);
        $stmt->bindValue(':id', $id_prod, SQLITE3_INTEGER);
        
        $resultado = $stmt->execute();
        $registro = $resultado->fetchArray(SQLITE3_NUM);

        if ($registro) {
            // Índices según GAlmacen.sql: 
            // 0=id_producto, 1=nombreproducto, 2=descripcion, 3=precio, 4=stock, 5=foto, 6=pais, 7=CIF
            $id_producto     = $registro[0];
            $nombreproducto  = $registro[1];
            $descripcion     = $registro[2];
            $precio          = $registro[3];
            $stock           = $registro[4];
            $foto            = $registro[5];
            $pais            = $registro[6];
            $cif             = $registro[7];
            
            // Si la foto está vacía, ponemos una genérica de caja
            if (empty($foto)) {
                $foto_ruta = "estilos/caja.png"; 
            } else {
                $foto_ruta = "imagenes/" . $foto;
            }
        } else {
            echo "<div class='alert alert-warning'>No se ha encontrado el producto con ID: " . htmlspecialchars($id_prod) . "</div>";
            $stmt->close();
            $c->close();
            require_once('marcoinf.php');
            exit;
        }
    ?>
    
<div class="row">
    <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-4 border-end">
         <div class="card bg-light p-3 text-center shadow-sm">
             <h5 class="text-primary">Estado de Stock</h5>
             <p class="display-4 mb-0"><?php echo $stock; ?></p>
             <small class="text-muted">Unidades actuales</small>
             <hr>
             <p class="small">Recuerde que el stock se actualiza automáticamente mediante los disparadores del sistema.</p>
         </div>
    </div>
    
    <div class="col-md-6 bg-warning bg-opacity-25 p-4 rounded-3 shadow-sm border border-warning">
    <?php
        // Formulario que apunta a VisorCambiaProducto.php
        echo '<form name="fichaDatos" action="VisorCambiaProducto.php" method="POST">';
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($id_producto) . "'>"; 
        
        echo "<table class='table table-borderless table-sm w-100 mb-0'>";        
        echo "<tr><td class='align-middle text-end w-25'><b>ID:</b></td><td class='align-middle px-3 text-primary'><b>" . htmlspecialchars($id_producto) . "</b></td></tr>";
        
        echo "<tr><td class='align-middle text-end'><b>NOMBRE:</b></td><td class='px-3'><input type='text' class='form-control' name='nombreproducto' value='" . htmlspecialchars($nombreproducto) . "' required></td></tr>";
        
        echo "<tr><td class='align-middle text-end'><b>DESCRIPCIÓN:</b></td><td class='px-3'><textarea class='form-control' name='descripcion' rows='3'>" . htmlspecialchars($descripcion) . "</textarea></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>PRECIO (€):</b></td><td class='px-3'><input type='number' step='0.01' class='form-control' name='precio' value='" . htmlspecialchars($precio) . "'></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>PAÍS:</b></td><td class='px-3'><input type='text' class='form-control' name='pais' value='" . htmlspecialchars($pais) . "'></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>CIF PROV:</b></td><td class='px-3'><input type='text' class='form-control' name='cif' value='" . htmlspecialchars($cif) . "'></td></tr>";        

        echo "<tr><td></td><td class='pt-3 px-3'>";
        echo "<input type='submit' class='btn btn-success me-2' value='GUARDAR CAMBIOS'>";
        echo "<input type='reset' class='btn btn-secondary' value='RESTAURAR'>";
        echo "</td></tr>";              
        echo "</table>";

        echo "</form>";
        ?>
    </div>
    
    <div class="col-md-3 d-flex flex-column justify-content-center p-4 border-start">
         <?php
        echo '<form name="fichaImagen" action="CambiaImagenProducto.php" method="POST" enctype="multipart/form-data">';
        echo "<p class='small text-muted'>Cambio de fotografía del producto. (PNG/JPG, máx 200Kb)</p>";
        
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($id_producto) . "'>";        
        echo "<input type='hidden' name='nombre' value='" . htmlspecialchars($nombreproducto) . "'>";
        echo "<input type='hidden' name='imagen_actual' value='" . htmlspecialchars($foto) . "'>";
        
        echo "<div class='text-center mb-3'>";
        echo "Imagen actual:<br><img src='../" . htmlspecialchars($foto_ruta) . "' width='100' class='mt-2 shadow-sm border p-1 bg-white'>";
        echo "</div>";
        
        echo "<input type='file' class='form-control form-control-sm mb-3' name='FOTO' accept='image/png, image/jpeg' required>";  
        echo "<div class='text-center'><input type='submit' class='btn btn-info text-white' value='CAMBIAR IMAGEN'></div>";
        echo "</form>";
        ?>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12 text-center p-2 bg-primary text-white rounded">                
        <form action="GProductos.php" method="post" class="m-0">
            <p class="mb-1">Volver a la gestión de productos...</p>
            <input type="image" src="estilos/BTNVOLVER.jpg" name="volver" height="30" alt="Volver">
        </form>
    </div>
</div>

<?php
    $stmt->close();
    $c->close();
    require_once('marcoinf.php');
    ob_end_flush();
?>