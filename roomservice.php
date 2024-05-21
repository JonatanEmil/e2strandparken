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
            <img class="rounded-3 object-fit-cover mt-3" src="img/RS.webp" alt=""
                 style="height: 200px; width: 100%; object-position: 50% 58%;">
        </div>

        <div class="col-4 mt-2 rounded-3">
            <div class="bg-kasse text-hvid rounded-3">
                <p class="fs-5 text-hvid text-center overskrift pt-3">COCKTAILS</p>
                <div class="mini p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Espresso Martini</p>
                        <div class="counter-container ms-3 d-flex">
                            <button class="btn bg-pink me-2 decrement">-</button>
                            <div class="ps-2 pe-2 text-center counter">0</div>
                            <button class="btn bg-pink ms-2 increment">+</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Old Fashioned</p>
                        <div class="counter-container ms-3 d-flex">
                            <button class="btn bg-pink me-2 decrement">-</button>
                            <div class="ps-2 pe-2 text-center counter">0</div>
                            <button class="btn bg-pink ms-2 increment">+</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Dark´N´Stormy</p>
                        <div class="counter-container ms-3 d-flex">
                            <button class="btn bg-pink me-2 decrement">-</button>
                            <div class="ps-2 pe-2 text-center counter">0</div>
                            <button class="btn bg-pink ms-2 increment">+</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Strawberry Daiquiri</p>
                        <div class="counter-container ms-3 d-flex">
                            <button class="btn bg-pink me-2 decrement">-</button>
                            <div class="ps-2 pe-2 text-center counter">0</div>
                            <button class="btn bg-pink ms-2 increment">+</button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <p class="mb-0">Cosmopolitan</p>
                        <div class="counter-container ms-3 d-flex">
                            <button class="btn bg-pink me-2 decrement">-</button>
                            <div class="ps-2 pe-2 text-center counter">0</div>
                            <button class="btn bg-pink ms-2 increment">+</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<script>
    // Tilføj event listeners til alle increment og decrement knapper
    document.querySelectorAll('.increment').forEach(button => {
        button.addEventListener('click', function () {
            const counterElement = this.previousElementSibling;
            let count = parseInt(counterElement.textContent);
            counterElement.textContent = count + 1;
        });
    });

    document.querySelectorAll('.decrement').forEach(button => {
        button.addEventListener('click', function () {
            const counterElement = this.nextElementSibling;
            let count = parseInt(counterElement.textContent);
            if (count > 0) {
                counterElement.textContent = count - 1;
            }
        });
    });
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>