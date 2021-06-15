<?php
require_once 'conexion_db.php';
echo "hola desde up_db_inscribir_cliente.php";
extract($_POST);

echo "<br>El valor pasado del input nombre es:", $nombreCliente;
echo "<br>El valor pasado del select pais es:", $paisCliente;
echo "<br>El valor pasado del input-group username es:", $usernameCliente;

$insertResult = $clientes_DB->insertOne(['nombre' => $nombreCliente, 'apellido' => $apellidoCliente, 'DNI' => $DNICliente, 'correo' => $correoCliente, 'pais' => $paisCliente, 'depto' => $deptoCliente, 'ciudad' => $ciudadCliente, 'direccion_1' => $direccionCliente]);

//header("Location: armonitWeb.html")
?>