<link href="css/styles.css" rel="stylesheet" type="text/css">

<nav class="navbar bg-navbar pt-4">
    <div class="d-flex m-2">
        <a href="index.php">
        <button class="btn me-2" type="button"><i class="pil fa-solid fa-arrow-left "></i>

        </button>
        </a>
    </div>

    <div class=" ps-5 ms-5">
        <div class="overskrift text-hvid fs-1">
        <?php
        if (!empty($_GET["navn"])){
            echo ($_GET["navn"]);

        }
        ?>
    </div>
    </div>

        <div class="d-flex justify-content-end m-2">
        <button class="btn btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#sprogModal"><i class="sprog fa-solid fa-globe"></i></button>
        <button class="btn btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#infoModal"><i class="info fa-solid fa-circle-info"></i></button>
        <button class="btn btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#helpModal"><i class="FAQ fa-solid fa-circle-question"></i></button>
        <a href="index.php"><img src="img/skaermlogo.webp" style="width: 45px; height: 45px;" class="p-1"></a>
        </div>

</nav>

<div class="modal fade" id="sprogModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Vælg sprog</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="" class="link-navbar">Dansk</a> <br>
                <a href="" class="link-navbar">English</a> <br>
                <a href="" class="link-navbar">Deutsch</a> <br>
                <a href="" class="link-navbar">Svenska</a> <br>
                <a href="" class="link-navbar">Suomi</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-navbar" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Information om skærmen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Her på skærmen kan du vælge det, du har lyst til at lave lige idag <br>
                Kontakt: <br>
                Tlf: +45 59 43 06 16
                Adresse: Kalundborgvej 58, 4300 Holbæk
                Mail: hotelstrandparken@vilcon.dk
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-navbar" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="helpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Brug for hjælp?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <a href="" class="link-navbar">How to change language</a> <br>
                <a href="" class="link-navbar">FAQ</a> <br>
                <a href="" class="link-navbar">Tilkald en medarbejder</a> <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-navbar" data-bs-dismiss="modal">Luk</button>
            </div>
        </div>
    </div>
</div>

<script src="https://kit.fontawesome.com/056ca3e665.js" crossorigin="anonymous"></script>