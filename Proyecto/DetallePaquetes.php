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
    echo $idpaq;
} ?>
<!-- TABLA DE PAQUETES -->
<center><table border="2" width="500">
    <tr>
        <td colspan="3">
            <center>
                <?php $results=mysqli_query($db,"SELECT destino from paquetes where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="6">'.$row['destino'].'</font>';?><?php  }?>
            </center>
        </td>   
    </tr>
   <tr>
        <td><font size="3"><b>Clave:</b></font>
            <?php $results=mysqli_query($db,"SELECT * FROM detalle_paquete where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['id_deta_paq'].'</font>';?><?php  }?>
        </td> 
        <td><font size="3"><b>Días:</b></font>
            <?php $results=mysqli_query($db,"SELECT no_dias from paquetes where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['no_dias'].'</font>';?><?php  }?>
        </td>    
    </tr>
    <tr>
        <td colspan="3"><font size="3"><b>Costo:</b></font>
            <?php $results=mysqli_query($db,"SELECT costo from paquetes where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['costo'].'</font>';?><?php  }?>
            <font size="3"> MXN por persona, Saliendo unicamente de CDMX</font>            
        </td>
    </tr>
    <tr>
        <td colspan="3"><font size="3"><b>Salidas:</b></font>
            <?php $results=mysqli_query($db,"SELECT * from detalle_paquete where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="2">'.$row['salidas'].'</font>';?><?php  }?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><font size="3"><b>Visitando:</b></font>
            <?php $results=mysqli_query($db,"SELECT * from detalle_paquete where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['destinos'].'</font>';?><?php  }?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><font size="3"><b>Incluye:</b></font>
            <?php $results=mysqli_query($db,"SELECT * from detalle_paquete where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['paq_incluye'].'</font>';?><?php  }?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><font size="3"><b>No incluye:</b></font>
            <?php $results=mysqli_query($db,"SELECT * from detalle_paquete where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3">'.$row['paq_no_incluye'].'</font>';?><?php  }?>
        </td>
    </tr>
    <tr>
        <td colspan="3"><font size="3"><b>Intinerario:</b></font>
        <?php $results=mysqli_query($db,"SELECT * from detalle_paquete where id_paquete='$idpaq'");
                    while($row = mysqli_fetch_array($results)){
                        echo '<font size="3"><a href="'.$row['Nom_pdf'].'.pdf">Ver Intinerario</a></font>';?><?php  }?>
        </td>
    </tr>
</table></center>


    <!--Aqui acaba la pagina y se cierra el cuadro-->
<!--CAJA CONTENEDORA-->
        </fieldset>
      </form>
    </div>
  </div>
<!--CAJA CONTENEDORA-->
</body>
</html>