<?php
require "settings/init.php";
?>
    <!DOCTYPE html>
    <html lang="da">
<head>
    <meta charset="utf-8">

    <title>Oplev området</title>

    <meta name="robots" content="none">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-baggrund text-text">
<?php include "navbar.php"; ?>

<div class="container mt-3">
    <div class="row pb-4 border-bottom border-2 border-kasse mb-3">
        <div class="col-6 ps-4">
            <img class="rounded-2 img-fluid" src="img/tur.webp" height="300px" alt="Billede af en sti">
        </div>
        <div class="col-6">
            <div class="pt-4">
                <p class="fs-1 overskrift2 fw-medium">Gå en tur i naturen</p>
                <p>I det naturskønne område kan man gå en dejlig tur langs stranden,
                    som ligger et stenkast fra hotellet. <br> Det ville også være muligt at tage
                    et dyb i vandet, hvis vejret er til det. <br> <br> Fra hotellet er der flot udsigt til parken, Strandparken. </p>
            </div>
        </div>
    </div>
    <div class="row pb-4 border-bottom border-2 border-kasse mb-3">
        <div class="col-6">
            <div class=" ps-4 pt-4">
                <p class="fs-1 overskrift2 fw-medium"> Lær træerne at kende</p>
                <p class="me-3">Gå en tur i Strandparken, hvor i finder et bredt udvalg af træer.<br><br>
                    Find en brochure i lobbyen med information om alle de danske træer som i kan finde i området.<br><br>
                <p class="fst-italic">Gå ud og bliv klogere!</p> </p>
            </div>
        </div>
        <div class="col-6 d-flex justify-content-end">
            <img class="rounded-2 img-fluid" src="img/tree.webp" height="300px" alt="Billeder af træer">
        </div>
    </div>
    <div class="row pb-4 border-bottom border-2 border-kasse mb-3">
        <div class="col-6 ps-4">
            <img class="rounded-2 img-fluid" src="img/golf2.webp" height="300px" alt="Billede af en golfbane">
        </div>
        <div class="col-6">
            <div class="ps-3 pt-4">
                <p class="fs-1 overskrift2 fw-medium">Tag ud og spil golf </p>
                <p class="ps-1">Hvis i gerne vil ud og bevæge jer, kan i tage hen og spille golf på den nærlæggende golfbane.<br>
                    Golfklubben er fra 1964, og består af en bane med 18 huller, 70 par.
                    <br><br> <p class="fst-italic"> Priser fra 250 kr. Book en tid under “Book golf”. </p> </p>
                <div class="d-flex justify-content-start align-items-start ps-1">
                    <i class="fa-solid fa-car p-2 ps-0"></i>
                    <p class="pt-1">11 min</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-4 border-bottom border-2 border-kasse mb-3">
        <div class="col-6 ps-4 pt-4">
            <p class="fs-1 overskrift2 fw-medium ">Holbæk havn</p>
            <p> Et kort stykke fra hotellet ligger Holbæk havn, som skaber liv til byen. Her kan man tage ned og spise
                en lækker is. <br><br> Derudover er det tæt på centrum,
                hvor der er shoppingmuligheder samt restaurenter og cafeer. </p>
            <div class="d-flex justify-content-start align-items-start">
                <i class="fa-solid fa-car p-2 ps-0"></i>
                <p class="pt-1">4 min</p><i class="fa-solid fa-person-walking ms-5 p-2"></i>
                <p class="pt-1">25 min</p>
            </div>
        </div>
        <div class="col-6 ps-5 d-flex justify-content-end">
            <img class="rounded-2 object-fit-cover" src="img/havn.webp" height="300px" alt="Billede af en havn">
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <img class="rounded-2 object-fit-cover w-100" src="img/museum.webp" alt="Billede af to kvinder af kigger på kunst"
                 height="300px">
        </div>
        <div class="col-6">
            <div class="ps-3 pt-4">
                <p class="fs-1 overskrift2 fw-medium">Museum Vestsjælland</p>
                <p>På Holbæk museum kan man både se særudstillinger og faste udstillinger.
                    Derudover er der arrangementer man kan tilmede sig til på deres hjemmeside.
                    Find flere informationer på hvad man kan opleve på:</p>
                <p class="fst-italic">www.vestmuseum.dk/holbaek-museum/</p>
                <p class="fst-italic">Entré pris: 60 kr </p>
                <div class="d-flex justify-content-start align-items-start">
                    <i class="fa-solid pt-2 pe-2 pb-2 p2-0 fa-car"></i>
                    <p class="pt-1">5 min</p>
                    <i class="fa-solid fa-person-walking ms-5 p-2"></i>
                    <p class="pt-1">21 min</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
