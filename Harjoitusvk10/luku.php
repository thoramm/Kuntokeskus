<?php
$numero = (int)$_GET["numero"];

if ($numero == 0) {
    echo "Antamasi luku on nolla.";
} elseif ($numero >= 1 && $numero <= 5) {
    echo "Antamasi luku on yhden ja viiden väliltä.";
} elseif ($numero >= 6 && $numero <= 10) {
    echo "Antamasi luku on kuuden ja kymmenen väliltä.";
} else {
    echo "Antamasi luku on negativiinen tai yli kymmenen.";
}
?>