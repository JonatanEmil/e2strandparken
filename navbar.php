<link href="css/styles.css" rel="stylesheet" type="text/css">

<nav class="navbar bg-navbar">
    <div class="d-flex m-2">
        <a href="index.php">
        <button class="btn me-2" type="button"><i class="pil fa-solid fa-arrow-left "></i>

        </button>
        </a>
    </div>

    <div class="pt-4 ps-4">
        <?php
        /*
        // Get the current URL
        $currentUrl = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        // Parse the URL to get the path
        $urlPath = parse_url($currentUrl, PHP_URL_PATH);
        // Extract the filename from the URL path
        $filename = basename($urlPath, ".php");
        // Prepare the SQL query to fetch the diamantNavn based on the provided filename
        $sql = "SELECT diamantNavn FROM diamanter WHERE diamantUrl = ?";
        $stmt = $db->sql($sql);
        $stmt->bindParam(1, $filename, PDO::PARAM_STR);
        $stmt->execute();

        // Fetch the result
        $diamant = $stmt->fetch(PDO::FETCH_OBJ);

        // Check if a result is returned
        if ($diamant) {
            $diamantNavn = $diamant->diamantNavn;
        }
        echo $diamant->diamantNavn;
        */
        /*$sqlAdd = "";
        $bind = [];
        if (!empty($_GET["diamantUrl"])) {
        $sqlAdd = " AND diamantUrl = :diamantUrl";
        $bind["diamantUrl"] = $_GET["diamantUrl"];
}
        $sql = "SELECT * FROM diamanter WHERE diamantUrl = url $sqlAdd";
        $diamanter = $db->sql($sql, $bind);
        foreach ($diamanter as $diamant){
            if (!empty($_GET["diamantUrl"])){
        ?>
        <p class="navover"> <?php echo $diamant->diamantNavn ?> </p>
        <?php
        }
        }*/
        ?>
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