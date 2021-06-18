<?php
	session_start();

	if(isset($_SESSION['carro']))
	$carro=$_SESSION['carro'];else $carro=false;
?>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0">
	<title>Optica	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="css/vercarrito.css"/>
</head>
	<header>
                 <big><center>Carrito</center></big>
            </h1>
        </div>
      
 	</header>
<body background="imagenes/0.jpg">

<?php
	if($carro)
		{

?>
<?php
	
	$color=array("","");
	$contador=0;

	$suma=0;

	
	foreach($carro as $k => $v){

	$subto=$v['cantidad']*$v['precio'];
	$suma=$suma+$subto;
	$contador++;

?>
	<h4>Tu compra fue:</h4>
	<form name="a<?php echo $v['identificador'] ?>" method="POST" action="../backend/agregarcar.php?<?php echo SID ?>" id="a<?php echo $v['identificador'] ?>">
		<tr bgcolor="<?php echo $color[$contador%2]; ?>" class='prod'>
			<td align="center" height="50"><?php echo $v['categoria'] ?></td>-------
			<td align="center" height="50"><?php echo $v['marca'] ?></td>-------
			<td align="center" height="50"><?php echo $v['caracteristicas'] ?></td>
			<td align="center" height="50"><?php echo $v["precio"] ?></td>------piezas
			<td width="43" height="50" align="center"><?php echo $v['cantidad'] ?></td>
			<td width="136" height="50" align="center">
			
		</tr>
	</form>

<?php

	}
?>
			</table>
			<br><br>
			<div align="center">
			<span class="prod1">Total de Artículos: <?php echo count($carro);
			?></span>
			</div><br>
		
			<div align="center"><span class="prod1">Total: $<?php echo $_SESSION['total']=number_format($suma,2);
			?></span>
			</div><br>

<?php }
else
	{ 
		?>
		<p align="center"> <span class="prod1">No hay productos seleccionados</span>
		<a href="catalogo.php?<?php echo SID;?>"><br>
		<img src="imagenes/triste.jpg" width="70" height="70" border-radius="150px"></a>
		<?php 
	}?>
</p>
	<center><A HREF="../Backend/pagar.php"><button id="bo2" type="submit">Comprar</button></A></center>
    
</body>
</html>