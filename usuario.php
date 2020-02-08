<?php
   $user = $_GET['user'];
   $password = $_GET['password'];

    if (($user == "usuario") AND ($password == "12345")) {
	      echo "dashboard.html ".$user;
        //echo "Bienvenidos " .$user;
	  }
    else
    {
      //alert("Error en Usuario o Contraseña. Intenta de nuevo.")
	      echo "¡Usuario o contraseña incorrectos!";
	   }
?>
