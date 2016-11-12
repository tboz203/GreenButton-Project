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
	
	

?>
    google.charts.load("current", {packages:["corechart"]});
	google.charts.setOnLoadCallback(drawChart2);
	
   
  function drawChart2() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Amount", { role: "style" } ],
        ["Your Bill",<?="$cost"?> , "red"],
        ["70501", 89, "green"],
        ["70503", 110, "blue"],
		["70506", 107, "yellow"],
		["70507", 83, "orange"],
		["70508", 95, "purple"],
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
      }
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values2"));
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


<!-- team section -->



<div id="charts">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
				<br>
				<br>
				<center>
				<br>
                    <h2>Zipcode Comparisons</h2>
					</center>
                  </div>
				 
	<center>

	
	
	<div id="barchart_values2" style="width: 900px; height: 300px;"></div>
	<br>
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
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
    <h2>Energy Usage Comparisons by Zipcode</h2>
                </div>
    <?php


//mysqli_query($connect"INSERT INTO tablename(zip_code, sq_foot, cool_sys) VALUES('$zip_code', $sq_foot', '$cool_sys')");

    $user = 'greenbutton';
    $pass = 'greenbutton';
    $db = new PDO('mysql:host=localhost;dbname=greenbutton', $user, $pass);
    ?>
    
    <img id="float" src= images/zipcodes2.jpg atl = "zipcodes" style="width:40%;">
    <table id="zip">

        <tr>
            <td class="zip"><strong>Lafayette Zipcode</strong></td>
            <td class="daily"><strong>Daily Average $</strong></td>
            <td class="weekly"><strong>Weekly Average $</strong></td>
            <td class="monthly"><strong>Monthly Average $</strong></td>
            <td class="rooms"><strong>Average # of Household Rooms</strong></td>
            <td class="size"><strong>Average Size of House (Sq/Ft)</strong></td>
        </tr>

        <?php


        $sql2 = "SELECT *";
        $sql2.= "FROM zipcodes";

        $i = 0;

        foreach($db->query($sql2) as $row){
            echo "<tr><td class=\"zip\">";
            echo $row['zip'];
            echo "</td><td class=\"daily\">";
            echo $row['daily']*.08;
            echo "</td><td class=\"weekly\">";
            echo $row['weekly']*.08;
            echo "</td><td class=\"monthly\">";
            echo $row['monthly']*.08;
            echo "</td><td class=\"rooms\">";
            echo $row['rooms'];
            echo "</td><td class=\"size\">";
            echo $row['size'];
            echo "</td></tr>";
            $i++;
        }

        $dbh = null;
        ?>

    </table>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
	

</div
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
