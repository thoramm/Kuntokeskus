<?php
$paperikivisakset = array("paperi", "kivi", "sakset");
$satunnaisluku = rand(0, 2);
$tulos = $paperikivisakset[$satunnaisluku];
echo "Tietokone valitsi: $tulos.";
?>