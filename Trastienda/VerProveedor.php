<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Consulta de un Proveedor</h1>
</div>
<div>
    <?php
        // Recoge la variable de forma segura (CIF del proveedor)
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "proveedores";
        
        // Sentencia SQL preparada para SQLite
        $sentencia = "SELECT * FROM $tabla WHERE CIFprov = :id";    
        $stmt = $c->prepare($sentencia);
        
        // Asignamos el valor del CIF (es de tipo texto en tu BD)
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
            echo "<tr><td class='text-end'>REPRESENTANTE: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), "</b></td></tr>";
            echo "<tr><td class='text-end'>EMAIL: </td><td class='px-3'>", htmlspecialchars($registro[5]), "</td></tr>";
            echo "<tr><td class='text-end'>TELÉFONO: </td><td class='px-3'>", htmlspecialchars($registro[6]), "</td></tr>";
            
        } else {
            echo "<tr><td colspan='2' class='text-center text-danger'>No se han encontrado datos para este proveedor.</td></tr>";
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
            <form action="GProveedores.php" method="post" class="m-0">
                <p class="mb-1">Volver al listado...</p>
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