<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
$db=mysqli_connect('localhost','root','','agencia');
$categoria=0;

$categoria=mysqli_query($db,"SELECT * FROM categorias WHERE id_categoria='cat1'");
//$_SESSION['mensaje']=$validarAlerta;
$row=mysqli_fetch_array($categoria);
    if(is_null($row)){
        $_SESSION['mensaje']='No existen registros de categorias';
}else{
	
}


    

?>