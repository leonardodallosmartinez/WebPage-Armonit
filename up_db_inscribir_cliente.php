<!--JQuery 3.6.0-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>    

<?php
require_once 'conexion_db.php';
echo "hola desde up_db_inscribir_cliente.php";
extract($_POST);

echo "<br>El valor pasado del input nombre es:", $nombreCliente;
echo "<br>El valor pasado del select pais es:", $paisCliente;
echo "<br>El valor pasado del input-group username es:", $usernameCliente;
echo "<br>El valor de la fecha de creacion es:", $dateCliente;

try {
    $insertResult = $clientes_DB->insertOne(['nombre' => $nombreCliente, 'apellido' => $apellidoCliente, 'DNI' => $DNICliente, 'correo' => $correoCliente, 'pais' => $paisCliente, 'depto' => $deptoCliente, 'ciudad' => $ciudadCliente, 'direccion_1' => $direccionCliente, 'direccion_2' => $direccion2Cliente, 'dateCreacion' => $dateCliente]);
} finally {
    header("Location: inscribir_cliente.php?datos=no");
}



if (isset($insertResult)){
    echo '<br><br><h2>Los datos fueron subidos correctamente a la base de datos</h2>';
    header("Location: armonitWeb.php?datos=si");
}else
{
    echo '<br><br><h2>Los datos NO fueron subidos correctamente a la base de datos</h2>';
    header("Location: inscribir_cliente.php?datos=no"); 
}

?>
<script>
    $(function(){
       $("h2").css("color", "blue"); 
    });
</script>
