<?php
require "settings/init.php";

if (!empty($_POST["data"])) {
    $data = $_POST["data"];

    $sql = "INSERT INTO golfbooking (gTid, gPersons, gNavn, gMail) VALUES(:gTid, :gPersons, :gNavn, :gMail)";
    $bind = [":gTid" => $data["gTid"], ":gPersons" => $data["gPersons"], ":gNavn" => $data["gNavn"], ":gMail" => $data["gMail"]];

    $db->sql($sql, $bind, false);

    echo "Din tid er nu Booket. <a href='booking-golf.php'>Book en tid mere <a/>";
    exit;
}

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
                <img class="rounded-3 object-fit-cover " src="img/golf.webp" alt=""
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
            <div class="bg-kasse rounded-3 mx-5 p-1 text-hvid text-center fs-1 overskrift">
                Ledige tider
            </div>

            <form action="booking.php" method="post">
                <div>
                    <div class="mt-2">
                        <div class="row g-2 text-center d-flex justify-content-center mt-2 mx-5 text-hvid"
                             id="time-buttons">
                        </div>
                    </div>
                </div>

                <div class="col-9 ms-5">
                    <input type="hidden" id="gTid" name="data[gTid]">
                    <div class="mt-3 ms-2 overskrift text-hvid fs-6 fw-semibold">
                        <label for="gPersons" class="form-label">Antal personer</label>
                        <input type="number" class="form-control" id="gPersons" name="data[gPersons]" placeholder="">

                    </div>

                    <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                        <label for="gNavn" class="form-label">Fulde navn</label>
                        <input type="text" class="form-control" id="gNavn" name="data[gNavn]" placeholder="">
                    </div>

                    <div class="mt-2 ms-2 overskrift text-hvid fs-6 fw-semibold">
                        <label for="gMail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="gMail" name="data[gMail]" placeholder="">
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

    function pad(num) {
        return String(num).padStart(2, '0');
    }

    function getNextQuarterHour(date) {
        const minutes = date.getMinutes();
        const nextQuarterHour = Math.ceil(minutes / 15) * 15;
        if (nextQuarterHour === 60) {
            date.setHours(date.getHours() + 1);
            date.setMinutes(0);
        } else {
            date.setMinutes(nextQuarterHour);
        }
        date.setSeconds(0);
        return date;
    }

    const now = new Date();
    const startTime = getNextQuarterHour(new Date(now));

    for (let i = 0; i < 12; i++) {
        const button = document.createElement('div');
        button.type = 'div';
        button.classList.add('col-2', 'border', 'mb-2', 'mx-2', 'border-hvid', 'bg-gron', 'rounded-3');
        button.textContent = `${pad(startTime.getHours())}:${pad(startTime.getMinutes())}`;
        button.onclick = () => {
            if (selectedButton) {
                selectedButton.classList.remove('bg-danger'); // Remove danger color from previously selected button
                selectedButton.classList.add('bg-gron');
            }
            button.classList.remove('bg-gron');
            button.classList.add('bg-danger'); // Add danger color to the clicked button
            selectedButton = button;
            document.getElementById('gTid').value = button.textContent;
        };
        timeButtonsContainer.appendChild(button);
        startTime.setMinutes(startTime.getMinutes() + 15);

        // Insert line break after every 4 buttons
        if ((i + 1) % 4 === 0) {
            timeButtonsContainer.appendChild(document.createElement('br'));
        }
    }
</script>

</body>
</html>
