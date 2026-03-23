<?php   //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>

<div>
    <form method="post" action="EXPORTASQL.PHP">
    <h1>Auditoria de la tabla Productos -
        <input type="hidden" name="CONSULTA" value="select * from log_productos;">
        <input type="hidden" name="TITULO" value="Log_Productos">
        <input type="image" name="exportar" src="estilos/BTNVOLVER.jpg" height="25px" title="Exportar a CSV">
    </h1>
    </form>
</div>

<div>       
    <?php
    // Aseguramos que la conexión existe
    if (!isset($c)) {
        require_once('conexion.php');
    }

    // Seleccionamos la tabla con la que vamos a trabajar
    $tabla="log_productos";

    // --- --- --- Preparamos la paginación -- --- --- 
            // comprueba si viene número de página   
            if (isset($_GET['pagina']))
                {
                $pagina=$_GET['pagina'];
                }
                else{
                $pagina=1;  
                } 
            
            // Calculamos el número de páginas (Sustituto de mysqli_num_rows)
            $res_count = $c->query("SELECT COUNT(*) as total FROM $tabla");
            $row_count = $res_count->fetchArray(SQLITE3_ASSOC);
            $numreg = $row_count['total'];
            
            // Como vamos a usar 8 registros por página dividimos entre 8
            $numpag= ceil($numreg/8);    
            
            // Calcula cuál será el registro de inicio para construir la consulta
            $inicio=($pagina-1)*8;
            
            // Volvemos a ejecutar la sentencia pero fijando los límites (Estilo SQLite).
            $sentencia = "select * from $tabla limit 8 offset $inicio";
            $resultado = $c->query($sentencia);
            // --- --- --- --- --- --- --- --- --- --- --- ---
    
    // Dibujamos una tabla HTML para mostrar los valores almacenados
    echo '<table border style="width:90%; margin-left:20px; margin-right:40px">';
    
    // Recopilar los nombres de las columnas de la tabla seleccionada
    $cabeceras = $c->query("PRAGMA table_info($tabla)");
    
    // Construye la fila de cabeceras
    echo "<tr bgcolor='yellow'>";
    while ($cab = $cabeceras->fetchArray(SQLITE3_ASSOC)){
        // En SQLite el nombre de la columna viene en ['name']
        echo "<th>" . $cab['name'] . "</th>";
    }
    echo "</tr>";
    
    // Recorremos $resultado mostrando cada fila de la tabla
    while ($registro = $resultado->fetchArray(SQLITE3_NUM)){
        
        // Iniciamos la fila
        echo "<tr>";
        
        // Iniciar un contador de columnas
        $i=0;
        
        // Contamos el total de columnas devueltas para hacer el bucle
        $total_cols = count($registro);
        
        // Recorremos y mostramos el valor de cada columna manteniendo tu lógica
        for ($i=0; $i<$total_cols; $i++){
            
            // Mostramos el valor de cada celda y si es la imagen la visualiza
            if ($i==7){
                echo "<td> <img src='$registro[$i]' height='30'></td>";
            } else{
                echo "<td> $registro[$i]</td>";
            }
        }                               
        
        // Fin de la fila
        echo "</tr>";               
    }
    
        // Fin de la tabla HTML
    echo "</table>";
    
    // --- --- --- --- --- --- --- --- --- --- --- ---
    // --- Mostramos el paginador ---       
    // Calcula páginas anterior y siguiente
    echo "<div><hr>";
    if ($pagina==1){
        $anterior=1;
    }
    else{
        $anterior=$pagina-1;
    }
    if ($pagina==$numpag){
        $siguiente=$pagina;
    }
    else{
        $siguiente=$pagina+1;
    }
    
    echo "<div class='col-md-12 text-center' style='vertical-align: text-bottom;'>"; // Fin de la capa row  
    echo '<ul class="pagination justify-content-center ">';
    echo '  <li class="page-item ">';
    echo '    <a class="page-link" href="Log_Productos.php?pagina='.$anterior.'">&laquo;</a>';
    echo '  </li>';
    for ($i=1;$i<=$numpag;$i++)
    {
        if($i==$pagina){
                echo '  <li class="page-item active">';
                echo '    <a class="page-link"href="Log_Productos.php?pagina='.$i.'">'.$i.'</a>';
                echo '  </li>';                    
            }
            else{
                echo '  <li class="page-item"><a class="page-link" href="Log_Productos.php?pagina='.$i.'">'.$i.'</a></li>';
            }
    }
    echo '  <li class="page-item ">';
    echo '    <a class="page-link" href="Log_Productos.php?pagina='.$siguiente.'">&raquo;</a>';
    echo '  </li>';
    echo '  </ul>';
    echo "</div>";
    // --- Fin paginación ---
    // --- --- --- --- --- --- --- --- --- --- --- ---
    
    // Cerramos la conexión con la base de datos
    $c->close();
    
    ?>   
</div>
<?php
    //Iniciamos código PHP
    //Cargar el marco inferior
    require_once('marcoinf.php');
    // Fin del código PHP
?>