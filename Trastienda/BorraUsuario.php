<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Borrar un Usuario</h1>
    <p class="text-danger">Por favor, revise los datos antes de confirmar el borrado.</p>
</div>
<div>
    <?php
        // Recoge la variables de forma segura
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "usuarios";
        
        // Establecemos la sentencia SQL de la Consulta a realizar
        $sentencia = "SELECT * FROM $tabla WHERE login = :id";    
        
        $stmt = $c->prepare($sentencia);
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);
        
        // Recopilar las filas almacenadas en la tabla
        $resultado = $stmt->execute();

        // Inicializamos $foto vacía por si no encuentra usuario y evitar errores en el botón de borrar
        $foto = "";

        // tabla para mostrar resultado
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        // Recorremos $resultado (Usamos if porque el login es único)
        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices según GAlmacen.sql: 
            // 0=ID, 1=login, 2=passw, 3=email, 4=nomape, 5=poblacion, 6=telefono, 7=imagen
            
            echo "<tr><td class='text-end w-25'>NICK: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            // La contraseña no es necesaria mostrarla para borrar, la podemos omitir por seguridad, pero te la dejo comentada.
            // echo "<tr><td class='text-end'>CONTRASEÑA: </td><td class='px-3'><b>", htmlspecialchars($registro[2]), "</b></td></tr>";
            
            echo "<tr><td class='text-end'>NOMBRE Y APELLIDOS: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), "</b></td></tr>";
            echo "<tr><td class='text-end'>CORREO ELECTRÓNICO:  </td><td class='px-3'><b>", htmlspecialchars($registro[3]), "</b></td></tr>";     
            echo "<tr><td class='text-end'>POBLACIÓN:  </td><td class='px-3'><b>", htmlspecialchars($registro[5]), "</b></td></tr>";        
            echo "<tr><td class='text-end'>TELÉFONO:  </td><td class='px-3'><b>", htmlspecialchars($registro[6]), "</b></td></tr>";        
            
            echo "<tr><td class='text-end align-middle'>IMAGEN:  </td><td class='px-3'>";
            
            // Asignamos la foto a la variable para pasarla por POST luego
            $foto = $registro[7];
            
            // Comprobamos si hay imagen y le añadimos ../ por estar en Trastienda
            $ruta_foto = empty($foto) ? 'estilos/iconopersona.png' : $foto;
            echo "<img src='../$ruta_foto' width='80' class='rounded shadow-sm border mb-2'><br>";
            echo "<b>", htmlspecialchars($foto), "</b>";
            
            echo "</td></tr>";      
        } else {
             echo "<tr><td colspan='2' class='text-center text-danger'>Error: No se encontró el usuario.</td></tr>";
        }
    
        echo "</table>";    
        
        // Cerramos la sentencia y la conexión con la base de datos
        $stmt->close();
        $c->close();
        ?>        
    </div>
       
<div class="bg-primary rounded mt-4">    
    <div class="row m-0 p-3 align-items-center"> 
        
        <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-light border-end">   
            <form action="EliminaUsuario.php" method="post" class="m-0 text-center">           
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">
                <input type="hidden" name="imagen" value="<?php echo htmlspecialchars($foto); ?>">
                
                <input type="submit" class="btn btn-danger font-weight-bold mb-2" value="CONFIRMAR BORRADO">
                <p class="m-0 small text-warning"><i class="bi bi-info-circle"></i> Este usuario pasará al Histórico.</p>
            </form>
        </div>
        
        <div class="col-md-6 d-flex justify-content-center align-items-center">                
            <form action="GUsuarios.php" method="post" class="m-0">           
                <input type="submit" class="btn btn-light font-weight-bold text-primary" value="CANCELAR BORRADO Y VOLVER">
            </form>
        </div>
        
    </div>
</div>

<?php
    //Cargar el marco inferior
    require_once('marcoinf.php');
    // Fin del código PHP
?>