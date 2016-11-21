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
			<a href="index.php" class="btn btn-default smoothScroll"><img src= images/greenbutton.png atl = "GB" style="width:50px;height:50px;"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" class="smoothScroll">Home</a></li>
                <li><a href="help.php" class="smoothScroll">Help</a></li>
                <li><a href="upload.php" class="smoothScroll">Step 1: Upload</a></li>
                <li><a href="table.php" class="smoothScroll">Step 2: Energy Saving Tips</a></li>
				<li><a href="table2.php" class="smoothScroll">Step 3: Home Comparisons</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- home section -->




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
<div class="container">
    <div class="row">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-10 col-sm-10">
            <hr>
        </div>
        <div class="col-md-1 col-sm-1"></div>
    </div>
</div>

<!-- Tips section -->
<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h2>Home Comparison Form</h2>
                    </div>

                  <p style="font-size:18pt; font-weight:bold;"> Fill out this information about your home to see energy bill comparisons to a similar house and to an energy efficient house</p>
                          
                        



<form action="graph2.php" method="post">
				<center>
					<fieldset><legend>Home Information Form</legend>

						
						<label><strong>Zipcode:</strong></label>
						<select name="zipcode">
						<option value = "1">70501</option>
							<option value = "2">70503</option>
							<option value = "3">70506</option>
							<option value = "4">70507</option>
							<option value = "5">70508<option>
						</select>
						<br>
						<label><strong>House Square Footage:</strong></label>
						<select name="squarefootage">
							<option value = "1">0-1000</option>
							<option value = "2">1000-2000</option>
							<option value = "3">2000-3000</option>
							<option value = "4"> Over 3000</option>
						</select>

						<br/>


						<label><strong>Cooling System:</strong></label>
						<select name="cooling">
						<option value = "1">Central AC</option>
						<option value = "2">In-Window AC</option>
						<option value = "3">No AC</option>
						</select> <br>

						<label><strong>Year built:</strong></label>
						<select name="age">
						<option value = "1">1970s or earlier</option>
						<option value = "2">1980s</option>
						<option value = "3">1990s</option>
						<option value = "4">2000 or later</option>
						</select> <br>
					<input type="submit" value="See Comparisons">
					</fieldset>
			</center>
			</form>
			
	
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
<div id="service">
<br>
<br>
<br>

</div>
<div id="charts">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
				<center>
                    <h2></h2>
					</center>
                  </div>
				 
	
			</div>
		</div>
	</div>	
</div>



<!-- zipcode section -->


<!-- scrolltop section -->

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
