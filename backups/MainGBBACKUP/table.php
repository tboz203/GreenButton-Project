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
            <a href="index.php" class="navbar-brand smoothScroll"><img src= images/greenbutton.png atl = "GB" style="width:60px;height:60px;"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php" class="smoothScroll">Home</a></li>
                <li><a href="index.php" class="smoothScroll">Energy Saving Form</a></li>
                <li><a href="#portfolio" class="smoothScroll">Money Saving Tips</a></li>
                <li><a href="#about" class="smoothScroll">Zipcode Comparisons</a></li>

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
                    <img src= images/greenenergy.jpg atl = "GB" style="width:50%;height:50%;float:left;"></a>
                    <?php
                    $bill=$_POST['bill'];
                    $zipcode=$_POST['zipcode'];
                    $squarefootage=$_POST['squarefootage'];
                    $cooling=$_POST['cooling'];
                    $coolingnum="";
                    $squarefootagenum="";
                    $totalnum="";

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

                    if ($cooling==1) {
                        $coolingnum=40;
                    }
                    elseif ($cooling==2){
                        $coolingnum=20;
                    }
                    else{
                        $coolingnum=5;
                    }
                    $totalnum=($coolingnum+$squarefootagenum);

                    ?>
                   
                    <table id="zip">
						 <center>
                        <tr>
                            <td class="zip"><strong>Category:</strong></td>
                            <td class="daily"><strong>Amount:</strong></td>
                        </tr>
                        <tr><td>Current Bill</td>
                            <td>$<?="$bill"?></td></tr>
                        <tr><td>Average Bill of Similar House</td>
                            <td>$<?="$totalnum"?></td></tr>
                        <tr><td>Bill with 50% EnergyStar Products</td>
                        <td>$<?="$bill"*.9?></td></tr>
                        <tr><td>Bill with all EnergyStar Products</td>
                        <td>$<?="$bill"*.8?></td></tr>
                        <tr><td>Bill While Lowering the Thermostat 5 Deg. 8 Hours a Day</td>
                        <td>$<?="$bill"*.75?></td></tr>
                        <tr><td>Bill While Lowering the Thermostat 10 Deg. 8 Hours a Day</td>
                        <td>$<?="$bill"*.65?></td></tr>
						
                        </table>
                        <center>
<br>

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
