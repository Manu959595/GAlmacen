<?php 
    // Iniciar el buffer de salida por si hay redirecciones
    ob_start();
    
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Editar datos de un Usuario</h1>
</div>
    <?php
        // Cargamos la conexión SQLite3
        require_once('conexion.php'); 
        
        // Recoge la variable enviada por POST (o GET)
        // Usamos isset() para evitar errores si entran a la página directamente
        $id_login = isset($_POST['id']) ? $_POST['id'] : '';    

        // Si no hay ID, podríamos mostrar un mensaje o redirigir
        if (empty($id_login)) {
            echo "<div class='alert alert-danger'>Error: No se ha especificado ningún usuario para modificar.</div>";
            exit; 
        }

        $tabla = "usuarios";
        
        // Establecemos la sentencia SQL preparada
        $sentencia = "SELECT * FROM $tabla WHERE login = :login";    
        $stmt = $c->prepare($sentencia);
        
        // Asignamos el parámetro
        $stmt->bindValue(':login', $id_login, SQLITE3_TEXT);
        
        // Ejecutamos la consulta
        $resultado = $stmt->execute();

        // Como solo esperamos un usuario, usamos un if en vez de un while
        $registro = $resultado->fetchArray(SQLITE3_NUM);

        if ($registro) {
            //  Recoge los datos en variables basándonos en GAlmacen.sql
            $ID = $registro[0];
            $login = $registro[1];
            // $clave = $registro[2]; (No la necesitamos aquí por seguridad)
            $email = $registro[3];
            $nomape = $registro[4];
            $poblacion = $registro[5];
            $telefono = $registro[6];
            $foto = $registro[7];
            
            // Si la foto está vacía, ponemos una por defecto para que no salga el icono roto
            if (empty($foto)) {
                $foto = "estilos/iconopersona.png"; 
            }
        } else {
            echo "<div class='alert alert-warning'>No se ha encontrado el usuario con Nick/Login: " . htmlspecialchars($id_login) . "</div>";
            $stmt->close();
            $c->close();
            require_once('marcoinf.php');
            exit;
        }
    ?>
    
<div class="row">
    <div class="col-md-3 d-flex flex-column justify-content-center align-items-center p-4 border-end">
         <?php
        //---------------
        // Prepara el formulario para cambiar contraseña
        echo '<form name="fichaClave" action="CambiaClave.php" method="POST">';
        echo "<p class='text-center'>Para cambiar la contraseña debe conocer la actual y pulsar el botón inferior.</p>";
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($login) . "'>";      
        echo "<div class='text-center'><input type='submit' class='btn btn-dark' value='CAMBIAR CONTRASEÑA'></div>";
        echo "</form>";
        //---------------
        ?>
    </div>
    
    <div class="col-md-6 bg-warning bg-opacity-25 p-4 rounded-3 shadow-sm border border-warning">
    <?php
        // Prepara el formulario para mostrar los datos y permitir cambios
        echo '<form name="fichaDatos" action="VisorCambiaUsuario.php" method="POST">';
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($ID) . "'>"; 
        echo "<input type='hidden' name='login' value='" . htmlspecialchars($login) . "'>"; 
        
        // tabla para mostrar resultado
        echo "<table class='table table-borderless table-sm w-100 mb-0'>";        
        echo "<tr><td class='align-middle text-end w-25'><b>NICK:</b></td><td class='align-middle px-3 text-primary'><b>" . htmlspecialchars($login) . "</b></td></tr>";
        
        echo "<tr><td class='align-middle text-end'><b>NOMBRE Y APELLIDOS:</b></td><td class='px-3'><input type='text' class='form-control' name='nomape' value='" . htmlspecialchars($nomape) . "' required></td></tr>";
        
        echo "<tr><td class='align-middle text-end'><b>CORREO ELECTRÓNICO:</b></td><td class='px-3'><input type='email' class='form-control' name='email' value='" . htmlspecialchars($email) . "' required></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>POBLACIÓN:</b></td><td class='px-3'><input type='text' class='form-control' name='poblacion' value='" . htmlspecialchars($poblacion) . "'></td></tr>";        
        
        echo "<tr><td class='align-middle text-end'><b>TELÉFONO:</b></td><td class='px-3'><input type='text' class='form-control' name='telefono' value='" . htmlspecialchars($telefono) . "'></td></tr>";        
        
        echo "<tr><td></td><td class='pt-3 px-3'>";
        echo "<input type='submit' class='btn btn-success me-2' value='GUARDAR CAMBIOS'>";
        echo "<input type='reset' class='btn btn-secondary' value='RESTAURAR'>";
        echo "</td></tr>";              
        echo "</table>";

        // Cierra el formulario
        echo "</form>";
        ?>
    </div>
    
    <div class="col-md-3 d-flex flex-column justify-content-center p-4 border-start">
         <?php
        //---------------
        // Prepara el formulario para cambiar IMAGEN
        echo '<form name="fichaImagen" action="CambiaImagen.php" method="POST" enctype="multipart/form-data">';
        echo "<p class='small text-muted'>Si quiere cambiar la imagen, seleccione la nueva y pulse el botón. (Admite PNG/JPG, máx 200Kb)</p>";
        
        // Campos ocultos necesarios para procesar la imagen
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($ID) . "'>";        
        echo "<input type='hidden' name='nick' value='" . htmlspecialchars($login) . "'>";     
        echo "<input type='hidden' name='nomape' value='" . htmlspecialchars($nomape) . "'>";
        echo "<input type='hidden' name='imagen_actual' value='" . htmlspecialchars($foto) . "'>";
        
        echo "<div class='text-center mb-3'>";
        echo "Imagen actual:<br><img src='../" . htmlspecialchars($foto) . "' width='80' class='rounded-circle mt-2 shadow-sm border'>";
        echo "</div>";
        
        echo "<input type='file' class='form-control form-control-sm mb-3' name='FOTO' accept='image/png, image/jpeg' required>";  
        echo "<div class='text-center'><input type='submit' class='btn btn-info text-white' value='CAMBIAR IMAGEN'></div>";
        // Cierra el formulario
        echo "</form>";
        //---------------
        ?>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12 text-center p-2 bg-primary text-white rounded">                
        <form action="GUsuarios.php" method="post" class="m-0">
            <p class="mb-1">Volver a la lista de usuarios...</p>
            <input type="image" src="estilos/BTNVOLVER.jpg" name="volver" height="30" alt="Volver">
        </form>
    </div>
</div>

<?php
    // Cerramos la sentencia y la conexión SQLite3
    $stmt->close();
    $c->close();

    //Cargar el marco inferior
    require_once('marcoinf.php');
    
    // Enviar el buffer de salida
    ob_end_flush();
?>