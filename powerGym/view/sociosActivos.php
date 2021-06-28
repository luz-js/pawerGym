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
            <li><a href="estadisticas.php">ESTADISTICAS</a></li>
            <li><a href="sociosActivos.php" class="active">SOCIOS ACTIVOS</a></li>
            <li><a href="acercaDe.php">ACERCA DE</a></li>
        </ul>
    </div>

    <div class="derecha">
        
        <div class="cabecera">
            <h1>Socios Activos</h1>
            <div class="ralla"></div>
        </div>

        <div class="container-contenido container-contenido-sociosActivos">
            <table class="table">
                <thead bgcolor="#003049">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Cancelar</th>
                </tr>
                </thead>
                <tbody class="table-light">
                    <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>809-333-9876</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>849-254-9980</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>809-387-3958</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>809-387-3958</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>809-387-3958</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>809-387-3958</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>809-387-3958</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Thornton</td>
                        <td>809-387-3958</td>
                        <td><button type="button" class="btn btn-danger">Borrar</button></td> 
                    </tr>
                </tbody>
            </table>

        </div>
            
    </div>
    
</div>

<style>
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
</style>

<?php include_once('../includes/footer.php') ?>