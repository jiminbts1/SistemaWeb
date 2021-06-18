<!DOCTYPE html>
<html>
<head>
  <title>Optica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>
<body >
<header>
   <div class="contenedor">
      <nav>
        <ul>
           <li class="actual"><a href="indexAdmin.php">Inicio</a></li>
           <li><a href="productos.php">Productos</a></li>
           <li><a href="clientes.php">Clientes</a></li>
           <li><a href="productos.php">Regresar</a></li>
         </ul>
      </nav>
     </div>
</header>

  <section id="boletin">
    <h1>Actualizar Productos</h1>
  </section>

<div id="contenedor">
  <form method="POST" action="../backend/actualizar.php">
   <fieldset>
    <h2>Modificar</h2>
    <?php
      require '../backend/connect.php';
      $idACT = $_POST['Id_Actualizar'];
      $seleccion = mysqli_query($connect, "SELECT * FROM catalogo WHERE id = '$idACT'");
      $datos = mysqli_fetch_array($seleccion);
      echo "<div>";
        echo 'ID: <input type="text" value="'.$datos[0].'" name="id" readonly>'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'categoria: <input type="text" value="'.$datos[1].'" name="categoria">'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'marca: <input type="text" value="'.$datos[2].'" name="marca">'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'Caracteristicas: <input type="text" value="'.$datos[3].'" name="caracteristicas">'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'Precio: <input type="text" value="'.$datos[4].'" name="precio">'; echo "<br><br>";
      echo " </div>";

    ?> 
   <div>
      <input name="guardar" type="submit" value="Registrar" />
     </div>


   </fieldset>
  </form>
 </div>
</body>
</html>

