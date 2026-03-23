<?php 
    //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<div class="mt-3">
    <h1>Consulta de un Producto</h1>
</div>
<div>
    <?php
        // Recoge la variable de forma segura (ID del producto)
        $id = isset($_POST['id']) ? $_POST['id'] : '';    

        // Seleccionamos la tabla con la que vamos a trabajar
        $tabla = "productos";
        
        // Sentencia SQL preparada para SQLite
        $sentencia = "SELECT * FROM $tabla WHERE id_producto = :id";    
        $stmt = $c->prepare($sentencia);
        
        // Asignamos el valor del ID (en productos suele ser numérico)
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        
        // Ejecutamos la consulta
        $resultado = $stmt->execute();

        // Tabla para mostrar resultado con tus estilos
        echo "<table style='width:60%; margin-left:20px; margin-right:40px' class='table table-bordered table-striped mt-3'> ";

        // Obtenemos el registro
        if ($registro = $resultado->fetchArray(SQLITE3_NUM)){
            
            // Índices según tu GAlmacen.sql para la tabla 'productos': 
            // 0=id_producto, 1=nombreproducto, 2=descripcion, 3=precio, 4=stock, 5=foto, 6=pais, 7=CIF
            
            echo "<tr><td class='text-end w-25'>ID PRODUCTO: </td><td class='px-3'><b>", htmlspecialchars($registro[0]), "</b></td></tr>";
            echo "<tr><td class='text-end'>NOMBRE: </td><td class='px-3'><b>", htmlspecialchars($registro[1]), "</b></td></tr>";
            echo "<tr><td class='text-end'>DESCRIPCIÓN: </td><td class='px-3'>", htmlspecialchars($registro[2]), "</td></tr>";
            echo "<tr><td class='text-end'>PRECIO: </td><td class='px-3'><b>", number_format($registro[3], 2, ',', '.'), " €</b></td></tr>";
            echo "<tr><td class='text-end'>STOCK: </td><td class='px-3'><b>", htmlspecialchars($registro[4]), " unidades</b></td></tr>";
            echo "<tr><td class='text-end'>PAÍS: </td><td class='px-3'>", htmlspecialchars($registro[6]), "</td></tr>";
            echo "<tr><td class='text-end'>CIF PROVEEDOR: </td><td class='px-3'>", htmlspecialchars($registro[7]), "</td></tr>";
            
            echo "<tr><td class='text-end align-middle'>IMAGEN: </td><td class='px-3'>";
            
            // Comprobamos la imagen. Si está vacía usamos una por defecto (caja)
            $foto_db = $registro[5];
            $ruta_foto = empty($foto_db) ? 'estilos/caja.png' : 'imagenes/' . $foto_db;
            
            echo "<img src='../$ruta_foto' width='100' class='rounded shadow-sm border mb-2'><br>";
            echo "<small>Ruta: ", htmlspecialchars($foto_db), "</small>";
            echo "</td></tr>";              
            
        } else {
            echo "<tr><td colspan='2' class='text-center text-danger'>No se han encontrado datos para este producto.</td></tr>";
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
            <form action="GProductos.php" method="post" class="m-0">
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