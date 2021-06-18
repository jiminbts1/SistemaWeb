<?php
	ob_start("ob_gzhandler");
	session_start();

	include ("../backend/connect.php");

	if(isset($_SESSION['carro']))
		$carro=$_SESSION['carro'];else $carro=false;
		
		$qry="SELECT * from catalogo order by categoria asc";
		$exec=mysqli_query($connect, $qry);

?>

<html>
<head>
	<meta charset="UTF-8">
    <meta name= "Historias de los piratas, barcos." content="piratas"/>
    <meta name= "Keywords" content="Piratas, Barcos, Historia"/>
    <meta name="viewport" content="initial-scale=1.0">
    <title>Optica</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="css/Catalogo.css"/>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="css/estilo1.css">
</head>


	<body>
	<header>
	 <div class="contenedor">
      <nav>
      	<ul>
           <li class="actual"><a href="IndexUser.php">Inicio</a></li>
           <li><a href="catalogo.php">Productos</a></li>
            <li><a href="salir.php">Salir</a></li>
         </ul>
      </nav>
     </div>
</header>

		<center><table width="800" align="center">
			<tr valign="middle" class="catalogo">
				<td width="170" height="50"><center><strong>categoria</strong></center></td>
				<td width="77" height="50"><center><strong>marca</strong></center></td>
				<td width="350" height="50"><center><strong>caracteristicas</strong></center></td>
				<td width="77" height="50"><center><strong>precio</strong></center></td>
				<td width="20" height="50" align="right"><center><a href="../Fronten/vercarrito.php?<?php echo SID ?>" title="Ver el contenido del carrito">
			  <center><strong>Comprar</strong></center>
				</a></center></td>
			</tr>
<?php

	while($row=mysqli_fetch_assoc($exec)){
?>
	<br>
	<tr bgcolor="#ffffff" valign="middle" class="catalogo">
	<td width="170" height="50"><center><?php echo $row['categoria'] ?></center></td>
	<td width="170" height="50"><center><?php echo $row['marca'] ?></center></td>
	<td width="170" height="100"><?php echo $row['caracteristicas'] ?></td>
	<td width="170" height="50"><center><?php echo $row['precio'] ?></center></td>
	<td align="center" width="170" height="50">

<?php
	
	if(!$carro || !isset($carro[md5($row['id'])]['identificador']) || $carro[md5($row['id'])]['identificador']!=md5($row['id']))
		{
?>
			<a href="../backend/agregarcar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
			<img src="../Fronten/imagenes/dos.jpg" width="60" height="60" border="0" title="Agregar al Carrito"></a><?php 
		}
	else
		{
			?><a href="../backend/borrarcar.php?<?php echo SID ?>&id=<?php echo $row['id']; ?>">
			<img src="../Fronten/imagenes/tres.jpg" width="40" height="40" border="0" title="Quitar del Carrito"></a><?php 
		} 
			?>
	</td>
	</tr>
<?php 
	} 
?>
		</table></center>
		
               
	</body>
</html>

<?php
	ob_end_flush();
?>



