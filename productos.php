
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
    <h1>Productos Optica</h1>
  </section>
<header>
	 <div class="contenedor">
      <nav>
      	<ul>
           <li class="actual"><a href="indexUser.php">Inicio</a></li>
           <li><a href="productos.php">Productos</a></li>
           <li><a href="clientes.php">Clientes</a></li>
         </ul>
      </nav>
     </div>
</header>  
 <div id="contenedor">
  <form method="POST" action="registrarProductos.html">
    <div>
        <input name="eliminar" type="submit" value="Agregar" />
      </div>
  </form>
  <form method="POST" action="tablaprod.php">
    <div>
        <input name="modificar" type="submit" value="Modificar" />
      </div>
  </form>
  <form method="POST" action="../backend/select.php">
    <div>
        <input name="eliminar" type="submit" value="Consultar" />
      </div>
  </form>
   <form method="POST" action="tablae.php">

    <div>
        <input name="eliminar" type="submit" value="Eliminar Producto" />
      </div>

  </form>
  
 </div>
</body>
</html>