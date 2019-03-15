<?php
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$Codigo = $_POST['Codigo'];
$Genero = $_POST['Genero'];
$Edad = $_POST['Edad'];
$RH = $_POST['RH'];
$Carrera = $_POST['Carrera'];
$Semestre = $_POST['Semestre'];
$Asignaturas = $_POST['Asignaturas'];
$Estrato = $_POST['Estrato'];
$EPS = $_POST['EPS'];
$EstadoCivil = $_POST['EstadoCivil'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];
$Direccion = $_POST['Direccion'];




echo "Nombre y Apellido ". $nombre . $apellido . 
"Codigo: ". $Codigo . " Genero: ". $Genero . " Edad: ".
$Edad. "RH". $RH. "Carrera". $Carrera. " Semestre: ". 
$Semestre. " Asignaturas: ". $Asignaturas, "Estrato".
$Estrato. " EPS: ". $EPS. " Estado Civil: ". $EstadoCivil.
"E-mail: ". $Email. " Telefono: ". $Telefono. " Direccion:".
$Direccion; 

?>