<?php
session_start();
if(!isset($_SESSION['admin'])){
  header('Location: indexAdmin.html');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Optica</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>
<body>
   <section id="boletin">
    <h1>Bienvenido Administrador a tu tienda </h1>
  </section>
<header>
	 <div class="contenedor">
      <nav>
      	<ul>
           <li class="actual"><a href="indexAdmin.php">Inicio</a></li>
           
            <li><a href="empleados.php">Empleados</a></li>
          
            <li><a href="salir.php">Salir</a></li>
         </ul>
      </nav>
     </div>
</header>
</section>
</body>
</html>