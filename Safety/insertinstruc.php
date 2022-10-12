<?php
include 'conexion.php';

$Firstname =$_POST ["firtsname"];
$Lastname =$_POST ["lastname"];



$insert= "INSERT INTO td_instructors (nameinst,lastnameinst) VALUES ('$Firstname','$Lastname')";
$resultado =mysqli_query($conn, $insert);

if(!$resultado){
 echo "error al actualizar datos ";
}
else{ 
    echo "Se han actualizado tus datos";
}

mysqli_close($conn);
?>