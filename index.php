<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Kennel.php';

// creiamo le categorie
$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");


// creo un prodotto
$newProduct = new Product(12, "Pallina", 2.30, $dogCategory);

// var_dump($newProduct);


// cibo
$crocchette = new Food(123, "Crocchette Crock", 3.14, $catCategory, 0.5, 'pesce', '10/24');

// giocattolo
$pallina = new Toy(312, "Pallina Pally", 1, $dogCategory, "Gomma");

// cuccia
$cuccia = new Kennel(41, "Cuccia Blu", 7, $dogCategory, "medium");

// var_dump($cuccia);


?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Shop</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>

<div class="container py-5">
    <h1>
        PHP - Shop
    </h1>

    <i class="fa-solid fa-dog"></i>
    <i class="fa-solid fa-cat"></i>
</div>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>