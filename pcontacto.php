<?php

    $nombre=$_POST['Nombre'];
    $apellidos=$_POST['Apellidos'];
    $email=$_POST['Email'];
    $telefono=$_POST['Telefono'];
    $comentario=$_POST['Comentario'];

    $link='mysql:host=localhost;port=3307;dbname=tienda';
    $usuario="root";
    $pwd="3912481";


    $pdo = new PDO($link, $usuario, $pwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql='INSERT INTO MENSAJES ';
    $sql.= '(NOMBRE,APELLIDOS,TELEFONO,EMAIL,COMENTARIO) ';
    $sql.= 'VALUES (:NOMBRE,:APELLIDOS,:TELEFONO,:EMAIL,:COMENTARIO)';
    echo $sql;

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':NOMBRE', $nombre);
    $stmt->bindParam(':APELLIDOS', $apellidos);
    $stmt->bindParam(':TELEFONO', $telefono);
    $stmt->bindParam(':EMAIL', $email);
    $stmt->bindParam(':COMENTARIO', $comentario);


    $stmt->execute();
    header('Location: index.php');

?>