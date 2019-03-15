<?php
$var1 = 'hola';
$var2 = &$var1;
$var2 = 'Adios';
echo $var1 . "y" . $var2;
?>