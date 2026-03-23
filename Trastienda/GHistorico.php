<?php   //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>

<div class="container-fluid mt-3">
    <h1>Histórico de Usuarios</h1>    
    <p class="text-muted">Usuarios que han sido dados de baja del sistema.</p>
</div>
<div class="container-fluid">       
    <?php
    
    // Seleccionamos la tabla con la que vamos a trabajar
    $tabla = "historico";
    
    // Aseguramos que la conexión $c existe
    if (!isset($c)) {
        require_once('conexion.php');
    }

    // --- --- --- Preparamos la paginación -- --- --- 
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    if ($pagina < 1) $pagina = 1;

    // 1. Calculamos el total de registros
    $stmt_count = $c->query("SELECT COUNT(*) as total FROM $tabla");
    $row_count = $stmt_count->fetchArray(SQLITE3_ASSOC);
    $numreg = $row_count['total'];

    $numpag = ceil($numreg / 8);    
    $inicio = ($pagina - 1) * 8;
    
    // 2. Sentencia SQL (En el histórico no solemos editar, solo ver o borrar)
    $sentencia = "SELECT * FROM $tabla LIMIT 8 OFFSET $inicio";
    $resultado = $c->query($sentencia);
    // --- --- --- --- --- --- --- --- --- --- --- ---
    
    // Dibujamos la tabla
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered table-striped table-hover mt-3 w-100">';
    
    // 3. Cabeceras
    $cabeceras = $c->query("PRAGMA table_info($tabla)");
    
    echo "<thead class='table-dark'><tr>";
    while ($cab = $cabeceras->fetchArray(SQLITE3_ASSOC)){
        echo "<th class='text-center align-middle'>" . strtoupper($cab['name']) . "</th>";
    }
    
    // Acciones para el Histórico (Ver y Borrar Permanente)
    echo "<th colspan='2' class='text-center align-middle'>ACCIONES</th>";
    echo "</tr></thead><tbody>";
    
    // Recorremos filas
    while ($registro = $resultado->fetchArray(SQLITE3_NUM)){
        
        echo "<tr>";
        $num_columnas = count($registro);
        
        for ($i = 0; $i < $num_columnas; $i++) {
            // Lógica para la imagen del usuario (índice 7 en tu tabla original)
            if ($i == 7){
                $ruta_foto = empty($registro[$i]) ? 'estilos/iconopersona.png' : $registro[$i];
                echo "<td class='text-center align-middle'> <img src='../$ruta_foto' height='40' class='rounded-circle shadow-sm'></td>";
            } else {
                echo "<td class='align-middle text-center'>" . htmlspecialchars($registro[$i]) . "</td>";
            }
        }                           
        
        // El ID para acciones (usamos el login, índice 1)
        $id_hist = htmlspecialchars($registro[1]);
        
        // Botón VER
        echo "<td class='text-center align-middle' style='width: 40px;'>"; 
            echo '<form name="veruno" method="POST" action="VerHistorico.php" class="m-0">';
            echo '<input type="hidden" name="id" value="'.$id_hist.'">';
            echo '<input type="image" src="estilos/ver.jpg" height="25" title="Ver detalle">';
            echo '</form>'; 
        echo "</td>";
        
        // Botón BORRAR PERMANENTE
        echo "<td class='text-center align-middle' style='width: 40px;'>";    
            echo '<form name="borraruno" method="POST" action="BorraUnHistorico.php" class="m-0" onsubmit="return confirm(\'¿Desea eliminar permanentemente a '.$id_hist.' del histórico?\');">';
            echo '<input type="hidden" name="id" value="'.$id_hist.'">';
            echo '<input type="image" src="estilos/papelera.jpg" height="25" title="Eliminar permanentemente">';
            echo '</form>';
        echo "</td>";
        
        echo "</tr>";               
    }
    
    echo "</tbody></table></div>";
    
    // --- Paginación ---       
    echo "<div class='mt-4'>";
    $anterior = ($pagina == 1) ? 1 : $pagina - 1;
    $siguiente = ($pagina == $numpag) ? $numpag : $pagina + 1;
    
    if ($numpag > 1) {
        echo "<div class='col-md-12 text-center'>"; 
        echo '<ul class="pagination justify-content-center">';
        echo '<li class="page-item ' . ($pagina == 1 ? 'disabled' : '') . '">';
        echo '<a class="page-link" href="Ghistorico.php?pagina='.$anterior.'">&laquo;</a>';
        echo '</li>';
        
        for ($i = 1; $i <= $numpag; $i++) {
            $active = ($i == $pagina) ? 'active' : '';
            echo '<li class="page-item '.$active.'"><a class="page-link" href="Ghistorico.php?pagina='.$i.'">'.$i.'</a></li>';
        }
        
        echo '<li class="page-item ' . ($pagina == $numpag ? 'disabled' : '') . '">';
        echo '<a class="page-link" href="Ghistorico.php?pagina='.$siguiente.'">&raquo;</a>';
        echo '</li>';
        echo '</ul>';
        echo "</div>";
    }
    echo "</div>"; 
    
    $c->close();
    ?>   
</div>

<?php
    require_once('marcoinf.php');
?>