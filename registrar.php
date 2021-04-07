<?php
    require_once 'head.php';
    require_once "menu.php";
    require_once "cabecera.php";

    $nombre=$_POST['Nombre'];
    $apellidos=$_POST['Apellidos'];
    $email=$_POST['Email'];
    $password=$_POST['pwd1'];

    $link='mysql:host=localhost;port=3307;dbname=tienda';
    $usuario="root";
    $pwd="3912481";


    $pdo = new PDO($link, $usuario, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql='INSERT INTO usuarios ';
    $sql.= '(NOMBRE,APELLIDOS,CORREO,PASWORD) ';
    $sql.= 'VALUES (:NOMBRE,:APELLIDOS,:CORREO,:PASWORD)';

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':NOMBRE', $Nombre);
    $stmt->bindParam(':APELLIDOS', $Apellidos);
    $stmt->bindParam(':CORREO', $email);
    $stmt->bindParam(':PASWORD', $password);


    $stmt->execute();
    $num_rows=$stmt->rowcount();
    
    if($num_rows>0){
        echo "<div class='container-fluid py-20 text-center'>";
        echo "<div class='container py-20 text-center'>";
        echo "<h4 py-10 text-center>Usuario registrado correctamente</h4>";
    

    }
    else {
        echo "<h4 py-10 text-center>El usuario no fue registrao correctamente</h4>";
    }
    echo "<a href='index.php' class='btn btn-danger'>Aceptar</a>";
    echo "</div>";
    echo "</div>";

    

?>