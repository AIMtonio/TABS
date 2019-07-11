<?php include('Codigo.php'); ?>
<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	<title>Travel Agency blue sky</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<audio autoplay src="Sonidos/Bienvenida.mp3"></audio>
<!--CAJA CONTENEDORA-->
<div class="container">
    <div class="wrapper">
          <form class="form-wrapper">
        <fieldset class="section is-active">
<!--CAJA CONTENEDORA-->
         
<!--aqui inicia la pagina-->
<br>
    <center>
<a href="https://luminary-ceremony.000webhostapp.com/"><img src="Imagenes/Logos/LogoLong.png"  width="60%" height="60%"></a>
</center>

<div><?php $categoria ?></div>
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
    </table><br>
    <div class="mensaje" id="mensaje">
    <?php
    $mensaje=$_SESSION['mensaje']; 
        echo $mensaje; ?>
</div>
    <br>
    <!-- TABLA DE CATEGORIAS-->
    <center>
        <div class="tablaCategorias" id="tablaCategorias">
        <table border="2" width="700">
        <tr>    
            <td>
               <center>
              <?php $results=mysqli_query($db,"SELECT url_img from categorias where id_categoria='cat1'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<img src='.$row['url_img'].' width="300" height="300">';?><?php  }?>  
            </center>
            </td>
            <td><center>
                <?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat1'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
                        echo '<font size="3"><a href="Paquetes.php?cat='.$row['id_categoria'].'" class="boton">Ver mas detalles...</a></font>';?>
                <?php  }?></center>
            </td>
        </tr>
        <tr>    
            <td style="width:450px;">
               <center>
              <?php $results=mysqli_query($db,"SELECT url_img from categorias where id_categoria='cat2'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<img src='.$row['url_img'].' width="300" height="300">';?><?php  }?>  
            </center>
            </td>
            <td  style="width:350px;"><center>
                <?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat2'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
                        echo '<font size="3"><a href="Paquetes.php?cat='.$row['id_categoria'].'" class="boton">Ver mas detalles...</a></font>';?>
                <?php  }?></center>
            </td>
        </tr>
        <tr>    
            <td style="width:450px;">
                <center>
              <?php $results=mysqli_query($db,"SELECT url_img from categorias where id_categoria='cat3'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<img src='.$row['url_img'].' width="300" height="300">';?><?php  }?>  
            </center>
            </td>
            <td  style="width:350px;"><center>
                <?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat3'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
                        echo '<font size="3"><a href="Paquetes.php?cat='.$row['id_categoria'].'" class="boton">Ver mas detalles...</a></font>';?>
                <?php  }?></center>
            </td>
        </tr>
        <tr>    
            <td style="width:450px;">
               <center>
              <?php $results=mysqli_query($db,"SELECT url_img from categorias where id_categoria='cat4'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<img src='.$row['url_img'].' width="300" height="300">';?><?php  }?>  
            </center>
            </td>
            <td  style="width:350px;"><center>
                <?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat4'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
                        echo '<font size="3"><a href="Paquetes.php?cat='.$row['id_categoria'].'" class="boton">
                        Ver mas detalles...</a></font>';
                ?>
                <?php  }?></center>
            </td>
        </tr>
        <tr>    
            <td style="width:450px;">
                <center>
              <?php $results=mysqli_query($db,"SELECT url_img from categorias where id_categoria='cat5'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<img src='.$row['url_img'].' width="300" height="300">';?><?php  }?>  
            </center>
            </td>
            <td  style="width:350px;"><center>
                <?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat5'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
                        echo '<font size="3"><a href="Paquetes.php?cat='.$row['id_categoria'].'" class="boton">Ver mas detalles...</a></font>';?>
                <?php  }?></center>
            </td>
        </tr>
        <tr>    
            <td style="width:450px;">
              <center>
              <?php $results=mysqli_query($db,"SELECT url_img from categorias where id_categoria='cat6'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<img src='.$row['url_img'].' width="300" height="300">';?><?php  }?>  
            </center>
            </td>
            <td  style="width:350px;"><center>
                <?php $results=mysqli_query($db,"SELECT * FROM categorias where id_categoria='cat6'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['descripcion'].'<br></font> <br>';
                        echo '<font size="3"><a href="Paquetes.php?cat='.$row['id_categoria'].'" class="boton">Ver mas detalles...</a></font>';?>
                <?php  }?></center>
            </td>
        </tr>
    </table>
</div><!--CIERRA TABLA CATEGORIAS-->
</center>
<!--<input type="button" onclick="eliminar()" class="boton" value="Eliminar Contenido" />-->
    <!--Aqui acaba la pagina y se cierra el cuadro-->
<!--CAJA CONTENEDORA-->
<br><br>
<footer>
    <div class="mensaje">
    <a href="Creditos.php">Creditos</a>
    </div>
</footer>
        </fieldset>
      </form>
    </div>
  </div>
<!--CAJA CONTENEDORA-->
</body>
</html>