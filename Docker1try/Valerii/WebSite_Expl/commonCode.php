<?php


$lang = "EN";
if (isset($_GET["lang"])) 
    {
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




function navigatorBar($activePage) //the $activePage will be a string...
{
    
        global $translations;
        global $lang;
?>
        <nav>
            <ul id="mainLinks">
                <li><a href="index.php?lang=<?= $lang ?>" <?php if ($activePage == "Home") {
                                            print "class='active'";
                                        } ?>><?= $translations["HomeBtn"] ?></a></li>
                <li><a href="about.php?lang=<?= $lang ?>" <?php if ($activePage == "About") {
                                            print "class='active'";
                                        } ?>><?= $translations["AboutBtn"] ?></a></li>
                <li><a href="contact.php?lang=<?= $lang ?>" <?php if ($activePage == "Contact") {
                                                print "class='active'";
                                            } ?>><?= $translations["ContactBtn"] ?></a></li>
                <li><a href="products.php?lang=<?= $lang ?>" <?php if ($activePage == "Products") {
                                                print "class='active'";
                                            } ?>><?= $translations["ProductBtn"] ?></a></li>
                <li><a href="registration.php?lang=<?= $lang ?>" <?php if ($activePage == "Registration") {
                                                    print "class='active'";
                                            } ?>><?= $translations["RegisterBtn"] ?></a></li>
                <li><a href="login.php?lang=<?= $lang ?>" <?php if ($activePage == "Login") {
                                                    print "class='active'";
                                            } ?>><?= $translations["LoginBtn"] ?></a></li>
            </ul>
            <ul id="languageLinks">
                <li><a href="index.php" <?php if ($lang == "EN") {
                                            print ("class='active'");
                                        } ?>>English</a></li>
                <li><a href="index.php?lang=FR" <?php if ($lang == "FR") {
                                                    print ("class='active'");
                                                } ?>>Français</a></li>
            </ul>
        </nav>

    <?php 
}
?>