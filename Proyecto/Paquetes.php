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
        echo $mensaje; ?></div>
    <br><br>
    <div class="mensaje2" id="mensaje2"></div>
    <!-- TABLA DE CATEGORIAS-->
</center>
<?php $categoria=$_GET['cat']; ?>
<!-- TABLA DE PAQUETES -->
<?php if($categoria==null){
    echo "No existen paquetes de esta categoria";
}else{
    echo "Estos son los paquetes de esta categoria
    ";
} ?>

                                             <!-- CATEGORIA 1-->
                                             <!-- CATEGORIA 1-->
                                             <!-- CATEGORIA 1-->
<!--tabla bien-->
<?php if($categoria=='cat1'){ ;?>
<div class="limiter">
    <div class="container-table100" id="Tabla1" style="display:block;">
      <div class="wrap-table100">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq1' AND 'paq5'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq1' AND 'paq5'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq1' AND 'paq5'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq1' AND 'paq5'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq1' AND 'paq5'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq1' AND 'paq5'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 1 CATEGORIA 1 BIEN -->
<div class="limiter">
    <div class="container-table100" id="Tabla2" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq6' AND 'paq_10'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq6' AND 'paq_10'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq6' AND 'paq_10'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq6' AND 'paq_10'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq6' AND 'paq_10'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq6' AND 'paq_10'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 2 CATEGORIA 1 BIEN -->
<!--tabla bien-->
<div class="limiter">
    <div class="container-table100" id="Tabla3" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_11' AND 'paq_13'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_11' AND 'paq_13'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_11' AND 'paq_13'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_11' AND 'paq_13'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_11' AND 'paq_13'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_11' AND 'paq_13'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 3 CATEGORIA 1 BIEN -->
                                            <!-- CATEGORIA 2-->
                                            <!-- CATEGORIA 2-->
                                            <!-- CATEGORIA 2-->
<?php
}else if($categoria=='cat2'){ ;?>
<div class="limiter">
    <div class="container-table100" id="Tabla1" style="display:block;">
      <div class="wrap-table100">
          <div class="table" id="Tabla1">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_14' AND 'paq_18'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_14' AND 'paq_18'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_14' AND 'paq_18'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_14' AND 'paq_18'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_14' AND 'paq_18'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_14' AND 'paq_18'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 1 CATEGORIA 2 BIEN -->
<div class="limiter">
    <div class="container-table100" id="Tabla2" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_19' AND 'paq_23'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_19' AND 'paq_23'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_19' AND 'paq_23'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_19' AND 'paq_23'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_19' AND 'paq_23'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_19' AND 'paq_23'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 2 CATEGORIA 2 BIEN -->
<div class="limiter">
    <div class="container-table100" id="Tabla3" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_24' AND 'paq_26'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_24' AND 'paq_26'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_24' AND 'paq_26'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_24' AND 'paq_26'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_24' AND 'paq_26'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_24' AND 'paq_26'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 3 CATEGORIA 2 BIEN -->
                                            <!-- CATEGORIA 3-->
                                            <!-- CATEGORIA 3-->
                                            <!-- CATEGORIA 3-->

<?php 
}else if($categoria=='cat3'){ ;?>

<!--tabla bien-->
<div class="limiter">
    <div class="container-table100" id="Tabla1" style="display:block;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_27' AND 'paq_31'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_27' AND 'paq_31'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_27' AND 'paq_31'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_27' AND 'paq_31'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_27' AND 'paq_31'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_27' AND 'paq_31'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 1 CATEGORIA 3 BIEN -->

    <!--tabla bien-->
<div class="limiter">
    <div class="container-table100" id="Tabla2" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_32' AND 'paq_36'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_32' AND 'paq_36'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_32' AND 'paq_36'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_32' AND 'paq_36'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_32' AND 'paq_36'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_32' AND 'paq_36'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 2 CATEGORIA 3 BIEN -->

<!--tabla bien-->
<div class="limiter">
    <div class="container-table100" id="Tabla3" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_37' AND 'paq_39'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_37' AND 'paq_39'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_37' AND 'paq_39'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_37' AND 'paq_39'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_37' AND 'paq_39'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_37' AND 'paq_39'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 3 CATEGORIA 3 BIEN -->
                                            <!-- CATEGORIA 4-->
                                            <!-- CATEGORIA 4-->
                                            <!-- CATEGORIA 4-->
<?php
}else if($categoria=='cat4'){ ;?>
<div class="limiter">
    <div class="container-table100" id="Tabla1" style="display:block;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_40' AND 'paq_44'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_40' AND 'paq_44'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_40' AND 'paq_44'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_40' AND 'paq_44'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_40' AND 'paq_44'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_40' AND 'paq_44'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 1 CATEGORIA 4 -->


<!--tabla bien-->
<div class="limiter">
    <div class="container-table100">
      <div class="wrap-table100" id="Tabla2" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_45' AND 'paq_49'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_45' AND 'paq_49'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_45' AND 'paq_49'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_45' AND 'paq_49'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_45' AND 'paq_49'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_45' AND 'paq_49'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 2 CATEGORIA 4 BIEN -->

<!--tabla bien-->
<div class="limiter">
    <div class="container-table100" id="Tabla3" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_50' AND 'paq_52'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_50' AND 'paq_52'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_50' AND 'paq_52'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_50' AND 'paq_52'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_50' AND 'paq_52'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_50' AND 'paq_52'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 3 CATEGORIA 4 -->
                                            <!-- CATEGORIA 5-->
                                            <!-- CATEGORIA 5-->
                                            <!-- CATEGORIA 5-->
<?php   
}else if($categoria=='cat5'){ ;?>
<div class="limiter">
    <div class="container-table100" id="Tabla1" style="display:block;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_53' AND 'paq_57'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_53' AND 'paq_57'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_53' AND 'paq_57'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_53' AND 'paq_57'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_53' AND 'paq_57'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_53' AND 'paq_57'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 1 CATEGORIA 5 BIEN -->
<div class="limiter">
    <div class="container-table100" id="Tabla2" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_58' AND 'paq_62'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_58' AND 'paq_62'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_58' AND 'paq_62'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_58' AND 'paq_62'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_58' AND 'paq_62'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_58' AND 'paq_62'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 2 CATEGORIA 5 BIEN -->
<div class="limiter">
    <div class="container-table100" id="Tabla3" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_63' AND 'paq_65'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_63' AND 'paq_65'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_63' AND 'paq_65'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_63' AND 'paq_65'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_63' AND 'paq_65'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_63' AND 'paq_65'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 3 CATEGORIA 5 BIEN -->    
                                            <!-- CATEGORIA 6-->
                                            <!-- CATEGORIA 6-->
                                            <!-- CATEGORIA 6-->
<?php
}else if($categoria=='cat6'){ ;?>
<div class="limiter">
    <div class="container-table100" id="Tabla1" style="display:block;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_66' AND 'paq_70'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_66' AND 'paq_70'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_66' AND 'paq_70'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_66' AND 'paq_70'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_66' AND 'paq_70'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_66' AND 'paq_70'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 1 CATEGORIA 6 BIEN -->
<div class="limiter">
    <div class="container-table100" id="Tabla2" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_71' AND 'paq_75'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_71' AND 'paq_75'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_71' AND 'paq_75'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_71' AND 'paq_75'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_71' AND 'paq_75'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_71' AND 'paq_75'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 2 CATEGORIA 6 BIEN -->    
<div class="limiter">
    <div class="container-table100" id="Tabla3" style="display:none;">
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
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_76' AND 'paq_78'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_76' AND 'paq_78'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_76' AND 'paq_78'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_76' AND 'paq_78'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_76' AND 'paq_78'");
                    while($row = mysqli_fetch_array($results)){
                    echo '<font size="3">'.$row['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php $results=mysqli_query($db,"SELECT * FROM paquetes where id_categoria='$categoria' and id_paquete BETWEEN 'paq_76' AND 'paq_78'");
                    while($row = mysqli_fetch_array($results)){
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$row['id_paquete'].'">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1">
                        <input type="button" onclick="ocultar2()" value="2">
                        <input type="button" onclick="ocultar3()" value="3">
            </td>          
            </div>
          </div>
      </div>
    </div>
<!-- TABLA 3 CATEGORIA 6 BIEN -->
<?php
}?>
 <!--Aqui acaba la pagina y se cierra el cuadro-->
<!--CAJA CONTENEDORA-->
        </fieldset>
      </form>
    </div>
  </div>
<!--CAJA CONTENEDORA-->
                                                <!--Mostrar o Ocultar tablas-->

<script type="text/javascript">
    function ocultar1(){
        var tab= document.getElementById('Tabla1');
        tab.style.display='block';
        var tab2=document.getElementById('Tabla2');
        tab2.style.display='none';
        var tab3=document.getElementById('Tabla3');
        tab3.style.display='none';
    }

    function ocultar2(){
        var tab= document.getElementById('Tabla1');
        tab.style.display='none';
        var tab2=document.getElementById('Tabla2');
        tab2.style.display='block';
        var tab3=document.getElementById('Tabla3');
        tab3.style.display='none';
    }

    function ocultar3(){
        var tab= document.getElementById('Tabla1');
        tab.style.display='none';
        var tab2=document.getElementById('Tabla2');
        tab2.style.display='none';
        var tab3=document.getElementById('Tabla3');
        tab3.style.display='block';
    }
</script>
</body>
</html>