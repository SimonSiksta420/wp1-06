<?php
$woodchunk = true;
$rope = true;
$nails = true;
$knife = true;
$imageknife = "https://www.highlife.cz/image/5000/noze-nuz-ka-bar-usmc-fighting-knife-i5369.jpg"
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
    echo "Rope <br>";
}
if ($woodchunk) {
    echo "Woodchunk <br>";
}
if ($nails) {
    echo "Nails <br>";
}
if ($knife) {
    echo <img src= <?= $imageknife ?> <br>
}
 ?>

 <h1> You can craft <h1>

<?php
if ($rope && $knife && $woodchunk) {
    echo "Bow <br>";
}
if ($nails && $woodchunk) {
    echo "Bat with nails <br>";
}
if ($rope && $woodchunk) {
    echo "Nunchaku <br>";
}
if ($knife && $woodchunk) {
    echo "Spear <br>";
}
?> 
</body>
</html>