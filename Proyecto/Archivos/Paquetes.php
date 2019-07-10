<?php include('../Codigo.php'); ?>
<!DOCTYPE html>
<html>
<head> 
    <meta http-equiv=”Content-Type” content=”text/html; charset=UTF-8″ />
	<title>Travel Agency blue sky</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
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
<?php $categoria=$_GET['cat']; ?>
<!-- TABLA DE PAQUETES -->
<?php if($categoria==null){
    echo "No existen paquetes de esta categoria";
}else{
    echo "Estos son los paquetes de esta categoria
    ";
} ?>

<!--tabla bien-->
<div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100">
          <div class="table">
            <div class="row header">
              <div class="cell"><b>Código</b></div>
              <div class="cell"><b>Nombre</b></div>
              <div class="cell"><b>Días</b></div>
              <div class="cell"><b>Visitando</b></div>
              <div class="cell"><b>Costo</b></div>
              <div class="cell"><b>Ver detalles</b></div>              
            </div>
            <div class="row">
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>            
            </div>
          </div>
      </div>
    </div>
<!-- tabla a editar -->


<!-- TABLA DE PAQUETES -->
<br><br>
<table border="1">
    <tr> 
        <td>Boton</td>
        <td>Boton</td>
        <td>Boton</td>
    </tr>
</table>
</center>



    <!--Aqui acaba la pagina y se cierra el cuadro-->
<!--CAJA CONTENEDORA-->
        </fieldset>
      </form>
    </div>
  </div>
<!--CAJA CONTENEDORA-->


</body>
</html>