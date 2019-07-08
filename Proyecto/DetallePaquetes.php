<?php include('Codigo.php'); ?>
<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	<title>Travel Agency blue sky</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<!--CAJA CONTENEDORA-->
<div class="container">
    <div class="wrapper">
          <form class="form-wrapper">
        <fieldset class="section is-active">
<!--CAJA CONTENEDORA-->
         
<!--aqui inicia la pagina-->
<br>
    <center>
<a href="Index.php"><img src="Imagenes/Logos/LogoLong.png"  width="60%" height="60%"></a>
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
    <!--CIERRA TABLA CATEGORIAS-->
</center>
<?php $idpaq=$_GET['idpaq']; ?>
<!-- TABLA DE PAQUETES -->
<?php if($categoria==null){
    echo "No existen paquetes de esta categoria";
}else{
    echo "Estos son los detalles del paquete seleccionado    ";
} ?>
<!-- TABLA DE PAQUETES -->


    <!--Aqui acaba la pagina y se cierra el cuadro-->
<!--CAJA CONTENEDORA-->
        </fieldset>
      </form>
    </div>
  </div>
<!--CAJA CONTENEDORA-->


</body>
</html>