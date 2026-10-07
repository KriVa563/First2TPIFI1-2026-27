<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myStyle.css">
    <title>Contact Mr.Rims | rendez-vous</title>
</head>
<body>
     <nav>
        <ul id="mainLinks">           
            <li><a href="index-fr.php">Accueil</a></li>          
            <li><a href="about-fr.php">À propos</a></li>          
            <li><a href="contact-fr.php">Contact</a></li>
            <li><a href="products-fr.php">Produits</a></li>
        </ul>
        <ul id="languageLinks">
            <li><a href="index.php">English</a></li>
            <li><a href="index-fr.php">Français</a></li>
        </ul>
    </nav>
    
    <main class="contactPage" id="appointment">
        <header class="contactIntro">
            <p class="eyebrow">Nous sommes là pour vous aider.</p>
            <h1>Prendre un rendez-vous</h1>
            <p>Choisissez le service dont vous avez besoin et le bon spécialiste Mr.Rims. Nous serons prêts à discuter de vos jantes, pneus ou prochain ensemble de roues.</p>
        </header>

        <section class="appointmentPanel" aria-labelledby="appointmentTitle">
            <h2 id="appointmentTitle">Choisissez un spécialiste de service</h2>
            <div class="appointmentFields">
                <label for="serviceChoice">Qu'est-ce que vous avez besoin?</label>
                <select id="serviceChoice" name="service">
                    <option value="rims">Acheter des jantes</option>
                    <option value="repair">Réparation ou peinture de jantes</option>
                    <option value="tires">Changer ou acheter des pneus</option>
                </select>

                <label for="specialistChoice">Choisissez un spécialiste</label>
                <select id="specialistChoice" name="specialist">
                    <option value="rims">Spécialiste des ventes de jantes</option>
                    <option value="repair">Spécialiste de la réparation et de la peinture de jantes</option>
                    <option value="tires">Spécialiste du changement de pneus</option>
                </select>

                <label for="appointmentNotes">Dites-nous en un peu plus (facultatif)</label>
                <textarea id="appointmentNotes" name="notes" rows="4" placeholder="Le modèle de votre voiture, la date souhaitée ou l'objet de votre demande d'aide"></textarea>
            </div>
            <p class="appointmentHint">Contactez-nous avec vos choix pour organiser un rendez-vous. N'oubliez pas d'inclure votre nom et vos coordonnées préférées.</p>
        </section>
    </main>

</body>
</html>