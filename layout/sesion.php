<?php

session_start();
if(isset($_SESSION['session_email'])){
   //echo "Sesión existente de ".$_SESSION['session_email'];
   $email_sesion = $_SESSION['session_email'];
   $sql ="SELECT * FROM t_usuarios WHERE email= '$email_sesion'";
   $query = $pdo->prepare($sql);
   $query->execute();
   $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
   foreach ($usuarios as $usuario){
       $nombres_sesion = $usuario ['nombres'];
    }

}else{
    echo "No existe sesión.";
    header('Location: '.$URL.'/login');
}
?>