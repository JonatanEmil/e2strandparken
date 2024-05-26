<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO roomservice (rsRoom, rsName, rsMail) VALUES(:rsRoom, :rsName, :rsMail)";
    $bind = [":rsRoom" => $data["rsRoom"], ":rsName" => $data["rsName"], ":rsMail" => $data["rsMail"]];

    $db->sql($sql, $bind, false);

    echo "<a href='#'><a/>";
    exit;
}
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


        <!--/*php

        $sql = "SELECT * FROM drinks INNER JOIN drinktypes ON drinkType = typeId";
        $drinks = $db->sql($sql);

        $groupedDrinks = [];
        foreach ($drinks as $drink) {
            $groupedDrinks[$drink->typeName][] = $drink;

        }

        foreach ($groupedDrinks as $typeName => $drinks) {

        */-->

        <div class="col-4 mt-2 rounded-3 mb-1">
            <div class="bg-kasse text-hvid rounded-3">
                <?php
                $sql = "SELECT * FROM drinks INNER JOIN drinktypes ON drinkType = typeId WHERE typeId = 1";
                $drinks = $db->sql($sql);
                // Assuming $drinks is an array or an iterable object
                if (!empty($drinks)) {
                    // Get the type name from the first drink
                    $typeName = $drinks[0]->typeName;
                } else {
                    $typeName = "Unknown Type"; // Default value in case there are no drinks
                }
                ?>
                <p class="fs-3 text-hvid text-center overskrift pt-2 mb-0"><?php echo $typeName; ?></p>

                <div class=" p-3">
                    <?php foreach ($drinks as $drink) { ?>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center col-8 justify-content-start">
                                <p class="pris pe-2 mb-0"><?php echo $drink->drinkPrice ?>,-</p>
                                <p class="mb-0"><?php echo $drink->drinkName ?></p>
                            </div>
                            <div class="counter-container ms-3 d-flex col-4 justify-content-end">
                                <button class="btn bg-pink me-2 decrement"  data-price="<?php echo $drink->drinkPrice ?>">-</button>
                                <div class="ps-2 pe-2 text-center counter pt-2">0</div>
                                <button class="btn bg-pink ms-2 increment"  data-price="<?php echo $drink->drinkPrice ?>">+</button>
                            </div>
                        </div>

                    <?php } ?>

                </div>


            </div>
        </div>

        <?php
        //}
        ?>
        <div class="col-4 mt-2 rounded-3 mb-1">
            <div class="bg-kasse text-hvid rounded-3">
                <?php
                $sql = "SELECT * FROM drinks INNER JOIN drinktypes ON drinkType = typeId WHERE typeId = 2";
                $drinks = $db->sql($sql);
                // Assuming $drinks is an array or an iterable object
                if (!empty($drinks)) {
                    // Get the type name from the first drink
                    $typeName = $drinks[1]->typeName;
                } else {
                    $typeName = "Unknown Type"; // Default value in case there are no drinks
                }
                ?>
                <p class="fs-3 text-hvid text-center overskrift pt-2 mb-0"><?php echo $typeName; ?></p>

                <div class=" p-3">
                    <?php foreach ($drinks as $drink) { ?>
                        <div class="d-flex  align-items-center mb-3">
                            <div class="d-flex align-items-center col-8 justify-content-start">
                                <p class="pris pe-2 mb-0"><?php echo $drink->drinkPrice ?>,-</p>
                                <p class="mb-0"><?php echo $drink->drinkName ?></p>
                            </div>
                            <div class="counter-container ms-3 d-flex col-4 justify-content-end">
                                <button class="btn bg-pink me-2 decrement"  data-price="<?php echo $drink->drinkPrice ?>">-</button>
                                <div class="ps-2 pe-2 text-center counter pt-2">0</div>
                                <button class="btn bg-pink ms-2 increment"  data-price="<?php echo $drink->drinkPrice ?>">+</button>
                            </div>
                        </div>

                    <?php } ?>

                </div>


            </div>
            <div class="bg-kasse text-hvid rounded-3 mt-2">
                <?php
                $sql = "SELECT * FROM drinks INNER JOIN drinktypes ON drinkType = typeId WHERE typeId = 3";
                $drinks = $db->sql($sql);
                // Assuming $drinks is an array or an iterable object
                if (!empty($drinks)) {
                    // Get the type name from the first drink
                    $typeName = $drinks[2]->typeName;
                } else {
                    $typeName = "Unknown Type"; // Default value in case there are no drinks
                }
                ?>
                <p class="fs-3 text-hvid text-center overskrift pt-2 mb-0"><?php echo $typeName; ?></p>

                <div class=" p-3 pb-2 ">
                    <?php foreach ($drinks as $drink) { ?>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center col-8 justify-content-start">
                                <p class="pris pe-2 mb-0"><?php echo $drink->drinkPrice ?>,-</p>
                                <p class="mb-0"><?php echo $drink->drinkName ?></p>
                            </div>
                            <div class="counter-container ms-3 d-flex col-4 justify-content-end">
                                <button class="btn bg-pink me-2 decrement" data-price="<?php echo $drink->drinkPrice ?>">-</button>
                                <div class="ps-2 pe-2 text-center counter pt-2">0</div>
                                <button class="btn bg-pink ms-2 increment"  data-price="<?php echo $drink->drinkPrice ?>">+</button>
                            </div>
                        </div>

                    <?php } ?>

                </div>


            </div>
        </div>
        <div class="col-4 mt-2 rounded-3 mb-1 pb-">
            <div class="bg-kasse text-hvid rounded-3">
                <?php
                $sql = "SELECT * FROM drinks INNER JOIN drinktypes ON drinkType = typeId WHERE typeId = 4";
                $drinks = $db->sql($sql);
                // Assuming $drinks is an array or an iterable object
                if (!empty($drinks)) {
                    // Get the type name from the first drink
                    $typeName = $drinks[3]->typeName;
                } else {
                    $typeName = "Unknown Type"; // Default value in case there are no drinks
                }
                ?>
                <p class="fs-3 text-hvid text-center overskrift pt-2 mb-0"><?php echo $typeName; ?></p>

                <div class=" p-3">
                    <?php foreach ($drinks as $drink) { ?>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center col-8 justify-content-start">
                                <p class="pris pe-2 mb-0"><?php echo $drink->drinkPrice ?>,-</p>
                                <p class="mb-0"><?php echo $drink->drinkName ?></p>
                            </div>
                            <div class="counter-container ms-3 d-flex col-4 justify-content-end">
                                <button class="btn bg-pink me-2 decrement" data-price="<?php echo $drink->drinkPrice ?>" >-</button>
                                <div class="ps-2 pe-2 text-center counter pt-2">0</div>
                                <button class="btn bg-pink ms-2 increment" data-price="<?php echo $drink->drinkPrice ?>">+</button>
                            </div>
                        </div>

                    <?php } ?>

                </div>


            </div>


            <div class="mt-4 pt-1 ms-2 overskrift text-hvid fs-6 fw-semibold">
                <label for="rsRoom" class="form-label">Værelsesnummer</label>
                <input type="number" class="form-control" id="rsRoom" name="data[rsRoom]" placeholder="">

            </div>

            <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                <label for="rsName" class="form-label">Fulde navn</label>
                <input type="text" class="form-control" id="rsName" name="data[rsName]" placeholder="">
            </div>

            <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                <label for="rsMail" class="form-label">Email</label>
                <input type="email" class="form-control" id="rsMail" name="data[rsMail]" placeholder="">
            </div>

            <div class="form-check text-hvid overskrift fw-semibold fs-6 mt-4 ms-2 mb-1 fw-semibold">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Bekræft <a href="#" class="">handelsbetingelserne</a>
                </label>
            </div>


            <div class="d-flex justify-content-center mt-2 me-2">
                <div class="bg-navbar rounded-3 d-flex justify-content-center mt-2 me-2 text-center p-2">
                    <p class="my-auto text-hvid fw-medium px-2" id="subtotal" >0,00,-</p>
                </div>
                <input class="btn btn-text fs-3 mt-2 justify-content-center px-5" type="submit" value="Bestil">
            </div>


        </div>
    </div>
</div>

<script>

    // Function to update subtotal
    function updateSubtotal() {
        let subtotal = 0;
        document.querySelectorAll('.counter-container').forEach(container => {
            const count = parseInt(container.querySelector('.counter').textContent);
            const price = parseFloat(container.querySelector('.increment').getAttribute('data-price'));
            subtotal += count * price;
        });
        document.getElementById('subtotal').textContent = `${subtotal.toFixed(2)},-`;
    }

    // Add event listeners to all increment and decrement buttons
    document.querySelectorAll('.increment').forEach(button => {
        button.addEventListener('click', function () {
            const counterElement = this.previousElementSibling;
            let count = parseInt(counterElement.textContent);
            counterElement.textContent = count + 1;
            updateSubtotal();
        });
    });

    document.querySelectorAll('.decrement').forEach(button => {
        button.addEventListener('click', function () {
            const counterElement = this.nextElementSibling;
            let count = parseInt(counterElement.textContent);
            if (count > 0) {
                counterElement.textContent = count - 1;
            }
            updateSubtotal();
        });
    });

    // Tilføj event listeners til alle increment og decrement knapper
  /*  document.querySelectorAll('.increment').forEach(button => {
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

   */
</script>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>