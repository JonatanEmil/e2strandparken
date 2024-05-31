<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $year = date("Y");
    $dato =  $data ["mDag"]; // Eksempel på dato i formatet dd-mm

// Split datoen op i dag og måned
    list($day, $month) = explode('/', $dato);

// Sammensæt år, måned og dag til formatet YYYY-mm-dd
    $newDate = sprintf('%04d-%02d-%02d', $year, $month, $day);

    $data ["mDag"] = $newDate; // Udskrift: 2024-05-21

    $sql = "INSERT INTO museum (mDag, mPerson, mNavn, mMail) VALUES(:mDag, :mPerson, :mNavn, :mMail)";
    $bind = [":mDag" => $data["mDag"], ":mPerson" => $data["mPerson"], ":mNavn" => $data["mNavn"], ":mMail" => $data["mMail"]];

    $db->sql($sql, $bind, false);

}
?>

<!-- referer til samme side ?(const)
 if const = url, lav modal
 -->

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Hotel Strandparken</title>

    <meta name="robots" content="none">
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
                <img class="rounded-3 object-fit-cover " src="img/museum.webp"
                     alt="Billede af to kvinder der kigger på kunst"
                     style="height: 400px; width: 100%; object-position: 50% 25%;">
            </div>
            <div class="col-12 rounded-3 bg-kasse mt-2 p-3 pb-1">
                <p class="text-hvid">
                    På Holbæk Museum, Museum Vestsjælland, er der forskellige udstillinger og arrangementer man kan melde sig til.
                    Museet ligger blot 21 minutter væk på gåben eller 5 minutter i bil.
                <p class="fst-italic text-hvid">Entré pris: 60 kr. <p>
                </p>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-kasse rounded-3 mx-5 p-1 text-hvid text-center fs-1 overskrift2 fw-medium">
                Vælg dato
            </div>

            <form action="booking-museum.php?navn=Holbæk Museum&bestil=1" method="post">
                <div>
                    <div class="mt-2">
                        <div class="row g-2 text-center d-flex justify-content-center mt-2 mx-0 text-hvid"
                             id="time-buttons">
                        </div>
                    </div>
                </div>

                <div class="col-9 ms-5">
                    <input type="hidden" id="mDag" name="data[mDag]">
                    <div class="mt-3 ms-2 overskrift2 text-hvid fs-6 fw-semibold">
                        <label for="mPerson" class="form-label">Antal personer</label>
                        <input type="number" class="form-control" id="mPerson" name="data[mPerson]" placeholder="">

                    </div>

                    <div class="mt-2 ms-2 overskrift2 text-hvid fs-6 fw-semibold">
                        <label for="mNavn" class="form-label">Fulde navn</label>
                        <input type="text" class="form-control" id="mNavn" name="data[mNavn]" placeholder="">
                    </div>

                    <div class="mt-2 ms-2 overskrift2 text-hvid fs-6 fw-semibold">
                        <label for="mMail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mMail" name="data[mMail]" placeholder="">
                    </div>

                    <div class="form-check text-hvid overskrift2 fw-semibold fs-6 mt-4 ms-2 mb-1 fw-semibold">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Bekræft <a href="#" class="">handelsbetingelserne</a>
                        </label>
                    </div>


                    <div class="d-flex justify-content-center mt-2 me-2">
                        <input class="btn btn-text fs-3 mt-2 justify-content-center px-5" type="submit" value="Bestil">
                    </div>

                </div>
            </form>

        </div>

    </div>
</div>
<?php include "bestilmodal.php" ?>
<script src="bestilmodal.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const timeButtonsContainer = document.getElementById('time-buttons');
    let selectedButton = null;

    function formatDate(date) {
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        return `${day}/${month}`;
    }

    const today = new Date();
    for (let i = 0; i < 12; i++) {
        const button = document.createElement('div');
        button.type = 'div';
        button.classList.add('col-2', 'border', 'mb-2', 'mx-2', 'border-hvid', 'bg-gron', 'rounded-3');
        button.textContent = formatDate(new Date(today.getFullYear(), today.getMonth(), today.getDate() + i));
        button.onclick = () => {
            if (selectedButton) {
                selectedButton.classList.remove('bg-danger');
                selectedButton.classList.add('bg-gron');
            }
            button.classList.remove('bg-gron');
            button.classList.add('bg-danger');
            selectedButton = button;
            document.getElementById('mDag').value = button.textContent;
        };
        timeButtonsContainer.appendChild(button);

        // Insert line break after every 4 buttons
        if ((i + 1) % 4 === 0) {
            timeButtonsContainer.appendChild(document.createElement('br'));
        }
    }
</script>


</body>
</html>

