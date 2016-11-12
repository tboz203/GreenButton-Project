<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Green Button Usage Comparisons</title>
	
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse">
	
<!-- navigation -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#home" class="navbar-brand smoothScroll"><img src= images/greenbutton.png atl = "GB" style="width:60px;height:60px;"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">Home</a></li>
				<li><a href="#service" class="smoothScroll">Log In</a></li>
				<li><a href="#about" class="smoothScroll">Your Usage Data</a></li>
				<li><a href="#team" class="smoothScroll">ULL Facility Usage</a></li>
				<li><a href="#portfolio" class="smoothScroll">Usage Comparisons by Zipcode</a></li>
			
			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6">
				<h2>Welcome to</h2>
				<h1><b>Green Button</b> Usage Comparisons</h1>
				<p>Here I will gloat about how awesome green button is </p>
				<a href="#service" class="btn btn-default smoothScroll">GET STARTED</a>
			</div>
		</div>
	</div>
</div>

<!-- login section -->
<div id="service">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>Log In</h2>
			</div> <center>
			Username: <input type="text" name="username"><br>
			<br>

			Password: <input type = "text" name="password"> </center>

			</div>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- Daily/Weekly/Monthly section -->
<div id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2>Your Usage Data</h2>

		</div>	
		</div>
	</div>
</div>
<div>
	<?php
	$user = 'greenbutton';
	$pass = 'greenbutton';
	$db = new PDO('mysql:host=localhost;dbname=greenbutton', $user, $pass);
	?>
	<center>
		<table id="ull">

			<tr>
				<td class="duration"><strong>Duration</strong></td>
				<td class="average"><strong>Average</strong></td>
				<td class="max"><strong>Max</strong></td>
				<td class="state"><strong>State Avg</strong></td>
				<td class="national"><strong>National Avg</strong></td>
				<td class="international"><strong>International Avg</strong></td>
				<td class="total"><strong>Total</strong></td>
			</tr>

			<?php


			$sql2 = "SELECT *";
			$sql2.= "FROM averages";

			$i = 0;

			foreach($db->query($sql2) as $row){
				echo "<tr><td class=\"duration\">";
				echo "Daily";
				echo "</td><td class=\"average\">";
				echo $row['avgday'];
				echo "</td><td class=\"max\">";
				echo $row['maxday'];
				echo "</td><td class=\"state\">";
				echo "42";
				echo "</td><td class=\"national\">";
				echo "30";
				echo "</td><td class=\"international\">";
				echo "8.6";
				echo "</td><td class=\"total\">";
				echo $row['total'];
				echo "</td></tr>";
				echo "<tr><td class=\"duration\">";
				echo "Weekly";
				echo "</td><td class=\"average\">";
				echo $row['avgweek'];
				echo "</td><td class=\"max\">";
				echo $row['maxweek'];
				echo "</td><td class=\"state\">";
				echo "313";
				echo "</td><td class=\"national\">";
				echo "226";
				echo "</td><td class=\"international\">";
				echo "65";
				echo "</td><td class=\"total\">";
				echo $row['total'];
				echo "</td></tr>";
				echo "<tr><td class=\"duration\">";
				echo "Monthly";
				echo "</td><td class=\"average\">";
				echo $row['avgmonth'];
				echo "</td><td class=\"max\">";
				echo $row['maxmonth'];
				echo "</td><td class=\"state\">";
				echo "1254";
				echo "</td><td class=\"national\">";
				echo "903";
				echo "</td><td class=\"international\">";
				echo "259";
				echo "</td><td class=\"total\">";
				echo $row['total'];
				echo "</td></tr>";

				$i++;
			}

			$dbh = null;
			?>

		</table>
	</center>
</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- team section -->
<div id="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<h2> ULL Facility Usage</h2>
			</div>

		</div>
	</div>
</div>
<div>
	<?php
	$user = 'greenbutton';
	$pass = 'greenbutton';
	$db = new PDO('mysql:host=localhost;dbname=greenbutton', $user, $pass);
	?>
	<center>
		<table id="ull">

			<tr>
				<td class="name"><strong>Building Name</strong></td>
				<td class="total"><strong>Total Monthly Usage</strong></td>
				<td class="maxday"><strong>Max Day</strong></td>
				<td class="maxhour"><strong>Max Hour</strong></td>
			</tr>

			<?php


			$sql2 = "SELECT *";
			$sql2.= "FROM schoolbuildings";

			$i = 0;

			foreach($db->query($sql2) as $row){
				echo "<tr><td class=\"name\">";
				echo $row['name'];
				echo "</td><td class=\"total\">";
				echo $row['total'];
				echo "</td><td class=\"maxday\">";
				echo $row['maxday'];
				echo "</td><td class=\"maxhour\">";
				echo $row['maxhour'];
				echo "</td></tr>";
				$i++;
			}

			$dbh = null;
			?>

		</table>
	</center>
</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- zipcode section -->
<div id="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="title">
					<h2>Usage Comparisons by Zipcode</h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div>
	<?php
	$user = 'greenbutton';
	$pass = 'greenbutton';
	$db = new PDO('mysql:host=localhost;dbname=greenbutton', $user, $pass);
	?>
	<img id="float" src= images/lafayette.gif atl = "zipcodes" style="width:40%;">
		<table id="zip" style="margin-left:20%;">

			<tr>
				<td class="zip"><strong>Lafayette Zipcode</strong></td>
				<td class="daily"><strong>Daily Average</strong></td>
				<td class="weekly"><strong>Weekly Average</strong></td>
				<td class="monthly"><strong>Monthly Average</strong></td>
			</tr>

			<?php


			$sql2 = "SELECT *";
			$sql2.= "FROM zipcodes";

			$i = 0;

			foreach($db->query($sql2) as $row){
				echo "<tr><td class=\"zip\">";
				echo $row['zip'];
				echo "</td><td class=\"daily\">";
				echo $row['daily'];
				echo "</td><td class=\"weekly\">";
				echo $row['weekly'];
				echo "</td><td class=\"monthly\">";
				echo $row['monthly'];
				echo "</td></tr>";
				$i++;
			}

			$dbh = null;
			?>

		</table>

</div>

<!-- divider section -->
<div class="container">
	<div class="row">
		<div class="col-md-1 col-sm-1"></div>
		<div class="col-md-10 col-sm-10">
			<hr>
		</div>
		<div class="col-md-1 col-sm-1"></div>
	</div>
</div>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<p>
                
                <a rel="nofollow" href="http://www.tooplate.com" target="_parent"></a></p>
			</div>
		</div>
	</div>
</div>

<!-- scrolltop section -->
<a href="#top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>