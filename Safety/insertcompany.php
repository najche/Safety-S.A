<?php
include 'conexion.php';

$nombre =$_POST ["name"];
$descripcion =$_POST ["description"];



$insert= "INSERT INTO td_company (comp_name,comp_des) VALUES ('$nombre','$descripcion')";
$resultado =mysqli_query($conn, $insert);

if(!$resultado){
 echo "error al actualizar datos ";
}
else{ 
    echo "Se han actualizado tus datos";
}

mysqli_close($conn);
?>