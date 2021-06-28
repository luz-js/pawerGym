<?php 

session_start();
if (isset($_SESSION['usuario'])) {
    header('Location: view/principal.php');
}else {
    header('Location: sesion.php');
}

?>