<?php
function navigatorBar($activePage,$language)//the $activePage will be a string...
{
if($language=="EN"){
    ?>
 <nav>
        <ul id="mainLinks">
            <li><a href="index.php" <?php if($activePage=="Home"){print"class='active'";} ?>>Home</a></li>
            <li><a href="about.php" <?php if($activePage=="About"){print"class='active'";} ?>>About</a></li>
            <li><a href="contact.php"<?php if($activePage=="Contact"){print"class='active'";} ?>>Contact</a></li>
            <li><a href="products.php" <?php if($activePage=="Products"){print"class='active'";} ?>>Products</a></li>
        </ul>
        <ul id="languageLinks">
            <li><a href="index.php" class="active">English</a></li>
            <li><a href="index-fr.php">Français</a></li>
        </ul>
    </nav>
   
<?php
}
if($language=="FR"){
    ?>
 <nav>
        <ul id="mainLinks">
            <li><a href="index-fr.php" <?php if($activePage=="Home"){print"class='active'";} ?>>Accueil</a></li>
            <li><a href="about-fr.php" <?php if($activePage=="About"){print"class='active'";} ?>>À propos</a></li>
            <li><a href="contact-fr.php"<?php if($activePage=="Contact"){print"class='active'";} ?>>Contact</a></li>
            <li><a href="products-fr.php" <?php if($activePage=="Products"){print"class='active'";} ?>>Produits</a></li>
        </ul>
        <ul id="languageLinks">
            <li><a href="index.php">English</a></li>
            <li><a href="index-fr.php" class="active">Français</a></li>
        </ul>
    </nav>
    <?php
}
?>
<?php
}
?>


