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
<body data-spy="scroll" data-target=".navbar-collapse" style="background-image:greenenergy2.jpeg;">
	
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
				<li><a href="#service" class="smoothScroll">Energy Saving Form</a></li>
				<li><a href="#portfolio" class="smoothScroll">Money Saving Tips</a></li>
				<li><a href="#about" class="smoothScroll">Zipcode Comparisons</a></li>

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
				<p>This site provides money saving tips on energy usage and lets you compare with neighbors</p>
				<a href="#service" class="btn btn-default smoothScroll">GET STARTED</a>
			</div>
		</div>
	</div>
</div>

<!-- login section -->
<div id="service">

			<form action="table.php" method="post">
				<center>
					<fieldset><legend>Energy Saving Comparison Form:</legend>


						<label><strong>Energy Bill Amount:</strong></label>
						<input name="bill" type="text"  size="12"/>

						<br/>

						<label><strong>Zipcode:</strong></label>
						<input name="zipcode" type="text"  size="25" maxlength="5"/>

						<br/>

						<label><strong>House Square Footage:</strong></label>
						<select name="squarefootage">
							<option value = "1">0-1000</option>
							<option value = "2">1000-2000</option>
							<option value = "3">2000-3000</option>
							<option value = "4"> Over 3000</option>
						</select>

						<br/>


						<label><strong>Your Cooling System:</strong></label>
						<select name="cooling">
						<option value = "1">Central AC</option>
						<option value = "2">In-Window AC</option>
						<option value = "3">No AC</option>
						</select> <br>

						<input type="submit" value="Check Comparisons">
					</fieldset>
			</center>
			</form>
	
</div>


<!-- Daily/Weekly/Monthly section -->

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


<!-- divider section -->


<!-- zipcode section -->


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