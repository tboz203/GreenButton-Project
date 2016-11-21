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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
<?php
	session_start();
	$cost=$_SESSION['cost'];
	$cost=intval($cost);
	
	$zipcode=$_POST['zipcode'];
    $squarefootage=$_POST['squarefootage'];
    $cooling=$_POST['cooling'];
	$age=$_POST['age'];
    $coolingnum="";
    $squarefootagenum="";
    $totalnum="";
	$agenum="";
	$similar="";
	$efficient="";

    if ($squarefootage==1) {
        $squarefootagenum=50;
     }
    elseif($squarefootage==2){
        $squarefootagenum=70;
    }
    elseif($squarefootage==3){
        $squarefootagenum=90; 
	}
    else{
		$squarefootagenum=120;
    }
	if ($age==1) {
        $agenum=20;
    }
    elseif($age==2){
        $agenum=15;
    }
    elseif($age==3){
        $agenum=10;
    }
    else{
		$agenum=0;
    }
	if ($cooling==1) {
        $coolingnum=40;
    }
    elseif ($cooling==2){
        $coolingnum=20;
    }
    else{
        $coolingnum=5;
    }
    $similar=($coolingnum+$squarefootagenum+$agenum);
	$efficient=($similar*.65);

?>
    google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart3);
   
 
  function drawChart3() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Amount", { role: "style" } ],
        ["Current Bill",<?="$cost"?> , "red"],
        ["Similar House", <?="$similar"?>, "yellow"],
        ["Efficient House", <?="$efficient"?>, "green"],
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
        width: "100%",
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("barchart_values3"));
      chart.draw(view, options);
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

<!-- home section -->





<!-- Tips section -->
<br>
<br>
<br>
<br>
<br>
<center>
<p style="font-size:18pt; font-weight:bold;"> Step 4: Zipcode Comparison Page <a href="zip.php">Click Here</a></p>   
<!-- divider section -->
</center>
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
				<br>
                    <h2>Similar and Efficient Home Comparison</h2>
					</center>
                  </div>
				 
	<center>

	
	<div id="barchart_values3" style="width: 100%; height: 300px;"></div>
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
