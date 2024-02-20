<?php
$kolikko = array("kruuna", "klaava");
$satunnaisluku = rand(0, 1);
$heitontulos = $kolikko[$satunnaisluku];
echo "Heiton tulos on $heitontulos.";
?>