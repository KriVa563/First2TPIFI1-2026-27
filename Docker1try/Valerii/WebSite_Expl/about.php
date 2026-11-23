<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Shop rims, arrange rim repairs, and get new tires at Mr.Rims.">
    <link rel="stylesheet" href="myStyle.css?<?= time(); ?>">
    <title>About Mr.Rims</title>
</head>

<body>
    <?php include_once 'commonCode.php';
    navigatorBar("About",$lang);
    ?>
    <main class="aboutPage">
        <header class="aboutIntro">
            <p class="eyebrow"><?= $translations["About18"] ?></p>
            <h1><?= $translations["About19"] ?></h1>
            <p><?= $translations["About20"] ?></p>
        </header>

        <section class="aboutStory">
            <div class="aboutStoryImage">
                <img src="images/jantes1.png" alt="Alloy rim from the Mr.Rims collection">
            </div>
            <div>
                <h2><?= $translations["About28"] ?></h2>
                <p><?= $translations["About29"] ?></p>
                <p><?= $translations["About30"] ?></p>
                <a class="welcomeButton" href="products.php?lang=<?= $lang ?>"><?= $translations["About31"] ?></a>
            </div>
        </section>

        <section class="aboutValues" aria-label="Our services">
            <article>
                <h3><?= $translations["About37"] ?></h3>
                <p><?= $translations["About38"] ?></p>
                <a class="serviceAppointment" href="contact.php?service=rims&lang=<?= $lang ?>#appointment"><?= $translations["About39"] ?></a>
            </article>
            <article>
                <h3><?= $translations["About42"] ?></h3>
                <p><?= $translations["About43"] ?></p>
                <a class="serviceAppointment" href="contact.php?service=repair&lang=<?= $lang ?>#appointment"><?= $translations["About44"] ?></a>
            </article>
            <article>
                <h3><?= $translations["About47"] ?></h3>
                <p><?= $translations["About48"] ?></p>
                <a class="serviceAppointment" href="contact.php?service=tires&lang=<?= $lang ?>#appointment"><?= $translations["About49"] ?></a>
            </article>
        </section>
    </main>
</body>

</html>