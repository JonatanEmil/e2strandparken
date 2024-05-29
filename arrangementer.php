<?php
require "settings/init.php";
?>
    <!DOCTYPE html>
    <html lang="da">
<head>
    <meta charset="utf-8">

    <title>Arrangementer</title>

    <meta name="robots" content="none">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-baggrund text-text">
<?php include "navbar.php"; ?>

<br>
<div class="container">
    <div class="row pb-4 border-bottom border-2 border-kasse">
        <div class="col-6 ps-0">
            <img class="rounded-2" src="img/vinsmagning.webp" alt="På billedet er der folk, som er til vinsmagning">
        </div>
        <div class="col-6">
            <div class="pt-2">
                <p class="fs-1 overskrift fw-medium">Vinsmagning</p>
                <p>Træd ind i vinens verden og udforsk en mangfoldighed verden af smage og aromaer med vores eksklusive
                    vinsmagning.
                    <br>Perfekt for både nybegyndere og vinentusiaster!</p>
                <p class="fst-italic">Tidspunkt: d. 12/07 kl 20 i Restaurant Blossom </p>
                <p class="fw-medium">Tilmeldelse via vores hjemmeside</p>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row pb-4 border-bottom border-2 border-kasse">
        <div class="col-6">
            <div class=" ps-0 pt-1">
                <p class="fs-1 overskrift fw-medium"> Flow Yoga</p>
                <p class="fs-5">For nybegyndere</p>
                <p>Find ro, styrke og fleksibilitet med vores Flow Yoga for begyndere. <br>
                    Perfekt for dig, der vil starte yogarejsen i en støttende og afslappet atmosfære.
                    Kontakt personale for mere info.</p>
                <p class="fst-italic">Tidspunkt: d. 14/05 kl 10. Varighed 60 min</p>
                <p class="fw-medium">Du er velkommen til at medbringe din egen måtte.</p>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-end pe-0">
            <img class="img-fluid rounded-2" src="img/yoga.webp" alt="Billede af folk der dyrker yoga">
        </div>
    </div>
    <br><br>

    <div class="row pb-4 border-bottom border-2 border-kasse g-4">
        <div class="col-6 ps-0">
            <img class="rounded-2" src="img/madsmagning.webp" alt="Billede af folk der bestiller mad">
        </div>
        <div class="col-6 ps-4">
            <div class="ps-3 pt-1">
                <p class="fs-1 overskrift fw-medium">Restaurant Blossom </p>
                <p class="fs-5">Tester ny menu</p>
                <p>Kom og smag vores spændende nye menu hos Restaurant Blossom!
                    Vi har nøje udvalgt friske ingredienser og innovative retter, der vil forkæle dine
                    smagsløg.</p>
                <p class="fst-italic">Prøv nu. Book bord fra kl 17.30 hver dag.</p>
            </div>
        </div>
    </div>

    <br><br>
    <div class="row">
        <div class="col-6 pt-0">
            <p class="fs-1 overskrift fw-medium ">Valentinesdag</p>
            <p>Gør Valentinsdag til en uforglemmelig begivenhed med et
                ophold på Hotel Strandparken. Book jeres romantiske getaway
                i dag og lad os sørge for, at I fejrer kærligheden på bedste vis.</p>
            <p class="fw-medium">Giv en oplevelse din partner aldrig vil glemme. Mere infomation
                findes på vores hjemmeside.</p>
            <p class="fst-italic">Tidspunkt. d. 14-16/02 - Valentinesweekend</p>
        </div>
        <div class="col-6 d-flex justify-content-end pe-0">
            <img class="rounded-2" src="img/valentines.webp" alt="Billede af blomster og gaver">
        </div>
    </div>
    <br>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
