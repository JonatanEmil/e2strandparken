<?php
require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Hotel Strandparken</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="bg-baggrund">

<?php include "navbar.php"; ?>

<div class="container pt-2">
    <div class="row g-2">
        <div class="col-6">
            <div class="col-12">
                <img class="rounded-3 object-fit-cover " src="img/golf.webp" alt="" style="height: 400px; width: 100%; object-position: 50% 25%;">
            </div>
            <div class="col-12 rounded-3 bg-kasse mt-2 p-3">
                <p class="text-hvid">
                Både hotellet og golfbanen ligger i naturskønne omgivelser med udsigt over fjorden, og derfor er en tur på golfbanen hos os  særligt attraktivt.
                Holbæk Golfklub ligger blot 10 minutter fra vores hotel, så når du har spist dig mæt i vores lækre morgenmadsbuffet, er der ikke langt til, at du står på banen.
                </p>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-kasse rounded-3 p-3 text-hvid text-center fs-1 overskrift">
                Ledige tider
            </div>

        </div>
    </div>
</div>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
