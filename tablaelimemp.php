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
           <li class="actual"><a href="indexAdmin.php">Inicio</a></li>
           <li><a href="empleados.php">Empleados</a></li>
         </ul>
      </nav>
     </div>
</header>
  
  <section id="boletin">
    <h1>Eliminar Empleado</h1>
  </section>
   <div align="center">
    
 <div id="contenedor">
  <?php
  require '../backend/connect.php';
    echo '<table border="1">';
      echo "<tr>";
        echo "<td>id</td>";
        echo "<td>nombre</td>";
        echo "<td>apellidos</td>";
        echo "<td>telefono</td>";
        echo "<td>correo</td>";
  
      echo "</tr>";
      $seleccion = mysqli_query($connect, "SELECT * FROM empleado");
      while ($datos = mysqli_fetch_array($seleccion)) {
        echo '<tr>';
          echo "<td>".$datos[0]."</td>";
          echo "<td>".$datos[1]."</td>";
          echo "<td>".$datos[2]."</td>";
          echo "<td>".$datos[3]."</td>";
          echo "<td>".$datos[4]."</td>";
      
          echo '<td> <form method="POST" action="../backend/actionemp.php">
                        <input type="hidden" name="id" value="'.$datos[0].'">
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