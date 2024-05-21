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
<div class="container">
    <div class="row d-flex align-items-center" style="height: 768px;">
        <div class="col-6">
            <div class="row d-flex">
                <div class="col-7 fs-1 text-end">
                    <div id="clock"></div>
                </div>
                <div class="w-100"></div>
                <div class="col-7 fs-1 text-end">
                    <span id="todayTemp">0</span><span>&#8451; C</span>
                </div>
                <div class=" col-2 justify-content-start">
                    <img src="weaImg/0.png" id="todayWeatherIcon" class="img-fluid" alt="Vejr ikon">
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="diamond">
            <div class="row g-2">
                <?php
                $produkter = $db->sql("SELECT * FROM diamanter");
                foreach ($produkter as $produkt) {
                ?>
            <div class="col-4">
                <div class="d-flex">
                    <img src="img/golf.webp" alt="" class="img-fluid square">
                    <div class="sqcontent text-center">
                        <?php
                        echo $produkt->diamantNavn;
                        ?>
                    </div>

                </div>
            </div>
                    <?php
                }
                ?>
            </div>
            </div>
        </div>
        </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vejr.js"></script>
<script src="tid.js"></script>
</body>
</html>
