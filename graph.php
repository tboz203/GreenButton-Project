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
	$cost=$_SESSION['cost'];
	$mon=$_SESSION['monday'];
	$tue=$_SESSION['tuesday'];
	$wed=$_SESSION['wednesday'];
	$thu=$_SESSION['thursday'];
	$fri=$_SESSION['friday'];
	$sat=$_SESSION['saturday'];
	$sun=$_SESSION['sunday'];
	$cost=intval($cost);
	$es=$_POST["es"];
	$ac=$_POST["ac"];
	$wi=$_POST["wi"];
	if ($es==null and $ac==null and $wi==null){
		$savingsnumber=0;
	}else {
	$savingsnumber=($es+$ac+$wi);
	}
	$savings=$cost*$savingsnumber;
	$newbill=($cost-$savings);
	$ratio=($newbill/$cost);
	$newmon=($ratio*$mon);
	$newtue=($ratio*$tue);
	$newwed=($ratio*$wed);
	$newthu=($ratio*$thu);
	$newfri=($ratio*$fri);
	$newsat=($ratio*$sat);
	$newsun=($ratio*$sun);
	
	
?>
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawChart2);
	google.charts.setOnLoadCallback(drawChart3);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Amount", { role: "style" } ],
        ["Current Bill",<?="$cost"?> , "red"],
        ["Savings", <?="$savings"?>, "green"],
        ["New Bill", <?="$newbill"?>, "blue"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  
      function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Amount", { role: "style" } ],
        ["Monday",<?="$mon"?> , "red"],
        ["Tuesday", <?="$tue"?>, "red"],
        ["Wednesday", <?="$wed"?>, "red"],
		["Thursday", <?="$thu"?>, "red"],
		["Friday", <?="$fri"?>, "red"],
		["Saturday", <?="$sat"?>, "red"],
		["Sunday", <?="$sun"?>, "red"],
		["Monday",<?="$newmon"?> , "green"],
        ["Tuesday", <?="$newtue"?>, "green"],
        ["Wednesday", <?="$newwed"?>, "green"],
		["Thursday", <?="$newthu"?>, "green"],
		["Friday", <?="$newfri"?>, "green"],
		["Saturday", <?="$newsat"?>, "green"],
		["Sunday", <?="$newsun"?>, "green"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "",
        width: 1000,
        height: 750,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.LineChart(document.getElementById("barchart_values2"));
      chart.draw(view, options);
  }
  
  function drawChart3() {
        var data = google.visualization.arrayToDataTable([
          ['Day', ' Current Average', 'Savings Average'],
          ['Monday',  <?="$mon"?>,      <?="$newmon"?>],
          ['Tuesday',  <?="$tue"?>,      <?="$newtue"?>],
          ['Wednesday',  <?="$wed"?>,       <?="$newwed"?>],
          ['Thursday',  <?="$thu"?>,      <?="$newthu"?>],
		  ['Friday',  <?="$fri"?>,      <?="$newfri"?>],
		  ['Saturday',  <?="$sat"?>,      <?="$newsat"?>],
		  ['Sunday',  <?="$sun"?>,      <?="$newsun"?>],
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

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

	<div id="barchart_values" style="width: 900px; height: 300px;"></div>
	
	<br>
	<br>
	<br>
	<br>
	
<div id="barchart_values2" style="width: 1200px; height: 600px;"></div>
	<br>
	<br>
	<br>
	
	<div id="curve_chart" style="width: 1200px; height: 600px;"></div>
	
	<br>
	<br>
	<br>
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
