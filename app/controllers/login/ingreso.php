<?php

include('../../config.php');

$email = $_POST['email'];
$password_user = $_POST['password_user'];

$contador = 0;
$sql = "SELECT * FROM t_usuarios WHERE email = '$email' AND password_user = '$password_user'";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    $contador = $contador + 1;
    $email_tablabd = $usuario ['email'];
    $nombres = $usuario ['nombres'];
}

if($contador == 0){
    echo "Datos incorrectos, por favor intente nuevamente.";   
}else{
    echo "Inicio exitoso.";
    session_start();
    $_SESSION['session_email'] = $email;
    header('Location: '.$URL.'/index.php');
}