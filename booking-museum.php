<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO museum (mDag, mPerson, mNavn, mMail) VALUES(:mDag, :mPerson, :mNavn, :mMail)";
    $bind = [":mDag" => $data["mDag"], ":mPerson" => $data["mPerson"], ":mNavn" => $data["mNavn"], ":mMail" => $data["mMail"]];

    $db->sql($sql, $bind, false);

    echo "Din tid er nu Booket. <a href='booking-museum.php'>Book en tid mere <a/>";
    exit;
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
                <img class="rounded-3 object-fit-cover " src="img/museum.webp" alt=""
                     style="height: 400px; width: 100%; object-position: 50% 25%;">
            </div>
            <div class="col-12 rounded-3 bg-kasse mt-2 p-3">
                <p class="text-hvid">
                    Både hotellet og golfbanen ligger i naturskønne omgivelser med udsigt over fjorden, og derfor er en
                    tur på golfbanen hos os særligt attraktivt.
                    Holbæk Golfklub ligger blot 10 minutter fra vores hotel, så når du har spist dig mæt i vores lækre
                    morgenmadsbuffet, er der ikke langt til, at du står på banen.
                </p>
            </div>
        </div>
        <div class="col-6">
            <div class="bg-kasse rounded-3 mx-5 p-1 text-hvid text-center fs-1 overskrift fw-semibold">
                Ledige tider
            </div>

            <form action="booking-museum.php" method="post">
                <div>
                    <div class="mt-2">
                        <div class="row g-2 text-center d-flex justify-content-center mt-2 mx-0 text-hvid"
                             id="time-buttons">
                        </div>
                    </div>
                </div>

                <div class="col-9 ms-5">
                    <input type="hidden" id="mDag" name="data[mDag]">
                    <div class="mt-3 ms-2 overskrift text-hvid fs-6 fw-semibold">
                        <label for="gPersons" class="form-label">Antal personer</label>
                        <input type="number" class="form-control" id="gPersons" name="data[gPersons]" placeholder="">

                    </div>

                    <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                        <label for="mNavn" class="form-label">Fulde navn</label>
                        <input type="text" class="form-control" id="mNavn" name="data[mNavn]" placeholder="">
                    </div>

                    <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                        <label for="mMail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="mMail" name="data[mMail]" placeholder="">
                    </div>

                    <div class="form-check text-hvid overskrift fw-semibold fs-6 mt-4 ms-2 mb-1 fw-semibold">
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
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const timeButtonsContainer = document.getElementById('time-buttons');
    let selectedButton = null;

    function formatDate(date) {
        const day = String(date.getDate()).padStart(2, '0');
        const month = String(date.getMonth() + 1).padStart(2, '0');
        return `${day}-${month}`;
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
