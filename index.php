<?php

require_once './Models/Category.php';
require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Kennel.php';

require_once './Models/Client.php';
require_once './Models/PremiumClient.php';

// creiamo le categorie
$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");


// creo un prodotto
// $newProduct = new Product(12, "Pallina", 2.30, $dogCategory);


// cibo
$crocchette = new Food(123, "Crocchette Crock", 3.14, $catCategory, 0.5, 'pesce', '10/24');
$crocchette->setImage('https://m.media-amazon.com/images/I/71gB-bzxJmL._AC_UF1000,1000_QL80_.jpg');

// giocattolo
$pallina = new Toy(312, "Pallina Pally", 1, $dogCategory, "Gomma");
$pallina->setImage("https://m.media-amazon.com/images/I/61i3OJ4EycL._AC_UF894,1000_QL80_.jpg");

// cuccia
$cuccia = new Kennel(41, "Cuccia Blu", 7, $dogCategory, "medium");
$cuccia->setImage("https://www.original-legno.com/wp-content/uploads/2021/06/Cucce_in_legno_italy_con_veranda_per_cani_in_4_misure-1.webp");

// var_dump($cuccia);


$products = [
    $crocchette,
    $pallina,
    $cuccia
];

// var_dump($products);




// creo un nuovo cliente
$client = new Client("gab", "Via del codice 47");

$client->addToCart($cuccia);
$client->addToCart($pallina);

// var_dump($client);
echo "totale utente normale: " . $client->getCartTotal();

$premiumClient = new PremiumClient("mario@mail.com", "Via dei Funghi 1", "mariobros");
$premiumClient->addToCart($cuccia);
$premiumClient->addToCart($pallina);
var_dump($premiumClient);

echo "totale utente premium: " . $premiumClient->getCartTotal();




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

    <style>
        .card .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <h1>
        PHP - Shop
    </h1>

    <div class="row row-cols-2 row-gap-4">

        <?php
        foreach($products as $product) {
            ?>
            <div class="col">
                <div class="card">
                    <img src="<?= $product->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title d-flex justify-content-between ">
                            <span><?= $product->name ?></span>
                            <span><i class="fa-solid <?= $product->category->icon ?>"></i></span>
                        </h5>
                        <h6 class="text-secondary"><small>(<?= $product->getType() ?>)</small></h6>
                        <p class="card-text">€<?= $product->price ?></p>
                        <a href="#" class="btn btn-primary">Acquista</a>

                        <div class="details">
                            <ul>
                                <?php

                                // controlliamo di che tipo sia il prodotto
                                if($product instanceof Food) {
                                    echo '<li>Peso: ' . $product->weight . 'kg</li>' ;
                                    echo '<li>Ingrediente principale: ' . $product->mainIngredient . '</li>' ;

                                } else if($product instanceof Toy) {

                                    echo '<li>Materiale: ' . $product->material . '</li>' ;

                                } else if($product instanceof Kennel) { 

                                    echo '<li>Taglia '. $product->size . '</li>';

                                }

                                
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }

        ?>


    </div>
</div>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>