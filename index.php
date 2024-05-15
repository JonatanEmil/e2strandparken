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

<body>

<div class="row">
    <div class="col-6">
        <div class="col-4 fs-1 text-end">
            <span id="todayTemp">0</span> <span>&#8451;</span>
        </div>
    </div>
    <div class="col-6">

    </div>
</div>

<div class="row g-2">
	<?php
	$produkter = $db->sql("SELECT * FROM test");
	foreach($produkter as $produkt) {
		?>
		<div class="col-12 col-md-6">
			<div class="card w-100">
				<div class="card-header">
					<?php
					echo $produkt->prodNavn;
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

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="vejr.js"></script>
</body>
</html>
