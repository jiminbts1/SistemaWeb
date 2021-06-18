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
           <a href="indexUser.php">Inicio</a>
           <br>
           <a href="productos.php">Productos</a>
           <br>
           <a href="clientes.php">Clientes</a>
           <br>
           <a href="clientes.php">Regresar</a>
           <br>
</header>
    
 <div id="contenedor">
  <?php
  require '../backend/connect.php';
    echo '<table border="1">';
      echo "<tr>";
        echo "<td>nombre</td>";
        echo "<td>apellido</td>";
        echo "<td>correo</td>";
  
      echo "</tr>";
      $seleccion = mysqli_query($connect, "SELECT * FROM cliente");
      while ($datos = mysqli_fetch_array($seleccion)) {
        echo '<tr>';
          echo "<td>".$datos[0]."</td>";
          echo "<td>".$datos[1]."</td>";
          echo "<td>".$datos[4]."</td>";
      
          echo '<td> <form method="POST" action="../backend/accion-ELIMINAR.php">
                        <input type="hidden" name="nombre" value="'.$datos[0].'">
                        <input type="submit" value="Eliminar">
                      </form>
                </td>';
        echo "</tr>";
      }
    echo "</table>";
?>
 </div>
</body>
</html>