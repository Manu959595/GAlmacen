<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Consulta de un Usuario</h1>
</div>
<div>
    <?php
        // Recoge la variables de forma segura
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "usuarios";
        
        // Establecemos la sentencia SQL preparada para evitar inyecciones SQL
        $sentencia = "SELECT * FROM $tabla WHERE login = :id";    
        $stmt = $c->prepare($sentencia);
        
        // Asignamos el valor del login
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);
        
        // Ejecutamos la consulta
        $resultado = $stmt->execute();

        // tabla para mostrar resultado
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        // Como solo hay un usuario por login, usamos 'if' en lugar de 'while'
        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices según GAlmacen.sql: 
            // 0=ID, 1=login, 2=passw, 3=email, 4=nomape, 5=poblacion, 6=telefono, 7=imagen
            
            echo "<tr><td class='text-end w-25'>NICK: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            echo "<tr><td class='text-end'>CONTRASEÑA: </td><td class='px-3'><b>", htmlspecialchars($registro[2]), "</b></td></tr>";
            
            // Corregido: El índice 4 es Nombre y Apellidos, el 3 es Email
            echo "<tr><td class='text-end'>NOMBRE Y APELLIDOS: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), "</b></td></tr>";
            echo "<tr><td class='text-end'>CORREO ELECTRÓNICO:  </td><td class='px-3'><b>", htmlspecialchars($registro[3]), "</b></td></tr>";     
            
            echo "<tr><td class='text-end'>POBLACIÓN:  </td><td class='px-3'><b>", htmlspecialchars($registro[5]), "</b></td></tr>";        
            echo "<tr><td class='text-end'>TELÉFONO:  </td><td class='px-3'><b>", htmlspecialchars($registro[6]), "</b></td></tr>";        
            
            echo "<tr><td class='text-end align-middle'>IMAGEN:  </td><td class='px-3'>";
            
            // Comprobamos si hay imagen y le añadimos ../ por estar en Trastienda
            $ruta_foto = empty($registro[7]) ? 'estilos/iconopersona.png' : $registro[7];
            echo "<img src='../$ruta_foto' width='80' class='rounded shadow-sm border mb-2'><br>";
            echo "<b>", htmlspecialchars($registro[7]), "</b>";
            echo "</td></tr>";              
        } else {
            echo "<tr><td colspan='2' class='text-center text-danger'>No se han encontrado datos para este usuario.</td></tr>";
        }

        echo "</table>";
        
        // Cerramos la sentencia y la conexión con la base de datos
        $stmt->close();
        $c->close();
        ?>
        <hr>
    </div>    
<div class="bg-primary text-light mt-4">    
    <div class="row m-0">
        <div class="col-4">   
            
        </div>
        <div class="col-4 p-2 bg-primary text-white text-center">                
            <form action="GUsuarios.php" method="post" class="m-0">
                <p class="mb-1">Volver...</p>
                <input type="image" src="estilos/BTNVOLVER.jpg" name="volver" height="30" alt="volver">
            </form>
        </div>
        <div class="col-4">   
            
        </div>
    </div>
</div>
    <?php
        //Cargar el marco inferior
        require_once('marcoinf.php');
        // Fin del código PHP
    ?>