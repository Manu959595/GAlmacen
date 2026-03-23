<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Consulta de Usuario en Histórico</h1>
</div>
<div>
    <?php
        // Recoge la variable de forma segura (Login del usuario)
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "historico";
        
        // Sentencia SQL preparada para SQLite
        $sentencia = "SELECT * FROM $tabla WHERE login = :id";    
        $stmt = $c->prepare($sentencia);
        
        // Asignamos el valor del login (texto)
        $stmt->bindValue(':id', $id, SQLITE3_TEXT);
        
        // Ejecutamos la consulta
        $resultado = $stmt->execute();

        // Tabla para mostrar resultado con tus estilos
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        // Obtenemos el registro
        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices según la estructura de usuario: 
            // 0=ID, 1=login, 2=passw, 3=email, 4=nomape, 5=poblacion, 6=telefono, 7=imagen
            
            echo "<tr><td class='text-end w-25'>NICK / LOGIN: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            echo "<tr><td class='text-end'>NOMBRE Y APELLIDOS: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), "</b></td></tr>";
            echo "<tr><td class='text-end'>CORREO ELECTRÓNICO: </td><td class='px-3'>", htmlspecialchars($registro[3]), "</td></tr>";
            echo "<tr><td class='text-end'>POBLACIÓN: </td><td class='px-3'>", htmlspecialchars($registro[5]), "</td></tr>";
            echo "<tr><td class='text-end'>TELÉFONO: </td><td class='px-3'>", htmlspecialchars($registro[6]), "</td></tr>";
            
            echo "<tr><td class='text-end align-middle'>IMAGEN: </td><td class='px-3'>";
            
            // Comprobamos la imagen.
            $foto_db = $registro[7];
            $ruta_foto = empty($foto_db) ? 'estilos/iconopersona.png' : $foto_db;
            
            echo "<img src='../$ruta_foto' width='100' class='rounded shadow-sm border mb-2'><br>";
            echo "<small>Archivo: ", htmlspecialchars($foto_db), "</small>";
            echo "</td></tr>";              
            
        } else {
            echo "<tr><td colspan='2' class='text-center text-danger'>No se han encontrado datos para este registro histórico.</td></tr>";
        }

        echo "</table>";
        
        // Cerramos recursos
        $stmt->close();
        $c->close();
    ?>
    <hr>
</div>    

<div class="bg-primary text-light mt-4">    
    <div class="row m-0">
        <div class="col-4"></div>
        <div class="col-4 p-2 bg-primary text-white text-center">                
            <form action="Ghistorico.php" method="post" class="m-0">
                <p class="mb-1">Volver al Histórico...</p>
                <input type="image" src="estilos/BTNVOLVER.jpg" name="volver" height="30" alt="volver">
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php
    //Cargar el marco inferior
    require_once('marcoinf.php');
?>