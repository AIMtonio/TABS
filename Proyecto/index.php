<?php include('Codigo.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Travel Agency blue sky</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br>
	<center>
	<table border="1">
		<td><img src="Imagenes/Logo.png" width="90%" height="90%"></td>
		<td>No se recuerdan los días, se recuerdan los momentos. Vuela a la vida.</td>
	</table>
</center>

<div><?php $categoria ?></div>
<div class="mensaje">
    <?php
    $mensaje=$_SESSION['mensaje']; 
        echo $mensaje; 
?>
</div>


<?php $results=mysqli_query($db,"SELECT*FROM categorias");
    $row=mysqli_fetch_array($results);
    if(is_null($row)){
        ?> <div class="vacio"> Sin Registros
    </div> <?php
    }else{
        ?>
    <table>
    	<nav>
        	<?php $results=mysqli_query($db,"SELECT * FROM categorias");
        	while($row = mysqli_fetch_array($results)){
        		echo '<a href="" value="'.$row['id_categoria'].'">'.$row['nombre'].'</a>';
        	?>
      		<?php } }?>
		</nav>
    </table>

</body>
</html>