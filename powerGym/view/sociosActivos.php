

<?php include_once('../includes/header.php');

?>

<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM usuarios";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);

?>

<div class="principal">

    <div class="menu-socios">

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
        
        <div class="cabecera">
            <h1>Socios Activos</h1>
            <div class="ralla"></div>
            <?php if (!empty($error)) :?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $error . '</ br>'?>
                    </div>
            <?php endif?>
        </div>

        <div class="container-contenido-socios container-contenido-sociosActivos">
        <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table table-striped table-sm " style="width:100%">
                <thead class="text-center">
                    <th>Id </th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Acción</th>
                </thead>
                <tbody>
                    <?php
                        foreach($usuarios as $usuario){
                    ?>
                    <tr>
                        <td><?php echo $usuario['idusuarios']?></td>
                        <td><?php echo $usuario['nombre']?></td>
                        <td><?php echo $usuario['apellido']?></td>
                        <td><?php echo $usuario['telefono']?></td>
                        <td><?php echo $usuario['edad']?></td>
                        <td><?php echo $usuario['sexo']?></td>
                        <td>
                                <div>
                                    <button type="button" class="btn btn-primary btn-sm"><a href="edit.php?id=<?= $usuario["idusuarios"]?>" class="a">Edit</a></button>
                                    <a href="delete.php?id=<?php echo $usuario['idusuarios'] ?>" class="btn btn-danger link_delete btn-sm">Delete</a>
                                </div>
                            
                            </td> 
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
        </div>
            
    </div>
    
</div>

<?php 
if (isset($_GET['message'])) {
    # code...
    $mess = $_GET['message'];
    echo "<SCRIPT> //not showing me this
alert('usuario actualizado correctamente');
</SCRIPT>";
}

if (isset($_GET['messageBorrar'])) {
    # code...
    $mess = $_GET['messageBorrar'];
    echo "<SCRIPT> //not showing me this
alert('usuario eliminado correctamente');
</SCRIPT>";
}
?>

<style>
    .menu-socios{
    width: 20%;
    height: 106vh;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    background-color: var(--principal);
}

.admin{
    display: flex;
    flex-direction: column;
    align-items: center;
}

.img-menu{
    width: 8vw;
    height: 16vh;
    background-image: url('../img/manager1.jpg');
    background-size: cover;
    background-position: center;
    border-radius: 100px;
    margin-bottom: 2vh;
}

.admin h2{
    text-align: center;
    font-size: 2vw;
    padding-bottom: 6vh;
    color: var(--gris);
    border-bottom: var(--amarillo) 2px solid;
}

.menu-socios ul{
    margin-top: 4vh;
}

.menu-socios ul li{
    margin-bottom: 3vh;
    list-style: none;
    display: flex;
    flex-direction: row;
    margin-left: -2vw;
}

.menu-socios ul li a{
    font-weight:500;
    color: var(--gris);
    text-decoration: none;
    padding: 2vh 0vw 2vh 2vw;
    width: 19vw;
    border-radius: 0px 30px 30px 0px;
}

.menu-socios a.active{
    background-color: var(--gris);
    color: var(--secundario);
}
.container-contenido-socios{
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-image: url(../img/gym.jpg);
    background-size: cover;
    background-position: center;
}

    .row{
        background-color: #fff;
    }
    table{
        border: none;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    thead{
        color: #fff;
    }
    .table{
        width: 80%;
        margin-top: 5vw;
    }

    .a{
       text-decoration: none;
       color: white; 
    }

    .a:hover{
        color: white;
    }

    table.dataTable thead {
            background: linear-gradient(to right, #0575E6, #00F260);
            color:white;
        }
</style>

<script>

    function confirmacion(e) {
        if (confirm("Desea eliminar este socio activo?")) {
            return true;
        }else{
            e.preventDefault();
        }
    }

    let linkDelete = document.querySelectorAll(".link_delete");

    for (let i = 0; i < linkDelete.length; i++) {
        linkDelete[i].addEventListener('click', confirmacion)
    }

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function(){
         $('#tablaUsuarios').DataTable(); 
      });
    </script>
<?php include_once('../includes/footer.php') ?>