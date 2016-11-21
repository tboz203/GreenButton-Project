<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <!-- Open Graph meta tags -->
        <meta property="og:title" content="<?= urldecode($_GET['title']) ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?= "http://www.calsots.com".$_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:image" content="<?= $_GET['image'] ?>" />
        <meta property="og:site_name" content="Calsots.com" />
        <meta property="fb:admins" content="MY_APP_ID" />
        <meta property="og:description" content="<?= urldecode($_GET['description']) ?>" />


    <title>Green Button Usage Comparisons</title>

    <!-- stylesheet css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/nivo_themes/default/default.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- google web font css -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
<?php
	session_start();
	
	$mon0t=$_SESSION['mon0t'];
	$mon1t=$_SESSION['mon1t'];
	$mon2t=$_SESSION['mon2t'];
	$mon3t=$_SESSION['mon3t'];
	$mon4t=$_SESSION['mon4t'];
	$mon5t=$_SESSION['mon5t'];
	$mon6t=$_SESSION['mon6t'];
	$mon7t=$_SESSION['mon7t'];
	$mon8t=$_SESSION['mon8t'];
	$mon9t=$_SESSION['mon9t'];
	$mon10t=$_SESSION['mon10t'];
	$mon11t=$_SESSION['mon11t'];
	$mon12t=$_SESSION['mon12t'];
	$mon13t=$_SESSION['mon13t'];
	$mon14t=$_SESSION['mon14t'];
	$mon15t=$_SESSION['mon15t'];
	$mon16t=$_SESSION['mon16t'];
	$mon17t=$_SESSION['mon17t'];
	$mon18t=$_SESSION['mon18t'];
	$mon19t=$_SESSION['mon19t'];
	$mon20t=$_SESSION['mon20t'];
	$mon21t=$_SESSION['mon21t'];
	$mon22t=$_SESSION['mon22t'];
	$mon23t=$_SESSION['mon23t'];

	
	
	
?>
    google.charts.load("current", {packages:["corechart"]});
   
	google.charts.setOnLoadCallback(drawChart3);
    
	  function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Hour', ' Monday Average'],
          ['12am', <?="$mon0t"?>],
          ['1am', <?="$mon1t"?>],
          ['2am', <?="$mon2t"?>],
          ['3am', <?="$mon3t"?>],
		  ['4am', <?="$mon4t"?>],
		  ['5am', <?="$mon5t"?>],
		  ['6am', <?="$mon6t"?>],
		  ['7am', <?="$mon7t"?>],
		  ['8am', <?="$mon8t"?>],
		  ['9am', <?="$mon9t"?>],
		  ['10am', <?="$mon10t"?>],
		  ['11am', <?="$mon11t"?>],
		  ['12pm', <?="$mon12t"?>],
		  ['1pm', <?="$mon13t"?>],
		  ['2pm', <?="$mon14t"?>],
		  ['3pm', <?="$mon15t"?>],
		  ['4pm', <?="$mon16t"?>],
		  ['5pm', <?="$mon17t"?>],
		  ['6pm', <?="$mon18t"?>],
		  ['7pm', <?="$mon19t"?>],
		  ['8pm', <?="$mon20t"?>],
		  ['9pm', <?="$mon21t"?>],
		  ['10pm', <?="$mon22t"?>],
		  ['11pm', <?="$mon23t"?>],
		  
		 
        ]);

        var options = {
          title: '',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart2'));

        chart.draw(data, options);
      }

  
  </script>
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


<!-- Tips section -->
<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h2></h2>
                    </div>

                
                     <p style="font-size:18pt; font-weight:bold;"> Step 3: Home Comparisons Page <a href="table2.php">Click Here</a></p>   




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

<div id="charts">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
				<center>
                    <h2>Energy Savings Graph</h2>
					</center>
                  </div>
				 
	<center>

	
	<div id="curve_chart2" style="width: 1200px; height: 600px;"></div>
	
	<br>
	<br>
	<br>
	<a href="monday.php">Monday</a>
	<p><b>Share Your Results on Social Media</b> <br>
	<a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-text="Check out these energy saving tips!" data-hashtags="greenbutton" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

	<div class="fb-share-button" data-href="http://localhost/index.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2Findex.php&amp;src=sdkpreparse">Share</a></div>
	</p>
	<br>
	<br>
	
				  </center>
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
