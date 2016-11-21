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
                    <h2>Energy Saving Tips Form</h2>
                    </div>
					
<?php
	session_start();
	$cost=$_SESSION['cost'];
	$cost=intval($cost);

	
?>
   

                  <p style="font-size:18pt; font-weight:bold;"> Your current bill is $<?="$cost"?><br>
				  Choose from the energy saving tips below to see how much they lower your bill.
                          
                        



<form action="graph.php" method="post">
				<center>
					<fieldset><legend>Energy Saving Tips</legend>

						
						<label><strong>Using EnergyStar Products:</strong></label>
						<select name="es">
							<option value = "0">Using none</option>
							<option value = ".1">Using 50%</option>
							<option value = ".2">Using 100%</option>
						</select>

						<br>

						<label><strong>Lowering your A/C 8 hrs a day:</strong></label>
						<select name="ac">
							<option value = "0">Not lowering</option>
							<option value = ".15">Lowering 5 Degrees</option>
							<option value = ".25">Lowering 10 Degrees</option>
						</select>

						<br>
						
						<label><strong>Lowering your window unit 8 hrs a day:</strong></label>
						<select name="wi">
							<option value = "0">Not lowering</option>
							<option value = ".1">Lowering 5 Degrees</option>
							<option value = ".2">Lowering 10 Degrees</option>
						</select>
						<br>
						
					
					<input type="submit" value="See Savings">
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





<!-- zipcode section -->
<div id="service">
<br>
<br>
<br>

</div>
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
