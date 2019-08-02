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
<audio autoplay src="Sonidos/Paquetes.mp3"></audio>
<!--CAJA CONTENEDORA-->
<div class="container">
    <div class="wrapper">
          <form class="form-wrapper">
        <fieldset class="section is-active">
<!--CAJA CONTENEDORA-->
         
<!--aqui inicia la pagina-->
<br>
    <center>
<a href=""><img src="Imagenes/Logos/LogoLong.png"  width="60%" height="60%"></a>
</center>

<div><?php $categoria ?></div>
<?php 
$col =$db->categoria;
$result = $col->find();
    if(is_null($result)){
        ?> <div class="vacio"> Sin Registros
    </div> <?php
    }else{
        ?>
    <table>
        <nav>
            <?php 
            $col =$db->categoria;
            $result = $col->find();
            foreach ($result as $entry) {
                echo '<a href="Paquetes.php?cat='.$entry['id_categoria'].'" value="'.$entry['id_categoria'].'">'.$entry['nombre'].'</a>';
            ?>
            <?php } }?>
                <div class="animation start-home"></div> 
        </nav>
    </table><br>
    <div class="mensaje" id="mensaje">
    <!--<?php
    $mensaje=$_SESSION['mensaje']; 
        echo $mensaje; ?></div>
     TABLA DE CATEGORIAS-->
</center>
<?php $categoria=$_GET['cat']; ?>
<!-- TABLA DE PAQUETES -->
<?php if($categoria==null){
    ?> <div class="mensaje">No existen paquetes de esta categoria</div><?php 
}else{ ?>
    <div></div> <?php } ?>

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
              <div class="cell">Ver detalles</div>              
            </div>
          </div>
           
            <div class="row">
              <div class="cell">

               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col = $db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <!--<td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>-->
            </div>
          </div>
      </div>
    
<!-- TABLA 1 CATEGORIA 1 BIEN 
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
TABLA 2 CATEGORIA 1 BIEN -->
<!--tabla bien
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
 TABLA 3 CATEGORIA 1 BIEN -->
                                            <!-- CATEGORIA 2-->
                                            <!-- CATEGORIA 2-->
                                           <!-- CATEGORIA 2-->
<?php }else if($categoria=='cat2'){ ;?>
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
          </div>
           
            <div class="row">
              <div class="cell">

               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <!--<td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>-->
            </div>
          </div>
      </div>
    
<!-- TABLA 1 CATEGORIA 2 BIEN --
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 2 CATEGORIA 2 BIEN -->
<!--tabla bien--
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 3 CATEGORIA 2 BIEN -->
                                            <!-- CATEGORIA 3-->
                                            <!-- CATEGORIA 3-->
                                            <!-- CATEGORIA 3-->

<?php }else if($categoria=='cat3'){ ;?>
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
          </div>
           
            <div class="row">
              <div class="cell">

               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <!--<td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>-->
            </div>
          </div>
      </div>
    
<!-- TABLA 1 CATEGORIA 3 BIEN 
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 2 CATEGORIA 3 BIEN -->
<!--tabla bien--
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 3 CATEGORIA 3 BIEN -->
                                            <!-- CATEGORIA 4-->
                                            <!-- CATEGORIA 4-->
                                            <!-- CATEGORIA 4-->
<?php }else if($categoria=='cat4'){ ;?>
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
          </div>
           
            <div class="row">
              <div class="cell">

               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <!--<td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>-->
            </div>
          </div>
      </div>
    
<!-- TABLA 1 CATEGORIA 4 BIEN --
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 2 CATEGORIA 4 BIEN -->
<!--tabla bien--
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 3 CATEGORIA 4 -->
                                            <!-- CATEGORIA 5-->
                                            <!-- CATEGORIA 5-->
                                            <!-- CATEGORIA 5-->
<?php }else if($categoria=='cat5'){ ;?>
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
          </div>
           
            <div class="row">
              <div class="cell">

               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
            <!--<td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>-->
            </div>
          </div>
      </div>
    
<!-- TABLA 1 CATEGORIA 5 BIEN --
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 2 CATEGORIA 5 BIEN -->
<!--tabla bien--
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 3 CATEGORIA 5 BIEN -->    
                                            <!-- CATEGORIA 6-->
                                            <!-- CATEGORIA 6-->
                                            <!-- CATEGORIA 6-->
<?php }else if($categoria=='cat6'){ ;?>
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
          </div>
           
 <div class="row">
              <div class="cell">

               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['id_categoria'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria]);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div>  
    
<!-- TABLA 1 CATEGORIA 6 BIEN --
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(5)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 2 CATEGORIA 6 BIEN -->
<!--tabla bien--
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
          </div>

            <div class="row">
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['nombre_paquete'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
               <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['no_dias'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
                <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['destino'].'<br></font> <br>';?><?php  }?>
              </div>
             <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                    echo '<font size="3">'.$entry['costo'].'<br></font> <br>';?><?php  }?>
              </div>
              <div class="cell">
              <?php 
               $col =$db->paquetes;
               $result = $col->find(['id_categoria'=> $categoria])->skip(10)->limit(5);
                    foreach ($result as $entry) {
                     echo '<font size="3"><a href="DetallePaquetes.php?idpaq='.$entry['id_paquete'].'" class="boton">Ver mas detalles..<br><br></a></font>';?><?php  }?>
              </div>
            </div> 
            <td colspan="6">
                <center><input type="button" onclick="ocultar1()" value="1" class="boton">
                        <input type="button" onclick="ocultar2()" value="2" class="boton">
                        <input type="button" onclick="ocultar3()" value="3" class="boton">
            </td>          
            </div>
          </div>
      </div>
    </div>
<-- TABLA 3 CATEGORIA 6 BIEN -->
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