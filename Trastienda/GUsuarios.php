<?php   //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>

<div class="container-fluid mt-3">
    <h1>Gestión de Usuarios</h1>    
</div>
<div class="container-fluid">       
    <?php
    
    // Seleccionamos la tabla con la que vamos a trabajar
    $tabla = "usuarios";
    
    // Aseguramos que la conexión $c existe (cargada desde marcosup.php o directamente si lo prefieres)
    if (!isset($c)) {
        require_once('conexion.php');
    }

    // --- --- --- Preparamos la paginación -- --- --- 
    // comprueba si viene número de página   
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    if ($pagina < 1) $pagina = 1;

    // 1. Calculamos el total de registros (Sustituto de mysqli_num_rows)
    $stmt_count = $c->query("SELECT COUNT(*) as total FROM $tabla");
    $row_count = $stmt_count->fetchArray(SQLITE3_ASSOC);
    $numreg = $row_count['total'];

    // Como vamos a usar 8 registros por página dividimos entre 8
    $numpag = ceil($numreg / 8);    
    
    // Calcula cuál será el registro de inicio para construir la consulta
    $inicio = ($pagina - 1) * 8;
    
    // 2. Establecemos la sentencia SQL final con LIMIT y OFFSET (Estilo SQLite)
    $sentencia = "SELECT * FROM $tabla ORDER BY login LIMIT 8 OFFSET $inicio";
    $resultado = $c->query($sentencia);
    // --- --- --- --- --- --- --- --- --- --- --- ---
    
    // Dibujamos una tabla HTML para mostrar los valores
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered table-striped table-hover mt-3 w-100">';
    
    // 3. Recopilar los nombres de las columnas (Sustituto de SHOW FIELDS FROM)
    $cabeceras = $c->query("PRAGMA table_info($tabla)");
    
    // Construye la fila de cabeceras
    echo "<thead class='table-dark'><tr>";
    while ($cab = $cabeceras->fetchArray(SQLITE3_ASSOC)){
        // El nombre de la columna en PRAGMA table_info viene en el campo 'name'
        echo "<th class='text-center'>" . strtoupper($cab['name']) . "</th>";
    }
    // Cabecera extra para el botón de Añadir
    echo "<th colspan='3' class='text-center align-middle'>";
        echo '<form name="alta" method="POST" action="AUsuarios.php" class="m-0">';
        echo '<input type="image" src="estilos/mas.jpg" height="25px" title="Alta de usuario." alt="Añadir Usuario">';
        echo '</form>';
    echo "</th>";
    echo "</tr></thead><tbody>";
    
    // Recorremos $resultado mostrando cada fila de la tabla
    // Usamos SQLITE3_NUM para tener un array indexado por números (0, 1, 2...)
    while ($registro = $resultado->fetchArray(SQLITE3_NUM)){
        
        echo "<tr>";
        
        // Contamos cuántas columnas tiene la tabla para recorrerlas
        $num_columnas = count($registro);
        
        for ($i = 0; $i < $num_columnas; $i++) {
            
            // Si es la columna 7 (la foto), mostramos la imagen
            if ($i == 7){
                $ruta_foto = empty($registro[$i]) ? 'estilos/iconopersona.png' : $registro[$i];
                echo "<td class='text-center align-middle'> <img src='../$ruta_foto' height='40' class='rounded shadow-sm' alt='Foto'></td>";
            } else {
                // Las demás columnas se imprimen como texto normal
                echo "<td class='align-middle text-center'>" . htmlspecialchars($registro[$i]) . "</td>";
            }
        }                           
        
        // --- BOTONES DE ACCIÓN ---
        // $registro[1] es el login/DNI según tu base de datos
        $id_usuario = htmlspecialchars($registro[1]);
        
        // Para ver
        echo "<td class='text-center align-middle' style='width: 40px;'>"; 
            echo '<form name="veruno" method="POST" action="VerUsuario.php" class="m-0">';
            echo '<input type="hidden" name="id" value="'.$id_usuario.'">';
            echo '<input type="image" src="estilos/ver.jpg" height="25" title="Ver datos del usuario... '.$id_usuario.'" alt="Ver">';
            echo '</form>'; 
        echo "</td>";
        
        // Para borrar
        echo "<td class='text-center align-middle' style='width: 40px;'>";    
            echo '<form name="borraruno" method="POST" action="BorraUsuario.php" class="m-0" onsubmit="return confirm(\'¿Estás seguro de borrar al usuario '.$id_usuario.'?\');">';
            echo '<input type="hidden" name="id" value="'.$id_usuario.'">';
            echo '<input type="image" src="estilos/papelera.jpg" height="25" title="Borrar el usuario... '.$id_usuario.'" alt="Borrar">';
            echo '</form>';
        echo "</td>";
        
        // Para modificar
        echo "<td class='text-center align-middle' style='width: 40px;'>";        
            echo '<form name="editaruno" method="POST" action="ModificaUsuario.php" class="m-0">';
            echo '<input type="hidden" name="id" value="'.$id_usuario.'">';
            echo '<input type="image" src="estilos/lapiz.jpg" height="25" title="Cambiar datos del usuario... '.$id_usuario.'" alt="Editar">';
            echo '</form>';                         
        echo "</td>";       
        
        echo "</tr>";               
    }
    
    echo "</tbody></table></div>";
    
    // --- --- --- --- --- --- --- --- --- --- --- ---
    // --- Mostramos el paginador ---       
    // Calcula páginas anterior y siguiente
    echo "<div class='mt-4'>";
    
    $anterior = ($pagina == 1) ? 1 : $pagina - 1;
    $siguiente = ($pagina == $numpag) ? $numpag : $pagina + 1;
    
    // Solo mostramos paginación si hay más de 1 página
    if ($numpag > 1) {
        echo "<div class='col-md-12 text-center'>"; 
        echo '<ul class="pagination justify-content-center">';
        
        // Botón Anterior
        echo '<li class="page-item ' . ($pagina == 1 ? 'disabled' : '') . '">';
        echo '<a class="page-link" href="GUsuarios.php?pagina='.$anterior.'">&laquo; Anterior</a>';
        echo '</li>';
        
        // Números de página
        for ($i = 1; $i <= $numpag; $i++) {
            if($i == $pagina){
                echo '<li class="page-item active"><span class="page-link">'.$i.'</span></li>';                    
            } else {
                echo '<li class="page-item"><a class="page-link" href="GUsuarios.php?pagina='.$i.'">'.$i.'</a></li>';
            }
        }
        
        // Botón Siguiente
        echo '<li class="page-item ' . ($pagina == $numpag ? 'disabled' : '') . '">';
        echo '<a class="page-link" href="GUsuarios.php?pagina='.$siguiente.'">Siguiente &raquo;</a>';
        echo '</li>';
        
        echo '</ul>';
        echo "</div>";
    }
    echo "</div>"; // Fin capa paginación
    // --- Fin paginación ---
    
    // Cerramos la conexión con la base de datos
    $c->close();
    
    ?>   
</div>
<?php
    //Cargar el marco inferior
    require_once('marcoinf.php');
?>