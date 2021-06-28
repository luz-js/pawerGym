<?php include_once('../includes/header.php') ?>


<div class="principal">

    <div class="menu">

        <div class="admin">
            <div class="img-menu"></div>
            <h2>Administrador</h2>
        </div>

        <ul>
            <li><a href="principal.php"class="active">PRINCIPAL</a></li>
            <li><a href="registrarUsuario.php">REGISTRAR USUARIO</a></li>
            <li><a href="../calendar.php">CALENDARIO ACTIVIDADES</a></li>
            <li><a href="estadisticas.php">ESTADISTICAS</a></li>
            <li><a href="sociosActivos.php">SOCIOS ACTIVOS</a></li>
            <li><a href="acercaDe.php">ACERCA DE</a></li>
        </ul>
    </div>

    <div class="derecha">

        <div class="cabecera">
            <h1>Power Gym's Virtual Service</h1>
            <div class="ralla"></div>
        </div>

        <div class="container-contenido">

            <div class="reloj">
                <h2 id="hora"></h2>
                <h2 id="minutos"></h2>
                <h2 id="segundos"></h2>
            </div>

            <div class="fecha">
                <h1 id="mes"></h1>
                <h1 id="dia"></h1>
            </div>

            <h1 id="abrirCerrar"></h1>

        </div>

    </div>
    
</div>

<?php include_once('../includes/footer.php') ?>