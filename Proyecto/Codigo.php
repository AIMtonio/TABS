<?php
session_start();
$db=mysqli_connect('remotemysql.com','Rgpi7ESSmM','mAqyxMUQZa','Rgpi7ESSmM');
$nombre="";
$direccion="";
$id=0;
$update=false;
$validarAlerta=0;

if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    
    mysqli_query($db,"INSERT INTO informacion(nombre,direccion)VALUES('$nombre','$direccion')");
    $_SESSION['mensaje']='<script name="accion">alert("Registro guardado") </script>';
    $validarAlerta=1;
    //$_SESSION['mensaje']=$validarAlerta;
    header('location:index.php');
}

if(isset($_GET['del'])){
    $id=$_GET['del'];
    mysqli_query($db,"DELETE FROM informacion where id=$id");
    $_SESSION['mensaje']='<script name="accion">alert("Registro eliminado") </script>';
    $validarAlerta=2;
    //$_SESSION['mensaje']=$validarAlerta;
    header('location: index.php');
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    
    mysqli_query($db, "UPDATE informacion set nombre='$nombre', direccion='$direccion' where id=$id");
    $_SESSION['mensaje']='<script name="accion">alert("Registro actualizado") </script>';
    $validarAlerta=3;
   // $_SESSION['mensaje']=$validarAlerta;
    header('location: index.php');
}
?>


