<?php
	require_once('marcosup.php');
	
?>
<nav class="navbar py-2 navbar-light text-left bg-warning" id="2" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
  <span class="navbar-text text-left text-dark"><hr><b>Consulta modo tabla</b></span>
</nav>
   <div class="py-3 bg-info" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.6));	background-position: top left;	background-size: 100%;	background-repeat: no-repeat;">
      <div class="container">
        <div class="row text-center">
		      <div class="text-center mx-auto col-10">
               <h2>PEDIDOS COMPLETOS: </h2>	
            </div>
		   </div>		
		</div>	
		<div class="row text-center h-70">	
          <div class="container  h-100">
			<div class="text-center mx-auto col-10">		
               <?php
               
               // Seleccionamos la tabla con la que vamos a trabajar
               $tabla="pedidos";// Escribir entre comillas el nombre de la tabla a listar
               
               // Establecemos la sentencia SQL de la Consulta a realizar
               $sentencia="select * from $tabla";
               
                // Recopilar las filas almacenadas en la tabla
                // $resultado=mysqli_query($c,$sentencia);
                $resultado=$c->query($sentencia);
                //--------------------------------------------------------------------------------------------------
                 // Primera parte. Preparación paginación. 
                 // Este código hay que añadirlo tras ejecutar la sentencia para saber 
                     // el total de registros de la consulta y poder calcular el número de páginas
                     // --- --- --- --- --- --- --- --- --- --- --- ---
                     // --- --- --- Preparamos la paginación -- --- --- 
                     // comprueba si viene número de página   
                     if (isset($_GET['pagina']))
                     {
                     $pagina=$_GET['pagina'];
                     }
                     else{
                     $pagina=1;  
                     } 
                 // Calculamos el número de páginas que tenemos que usar para visualizar el resultado
                 // Empezamos calculando el número de registros que tiene que mostrar
                 //$numreg = $resultado->numRows();
                 $numreg = 0;
                 while ($registro = $resultado->fetchArray()){
                    $numreg++;
                 }
                 // Fijamos el máximo de registros por página.
                 $N=6; // Lo fijamos a 6
                 
                 // Como vamos a usar N registros por página dividimos entre N
                 $numpag= ceil($numreg/$N);    
                 
                 // Calcula cuál será el registro de inicio para construir la consulta
                 $inicio=($pagina-1)*$N;
                 
                 // Volvemos a ejecutar la sentencia pero fijando los límites.
                 $sentencia .=" limit ".$inicio.", $N";
                 //$resultado=mysqli_query($c,$sentencia);
                 $resultado=$c->query($sentencia);
                 //echo "<hr>$sentencia<hr>";
                 // --- --- --- --- --- --- --- --- --- --- --- ---
                
               // Dibujamos una tabla HTML para mostrar los valores almacenados
               echo '<table class="table table-dark table-condensed">';
               
               // Recopilar los nombres de las columnas de la tabla seleccionada
               //$cabeceras=mysqli_query($c,"SHOW FIELDS FROM $tabla");
               //$columnas="SHOW FIELDS FROM $tabla";
               $columnas="PRAGMA table_info($tabla);";
               $cabeceras = $c->query($columnas);

               // Construye la fila de cabeceras
               echo "<tr bgcolor=#aa5500>";
               //while ($cab=mysqli_fetch_row($cabeceras)){
                while ($cab = $cabeceras->fetchArray(SQLITE3_NUM)){
                  echo "<th>$cab[1]</th>";
               }
               echo "</tr>";
               
              
               // Recorremos $resultado mostrando cada fila de la tabla
               //while ($registro = mysqli_fetch_row($resultado)){
                while ($registro = $resultado->fetchArray(SQLITE3_NUM)){
                  
                  // Iniciamos la fila
                  echo "<tr>";
                  
                  // Iniciar un contador de columnas
                  $i=0;
                  
                  // Recorremos y mostramos el valor de cada columna
                  foreach ($registro as $fila){
                     
                     // Mostramos el valor de cada celda
                     echo "<td> $registro[$i]</td>";
                     
                     // Incrementamos el contador de columnas
                     $i++;
                  }
                  
                  // Fin de la fila
                  echo "</tr>";				
               }
               
               // Fin de la tabla HTML
               echo "</table>";
               ?>
               </div>		
            </div>
		</div>	
		<div class="row text-center h-5">	
			<div class="text-center mx-auto col-10">	
                <?php
               //--------------------------------------------------------------------------------------------------
                // Segunda parte. Paginador.
                // Este código se añade al final de la consulta en la última sección row
                // --- --- --- --- --- --- --- --- --- --- --- ---
                    // --- Mostramos el paginador ---       
                    // Calcula páginas anterior y siguiente
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
                    
                    echo "<div class='col-md-12 text-center'>"; // Fin de la capa row  
                    echo '<ul class="pagination justify-content-center ">';
                    echo '	<li class="page-item ">';
                    echo '	  <a class="page-link" href="PedidoCompleto.php?pagina='.$anterior.'">&laquo;</a>';
                    echo '	</li>';
                    for ($i=1;$i<=$numpag;$i++)
                    {
                        if($i==$pagina){
                                echo '	<li class="page-item active">';
                                echo '	  <a class="page-link"href="PedidoCompleto.php?pagina='.$i.'">'.$i.'</a>';
                                echo '	</li>';						
                            }
                            else{
                                echo '	<li class="page-item"><a class="page-link" href="PedidoCompleto.php?pagina='.$i.'">'.$i.'</a></li>';
                            }
                    }
                    echo '	<li class="page-item ">';
                    echo '	  <a class="page-link" href="PedidoCompleto.php?pagina='.$siguiente.'">&raquo;</a>';
                    echo '	</li>';
                    echo '  </ul>';
                    
                    // --- Fin paginación ---
                    // --- --- --- --- --- --- --- --- --- --- --- ---
               // Cerramos la conexión con la base de datos
               // mysqli_close($c);
               
               ?>   	
		   </div>		
		</div>
   </div>

<?php
	require_once('marcoinf.php');
?>	
