<?php 
    // Iniciar el buffer de salida por si hay redirecciones
    ob_start();
    
    // Iniciamos código PHP
    // Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Editar datos de un Proveedor</h1>
</div>
    <?php
        // Cargamos la conexión SQLite3
        require_once('conexion.php'); 
        
        // Recoge el CIF del proveedor enviado por POST
        $id_prov = isset($_POST['id']) ? $_POST['id'] : '';    

        // Si no hay ID, error
        if (empty($id_prov)) {
            echo "<div class='alert alert-danger'>Error: No se ha especificado ningún proveedor para modificar.</div>";
            exit; 
        }

        $tabla = "proveedores";
        
        // Sentencia SQL preparada para buscar por CIFprov
        $sentencia = "SELECT * FROM $tabla WHERE CIFprov = :id";    
        $stmt = $c->prepare($sentencia);
        $stmt->bindValue(':id', $id_prov, SQLITE3_TEXT);
        
        $resultado = $stmt->execute();
        $registro = $resultado->fetchArray(SQLITE3_NUM);

        if ($registro) {
            // Índices según tu GAlmacen.sql: 
            // 0=CIFprov, 1=nombreprov, 2=direccion, 3=nacionalidad, 4=representante, 5=email, 6=telefono
            $cifprov        = $registro[0];
            $nombreprov     = $registro[1];
            $direccion      = $registro[2];
            $nacionalidad   = $registro[3];
            $representante  = $registro[4];
            $email          = $registro[5];
            $telefono       = $registro[6];
            
        } else {
            echo "<div class='alert alert-warning'>No se ha encontrado el proveedor con CIF: " . htmlspecialchars($id_prov) . "</div>";
            $stmt->close();
            $c->close();
            require_once('marcoinf.php');
            exit;
        }
    ?>
    
<div class="row justify-content-center">
    <div class="col-md-8 bg-warning bg-opacity-25 p-5 rounded-3 shadow-sm border border-warning">
    <?php
        // Formulario que apunta a VisorCambiaProveedor.php
        echo '<form name="fichaDatos" action="VisorCambiaProveedor.php" method="POST">';
        
        // El CIF es la PK, lo enviamos oculto para el WHERE de la actualización
        echo "<input type='hidden' name='cif_antiguo' value='" . htmlspecialchars($cifprov) . "'>"; 
        
        echo "<table class='table table-borderless w-100 mb-0'>";        
        
        echo "<tr><td class='align-middle text-end w-25'><b>CIF PROVEEDOR:</b></td><td class='px-3'><input type='text' class='form-control fw-bold' name='cifprov' value='" . htmlspecialchars($cifprov) . "' required></td></tr>";
        
        echo "<tr><td class='align-middle text-end'><b>NOMBRE EMPRESA:</b></td><td class='px-3'><input type='text' class='form-control' name='nombreprov' value='" . htmlspecialchars($nombreprov) . "' required></td></tr>";
        
        echo "<tr><td class='align-middle text-end'><b>DIRECCIÓN:</b></td><td class='px-3'><input type='text' class='form-control' name='direccion' value='" . htmlspecialchars($direccion) . "'></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>NACIONALIDAD:</b></td><td class='px-3'><input type='text' class='form-control' name='nacionalidad' value='" . htmlspecialchars($nacionalidad) . "'></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>REPRESENTANTE:</b></td><td class='px-3'><input type='text' class='form-control' name='representante' value='" . htmlspecialchars($representante) . "'></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>EMAIL:</b></td><td class='px-3'><input type='email' class='form-control' name='email' value='" . htmlspecialchars($email) . "' required></td></tr>";

        echo "<tr><td class='align-middle text-end'><b>TELÉFONO:</b></td><td class='px-3'><input type='text' class='form-control' name='telefono' value='" . htmlspecialchars($telefono) . "'></td></tr>";

        echo "<tr><td></td><td class='pt-4 px-3 text-center'>";
        echo "<input type='submit' class='btn btn-success btn-lg me-3' value='ACTUALIZAR PROVEEDOR'>";
        echo "<input type='reset' class='btn btn-secondary btn-lg' value='RESTAURAR'>";
        echo "</td></tr>";              
        echo "</table>";

        echo "</form>";
        ?>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12 text-center p-2 bg-primary text-white rounded">                
        <form action="GProveedores.php" method="post" class="m-0">
            <p class="mb-1">Volver a la gestión de proveedores...</p>
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