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
<header>
   <div class="contenedor">
      <nav>
        <ul>
           <li class="actual"><a href="indexUser.php">Inicio</a></li>
           <li><a href="productos.php">Productos</a></li>
           <li><a href="productos.php">Regresar</a></li>
            <li><a href="salir.php">Salir</a></li>
         </ul>
      </nav>
     </div>
</header>
  
  <section id="boletin">
    <h1>Productos</h1>
  </section>
    
 <div id="contenedor">
  <?php
  require '../backend/connect.php';
    echo '<table border="1">';
      echo "<tr>";
        echo "<td>categoria</td>";
        echo "<td>marca</td>";
        echo "<td>Caracteristicas</td>";
        echo "<td>precio</td>";
      echo "</tr>";
      $seleccion = mysqli_query($connect, "SELECT * FROM catalogo");
      while ($datos = mysqli_fetch_array($seleccion)) {
        echo '<tr>';
          echo "<td>".$datos[1]."</td>";
          echo "<td>".$datos[2]."</td>";
          echo "<td>".$datos[3]."</td>";
          echo "<td>".$datos[4]."</td>";
          echo '<td> <form method="POST" action="modificaProductos.php">
                        <input type="hidden" name="Id_Actualizar" value="'.$datos[0].'">
                        <input type="submit" value="Actualizar">
                      </form>
                </td>';
        echo "</tr>";
      }
    echo "</table>";
?>
 </div>
</body>
</html>