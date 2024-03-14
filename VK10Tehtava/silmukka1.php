<?php
$sana = $_GET['sana'];
$toistom = (int)$_GET['toistomäärä'];

if ($toistom > 10) {
    echo "Huh-huh, onpas paljon toistoja! En nyt jaksa tulostaa niitä näytölle";
} else {
    for ($x = 1; $x <= $toistom; $x++) {
        echo $sana . "<br>";
    }
}
?>