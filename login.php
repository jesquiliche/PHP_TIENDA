<?php
    require_once 'head.php';
    
    require_once 'cabecera.php';
    require_once 'menu.php';


    $link='mysql:host=localhost;port=3307;dbname=tienda';
    $usuario="root";
    $pwd="3912481";


    $pdo = new PDO($link, $usuario, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $correo=$_POST['correo'];
    $pwd=$_POST['pwd'];

    $sql='SELECT * FROM usuarios WHERE CORREO=? AND PASWORD=?';

    $sentencia=$pdo->prepare($sql);
    $sentencia->execute([$correo,$pwd]);

    




?>
</body>
</html>
