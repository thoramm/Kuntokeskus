<!DOCTYPE html>
<html>
<body>
    <h1>Kolmen luvun summa ja keskiarvo</h1>
<?php
$luku1 = $_POST['luku1'];
$luku2 = $_POST['luku2'];
$luku3 = $_POST['luku3'];
$summa = $luku1 + $luku2 + $luku3;
$keskiarvo = $summa / 3;
echo "<p>Summa luvuista $luku1, $luku2 ja $luku3 on: $summa.</p>";
echo "<p>Keskiarvo ylläolevista luvuista on $keskiarvo.</p>";
?>

</body>
</html>