<!DOCTYPE html>
<html>
<body>
    <h1>Lukujen tulo</h1>
<?php
$luku1 = $_POST['luku1'];
$luku2 = $_POST['luku2'];
$tulo = $luku1 * $luku2;
echo "<p>Tulo luvuista $luku1 ja $luku2 on: $tulo</p>";
    ?>

</body>
</html>