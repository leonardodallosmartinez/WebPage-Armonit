<?php
echo 'hola desde up_db_editarCliente.php';
require_once 'conexion_db.php';
extract($_POST);
$_idCliente = ($_GET["id"]);
echo 'el valor del id es:', $_idCliente;

try{
    $editResult = $clientes_DB->updateOne(['_id' => new MongoDB\BSON\ObjectID($_idCliente)],['$set' => ['nombre' => $nombreCliente, 'apellido' => $apellidoCliente, 'DNI' => $DNICliente, 'correo' => $correoCliente, 'pais' => $paisCliente, 'depto' => $deptoCliente, 'ciudad' => $ciudadCliente, 'direccion_1' => $direccionCliente, 'direccion_2' => $direccion2Cliente, 'dateCreacion' => $dateCliente]]);
} finally{
    header("Location: consultar_cliente.php");//esta linea es la que se ejecut si no se cumple el Try
}

if (isset($editResult)){
    echo '<br><br><h2>Los datos fueron eliminados correctamente de la base de datos</h2>';
    header("Location: consultar_cliente.php?edit=si");
}


?>