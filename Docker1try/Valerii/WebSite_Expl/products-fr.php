<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Produits</title>
</head>

<body>
    <?php include_once 'commonCode.php';
    navigatorBar("Products","FR");
    ?>
    <div class="AllItems">
        <?php
        for ($i = 0; $i <= 3; $i++) {

        ?>
             <div class="oneItem">
            <h2>BMW Jantes F20 F21 F22 F23</h2>
            <img src="images/jantes1.png" alt="Wheels">
            <p>Prix: <strong>963,56 €</strong></p>
            <button></button>
        </div>
        <?php
        }
        ?>
       

        <div class="oneItem">
            <h2>R³ Jantes</h2>
            <img src="images/jantes2.png" alt="Wheels">
            <p>Prix: <strong>875,99€</strong></p>
            <button>Ajouter au Panier</button>
        </div>

        <div class="oneItem">
            <h2>OZ Racing Ultraleggera HLT</h2>
            <img src="images/jantes3.png" alt="OZ Wheels">
            <p>Prix: <strong>768,99€</strong></p>
            <button>Ajouter au Panier</button>
        </div>

        <div class="oneItem">
            <h2>BBS SR</h2>
            <img src="images/jantes4.png" alt="Wheels">
            <p>Prix: <strong>650,00€</strong></p>
            <button>Ajouter au Panier</button>
        </div>

        <div class="oneItem">
            <h2>Vossen HF-5 Hybrid Forged (5 lug)</h2>
            <img src="images/jantes5.png" alt="Wheels">
            <p>Prix: <strong>600,00€</strong></p>
            <button>Ajouter au Panier</button>
        </div>

        <div class="oneItem">
            <h2>Vossen VPS-4</h2>
            <img src="images/jantes6.png" alt="Wheels">
            <p>Prix: <strong>600,00€</strong></p>
            <button>Ajouter au Panier</button>
        </div>
    </div>