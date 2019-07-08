<?php
session_start();
$db=mysqli_connect('localhost','root','','agencia');
$categoria=0;

$categoria=mysqli_query($db,"SELECT * FROM categorias WHERE id_categoria='cat1'");
//$_SESSION['mensaje']=$validarAlerta;
$row=mysqli_fetch_array($categoria);
    if(is_null($row)){
        $_SESSION['mensaje']='<script name="accion">alert("no existe") </script>';
}else{
	$_SESSION['mensaje']='<script name="accion">alert("si existe uno") </script>';
}


    

?>