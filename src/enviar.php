<?php
include ('conectar.php');

$Nombre= $_POST['f1'];
$Apellido= $_POST['f2'];
$Correo= $_POST['f3'];
$Direccion= $_POST['f4'];
$Nacionalidad= $_POST['f5'];
$Cedula= $_POST['f6'];
$Talleres= $_POST['f7'];
$Curso= $_POST['f8'];

//(Nombre,Apellido,Correo,Direccion,Nacionalidad,Cedula,Talleres,Curso)
$sql = "INSERT INTO asistente 
VALUES ('$Nombre', '$Apellido','$Correo','$Direccion','$Nacionalidad','$Cedula','$Talleres','$Curso')";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}