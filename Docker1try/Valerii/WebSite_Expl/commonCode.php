<?php


$lang = "EN";
if (isset($_GET["lang"])) {
    
     $lang = $_GET["lang"];
    }

$translations = [];
$fileTranslation = fopen("Website translations.csv", "r");
while (!feof($fileTranslation)) {
    $anotherLineOfText = fgets($fileTranslation);
    $oneLineArray = explode(";", $anotherLineOfText);
    if (count($oneLineArray) == 3) {
        
        if ($lang == "EN") {
            $translations[$oneLineArray[0]] = $oneLineArray[1];
        } else {
            $translations[$oneLineArray[0]] = $oneLineArray[2];
        }
    }
}




function navigatorBar($activePage, $language) //the $activePage will be a string...
{
    if ($language == "EN") {
?>
        <nav>
            <ul id="mainLinks">
                <li><a href="index.php" <?php if ($activePage == "Home") {
                                            print "class='active'";
                                        } ?>><?= $translations["HomeBtn"] ?></a></li>
                <li><a href="about.php" <?php if ($activePage == "About") {
                                            print "class='active'";
                                        } ?>><?= $translations["AboutBtn"] ?></a></li>
                <li><a href="contact.php" <?php if ($activePage == "Contact") {
                                                print "class='active'";
                                            } ?>><?= $translations["ContactBtn"] ?></a></li>
                <li><a href="products.php" <?php if ($activePage == "Products") {
                                                print "class='active'";
                                            } ?>><?= $translations["ProductBtn"] ?></a></li>
                <li><a href="registration.php" <?php if ($activePage == "Registration") {
                                                    print "class='active'";
                                            } ?>><?= $translations["RegistrationBtn"] ?></a></li>
            </ul>
            <ul id="languageLinks">
                <li><a href="index.php" <?php if ($language == "EN") {
                                            print "class='active'";
                                        } ?>>English</a></li>
                <li><a href="index.php?lang=FR" <?php if ($language == "FR") {
                                                    print "class='active'";
                                                } ?>>Français</a></li>
            </ul>
        </nav>

    <?php
    }
    if ($language == "FR") {
    ?>
        <nav>
            <ul id="mainLinks">
                <li><a href="index-fr.php" <?php if ($activePage == "Home") {
                                                print "class='active'";
                                            } ?>>Accueil</a></li>
                <li><a href="about-fr.php" <?php if ($activePage == "About") {
                                                print "class='active'";
                                            } ?>>À propos</a></li>
                <li><a href="contact-fr.php" <?php if ($activePage == "Contact") {
                                                    print "class='active'";
                                                } ?>>Contact</a></li>
                <li><a href="products-fr.php" <?php if ($activePage == "Products") {
                                                    print "class='active'";
                                                } ?>>Produits</a></li>
            </ul>
            <ul id="languageLinks">
                <li><a href="index.php">English</a></li>
                <li><a href="index-fr.php" class="active">Français</a></li>
            </ul>
        </nav>
<?php
    }
}
?>