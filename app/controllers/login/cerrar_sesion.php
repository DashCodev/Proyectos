<?php

include ('../../config.php');

session_start();
if(isset($_SESSION['session_email'])) {
    session_destroy(); //Cerrar sesiones existentes
    header ('Location: '.$URL.'/');
}