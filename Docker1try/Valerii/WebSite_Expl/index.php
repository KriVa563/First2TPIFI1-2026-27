<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover wheel styles and find the right rims for your car at Mr.Rims.">
    <link rel="stylesheet" href="myStyle.css?<?= time(); ?>">
    <title>Mr.Rims | Find Your Fit</title>
</head>

<body>
    <?php include_once 'commonCode.php';
    navigatorBar("Home", "EN");
    ?>
    <main>
        <section class="welcomeHero">
            <div class="welcomeCopy">
                <p class="eyebrow"><?= $translations["L19"] ?></p>
                <h1><?= $translations["L20_1"] ?><span><?= $translations["L20_2"] ?></span></h1>
                <p class="welcomeIntro"><?= $translations["L21"] ?></p>
                <a class="welcomeButton" href="products.php"><?= $translations["L22"] ?></a>
            </div>
            <div class="welcomeImageWrap">
                <img src="images/jantes3.png" alt="Sporty alloy rim available at Mr.Rims">
            </div>
        </section>

        <section class="rimInfo" aria-labelledby="rimInfoTitle">
            <p class="eyebrow"><?= $translations["L30"] ?></p>
            <h2 id="rimInfoTitle"><?= $translations["L31"] ?></h2>
            <p><?= $translations["L32"] ?></p>
        </section>

        <section class="storeFeatures" aria-label="What Mr.Rims offers">
            <article>
                <h3><?= $translations["L37"] ?></h3>
                <p><?= $translations["L38"] ?></p>
            </article>
            <article>
                <h3><?= $translations["L41"] ?></h3>
                <p><?= $translations["L42"] ?></p>
            </article>
            <article>
                <h3><?= $translations["L45"] ?></h3>
                <p><?= $translations["L46"] ?></p>
            </article>
        </section>
    </main>
</body>

</html>