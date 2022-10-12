<?php
include 'conexion.php';

$Firstname =$_POST ["firtsname"];
$Lastname =$_POST ["lastname"];
$Company =$_POST ["company"];
$Status=$_POST["status"];


$insert= "INSERT INTO td_employee (firtsname,lastname,id_company,estado) VALUES ('$Firstname','$Lastname','$Company','$Status')";
$resultado =mysqli_query($conn, $insert);

if(!$resultado){
 echo "error al actualizar datos ";
}
else{ 
    echo "Se han actualizado tus datos";
}

mysqli_close($conn);
?>