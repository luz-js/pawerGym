<?php include_once('../includes/header.php');?>


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

<?php 

include_once("../bdd.php");

$query = ("SELECT * FROM usuarios WHERE sexo = 'HOMBRE'");

$statement = $bdd->prepare($query);
$statement->execute();
$cont = 0;

foreach ($statement as $key => $value) {
    $cont += 1;
}

$queryDos = ("SELECT * FROM usuarios WHERE sexo = 'MUJER'");

$statementDos = $bdd->prepare($queryDos);
$statementDos->execute();
$contDos = 0;

foreach ($statementDos as $key => $value) {
    $contDos += 1;
}

$queryTRES = ("SELECT * FROM usuarios WHERE edad <= 16");

$statementTRES = $bdd->prepare($queryTRES);
$statementTRES->execute();
$contTres = 0;

foreach ($statementTRES as $key => $value) {
    $contTres += 1;
}

?>

<script>

let hombre = "<?php echo $cont ?>"
let mujer = "<?php echo $contDos ?>"
let nino = "<?php echo $contTres ?>"

var ctx = document.getElementById('myChart').getContext('2d')
var myCharts =  new Chart(ctx, {
    type: "bar",
    data:{
        labels:["hombres", "mujeres", "niños"],
        datasets:[{
            data:[
                hombre,mujer,nino
            
            ],
            backgroundColor:[
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 99, 132, 0.5)',
                'rgba(255, 205, 86, 0.5)',
            ],
            borderColor: [
                'rgb(54, 162, 235)',
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)'
              ],
        }]
    },
})

</script>

<?php include_once('../includes/footer.php') ?>