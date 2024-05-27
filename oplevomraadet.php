<?php
require "settings/init.php";
?>
    <!DOCTYPE html>
    <html lang="da">
<head>
    <meta charset="utf-8">

    <title>Oplev området</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-baggrund text-text">
<?php include "navbar.php"; ?>

<br>
<div class="container">
        <div class="row pb-4 border-bottom border-2 border-kasse" >
            <div class="col ps-4">
                <img class="rounded-2" src="img/tur.webp" height="300" alt="Billede af en sti">
            </div>
            <div class="col">
                <div class="pt-4">
                    <p class="fs-1 overskrift fw-medium">Gå en tur i naturen</p>
                    <p>I det naturskønne område kan man gå en dejlig tur langs stranden, <br>
                        som ligger et stenkast fra hotellet. Det ville også være muligt at tage <br>
                        et dyb i vandet, hvis man er til det. Her vil der være mulighed for at <br>
                        finde flotte muslingeskaller, som er vasket ind med bølgerne. </p>
                </div>
            </div>
        </div>
    <br><br>
            <div class="row pb-4 border-bottom border-2 border-kasse">
                <div class="col">
                    <div class=" ps-4 pt-4">
                        <p class="fs-1 overskrift fw-medium"> Lær træerne at kende</p>
                        <p class="me-3">Gå en tur i Strandparken, hvor i finder et bredt udvalg af træer.
                            Find en brochure i lobbyen med information om alle de danske træer som i kan finde i området.
                            Gå ud og bliv klogere!</p>
                    </div>
                </div>
                <div class="col me-4 d-flex justify-content-end">
                    <img class="rounded-2" src="img/tree.webp" height="300" alt="Billeder af træer">
                </div>
            </div>
        <br><br>
                <div class="row pb-4 border-bottom border-2 border-kasse">
                    <div class="col ps-4">
                        <img class="rounded-2" src="img/golf2.webp" height="300" alt="Billede af en golfbane">
                    </div>
                    <div class="col">
                        <div class="ps-3 pt-4 me-2">
                            <p class="fs-1 overskrift fw-medium">Tag ud og spil golf </p>
                            <p>Hvis i gerne vil ud og bevæge jer, kan i tage ud hen og spille golf på den nærlæggende golfbane.
                                Golfklubben er fra 1964, og består af en bane med 18 huller, 70 par.
                                <br><br> Priser fra 250 kr. Book en tid under “Book golf”.
                            <div class="d-flex justify-content-start align-items-start">
                                <i class="fa-solid fa-car p-2"></i><p class="pt-1">11 min</p>
                            </div>
                        </div>
                    </div>
                </div>
            <br><br>
                    <div class="row pb-4 border-bottom border-2 border-kasse">
                    <div class="col ps-4 pt-4">
                        <p class="fs-1 overskrift fw-medium ">Holbæk havn</p>
                        <p> Et kort stykke fra hotellet ligger Holbæk havn, som skaber liv til byen. Her kan man tage ned og spise en lækker is. Derudover er det tæt på centrum,
                            hvor der er shopping muligheder samt restaurenter og cafeer. </p>
                        <br>
                        <div class="d-flex justify-content-start align-items-start">
                        <i class="fa-solid fa-car p-2 "></i><p class="pt-1">4 min</p><i class="fa-solid fa-person-walking ms-5 p-2"></i><p class="pt-1">25 min</p>
                    </div>
                    </div>
                    <div class="col ps-5 me-4 d-flex justify-content-end">
                        <img class="rounded-2" src="img/havn.webp" height="300" alt="Billede af en havn">
                    </div>
                </div>
                <br><br>
                    <div class="row">
                            <div class="col-6">
                                <img class="rounded-2 img-fluid" src="img/museum.webp" alt="Billede af to kvinder af kigger på kunst" height="300">
                            </div>
                            <div class="col-6">
                                <div class="ps-3 pt-4">
                                    <p class="fs-1 overskrift fw-medium">Museum Vestsjælland</p>
                                    <p>På Holbæk museum kan man både se særudstillinger og faste udstillinger.
                                        Derudover er der arrangementer man kan tilmede sig til på deres hjemmeside.
                                        Find flere informationer på hvad man kan opleve på:</p>
                                        <p class="fst-italic">www.vestmuseum.dk/holbaek-museum/</p>
                                    <p>Entré pris: 60 kr </p>
                                    <div class="d-flex justify-content-start align-items-start">
                                        <i class="fa-solid p-2 fa-car"></i><p class="pt-1">5 min</p>
                                        <i class="fa-solid fa-person-walking ms-5 p-2"></i><p class="pt-1">21 min</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                        <br>
</div>

                <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
<?php
