<?php
    // 1. Iniciamos (o reanudamos) la sesión SIEMPRE antes de cargar marcos que tengan HTML
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    // Carga el marco superior
    require_once('marcosup.php');

    // 2. Recogemos los datos del usuario usando las variables EXACTAS que pusimos en Zcontrol.php
    // Usamos isset() para evitar errores si la sesión ya había caducado
    $identificador = isset($_SESSION['LOGIN']) ? $_SESSION['LOGIN'] : ''; // El DNI (ej: 17513693N)
    $nombre = isset($_SESSION['nombre']) ? $_SESSION['nombre'] : 'Usuario'; // El nombre (ej: Manuel)

    // 3. Vaciamos las variables de sesión
    $_SESSION = [];

    // 4. Destruimos la sesión iniciada
    if (session_destroy()) {
        
        // Evitar caché de forma más estricta para que si le dan al botón "Atrás" del navegador no vean la Trastienda
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
?>
  <div class="py-5 bg-info">
    <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-lg-12 text-center">
            <h2 class="text-primary">Esquema Almacén Comercial</h2>            
            <br>      
            <div class="bg-dark-opaque text-warning" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.9)); background-position: top right; background-size: 100%; background-repeat: repeat; padding: 20px; border-radius: 10px;">
              
              <h3>"<?php echo htmlspecialchars($nombre) . " (" . htmlspecialchars($identificador) . ")"; ?>" <br>ha abandonado la sesión.</h3>
              <br>
              <a href="Zdespacho.php" class="btn btn-primary">Volver al Inicio</a>
              
            </div>
          </div>
        </div>
      </div>
  </div>
<?php
    } else {
        echo "<hr><h3 class='text-center text-danger'>Error al destruir la sesión</h3><hr>";
    }

    // Carga el marco inferior
    require_once('marcoinf.php');
?>