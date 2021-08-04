<?php
echo 'hola desde probador.php<br><br>';

(require_once __DIR__ . '/vendor/autoload.php');

$client = new MongoDB\Client('mongodb+srv://Leonardod:Vicarious4779@cluster0.le3jr.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->armonit2;

$clientes = $db->clientes;

$doc = $clientes->findOne(['nombre' => 'Gerardo']);

echo $doc['nombre'];

?>