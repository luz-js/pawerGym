<?php include_once('../includes/header.php') ?>


<div class="principal">

    <div class="menu">

        <div class="admin">
            <div class="img-menu"></div>
            <h2>Administrador</h2>
        </div>

        <ul>
            <li><a href="principal.php">PRINCIPAL</a></li>
            <li><a href="registrarUsuario.php" class="active">REGISTRAR USUARIO</a></li>
            <li><a href="../calendar.php">CALENDARIO ACTIVIDADES</a></li>
            <li><a href="estadisticas.php">ESTADISTICAS</a></li>
            <li><a href="sociosActivos.php">SOCIOS ACTIVOS</a></li>
            <li><a href="acercaDe.php">ACERCA DE</a></li>
        </ul>
    </div>

    <div class="derecha">
        
        <div class="cabecera">
            <h1>Registrar Usuario</h1>
            <div class="ralla"></div>
        </div>

        <div class="container-contenido container-contenido-registrarUsuario">
            <section class="formulario">
                <h4>Formulario Registro</h4>
                <input class="controls" type="fname" name="Nombre" id="Nombre" placeholder="Nombre" required= "">
                <input class= "controls" type="lname" name="Apellido" id="Apellido" placeholder="Apellido" required="">
                <input class= "controls" type="email" name="Correo" id="Correo" placeholder="E-mail" required="">

                <input class= "controls" type="password" name="contraseña" id="contraseña" placeholder="Contraseña" required ="">
            
                <input class= "controls"type="number" placeholder="Edad" value="edad" id="edad">
                <div class="checkbox">
                    <input type="radio" name="Gender" value= "Hombre" id= "Hombre">Hombre<label for="Hombre"></label>
                    <input type="radio" name="Gender" value= "Mujer" id= "Mujer">Mujer <label for="Mujer"></label>
                </div>
                <p>Está de acuerdo con <a href="#">Terminos y condiciones</a> </p>
                <input class="buttonsss" type="submit" value="Registrar">
            </section>
        </div>
            
    </div>
    
</div>

<style>
    .formulario{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 500px;
        height: 83vh;
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