<?php   //Iniciamos código PHP
    //Cargar el marco superior
    require_once('marcosup.php');
?>
<?php
// VARIABLES DE CONFIGURACIÓN
$Servidor = "localhost";
$Usuario = "root";
$Clave = "";
$EsquemaBD = "almacen";
$CarpetaCopias = __DIR__ . "/CopiaSeg/";


// (mysqldump.exe debe ser copiado a la carpeta Trastienda del proyecto)
// Lo encontraremos en "c:/xampp/mysql/bin/";


// Crear carpeta para copias de seguridad si no existe
if (!file_exists($CarpetaCopias)) {
    mkdir($CarpetaCopias, 0755, true);
}


// BOTÓN PARA CREAR UNA COPIA DE SEGURIDAD EN UN INSTANTE
echo '
<div class="w-75 bg-success mx-auto" style="text-align: center;">
    <h2>Crear Nueva Copia de Seguridad</h2>
    <form method="post">
        <button class="btn btn-warning btn-sm" type="submit" name="create_backup">Crear Copia de Seguridad Ahora</button>
    </form>
    <br>
</div>';


// CREAR COPIA DE SEGURIDAD
if (isset($_POST['create_backup'])) {
    // Crear carpeta si no existe
    if (!is_dir($CarpetaCopias))
    {
    mkdir($CarpetaCopias, 0755, true);
    }


    // Nombre del archivo
    $hoy = date("Y-m-d_H-i-s");
    $FicheroCopiaSeg = "$CarpetaCopias/{$EsquemaBD}_Respaldo_$hoy.sql";


    // Construye el comando mysqldump
    $command = sprintf(
    'mysqldump --host=%s --user=%s --password=%s ' .
    '--routines --triggers ' .
    '--default-character-set=utf8mb4 %s > %s',
    escapeshellarg($Servidor),
    escapeshellarg($Usuario),
    escapeshellarg($Clave),
    escapeshellarg($EsquemaBD),
    escapeshellarg($FicheroCopiaSeg)
    );


    // Ejecutar comando
    exec($command, $output, $resultCode);


    // Verificar resultado
    if ($resultCode === 0) {
        echo "<div class='w-75 bg-info mx-auto'><br>";
        echo "<h3 style='text-align: center;'>✅ Respaldo creado correctamente en este momento $hoy.</h3>";
        echo "<hr></div>";
    } else {
        echo "<div class='w-75 bg-warning mx-auto'><br>";
        echo "<h3 style='text-align: center;'>❌ Error al crear el Respaldo.</h3>";
        echo "<hr></div>";
    }
}


// DESCARGAR COPIA DE SEGURIDAD
if (isset($_GET['download'])) {
    $fichero= basename($_GET['download']);
    $Ruta_fichero = $CarpetaCopias . $fichero;


    if (file_exists($Ruta_fichero)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/sql');
        header('Content-Disposition: attachment; FicheroCopia="' . $fichero. '"');
        header('Content-Length: ' . filesize($Ruta_fichero));
        readfile($Ruta_fichero);
        exit;
    }
}


// ELIMINAR COPIA DE SEGURIDAD
if (isset($_GET['delete'])) {
    $file= basename($_GET['delete']);
    $Ruta_fichero = $CarpetaCopias . $file;


    if (file_exists($Ruta_fichero)) {
        unlink($Ruta_fichero);
        echo "<div class='w-75 bg-info mx-auto'><br>";
        echo "<h3 style='text-align: center;'>Backup eliminado correctamente.</h3>";
        echo "<hr></div>";
    }
}


// LISTAR COPIAS DE SEGURIDAD
$files = array_diff(scandir($CarpetaCopias), array('.', '..'));


if (!empty($files)) {
?>


<div class="w-75 bg-success mx-auto">
    <table class="table w-75 mx-auto" cellpadding="5">
        <tr style="background-color: yellow;">
            <th><h2>Copias de Seguridad Disponibles</h2></th>
            <th></th>
        </tr>
        <tr style="background-color: yellow;">
            <th>Descargar Archivo</th>
            <th>Acciones</th>
        </tr>


        <?php foreach ($files as $file): ?>
        <tr>
            <td>
                <?php
                echo "<a href='CopiaSeg/$file'>CopiaSeg/$file</a><br>";
                ?>
            </td>
            <td>  
                <?php $fichero="CopiaSeg/$file" ?>
                <!--<a href="?download=<?= urlencode($fichero) ?>">DESCARGAR </a> | -->
                <a href="<?php echo $fichero; ?>">Descargar </a> |
           
                <a href="?delete=<?= urlencode($file) ?>"
                onclick="return confirm('¿Seguro que deseas eliminar este backup?')">
                Eliminar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>


    </table>
    <br>
</div>
<?php
}
else{
    echo "<div class='w-75 bg-success mx-auto'><br>";
    echo "<h3 style='text-align: center;'>En este momento no hay generadas Copias de Seguridad. Sugiero que la haga ahora.</h3>";
    echo "<hr></div>";
}
    //Cargar el marco inferior
    require_once('marcoinf.php');
    // Fin del código PHP
?>  