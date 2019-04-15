<?php
$pepe = array('Gato','Perro','Caballo','Pez','Tomate');

$reversa = array_reverse($pepe);
$variable = array_reverse($pepe, true); //Si se establece en TRUE las claves numéricas se conservarán.
// Las claves no numéricas no se ven afectadas por este ajuste y se conservarán siempre

print_r("Ordenados");
print_r("<br>");print_r("<br>");
print_r($pepe);
print_r("<br>");print_r("<br>");
print_r("Inversa");
print_r("<br>");print_r("<br>");
print_r($reversa);





?>