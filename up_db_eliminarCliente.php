<?php
require_once 'conexion_db.php';
echo 'holaa'." desde".' up_db_eliminarCliente.php';
$id_cliente = ($_GET["id"]);
echo '<br><br>El valor del id pasado por GET es: ', $id_cliente;
//$doc = $clientes_DB->findOne(['nombre' => 'Angela', 'apellido' => 'Velez']);
$doc = $clientes_DB->findOne(['_id' => new MongoDB\BSON\ObjectID($id_cliente)]);
//echo "<br>" ,var_export($doc);
echo '<br>El _id del cliente a eliminar es: ', $doc['_id'] ;
echo '<br>El nombre del cliente a eliminar es: ', $doc['nombre'] ;

try{
    $deleteResult = $clientes_DB->deleteOne(['_id' => new MongoDB\BSON\ObjectID($id_cliente)]);
} finally{
    header("Location: consultar_cliente.php");//esta linea es la que se ejecut si no se cumple el Try
}

if (isset($deleteResult)){
    echo '<br><br><h2>Los datos fueron eliminados correctamente de la base de datos</h2>';
    header("Location: consultar_cliente.php?elimin=si");
}else
{
    echo '<br><br><h2>Los datos NO fueron eliminados correctamente de la base de datos</h2>';
    header("Location: inscribir_cliente.php?elimin=no"); 
}
    
?>