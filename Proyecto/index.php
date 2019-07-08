<?php include('Codigo.php'); ?>

<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	<title>Travel Agency blue sky</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br>
	<center>
<img src="Imagenes/LOGOconSLOGAR.png" width="40%" height="40%">
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
                <div class="animation start-home"></div>
               
		</nav>
    </table>

</body>
</html>