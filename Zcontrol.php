<?php 
        // Cargamos el archivo que tiene la conexión y la variable $base ya que no requiere el marcosup al no visualizar nada
        require_once('conexion.php');
        
        // Nombre de la tabla sobre la que vamos a ejecutar la sentencia
        $tabla="usuarios";

        // Recogemos las variables de identificación.
        $usuario=$_POST['usuario']; 
        $llave= md5($_POST['llave']); // Encripta la clave nada más llegar
        //$llave= $_POST['llave'];

        //Sentencia SQL para buscar un usuario con esos datos 
        $ssql = "SELECT * FROM $tabla WHERE login='$usuario' and passw='$llave'"; 
        //echo "<hr>$ssql<hr>";
	   
        //Ejecuto la sentencia 
        $rs = mysqli_query($c, $ssql); 
		
		// Número de filas del resultado
		$lineas=mysqli_num_rows($rs);
		
        //vemos si el usuario y contraseña son válidos 
        //si la ejecución de la sentencia SQL nos da algún resultado 
        //es que si que existe esa combinación usuario/contraseña 
		
        if ($lineas!=0){ 
		//if (mysqli_num_rows($rs)!=0){ 
                //usuario y contraseña válidos porque ha encontrado registros que cumplen 
                // Selecciona el registro en la tabla y recoge datos
                $registro = mysqli_fetch_row($rs);
                $nombre=$registro[2]; // el nombre completo del usuario
                $nick=$registro[1]; // identificador
                $ID=$registro[0]; // identificador
                //defino una sesion y guardo datos 
                session_start(); 
                $_SESSION["autent"]= "SI"; 
                $_SESSION['login']=$nick;
                $_SESSION['username']=$usuario;
                $_SESSION['nomape']=$nombre;
                $_SESSION['ID']=$ID;
                $autentificado = "SI"; 
				// Mostramos los resultados de las variables de sesión
				/*echo "- - - - - - - - - - -";
				echo "<br>autent =". $_SESSION["autent"];
				echo "<br>login =". $_SESSION["autent"];
				echo "<br>username =". $_SESSION["username"];
				echo "<br>nomape =". $_SESSION["nombre"];
				echo "<br>ID =". $_SESSION["ID"];
				echo "<br>- - - - - - - - - - -";
				*/
                // Redirecciona a la página del Backend
                header ("Location: index-B.php");
        }else { 
                //si no existe le mando otra vez a la portada 
                header("Location: Zdespacho.php?errorusuario=si"); 
                //echo "- ERROR - - - - - - - - - -";
        } 
        mysqli_free_result($rs); 
        mysqli_close($c); 
?>