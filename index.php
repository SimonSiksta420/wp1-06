<?php
$woodchunk = true;
$rope = true;
$nails = true;
$knife = true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Items in your inventory </h1>
<?php
if ($rope) {
    echo "Získal jsi lano<br>";
}
if ($woodchunk) {
    echo "Získal jsi kus dřeva<br>";
}
if ($nails) {
    echo "Získal jsi hřebíky<br>";
}
if ($knife) {
    echo "Získal jsi nůž<br>";
}
 ?>

 <h1> You can craft <h1>

<?php
if ($rope && $knife && $woodchunk) {
    echo "Bow<br>";
} elseif ($nails && $woodchunk) {
    echo "Bat with nails<br>";
} elseif ($rope && $woodchunk) {
    echo "Nunchaku<br>";
} elseif ($knife && $woodchunk) {
    echo "Spear<br>";
}
?> 
</body>
</html>