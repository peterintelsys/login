<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login system</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/base.css">
</head>

<body>


<div class="navi">
	<div id="companyname" style="font-size: 24px;">test</div>
	<div>test</div>
</div>



<div class="container">

<div style="width:50%; margin:0 auto;">
<h1>Logga in</h1>
<p></p>
<form method="POST" action="">
	
<label>Email <?php echo $auth->inputnameError;?></label>
<input type="text" name="email">
<label>Password <?php echo $auth->inputpasswordError;?></label>
<input type="password" name="password">
<button type="submit" class="btn">Logga in</button>

</form>



</div>

<script src="js/myjs.js"></script>
</body>
</html>