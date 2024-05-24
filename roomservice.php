<?php
require "settings/init.php";
?>

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
    <div class="row g-2">
        <div class="col-12">
            <img class="rounded-3 object-fit-cover mt-3" src="img/RS.webp" alt=""
                 style="height: 200px; width: 100%; object-position: 50% 58%;">
        </div>

        <!-- en php sætning der laver boxes hver gang drinktypeid skifter. Hvis det er for svært så lav 4 php sætninger -->


        <?php

        $sql = "SELECT * FROM drinks INNER JOIN drinktypes ON drinkType = typeId";
        $drinks = $db->sql($sql);

        $groupedDrinks = [];
        foreach ($drinks as $drink) {
            $groupedDrinks[$drink->typeName][] = $drink;

        }

        foreach ($groupedDrinks as $typeName => $drinks) {

        ?>

        <div class="col-6 mt-2 rounded-3 mb-1">
            <div class="bg-kasse text-hvid rounded-3">

                <p class="fs-3 text-hvid text-center overskrift pt-2"><?php echo $typeName; ?></p>

                <div class=" p-3">
                    <?php foreach ($drinks as $drink) { ?>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <p class="pris pe-2 mb-0"><?php echo $drink->drinkPrice?>,-</p>
                            <p class="mb-0"><?php echo $drink->drinkName?></p>
                        </div>
                        <div class="counter-container ms-3 d-flex">
                            <button class="btn bg-pink me-2 decrement">-</button>
                            <div class="ps-2 pe-2 text-center counter pt-2">0</div>
                            <button class="btn bg-pink ms-2 increment">+</button>
                        </div>
                    </div>

                    <?php } ?>

                </div>


            </div>
        </div>

        <?php
        }
        ?>




            <div class="mt-4 pt-1 ms-2 overskrift text-hvid fs-6 fw-semibold">
                <label for="room" class="form-label">Værelsesnummer</label>
                <input type="number" class="form-control" id="room" name="data[room]" placeholder="">

            </div>

            <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                <label for="name" class="form-label">Fulde navn</label>
                <input type="text" class="form-control" id="name" name="data[room]" placeholder="">
            </div>

            <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="data[room]" placeholder="">
            </div>

            <div class="form-check text-hvid overskrift fw-semibold fs-6 mt-4 ms-2 mb-1 fw-semibold">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Bekræft <a href="#" class="">handelsbetingelserne</a>
                </label>
            </div>



            <div class="d-flex justify-content-center mt-2 me-2">
                <div class="bg-navbar rounded-3 d-flex justify-content-center mt-2 me-2 text-center p-2">
                    <p class="my-auto text-hvid fw-medium px-2">399,00,-</p>
                </div>
                <input class="btn btn-text fs-3 mt-2 justify-content-center px-5" type="submit" value="Bestil">
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