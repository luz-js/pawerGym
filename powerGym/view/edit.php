<?php include_once('../includes/header.php')?>

<?php

$id = isset($_GET['id']) ? $_GET['id'] : '';
$conexion = new mysqli('localhost', 'root', '', 'powergym');

?>


<div class="principal">

    <div class="menu">

        <div class="admin">
            <div class="img-menu"></div>
            <h2>Administrador</h2>
        </div>

        <ul>
            <li><a href="principal.php">PRINCIPAL</a></li>
            <li><a href="registrarUsuario.php">REGISTRAR USUARIO</a></li>
            <li><a href="../calendar.php">CALENDARIO ACTIVIDADES</a></li>
            <li><a href="estadisticas.php">ESTADISTICAS</a></li>
            <li><a href="sociosActivos.php" class="active">SOCIOS ACTIVOS</a></li>
        </ul>
    </div>

    <div class="derecha">
      
    <form action="actualizar.php?id=<?php echo $id?>" method="POST">
        <div class="cabecera">
            <h1>Editar usuario</h1>
            <div class="ralla"></div>
        </div>

        <div class="container-contenido container-contenido-registrarUsuario">
            <section class="formulario">
                <?php if (!empty($error)) :?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $error . '</ br>'?>
                    </div>
                <?php endif?>

                    <?php $resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE idusuarios = '$id'"); ?>
                    <?php while ($row = mysqli_fetch_assoc($resultado)) {?>
                    <label for="">Nombre</label>
                    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre" required="" value='<?= $row["nombre"]?>'>
                    <label for="">Nombre</label>
                    <input class="controls" type="text" name="apellido" id="apellido" placeholder="apellido" required="" value='<?= $row["apellido"]?>'>
                    <label for="">Nombre</label>
                    <input class="controls" type="number" name="telefono" id="telefono" placeholder="Telefono" required="" value='<?= $row["telefono"]?>'>
                    <label for="">Nombre</label>
                    <input class="controls" type="number" name="edad" id="edad" placeholder="Edad" required="" value='<?= $row["edad"]?>'>

                    <input class="buttonsss" type="submit" value="Enviar edicion" >
                    <?php } ?>
                
            </section>
        </div>  
        </form> 
            
    </div>
    
</div>

<style>
    .formulario{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 500px;
        height: 80vh;
        background: #fff;
        padding: 30px;
        margin: auto;
        border-radius: 4px ;
        font-family: "calibri";
        color: black;
    }


    .formulario h4{
        font-size: 22px;
        margin-bottom: 20px;
        text-align: center;
    }

    .controls{
        width: 25vw;
        background: #fff;
        padding: 10px;
        border-radius: 4px;
        margin-bottom: 16px;
        border: 1px solid #c9c9c9;
        font-family: "calibri";
        font-size: 18px;
    }

    .formulario p{
        height: 40px;
        text-align: center;
        font-size: 18px;
        line-height: 40px ;
    }


    .formulario .buttonsss{
        width: 100%;
        background: #1f53c5;
        border: none;
        border-radius: 5px;
        padding: 12px;
        color: white;
        margin: 16px;
        font-size: 16px;
    }
    .formulario a{
        font-size: 14px;
    }
    .checkbox{
        display: flex;
        justify-content: space-between;
        width: 12vw;
        margin-bottom: 2vh;
    }

</style>

<?php include_once('../includes/footer.php') ?>