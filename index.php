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
    <div class="row d-flex align-items-center text-hvid fw-semibold" style="height: 768px;">
        <div class="col-6">
            <div class="row d-flex">
                <div class="col-9 display-2 text-end fw-semibold">
                    <div id="clock"></div>
                </div>
                <div class="w-100"></div>
                <div class="col-7 display-2 text-end fw-semibold">
                    <span id="todayTemp">0</span><span class="fs-3">    &#8451;</span>
                </div>
                <div class=" col-2 justify-content-start">
                    <img src="weaImg/0.png" id="todayWeatherIcon" class="img-fluid" alt="Vejr ikon">
                </div>
            </div>
        </div>



        <div class="col-6">
            <div class="position-relative">
                <img class="img-fluid" src="img/diamant.webp" alt="">
                <div class="row position-absolute d-flex justify-content-center dtext text-center">
                    <div class="col-12 mb-5"><a href="booking-golf.php" class="link-hvid">Book <br> Golf</a></div>
                    <div class="col-5 ms-4 ps-5 my-4 pb-2"><a href="booking-blossom.php" class="link-hvid">Restaurant <br> Blossom</a></div>
                    <div class="col-5 pe-5 me-4 my-4 pb-2"><a href="" class="link-hvid">Forlæng <br> Ophold</a></div>
                    <div class="col-4 my-5 pb-2"><a href="roomservice.php" class="link-hvid">Room <br> Service</a></div>
                    <div class="col-4 my-5 pb-2"><a href="" class="link-hvid"><i class="fa-solid fa-play"></i></a></div>
                    <div class="col-4 my-5 pb-2"><a href="arrangementer.php" class="link-hvid">Arrangementer</a></div>
                    <div class="col-5 my-2 ms-4 ps-5"><a href="oplevomraadet.php" class="link-hvid">Oplev <br> området</a></div>
                    <div class="col-5 my-2 pe-5 me-4"><a href="" class="link-hvid">Book <br> en cykeltur</a></div>
                    <div class="col-12 mt-5"><a href="" class="link-hvid">Book <br> museums <br> besøg</a></div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/056ca3e665.js" crossorigin="anonymous"></script>
<script src="vejr.js"></script>
<script src="tid.js"></script>
</body>
</html>