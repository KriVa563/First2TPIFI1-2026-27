<?php
function navigatorBar($activePage,$language)//the $activePage will be a string...
{
?>

    <nav>
        <ul id="mainLinks">
            <li><a href="index.php" <?php if($activePage=="Home"){print"class='active'";} ?>>Home</a></li>
            <li><a href="about.php" <?php if($activePage=="About"){print"class='active'";} ?>>About</a></li>
            <li><a href="contact.php"<?php if($activePage=="Contact"){print"class='active'";} ?>>Contact</a></li>
            <li><a href="products.php" <?php if($activePage=="Products"){print"class='active'";} ?>>Products</a></li>
        </ul>
        <ul id="languageLinks">
            <li><a href="index.php"<?php if($language=="EN"){print"class='active'";} ?>>English</a></li>
            <li><a href="index-fr.php"<?php if($language=="FR"){print"class='active'";} ?>>Français</a></li>
        </ul>
    </nav>
<?php
}
?>