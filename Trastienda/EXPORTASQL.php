<?php
    // Invocamos el archivo con la conexión a la base de datos
    require_once('conexion.php');


// Recibe la consulta desde el formulario
//$sql = "SELECT id_log, nombreprov, email FROM proveedores";
$sql=$_POST['CONSULTA'];
$TITU=$_POST['TITULO'];
//echo $sql;


// Verificar conexión
if (!$c) {
    die("Error de conexión: " . mysqli_connect_error());
}


// Ejecuta la Consulta SQL


$result = mysqli_query($c, $sql);


// Verificar si la consulta fue exitosa
if (!$result) {
    die("Error en la consulta: " . mysqli_error($c));
}


// Nombre del archivo CSV
$filename = $TITU ."_reporte_". date("Y-m-d") . ".csv";


// Cabeceras para forzar descarga
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=' . $filename);


// Abrir salida estándar como archivo
$output = fopen('php://output', 'x');


// Escribir encabezados (nombres de columnas)
$fields = mysqli_fetch_fields($result);
$headers = array();
foreach ($fields as $field) {
    $headers[] = $field->name;
}
fputcsv($output, $headers);


// Escribir filas de datos
while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($output, $row);
}


// Cerrar conexión
fclose($output);
mysqli_free_result($result);
mysqli_close($c);


exit;
?>