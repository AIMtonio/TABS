<?php
session_start();
header("Content-Type: text/html;charset=utf-8");
$db=mysqli_connect('remotemysql.com','Rgpi7ESSmM','mAqyxMUQZa','Rgpi7ESSmM');
$categoria=0;

$categoria=mysqli_query($db,"SELECT * FROM categorias");
//$_SESSION['mensaje']=$validarAlerta;
$row=mysqli_fetch_array($categoria);
    if(is_null($row)){
        $_SESSION['mensaje']='No existen registros de categorias';
}else{
		$_SESSION['mensaje']='Categorias:';
}


    

?>