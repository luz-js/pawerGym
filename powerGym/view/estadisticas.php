<?php include_once('../includes/header.php') ?>


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
        <li><a href="estadisticas.php" class="active">ESTADISTICAS</a></li>
        <li><a href="sociosActivos.php">SOCIOS ACTIVOS</a></li>
        <li><a href="acercaDe.php">ACERCA DE</a></li>
    </ul>
    </div>

    <div class="derecha">
        
        <div class="cabecera">
            <h1>Estadisticas</h1>
            <div class="ralla"></div>
        </div>

        <div class="container-contenido container-contenido-estadisticas">
            
            <canvas id="myChart"></canvas>

        </div>
            
    </div>
    
</div>

<?php include_once('../includes/footer.php') ?>