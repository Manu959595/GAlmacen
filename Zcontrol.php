<?php 
    // Cargamos la conexión SQLite3
    require_once('conexion.php');
    
    $tabla = "usuarios";
    $usuario = $_POST['usuario']; 
    $llave = md5($_POST['llave']); 

    // Preparamos la consulta
    $ssql = "SELECT * FROM $tabla WHERE login = :usuario AND passw = :llave"; 
    $stmt = $c->prepare($ssql);
    
    $stmt->bindValue(':usuario', $usuario, SQLITE3_TEXT);
    $stmt->bindValue(':llave', $llave, SQLITE3_TEXT);
    
    // Ejecutamos y extraemos
    $rs = $stmt->execute();
    $registro = $rs->fetchArray(SQLITE3_ASSOC);

    // Validamos
    if ($registro) { 
        session_start(); 
        $_SESSION["autent"] = "SI"; 
        $_SESSION['LOGIN'] = $registro['login']; // Guardamos el DNI/login
        $_SESSION['nombre'] = $registro['nomape']; // Guardamos el nombre completo
        $_SESSION['id'] = $registro['ID'];
        
        // ¡Todo correcto! Pa' dentro.
        header("Location: Trastienda/index.php");
        exit(); 
        
    } else { 
        // Credenciales incorrectas, de vuelta al inicio.
        header("Location: Zdespacho.php?errorusuario=si"); 
        exit();
    } 
    
    // Cerramos todo
    $rs->finalize(); 
    $c->close(); 
?>