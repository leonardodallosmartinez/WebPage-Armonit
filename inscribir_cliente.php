<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion clientes</title>
    <!--CSS bootstrap5-->    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!--bootstrap5 con poppoer.js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--CSS Propios-->
    <link rel="stylesheet" href="inscribir_cliente.css">
    <!--JQuery 3.6.0-->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    

</head>
<body class="bg-light">
<?php
include_once 'encabezado.php';
makeHeader();
?>
<!--formulario validado con bootstrap-->
<header>
<!--alerta Verificacion de datos asignados-->
<?php
    if(isset($_GET["datos"])=="no"){
        echo '<script>
        $(function(){
           alert("Los datos No se han subido correctamente, por favor intente de nuevo."); 
        });
    </script>';
    }    
    extract($_POST);
    if(isset($_idCliente)){
        require_once 'conexion_db.php';//conexion para recibir los datos a editar
        $doc = $clientes_DB->findOne(['_id' => new MongoDB\BSON\ObjectID($_idCliente)]);
        $name = $doc["nombre"];
?>
        <script>
        $(function(){    
            $("#nombreCliente").val("<?php echo $doc['nombre'];?>");
            $("#apellidoCliente").val("<?php echo $doc["apellido"];?>");
            $("#DNICliente").val("<?php echo $doc["DNI"];?>");
            $("#correoCliente").val("<?php echo $doc["correo"];?>");
            $("#paisCliente").val("<?php echo $doc["pais"];?>");
            $("#deptoCliente").val("<?php echo $doc["depto"];?>");
            $("#ciudadCliente").val("<?php echo $doc["ciudad"];?>");
            $("#direccionCliente").val("<?php echo $doc["direccion_1"];?>");                  
            
            console.log("script para editar datos 100% ejecutado");    
        });
        </script>
        <?php
        if(isset($doc["direccion_2"])){
        ?>
        <script>$("#direccion2Cliente").val("<?php echo $doc["direccion_2"];?>");</script>            
        <?php
        }        
    }
        ?>
