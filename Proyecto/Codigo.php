<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
$db=mysqli_connect('localhost','root','','agencia');
$categoria=0;

$categoria=mysqli_query($db,"SELECT * FROM categorias");
//$_SESSION['mensaje']=$validarAlerta;
$row=mysqli_fetch_array($categoria);
    if(is_null($row)){
        $_SESSION['mensaje']='No existen registros de categorias';
}else{
		$_SESSION['mensaje']='Mostrando categorias selecciona una para ver paquetes';
}


    

?>