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
           <li><a href="clientes.php">Regresar</a></li>
            <li><a href="salir.php">Salir</a></li>
         </ul>
      </nav>
     </div>
</header>

  <section id="boletin">
    <h1>Actualizar Clientes</h1>
  </section>

<div id="contenedor">
  <form method="POST" action="../backend/actualizarCli.php">
   <fieldset>
    <h2>Modificar</h2>
    <?php
      require '../backend/connect.php';
      $idACT = $_POST['Id_Actualizar'];
      $seleccion = mysqli_query($connect, "SELECT * FROM cliente WHERE id = '$idACT'");
      $datos = mysqli_fetch_array($seleccion);
      echo "<div>";
        echo 'ID: <input type="text" value="'.$datos[0].'" name="id" readonly>'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'nombre: <input type="text" value="'.$datos[1].'" name="nombre">'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'apellidos: <input type="text" value="'.$datos[2].'" name="apellido">'; echo "<br><br>";
      echo " </div>";
      echo "<div>";
        echo 'correo: <input type="text" value="'.$datos[3].'" name="correo">'; echo "<br><br>";
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

