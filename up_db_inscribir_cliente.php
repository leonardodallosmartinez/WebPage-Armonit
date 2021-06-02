<?php
echo "hola desde up_db_inscribir_cliente.php";

extract($_POST);
echo "<br>El valor pasado del input nombre es:", $nombreCliente;
echo "<br>El valor pasado del select pais es:", $paisCliente;
echo "<br>El valor pasado del input-group username es:", $usernameCliente;

//header("Location: armonitWeb.html")
?>