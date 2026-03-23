<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Eliminar Registro del Histórico</h1>
    <p class="text-danger font-weight-bold">¡ADVERTENCIA! Esta acción eliminará los datos permanentemente del sistema.</p>
</div>
<div>
    <?php
        // Recoge la variable de forma segura
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla histórico
        $tabla = "historico";
        
        // Sentencia SQL preparada
        $sentencia = "SELECT * FROM $tabla WHERE login = :id";    
        
        $stmt = $c->prepare($sentencia);
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);
        
        // Ejecutamos
        $resultado = $stmt->execute();

        $foto = "";

        // Tabla de revisión de datos
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices: 0=ID, 1=login, 3=email, 4=nomape, 5=poblacion, 6=telefono, 7=imagen
            echo "<tr><td class='text-end w-25'>NICK: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            echo "<tr><td class='text-end'>NOMBRE Y APELLIDOS: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), "</b></td></tr>";
            echo "<tr><td class='text-end'>CORREO ELECTRÓNICO: </td><td class='px-3'><b>", htmlspecialchars($registro[3]), "</b></td></tr>";     
            echo "<tr><td class='text-end text-muted'>POBLACIÓN: </td><td class='px-3'>", htmlspecialchars($registro[5]), "</td></tr>";
            
            echo "<tr><td class='text-end align-middle'>IMAGEN: </td><td class='px-3'>";
            $foto = $registro[7];
            $ruta_foto = empty($foto) ? 'estilos/iconopersona.png' : $foto;
            echo "<img src='../$ruta_foto' width='80' class='rounded shadow-sm border mb-2'><br>";
            echo "</td></tr>";      
        } else {
             echo "<tr><td colspan='2' class='text-center text-danger'>Error: No se encontró el registro en el histórico.</td></tr>";
        }
    
        echo "</table>";    
        
        $stmt->close();
        $c->close();
        ?>        
    </div>
       
<div class="bg-dark rounded mt-4">    
    <div class="row m-0 p-3 align-items-center"> 
        
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-light border-end border-secondary">   
            <form action="EliminaDefinitivoHistorico.php" method="post" class="m-0 text-center">           
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <input type="hidden" name="imagen" value="<?php echo htmlspecialchars($foto); ?>">
                
                <input type="submit" class="btn btn-danger btn-lg font-weight-bold mb-2" value="BORRADO PERMANENTE">
                <p class="m-0 small text-danger fw-bold">No se podrá recuperar esta información.</p>
            </form>
        </div>
        
        <div class="col-md-6 d-flex justify-content-center align-items-center">                
            <form action="Ghistorico.php" method="post" class="m-0">           
                <input type="submit" class="btn btn-outline-light font-weight-bold" value="VOLVER SIN BORRAR">
            </form>
        </div>
        
    </div>
</div>

<?php
    require_once('marcoinf.php');
?>