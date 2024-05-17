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
    <div class="row d-flex align-items-center">
        <div class="col-6">
            <div>
                <div class="col-12 fs-1 text-center">
                    <span id="todayTemp">0</span><span>&#8451;</span>
                </div>
                <div class="col-12 fs-1 text-center">
                    <div id="clock"></div>
                </div>
            </div>
        </div>
        <div class="col-6">

            <div class="col-4">
                <div class="square bg-danger">
                    <div class="sqcontent">

                    </div>

                </div>
            </div>

        </div>
            <div class="row g-2">
            <?php
            $produkter = $db->sql("SELECT * FROM diamanter");
             foreach ($produkter as $produkt) {
                 ?>
                 <div class="col-4">
                     <div class="card w-100">
                         <div class="card-header">
                             <?php
                            echo $produkt->diamantNavn;
            ?>
                        </div>
                        <div class="card-body">
                            <?php
            // Indsæt andet felt fra database
            ?>
                        </div>
                        <div class="card-footer text-muted">
                            <?php
            // Indsæt andet felt fra database
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


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vejr.js"></script>
<script src="tid.js"></script>
</body>
</html>
