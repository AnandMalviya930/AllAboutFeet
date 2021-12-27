<!DOCTYPE html>
<html>
	<head>
		<title>Login to AllAboutFeet</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
                <link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
		<?php
			require './includes/header.php';
		?>
        <div class="container panel-margin">
            <div class="alert alert-success">
                You have successfully logged out. Click <a href="index.php">here</a> to go back to index page.
            </div>
        </div>
		<?php
			require './includes/footer.php';
		?>
	</body>
</html>