<!DOCTYPE html>
<html>
<body>
    <h1>Painoindeksilaskuri</h1>
<?php
$paino = $_POST['paino'];
$pituus = $_POST['pituus'];
$tulos = $paino / ($pituus * $pituus);
echo "<p>Painoindeksi luvuista $paino ja $pituus on: $tulos</p>";
    ?>

</body>
</html>