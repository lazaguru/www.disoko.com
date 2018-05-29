<!DOCTYPE html>
<html lang="en">
	<head>

		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>www.disoko.com</title>
		<meta name="generator" content="product listing" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
</head>
	<body>
<?php 
require("navbar.php");
 ?>

<form class="form-inline" role="form">
<div class="form-group col-md-6">
<label for="b_name">Enter business name:</label>
<input class="form-control" type="text" placeholder="business name"></input>
</div>
<div class="form-group">
<label for="b_descr">business description:</label>
<input type="texrarea" placeholder="describe business in 300 chars"</input></div>

<div class="form-group">
<label>add images</label>
<input type="input" value="browse"></input>

<button type="button" class="btn btn-danger">submit</button>
<button type="button" class="btn btn-warning">add products</button>
</form>

<!-- script references -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
		<script src="js/scripts.js"></script>
	
</body>
</html>