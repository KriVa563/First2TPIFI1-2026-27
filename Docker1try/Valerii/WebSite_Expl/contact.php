<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Choose a Mr.Rims specialist and tell us which service you need.">
    <link rel="stylesheet" href="myStyle.css?<?= time(); ?>">
    <title>Contact Mr.Rims | Appointments</title>
</head>

<body>
    <?php include_once 'commonCode.php';
    navigatorBar("Contact", $lang);
    ?>
    <main class="contactPage" id="appointment">
        <header class="contactIntro">
            <p class="eyebrow"><?= $translations["Contact18"] ?></p>
            <h1><?= $translations["Contact19"] ?></h1>
            <p><?= $translations["Contact20"] ?></p>
        </header>

        <section class="appointmentPanel" aria-labelledby="appointmentTitle">
            <h2 id="appointmentTitle"><?= $translations["Contact21"] ?></h2>
            <div class="appointmentFields">
                <label for="serviceChoice"><?= $translations["Contact26"] ?></label>
                <select id="serviceChoice" name="service">
                    <option value="rims"><?= $translations["Contact28"] ?></option>
                    <option value="repair"><?= $translations["Contact29"] ?></option>
                    <option value="tires"><?= $translations["Contact30"] ?></option>
                </select>

                <label for="specialistChoice"><?= $translations["Contact33"] ?></label>
                <select id="specialistChoice" name="specialist">
                    <option value="rims"><?= $translations["Contact35"] ?></option>
                    <option value="repair"><?= $translations["Contact36"] ?></option>
                    <option value="tires"><?= $translations["Contact37"] ?></option>
                </select>

                <label for="appointmentNotes"><?= $translations["Contact40"] ?></label>
                <textarea id="appointmentNotes" name="notes" rows="4" placeholder="Your car model, preferred date, or what you need help with"></textarea>
            </div>
            <p class="appointmentHint"><?= $translations["Contact43"] ?></p>
        </section>
    </main>
</body>

</html>