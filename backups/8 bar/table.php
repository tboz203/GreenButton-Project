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
	
	$number=75;
	?>
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Amount", { role: "style" } ],
        ["Current Bill",<?="$number"?> , "red"],
        ["Savings", 15, "green"],
        ["New Bill", 45, "blue"],
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Your Energy Savings",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
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
            <a href="index.php" class="navbar-brand smoothScroll"><img src= images/greenbutton.png atl = "GB" style="width:60px;height:60px;"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" class="smoothScroll">Home</a></li>
                <li><a href="index.php" class="smoothScroll">Energy Saving Form</a></li>
                <li><a href="#portfolio" class="smoothScroll">Money Saving Tips</a></li>
                <li><a href="#about" class="smoothScroll">Zipcode Comparisons</a></li>
				<li><a href="#charts" class="smoothScroll">Comparison Charts</a></li>

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

<!-- zipcode section -->
<div id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h2>Money Saving Tips</h2>
                    </div>
 <?php
                    $bill = 60;
					
                  //  $cost=$_POST['cost'];
					$es=$_POST["es"];
					$ac=$_POST["ac"];
					$savings=($es+$ac);
					$newbill=($bill-$savings);

                    
                    ?>
                   
                    <table id="zip">
						 <center>
                        <tr>
                            <td class="zip"><strong>Category:</strong></td>
                            <td class="daily"><strong>Amount:</strong></td>
                        </tr>
                        <tr><td>Current Bill</td>
                            <td>$<?="$bill"?></td></tr>
                        <tr><td>Savings</td>
                            <td>$<?="$savings"?></td></tr>
							<tr><td>New bill after savings</td>
                            <td>$<?="$newbill"?></td></tr>
                        </table>
                        </center>
<br>



<form action="table.php" method="post">
				<center>
					<fieldset><legend>Energy Saving Tips Selector</legend>

						
						<label><strong>Using EnergyStar Products:</strong></label>
						<label><input name="es" type="radio"  value="0" checked="checked"/>Using no EnergyStar products</label>
						<label><input name="es" type="radio"  value="20" />Using half Energystar products</label>
						<label><input name="es" type="radio"  value="35" />Using all Energystar products</label>

						<br/>

						<label><strong>Lowering your thermostat 8hrs a day:</strong></label>
						<label><input name="ac" type="radio"  value="0" checked="checked"/>Not lowering thermostat</label>
						<label><input name="ac" type="radio"  value="20" />Lowering thermostat 5 degrees</label>
						<label><input name="ac" type="radio"  value="40" />Lowering thermostat 10 degrees</label>
						<br>
					<input type="submit" value="Update Saving Techniques">
					</fieldset>
			</center>
			</form>
			
			<p><b>Share Your Results on Social Media</b> <a href="http://www.facebook.com"><img src=images/fb.jpeg atl = "FaceBook" style="width:60px;height:60px;"></a>
    <a href="http://www.twitter.com"><img src=images/twitter.jpeg atl = "Twitter" style="width:60px;height:60px;"></a>
    <a href="http://www.instagram.com"><img src=images/instagram.jpg atl = "Instagram" style="width:60px;height:60px;"></a>
</p>
            </div>
        </div>
    </div>
</div>
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
                    <h2>Comparison Charts</h2>
                  </div>
				  <image src='../images/zipchart.png'alt='zipchart' style='width:50%;'>
				  <image src='../images/savings.png'alt='zipchart' style='width:50%;float:right;'>
	
<div id="barchart_values" style="width: 900px; height: 300px;"></div>
				  
				  
			</div>
		</div>
	</div>	
</div>

<!-- copyright section -->


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
