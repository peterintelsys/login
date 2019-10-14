<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page Title</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/base.css">
</head>

<body>


<div class="navi">
	<div id="companyname" style="font-size: 24px;">test</div>
	<div><a href="logout.php">Logga ut</a></div>
</div>



<div class="container">

<h1>Säker plats</h1>

<p>Välkommen <?php echo $auth->authName ?></p>

</div>

<script src="js/myjs.js"></script>
</body>
</html>