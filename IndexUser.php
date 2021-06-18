<?php
session_start();
if(!isset($_SESSION['usuario']))
  $_SESSION['usuario']="Iniciar sesion";

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
<body background="imagenes/113.jpg" no-repeat center center fixed>
     <h1>Tienda Optica </h1>
<header>
	 <div class="contenedor">
      <nav>
      	<ul>
           <li class="actual"><a href="IndexUser.php">Inicio</a></li>
           <li><a href="catalogo.php">Venta</a></li>
           <li><a href="productos.php">Productos Tienda</a></li>
           <li><a href="clientes.php">Clientes</a></li>
            <li><a href="salir.php">Salir</a></li>

         </ul>
      </nav>
     </div>
</header>
<section id="cabecera" >
  <div class="contenedor">
 
    <br><br>
  </div>
</section>
  
  <section id="boletin">
  </section>
<section id="cajas">
</section>
</body>
</html>