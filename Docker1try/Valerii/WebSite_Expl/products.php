<!DOCTYPE html> <html lang="fr"> 
<head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<link rel="stylesheet" href="myStyle.css"> 
<title>Our Products</title> 
</head> 
<body> 
    <nav>
        <ul id="mainLinks">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="products.php">Products</a></li>
        </ul>
        <ul id="languageLinks">
            <li><a href="index.php">English</a></li>
            <li><a href="index-fr.php">Français</a></li>
        </ul>
    </nav>
    <div class="AllItems">
<?php
for ($i =0; $i <= 2;$i++) {
    
?>
  <div class="oneItem">
    <h2>BMW Rims F20 F21 F22 F23</h2>
    <img src="images/jantes1.png" alt="Wheels">
    <p>Price: <strong>963,56 €</strong></p>
    <button>Sold Out</button>
    </div>
    <?php
}
?>



    <div class="oneItem">
    <h2>BMW Rims F20 F21 F22 F23</h2>
    <img src="images/jantes1.png" alt="Wheels">
    <p>Price: <strong>963,56 €</strong></p>
    <button>Add to Cart</button>
    </div>

<div class="oneItem">
<h2>R³ Wheels</h2>
<img src="images/jantes2.png" alt="Wheels">
<p>Price: <strong>875,99€</strong></p>
<button>Add to Cart</button>
</div>

<div class="oneItem"> 
<h2>OZ Racing Ultraleggera HLT</h2>
<img src="images/jantes3.png" alt="OZ Wheels">
<p>Price: <strong>768,99€</strong></p>
<button>Add to Cart</button>
</div>
    
<div class="oneItem">
<h2>BBS SR</h2>
<img src="images/jantes4.png" alt="Wheels">
<p>Price: <strong>650,00€</strong></p>
<button>Add to Cart</button>
    </div>
    
    <div class="oneItem">
    <h2>Vossen HF-5 Hybrid Forged (5 lug)</h2>
    <img src="images/jantes5.png" alt="Wheels">
   <p>Price: <strong>600,00€</strong></p>
   <button>Add to Cart</button>
    </div>

    <div class="oneItem">
    <h2>Vossen VPS-4</h2>
    <img src="images/jantes6.png" alt="Wheels">
   <p>Price: <strong>600,00€</strong></p>
   <button>Add to Cart</button>
    </div>
    </div>