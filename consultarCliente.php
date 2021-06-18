<?php
    require '../backend/connect.php'; 
    $mostrar = mysqli_query($connect, "SELECT * FROM cliente");
    echo "<!DOCTYPE html>";
    echo '<html lang="es">';
      
      echo '<link rel="stylesheet" href="css/estilo2.css">';
      echo '<body background = "../Fronten/css/6.jpg" no-repeat center center fixed>';
        echo '<div align="center">';
           echo '<table border="1">';
      echo "<tr>";
        echo "<td>nombre</td>";
        echo "<td>apellidos</td>";
        echo "<td>dirección</td>";
        echo "<td>télefono</td>";
        echo "<td>correo</td>";
        echo "<td>contrasena</td>";
      echo "</tr>";
      $seleccion = mysqli_query($connect, "SELECT * FROM cliente");
      while ($datos = mysqli_fetch_array($seleccion)) {
        echo '<tr>';
          echo "<td>".$datos[0]."</td>";
          echo "<td>".$datos[1]."</td>";
          echo "<td>".$datos[2]."</td>";
          echo "<td>".$datos[3]."</td>";
          echo "<td>".$datos[4]."</td>";
          echo "<td>".$datos[5]."</td>";
  
          
      }
    echo "</table>";
          echo "</table>","<br><br>";
          echo ' <a href="clientes.php"> <button type="button">Regresar</button></a>
    </div>';
        echo "</div>";
      echo "</body>";
    echo "</html>";
    
    /*f (mysqli_close($connect)) {
    echo "La conexión se cerró";
    }else {
    echo "Problema al cerrar";
  }*/
?>