</header>
<main>
    <div class="container mt-3">
        <div class="row g-5">
            <div class="col-md-10 col-lg-11">
                <h4 class="d-flex mb-3"><b>Formulario - Inscripción cliente</b></h4>
                <hr class="my-4">
                <?php //php condicional para saber si el formulario envia a pag de inscribir o a editar
                if(isset($_idCliente)){ ?>
                    <form action="up_db_editarCliente.php?id=<?php echo $_idCliente?>" method="post" class="needs-validation" novalidate>
                <?php }else{?>
                    <form action="up_db_inscribir_cliente.php" method="post" class="needs-validation" novalidate>
                <?php }
                ?>
                
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="nombreCliente" class="form-label">Nombres</label>
                            <input type="text" name="nombreCliente" id="nombreCliente" class="form-control" placeholder="Ingrese su nombre" value="" required>
                            <div class="invalid-feedback">Es necesario ingresar un nombre</div>
                        </div>
                        <div class="col-sm-6">
                            <label for="apellidoCliente" class="form-label">Apellidos</label>
                            <input type="text" name="apellidoCliente" id="apellidoCliente" class="form-control" placeholder="Ingrese su apellido" value="" required>
                            <div class="invalid-feedback">Es necesario ingresar un apellido</div>
                        </div>
              <!--DNI--><div class="col-6">
                            <label for="DNICliente" class="form-label">DNI</label>
                            <div class="input-group has-validation">
                                <div class="input-group-text">CC</div>
                                <input type="number" name="DNICliente" id="DNICliente" class="form-control" placeholder="######" required>
                                <div class="invalid-feedback">Ingrese un un numero de DNI valido</div>
                            </div>
                        </div>

         <!--username--><div class="col-6">
                            <label for="usernameCliente" class="form-label">Nombre de usuario<span class="text-muted">(Opcional)</span></label>
                            <div class="input-group has-validation">
                                <div class="input-group-text">@</div>
                                <input type="text" name="usernameCliente" id="usernameCliente" class="form-control" placeholder="Ingrese su nombre de usuario">
                                <div class="invalid-feedback">Por favor ingrese un nombre para su usuario</div>
                            </div>
                        </div>
           <!--email--><div class="col-12">
                            <label for="correoCliente" class="form-label">Correo electrónico</label>
                            <input type="email" name="correoCliente" id="correoCliente" class="form-control" placeholder="you@example.com" required>
                            <div class="invalid-feedback">Por favor ingrese una dirección de correo valida</div>
                            <hr class="my-3 mx-3">
                        </div>
                            
                        <div class="row">
             <!--pais--><div class="col-md-4">  
                            <label for="paisCliente" class="form-label">Pais</label>                            
                            <select name="paisCliente" id="paisCliente" class="form-select" required>
                                <option value="">Seleccione...</option>
                                <option value="Colombia">Colombia</option>
                            </select>
                            <div class="invalid-feedback">Por favor seleccione un pais</div>
                        </div>
            <!--depto--><div class="col-md-4">
                            <label for="deptoCliente" class="form-label">Departamento</label>
                            <select name="deptoCliente" id="deptoCliente" class="form-select" required>
                                <option value="">Seleccione...</option>
                                <option value="Boyaca">Boyacá</option>
                            </select>
                        </div> 
           <!--ciudad--><div class="col-md-4">
                            <label for="ciudadCliente" class="form-label">Ciudad</label>
                            <select name="ciudadCliente" id="ciudadCliente" class="form-select" required>
                                <option value="">Seleccione...</option>
                                <option value="Duitama">Duitama</option>
                            </select>
                        </div>                        
                        </div>
                        
         <!--address1--><div class="col-12">
                            <label for="direccionCliente" class="form-label">Dirección de envío</label>
                            <input type="text" class="form-control" id="direccionCliente" name="direccionCliente" placeholder="Ingrese una direccion de residencia" required>
                            <div class="invalid-feedback">Por favor ingrese una dirección de envio</div>
                        </div>
         <!--address2--><div class="col-12">
                            <label for="direccion2Cliente" class="form-label">Dirección de envío alternativa</label>
                            <input type="text" class="form-control" id="direccion2Cliente" name="direccion2Cliente" placeholder="Ingrese una direccion de residencia">
                            <div class="invalid-feedback">Por favor ingrese una dirección de envio secundaria</div>
                        </div>
      <!--hidden date--><div class="col-4 visually-hidden">
                            <label for="dateCliente" class="form-label">Fecha de creación</label>
                            <input type="text" class="form-control hdate" id="dateCliente" name="dateCliente" value="12/12/1992">
                            <div class="invalid-feedback">Por favor ingrese una dirección de envio secundaria</div>
                        </div>
                    </div>
                    <hr class="my-4"> 
    <!--checkbox1--><div class="form-check">
                    <input type="checkbox" name="checkClienteEdad" id="checkClienteEdad" class="form-check-input" required>
                        <label for="checkCliente" class="form-check-label">Soy mayor de edad</label>
                        <div class="invalid-feedback">Por favor marque esta casilla de verificación para continuar</div>                        
                    </div>
    <!--checkbox2--><div class="form-check">
                        <input type="checkbox" name="checkCliente" id="checkCliente" class="form-check-input" required>
                        <label for="checkCliente2" class="form-check-label">Estoy dee acuerdo en que guarden mis datos</label>
                        <div class="invalid-feedback">Por favor marque esta casilla de verificación para continuar</div>                        
                    </div>
                    <hr class="my-4"> 
                    <button class="btn btn-outline-primary btn-sm" type="submit">Enviar</button>
                    <button class="btn btn-outline-danger btn-sm" type="reset">Limpiar</button>
                    <button class="btn btn-info btn-sm" onclick="window.location.assign('armonitWeb.php')">Home</button>                         
                </form>
            </div>
        </div>
        
    </div>
</main>
<footer class="container mt-5">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy Armonit Diseño-Colombia. &middot;<a href="#"> Privacy</a> &middot;<a href="#"> Terms</a></p>        
</footer>
</body>
</html>

<!--validacion usando JS para bootstrap-->
<script src="inscribir_cliente.js"></script>

