<?php 

include_once('../bdd.php');
$id = $_GET['id'];

$query = ("DELETE FROM usuarios WHERE idusuarios = '$id'");

$statement = $bdd->prepare($query);

if ($statement->execute()) {

    $messageBorrar = "usuario borrado correctamente";
    header("Location: sociosActivos.php?messageBorrar=" . $messageBorrar);
    echo "Usuario eliminado";
}else{
    echo "no se pudo borrar";
}