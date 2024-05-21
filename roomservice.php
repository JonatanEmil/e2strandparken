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

<div class="container">
    <div class="row">
        <div class="col-12">
            <img class="rounded-3 object-fit-cover mt-3" src="img/RS.webp" alt="" style="height: 200px; width: 100%; object-position: 50% 58%;">
        </div>

        <div class="col-4 mt-2 rounded-3">
            <div class="bg-kasse">
                <p class="fs-5 text-hvid text-center overskrift">COCKTAILS</p>

                <div class="cocktail-item">
                    <p>Espresso Martini</p>
                    <div class="counter-container">
                        <button id="decrementButton" class="btn bg-pink">-</button>
                        <div id="counter" class="ps-2 pe-2 text-center">0</div>
                        <button id="incrementButton" class="btn bg-pink">+</button>
                    </div>
                </div>




            </div>
        </div>

    </div>
</div>

<script>
    // Hent referencer til knapperne og tællerelementet
    const incrementButton = document.getElementById('incrementButton');
    const decrementButton = document.getElementById('decrementButton');
    const counterElement = document.getElementById('counter');

    let count = 0;

    // Tilføj eventlistener til knappen for at tælle op
    incrementButton.addEventListener('click', function() {
        if (count < 10) {
            count++;
            counterElement.textContent = count;
        }
    });

    // Tilføj eventlistener til knappen for at tælle ned
    decrementButton.addEventListener('click', function() {
        if (count > 0) {
            count--;
            counterElement.textContent = count;
        }
    });

</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>