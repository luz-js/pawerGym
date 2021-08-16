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
            <li><a href="calendarioActividades.php" class="active">CALENDARIO ACTIVIDADES</a></li>
            <li><a href="estadisticas.php">ESTADISTICAS</a></li>
            <li><a href="sociosActivos.php">SOCIOS ACTIVOS</a></li>
        </ul>

    </div>

    <div class="derecha">
        
        <div class="cabecera">
            <h1>Calendario Actividades</h1>
            <div class="ralla"></div>
        </div>

        <div class="container-contenido">
            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=America%2FSanto_Domingo&amp;src=bHVyaXRhMTMwOEBnbWFpbC5jb20&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=YTEwYm52YTV0bzF2cTRndG9saWg4a3I1b2tAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZXMudXNhI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZXMuZG8jaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;src=Y2xhc3Nyb29tMTA1MjE0MzYzNTEzNDE4OTcyMzYxQGdyb3VwLmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%237986CB&amp;color=%2333B679&amp;color=%23E67C73&amp;color=%237986CB&amp;color=%230B8043&amp;color=%237627bb&amp;showTabs=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;showTitle=0&amp;showNav=1&amp;showDate=1" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
            
    </div>
    
</div>

<?php include_once('../includes/footer.php') ?>