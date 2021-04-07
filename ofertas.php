<?php
$categoria=$_GET['categoria'];
 require_once 'head.php';
 require_once 'cabecera.php';
 require_once 'menu.php';
 require_once 'conexion.php';
 
 ArticulosPorCategoria($categoria);



?>
