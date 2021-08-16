<?php
include_once('../bdd.php');

    $statement = $bdd->prepare('SELECT * FROM usuarios');
    $statement->execute();

?>


<?php 

  $error = '';

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $edad = $_POST['edad'];

        if (empty($nombre) || empty($apellido) || empty($telefono) || empty($edad) || empty($sexo)) {
            $error .= "Por favor rellenar los campos";
        }

        require_once('../bdd.php');

        $sql = "INSERT INTO usuarios (idusuarios, nombre, apellido, telefono, edad, sexo) VALUES ('null', '$nombre', '$apellido', '$telefono', '$edad', '$sexo')";

        $statement = $bdd->prepare($sql);
        $statement->execute();

        $error .= "Usuario ingresado con éxito";

    }

?>