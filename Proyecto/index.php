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

    <br>
    <br>
    <center><table border="2" width="700">
    	<tr>	
    		<td>
    			<center><img src="https://i.ibb.co/QYH451m/Norte-America.jpg" width="300" height="300" ></center>
    		</td>
    		<td><center>
    			<?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat1'");
        			while($row = mysqli_fetch_array($results)){
        				echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
        				echo '<font size="3"><a href="">Ver mas detalles..</a></font>';
        		?>
      			<?php  }?></center>
    		</td>
    	</tr>
    	<tr>	
    		<td style="width:450px;">
    			<center><img src="https://i.ibb.co/rsHwWHH/Sudamerica.jpg" width="300" height="300" ></center>
    		</td>
    		<td  style="width:350px;"><center>
    			<?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat2'");
        			while($row = mysqli_fetch_array($results)){
        				echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
        				echo '<font size="3"><a href="">Ver mas detalles..</a></font>';
        		?>
      			<?php  }?></center>
    		</td>
    	</tr>
    	<tr>	
    		<td style="width:450px;">
    			<center><img src="https://i.ibb.co/1QcF2XX/Europeo.png" width="300" height="300" ></center>
    		</td>
    		<td  style="width:350px;"><center>
    			<?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat3'");
        			while($row = mysqli_fetch_array($results)){
        				echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
        				echo '<font size="3"><a href="">Ver mas detalles..</a></font>';
        		?>
      			<?php  }?></center>
    		</td>
    	</tr>
    	<tr>	
    		<td style="width:450px;">
    			<center><img src="https://i.ibb.co/4MCrxzk/Africa.jpg" width="300" height="300" ></center>
    		</td>
    		<td  style="width:350px;"><center>
    			<?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat4'");
        			while($row = mysqli_fetch_array($results)){
        				echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
        				echo '<font size="3"><a href="">Ver mas detalles..</a></font>';
        		?>
      			<?php  }?></center>
    		</td>
    	</tr>
    	<tr>	
    		<td style="width:450px;">
    			<center><img src="https://i.ibb.co/FBHcWjm/Asia.png" width="300" height="300" ></center>
    		</td>
    		<td  style="width:350px;"><center>
    			<?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat5'");
        			while($row = mysqli_fetch_array($results)){
        				echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
        				echo '<font size="3"><a href="">Ver mas detalles..</a></font>';
        		?>
      			<?php  }?></center>
    		</td>
    	</tr>
    	<tr>	
    		<td style="width:450px;">
    			<center><img src="https://i.ibb.co/VMr5bTX/Oceania.gif" width="300" height="300" ></center>
    		</td>
    		<td  style="width:350px;"><center>
    			<?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat6'");
        			while($row = mysqli_fetch_array($results)){
        				echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
        				echo '<font size="3"><a href="">Ver mas detalles..</a></font>';
        		?>
      			<?php  }?></center>
    		</td>
    	</tr>
    </table>
</center>


</body>
</html>