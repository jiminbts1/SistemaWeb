
<!DOCTYPE html>
<html>
<head>
	<title>Optica</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
</head>
<body>
  <section id="boletin">
    <h1>Clientes Optica</h1>
  </section>
<header>
	 <div class="contenedor">
      <nav>
      	<ul>
           <li class="actual"><a href="indexUser.php">Inicio</a></li>
           <li><a href="productos.php">Productos</a></li>
           <li><a href="clientes.php">Clientes</a></li>
           <li><a href="clientes.php">Regresar</a></li>
         </ul>
      </nav>
     </div>
</header>
    
 <div id="contenedor">
  <form method="POST" action="registrarClientes.html">
    <div>
        <input name="eliminar" type="submit" value="Agregar" />
      </div>
  </form>
  <form method="POST" action="tablacli.php">
    <div>
        <input name="modificar" type="submit" value="Modificar" />
      </div>
  </form>
  <form method="POST" action="../backend/selectcli.php">
    <div>
        <input name="eliminar" type="submit" value="Consultar" />
      </div>
  </form>
   <form method="POST" action="tablaelimcli.php">

    <div>
        <input name="eliminar" type="submit" value="Eliminar Cliente" />
      </div>

  </form>
  
 </div>
  </form>
 </div>
</body>
</html>