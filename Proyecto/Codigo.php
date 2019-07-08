<?php
session_start();
$db=mysqli_connect('remotemysql.com','Rgpi7ESSmM','mAqyxMUQZa','Rgpi7ESSmM');

$categoria=mysqli_query($db,"SELECT * FROM categorias WHERE id_categoria='cat1'");

?>