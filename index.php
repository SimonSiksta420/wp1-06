<?php
$woodchunk = true;
$rope = true;
$nails = true;
$knife = true;
$imageknife = "https://cdn.shopify.com/s/files/1/1186/5476/products/chefs-knife-gray-191015-shoppage_grande.jpg?v=1570809541";
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
    echo '<img src="https://s8biy2ei0firq4bi1s2fi7pf-wpengine.netdna-ssl.com/wp-content/uploads/2017/10/3-Strand-Natural-Fiber-Manila-Rope-300x300.jpg" alt="Rope"/>';
}
if ($woodchunk) {
    echo '<img src="https://www.bodykingfitness.cz/wp-content/uploads/2018/07/0714-800-300x300.jpg" alt="Knife"/>';
}
if ($nails) {
    echo '<img src="https://i.ya-webdesign.com/images/transparent-hammer-nail-5.png" alt="Nails"/>';
}
if ($knife) {
    echo '<img src="https://cdn.shopify.com/s/files/1/1186/5476/products/chefs-knife-gray-191015-shoppage_grande.jpg?v=1570809541" alt="Knife"/>';
}

 ?>

 <h1> You can craft <h1>

<?php
if ($rope && $knife && $woodchunk) {
    echo '<img src="https://www.toparchery.shop/wp-content/uploads/2018/06/WSK-take-down-bow-300x300-300x300.jpg" alt="bow"/>';
}
if ($nails && $woodchunk) {
    echo '<img src="https://images-na.ssl-images-amazon.com/images/I/71c95xGpdXL._AC_SL1500_.jpg" alt="Baseball with nails" width="300" height="300" />';
}
if ($rope && $woodchunk) {
    echo '<img src="https://www.budostore.cz/1841-large/nunchaku-z-tvrde-gumy-retez-a-loziska.jpg" alt="Nunchaku"/>';
}
if ($knife && $woodchunk) {
    echo '<img src="https://gamepedia.cursecdn.com/wynncraft_gamepedia_en/4/4f/Spear.png" alt="Spear"/>';
}
?> 
</body>
</html>