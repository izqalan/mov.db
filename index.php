<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mov.db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
	<div class="navbar">
		<a href="index.html">
			<img src="src/logow.png" height="30" alt="mov.db logo" width="100" >
		</a>
		<ul >
			<li><a href="index.html">Home</a></li>
			<li><a href="list.html">Lists</a></li>
			<li><a href="about.html">About us</a></li>
		</ul>
	</div>
	<!-- content -->
	<section>
		<form class="animated zoomIn big-search" id="searchForm" action="index.php" method="post">
			<input class="search" id="searchText" type="search" name="search" placeholder="search database">
			<input class="submit" type="submit" name="subbtn" value="search">
		</form>
	</section>
	<div class="container">
		<div id="movies" class="row">
			
		</div>
	</div>


	<!-- end content -->
	<footer class="footer">
		<p>test</p>
	</footer>
	<script
	src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="js/main.js"></script>

</body>
</html>