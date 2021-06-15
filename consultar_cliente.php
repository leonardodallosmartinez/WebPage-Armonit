<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar clientes</title>
    <!--CSS bootstrap5-->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="bg-light">
    <!--Tablas para consulas-->
    <div class="container-md">
        <div class="row g-2">
            <div class="col-md">
                <h3 class="d-flex mb-3 justify-content-center">Consultas - Clientes</h3>
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
</body>
</html>