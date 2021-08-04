<?php

if((require_once __DIR__ . '/vendor/autoload.php'))
{
    echo "Conexion a db realizada con exito","<br><br>";
}
//Conexion local
//$db = (new MongoDB\Client)->armonit;

//Conexion a mongodb Atlas (nube)
$db = (new MongoDB\Client('mongodb+srv://Leonardod:Vicarious4779@cluster0.le3jr.mongodb.net/myFirstDatabase?retryWrites=true&w=majority'))->armonit;

$clientes_DB = $db->clientes;
$empleados_DB = $db->empleados;
$productos_DB = $db->productos;




//$doc = $clientes2->findOne(['nombre' => 'Gerardo']);
//echo $doc['nombre'];

//echo gettype($document), "<br>";

/*var_export($document);//var_dump//print_r()
echo "<br><br>";
echo $document['nombre'], " ",$document['apellido'] ;*/ //solo para consultas tipo findOne().
?>