<?php

if((require_once __DIR__ . '/vendor/autoload.php'))
{
    echo "Conexion a db realizada con exito","<br><br>";
}

$clientes_DB = (new MongoDB\Client)->armonit->clientes;
$empleados_DB = (new MongoDB\Client)->armonit->empleados;
$productos_DB = (new MongoDB\Client)->armonit->productos;

$document = $clientes_DB->find();

//echo gettype($document), "<br>";

/*var_export($document);//var_dump//print_r()
echo "<br><br>";
echo $document['nombre'], " ",$document['apellido'] ;*/
?>