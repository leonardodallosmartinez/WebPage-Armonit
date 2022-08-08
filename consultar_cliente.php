<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar clientes</title>
    <!--CSS bootstrap5-->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--bootstrap5 con poppoer.js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--JQuery 3.6.0-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    
    <style>
        footer{
            position: absolute;
            bottom: 0;
        }
    </style>
</head>
<body class="bg-light">
<!--Encabezado--> 
<?php
include_once 'encabezado.php';
makeHeader(); 
?>
<!--alerta Verificacion de edicion realizada-->
<?php
    if(isset($_GET["edit"])=="si"){
        echo '<script>
        $(function(){
           alert("Los datos has sido correctamente actualizados."); 
        });
    </script>';
    }
    ?>
    <!--alerta Verificacion de datos eliminados-->
    <?php
    if(isset($_GET["elimin"])=="si"){
        echo '<script>
        $(function(){
           alert("Los datos han sido eliminados correctamente."); 
        });
    </script>';
    }
    ?>

    <!--Tablas para consulas-->
    <div class="container-md mt-3">
        <div class="row g-2">
            <div class="col-md">
                <h4 class="d-flex mb-3 justify-content-cente"><b>Consultas - Clientes</b></h4>
                <div class="table-responsive">
                    <table class="table align-middle table-light table-hover table-bordered table-sm">
                        <thead class="table-dark">
                           <tr class="text-center">
                               <th>#</th>
                               <th>Nombres</th>
                               <th>Apellidos</th>
                               <th>DNI</th>
                               <th>Correo</th>
                               <th>Pais</th>
                               <th>Depto</th>
                               <th>Ciudad</th>
                               <th>Dirección</th>
                               <th>Direccion 2</th>
                               <th>Fecha de creación</th>
                               <th>-Editar-</th>
                               <th>-Eliminar-</th>
                           </tr> 
                        </thead>
                        <tbody>
                        <?php
                        require_once 'conexion_db.php';

                        if ($clientes_DB -> count()>0)
                        {
                        $num=0;//numeracion para la tabla a mostrar
                        $document = $clientes_DB->find();
                        foreach ($document as $indice){ 
                        ?>
                            <tr>
                                <td><?php $num+=1;echo $num; ?></td>
                                <td><?php echo $indice['nombre']; ?></td>
                                <td><?php echo $indice['apellido']; ?></td>
                                <td><?php echo $indice['DNI']; ?></td>
                                <td><?php echo $indice['correo']; ?></td>
                                <td><?php echo $indice['pais']; ?></td>
                                <td><?php echo $indice['depto']; ?></td>
                                <td><?php echo $indice['ciudad']; ?></td>
                                <td><?php echo $indice['direccion_1']; ?></td>
                                <?php
                                if (isset($indice['direccion_2'])){
                                ?>
                                <td><?php echo $indice['direccion_2']; ?></td>                                   
                                <?php
                                }else{
                                    echo '<td class="text-center">-</td>';
                                }//en if direccion_2
                                ?>
                                <td><?php echo $indice['dateCreacion'] ?></td>
                                <form action="inscribir_cliente.php" method="post">
                                
                                <td><input class="visually-hidden" type="text" name="_idCliente" id="_idCliente" value="<?php echo $indice['_id'];?>"><button type="submit" class="btn btn-warning btn-sm editButton">Editar</button></td>  
                                <td><button type="submit" formaction="up_db_eliminarCliente.php?id=<?php echo $indice['_id']; ?>" class="btn btn-danger btn-sm eliminButton" type="reset">Eliminar</button></td>
                                </form>                                
                            </tr>
                        <?php
                        }// end foreach
                        ?>
                        </tbody>                     
                    </table>
                </div>
                <?php 
                }else{ echo "<h4>Sin registros en la base de datos</h4>";}
                ?>
            </div>
        </div>
    </div>
    <footer class="container mt-5">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy Armonit Diseño-Colombia. &middot;<a href="#"> Privacy</a> &middot;<a href="#"> Terms</a></p>        
    </footer> 
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    
<!--<script src="consultas.js"></script>-->