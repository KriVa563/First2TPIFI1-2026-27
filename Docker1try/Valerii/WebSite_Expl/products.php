<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Our Products</title>
</head>

<body>
    <?php include_once 'commonCode.php';
    navigatorBar("Products", "EN");
    $namesOfProducts = ["BMW Rims", "R³ Wheels", "OZ Racing Ultraleggera HLT", "BBS SR", "Vossen HF-5 Hybrid Forged (5 lug)", "Vossen VPS-4"];
    $imagesOfProducts = ["images/jantes1.png", "images/jantes2.png", "images/jantes3.png", "images/jantes4.png", "images/jantes5.png", "images/jantes6.png"];
    $pricesOfProducts = [963.56, 875.99, 768.99, 650.50, 600.00, 690.00]
    ?>
    <div class="AllItems">
        <?php
        for ($i = 0; $i < count($namesOfProducts); $i++) {

        ?>
            <div class="oneItem">
                <h2><?= $namesOfProducts[$i] ?></h2>
                <img src=<?= $imagesOfProducts[$i] ?>>
                <p>Price: <strong><?= $pricesOfProducts[$i] ?> $</strong></p>
                <button>Add to Cart</button>
            </div>
        <?php
        }
        ?>