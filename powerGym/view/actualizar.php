<?php 

include_once('../bdd.php');
  
if ($_SERVER['REQUEST_METHOD'] == "POST") {
      
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];

    require_once('../bdd.php');

    $sql = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', telefono='$telefono', edad='$edad' WHERE idusuarios = '$id'";

    $statement = $bdd->prepare($sql);
    $statement->execute();

    $message= "this is a message";

    header("Location: sociosActivos.php?message=" . $message);
}

?>