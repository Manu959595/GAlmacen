<?php
################################################
#### Menú Principal #
#
#
function principal()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
		  <li class="nav-item text-white"> <a class="nav-link" href="base.php">Base</a> </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Tablas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="T-usuarios.php">Usuarios</a>
              <a class="dropdown-item" href="T-noticias.php">Noticias</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
				Vistas</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="noticiasde.php">Publicadas_Por</a>
              <a class="dropdown-item" href="#">Vista-2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Vista-3</a>
              <a class="dropdown-item" href="#">Vista-4</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Vista-5</a>
              <a class="dropdown-item" href="#">Vista-6</a>
            </div>
          </li>
          <li class="nav-item"> <a class="nav-link" href="servicios.php">Servicios</a> </li>
          <li class="nav-item"> <a class="nav-link" href="contacto.php">Contacto</a> </li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php">Ayuda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
          <li class="nav-item"> <a class="nav-link" href="#">ENTRAR</a> </li>
        </ul>
          ';
		 
}
function principal_B()
{
echo '
        <ul class="navbar-nav ml-auto text-light">
          <li class="nav-item text-white"> <a class="nav-link" href="index.php">Inicio</a> </li>
		  <li class="nav-item text-white"> <a class="nav-link" href="base.php">Base</a> </li>
		  <li class="nav-item"> <a class="nav-link" href="G-noticias.php">Noticias</a>
          <li class="nav-item"> <a class="nav-link" href="G-usuarios.php">Usuarios</a></li>
          <li class="nav-item"> <a class="nav-link" href="ayuda.php">Ayuda</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#"></a> </li>          
          <li class="nav-item"> <a class="nav-link" href="salir.php">SALIR</a> </li>
        </ul>
          ';
		 
}
################################################
?>
