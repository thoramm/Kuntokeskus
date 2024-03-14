<?php
$aloitusnum = (int)$_GET['aloitusnumero'];
$kierrosnum = (int)$_GET['kierrosmäärä'];

if ($kierrosnum > 10) {
    echo "Liian monta toistoa!";
} else {
    $x = 0;
    while ($x < $kierrosnum) {
        echo $aloitusnum + $x . "<br>";
        $x++;
    }
}
?>