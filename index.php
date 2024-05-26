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
    <div class="row d-flex align-items-center text-hvid fw-semibold" style="height: 768px;"> <!-- Align-items-center centrerer vertikalt (y-aksen) -->
        <div class="col-6">
            <div class="row d-flex">
                <div class="col-9 display-2 text-end fw-semibold"> <!-- display er tekst størrelser. text-end er alt tekst i slut a element. fw=font weight -->
                    <div id="clock"></div> <!-- id der kaldes senere i Js -->
                </div>
                <div class="w-100"></div> <!-- fyld hele breden af elementet -->
                <div class="col-7 display-2 text-end fw-semibold">
                    <span id="todayTemp">0</span><span class="fs-3">    &#8451;</span>
                </div>
                <div class=" col-2 justify-content-start"> <!-- justify-content-start: alt i starten af elementet horisontalt (x-aksen) -->
                    <img src="weaImg/0.png" id="todayWeatherIcon" class="img-fluid" alt="Viser ikon for vejret lige nu">
                </div>
            </div>
        </div>



        <div class="col-6">
            <div class="position-relative"> <!-- position-relative: Denne plads er stadig gemt i dokumentet. Dens children er positioneret relativt til dette element nu med css.-->
                <img class="img-fluid" src="img/diamant.webp" alt=""> <!-- billede som baggrund pga svært at hardcode diamanterne -->
                <div class="row position-absolute d-flex justify-content-center dtext text-center"> <!-- postion-absolute: Denne plads er ikke gemt (ligesom et overlay). d-text er vores egen klasse (se styles.scss) -->
                    <div class="col-12 mb-5"><a href="booking-golf.php" class="link-hvid">Book <br> Golf</a></div> <!-- links der refererer til underside -->
                    <div class="col-5 ms-4 ps-5 my-4 pb-2"><a href="booking-blossom.php" class="link-hvid">Restaurant <br> Blossom</a></div>
                    <div class="col-5 pe-5 me-4 my-4 pb-2"><a href="forlaeng-ophold.php" class="link-hvid">Forlæng <br> Ophold</a></div>
                    <div class="col-4 my-5 pb-2"><a href="roomservice.php" class="link-hvid">Room <br> Service</a></div>
                    <div class="col-4 my-5 pb-2"><a href="" class="link-hvid" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-play"></i></a></div> <!-- link der refererer til modal (se modalvindue nederst) -->
                    <div class="col-4 my-5 pb-2"><a href="arrangementer.php" class="link-hvid">Arrangementer</a></div>
                    <div class="col-5 my-2 ms-4 ps-5"><a href="oplevomraadet.php" class="link-hvid">Oplev <br> området</a></div>
                    <div class="col-5 my-2 pe-5 me-4"><a href="booking-cykel.php" class="link-hvid">Book <br> en cykeltur</a></div>
                    <div class="col-12 mt-5"><a href="booking-museum.php" class="link-hvid">Book <br> museums <br> besøg</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Video der skulle kører her</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <video src=""></video>
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