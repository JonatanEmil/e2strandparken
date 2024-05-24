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
        <button class="btn btn-sm" type="button"><i class="sprog fa-solid fa-globe"></i></button>
        <button class="btn btn-sm" type="button"><i class="info fa-solid fa-circle-info"></i></button>
        <button class="btn btn-sm" type="button"><i class="FAQ fa-solid fa-circle-question"></i></button>
        </div>

</nav>

<script src="https://kit.fontawesome.com/056ca3e665.js" crossorigin="anonymous"></script>