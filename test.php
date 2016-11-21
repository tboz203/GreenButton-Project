
<<?php
/* $target_dir = "uploads/"; */
/* $target_file = "$target_dir" . basename($_FILES["fileToUpload"]["name"]); */
/* echo $_FILES; */
/* echo $_FILES["fileToUpload"]; */
/* echo $_FILES["fileToUpload"]["tmp_name"]; */
/* if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { */
/* 	echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded."; */
/* } else { */
/* 	echo "did not work :("; */
/* } */
$filetype = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
if ($filetype != "xml") {
	die("not an xml file!");
} else {
	echo "looks like xml to me!<br>";
}
/* echo $_FILES["fileToUpload"]["tmp_name"] . "<br>"; */
$raw_content = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
$xml = simplexml_load_string($raw_content);
if ($xml === false) {
	die("nothing here?");
} else {
	echo "we got a thing!<br>";
}
/* foreach ( $xml->getNamespaces(false) as $thing) { */
/* 	echo "namespace $thing <br>"; */
/* } */
$maintotal=0;
$xml->registerXPathNamespace("root", "http://www.w3.org/2005/Atom");
$xml->registerXPathNamespace("xsi", "http://www.w3.org/2001/XMLSchema-instance");
$xml->registerXPathNamespace("espi", "http://naesb.org/espi");
$count=0;
$weekcounter=1;
$daytotal=0;
$montotal=0;
$tuetotal=0;
$wedtotal=0;
$thutotal=0;
$fritotal=0;
$sattotal=0;
$suntotal=0;
$monday=0;
$tuesday=0;
$wednesday=0;
$thursday=0;
$friday=0;
$saturday=0;
$sunday=0;
$moncount=0;
$tuecount=0;
$wedcount=0;
$thucount=0;
$fricount=0;
$satcount=0;
$suncount=0;


$mincounter=0;
$hourtotal=0;
$hcounter=0;
$weekarray = array();
$dayarray = array();
$monarray = array();
$tuearray=array();
$wedarray=array();
$thuarray=array();
$friarray=array();
$satarray=array();
$sunarray=array();

foreach ($xml->xpath('root:entry/root:content/espi:IntervalBlock') as $interval_block) {
	/* echo "I found <pre>" . htmlspecialchars($interval_block->asXML()) . "</pre><br>"; */
	$interval_block->registerXPathNamespace("espi", "http://naesb.org/espi");
	$total = 0;
	foreach ($interval_block->xpath('espi:IntervalReading/espi:value') as $value) {
		/* echo htmlspecialchars($value) . "<br>"; */
		$total = $total + $value;
		$maintotal= $maintotal + $total;
		
		$mincounter=1+$mincounter;
		$hourtotal= $value + $hourtotal;
		if ($mincounter==4) {
			$dayarray[]= $hourtotal;
			$hourtotal=0;
			$mincounter=0;
			
		}
		
	}
	$count=$count+1;
	
	$daytotal=$total;
	if ($count==1){
		$montotal=$montotal+$total;
		$monarray[]=$dayarray;
		$moncount=$moncount+1;
	}
	elseif ($count==2){
		$tuetotal=$tuetotal+$total;
		$tuecount=$tuecount+1;
		$tuearray[]=$dayarray;
	}
	elseif ($count==3){
		$wedtotal=$wedtotal+$total;
		$wedcount=$wedcount+1;
		$wedarray[]=$dayarray;
	}
	elseif ($count==4){
		$thutotal=$thutotal+$total;
		$thucount=$thucount+1;
		$thuarray[]=$dayarray;
	}
	elseif ($count==5){
		$fritotal=$fritotal+$total;
		$fricount=$fricount+1;
		$friarray[]=$dayarray;
	}
	elseif ($count==6){
		$sattotal=$sattotal+$total;
		$satcount=$satcount+1;
		$satarray[]=$dayarray;
	}
	else{
		$suntotal=$suntotal+$total;
		$suncount=$suncount+1;
		$count=0;
		$weekcounter = $weekcounter + 1;
		$sunarray[]=$dayarray;
	}
	$dayarray = array();
	echo "got total $total!<br>";
}
echo "Main total is $maintotal<br>";
$KWH= $maintotal/1000/60;
$cost=($KWH*.08);
echo "KW/H is $KWH<br>";
echo "Cost is $cost<br>";

$montotal=($montotal/1000);
$tuetotal=($tuetotal/1000);
$wedtotal=($wedtotal/1000);
$thutotal=($thutotal/1000);
$fritotal=($fritotal/1000);
$sattotal=($sattotal/1000);
$suntotal=($suntotal/1000);

$monday=$montotal/$moncount;
$tuesday=$tuetotal/$tuecount;
$wednesday=$wedtotal/$wedcount;
$thursday=$thutotal/$thucount;
$friday=$fritotal/$fricount;
$saturday=$sattotal/$satcount;
$sunday=$suntotal/$suncount;

$time=0;
$i=0;
$monzerot=0;

$keys = array_keys($monarray);
for($i = 0; $i < count($monarray); $i++) {
    
    foreach($monarray[$keys[$i]] as $key => $value) {
        if ($key==0) {
			$mon0t = $value + $mon0t;
		}
		elseif ($key==1) {
			$mon1t = $value + $mon1t;
		}
		elseif ($key==2) {
			$mon2t = $value + $mon2t;
		}
		elseif ($key==3) {
			$mon3t = $value + $mon3t;
		}
		elseif ($key==4) {
			$mon4t = $value + $mon4t;
		}
		elseif ($key==5) {
			$mon5t = $value + $mon5t;
		}
        elseif ($key==6) {
			$mon6t = $value + $mon6t;
		}
		elseif ($key==7) {
			$mon7t = $value + $mon7t;
		}
		elseif ($key==8) {
			$mon8t = $value + $mon8t;
		}
		elseif ($key==9) {
			$mon9t = $value + $mon9t;
		}
		elseif ($key==10) {
			$mon10t = $value + $mon10t;
		}
		elseif ($key==11) {
			$mon11t = $value + $mon11t;
		}
		elseif ($key==12) {
			$mon12t = $value + $mon12t;
		}
		elseif ($key==13) {
			$mon13t = $value + $mon13t;
		}
		elseif ($key==14) {
			$mon14t = $value + $mon14t;
		}
		elseif ($key==15) {
			$mon15t = $value + $mon15t;
		}
		elseif ($key==16) {
			$mon16t = $value + $mon16t;
		}
		elseif ($key==17) {
			$mon17t = $value + $mon17t;
		}
		elseif ($key==18) {
			$mon18t = $value + $mon18t;
		}
		elseif ($key==19) {
			$mon19t = $value + $mon19t;
		}
		elseif ($key==20) {
			$mon20t = $value + $mon20t;
		}
		elseif ($key==21) {
			$mon21t = $value + $mon21t;
		}
		elseif ($key==22) {
			$mon22t = $value + $mon22t;
		}
		elseif ($key==23) {
			$mon23t = $value + $mon23t;
		}
	}		
}




$mon0t=$mon0t/$moncount/1000/24;
$mon1t=$mon1t/$moncount/1000/24;
$mon2t=$mon2t/$moncount/1000/24;
$mon3t=$mon3t/$moncount/1000/24;
$mon4t=$mon4t/$moncount/1000/24;
$mon5t=$mon5t/$moncount/1000/24;
$mon6t=$mon6t/$moncount/1000/24;
$mon7t=$mon7t/$moncount/1000/24;
$mon8t=$mon8t/$moncount/1000/24;
$mon9t=$mon9t/$moncount/1000/24;
$mon10t=$mon10t/$moncount/1000/24;
$mon11t=$mon11t/$moncount/1000/24;
$mon12t=$mon12t/$moncount/1000/24;
$mon13t=$mon13t/$moncount/1000/24;
$mon14t=$mon14t/$moncount/1000/24;
$mon15t=$mon15t/$moncount/1000/24;
$mon16t=$mon16t/$moncount/1000/24;
$mon17t=$mon17t/$moncount/1000/24;
$mon18t=$mon18t/$moncount/1000/24;
$mon19t=$mon19t/$moncount/1000/24;
$mon20t=$mon20t/$moncount/1000/24;
$mon21t=$mon21t/$moncount/1000/24;
$mon22t=$mon22t/$moncount/1000/24;
$mon23t=$mon23t/$moncount/1000/24;




//$_POST['$cost'] = '$cost';

session_start();
$_SESSION['cost']=$cost;
$_SESSION['monday']=$monday;
$_SESSION['tuesday']=$tuesday;
$_SESSION['wednesday']=$wednesday;
$_SESSION['thursday']=$thursday;
$_SESSION['friday']=$friday;
$_SESSION['saturday']=$saturday;
$_SESSION['sunday']=$sunday;
$_SESSION['week']=$weekarray;
$_SESSION['mon']=$monarray;
$_SESSION['tue']=$tuearray;
$_SESSION['wed']=$wedarray;
$_SESSION['thu']=$thuarray;
$_SESSION['fri']=$friarray;
$_SESSION['sat']=$satarray;
$_SESSION['sun']=$sunarray;

$_SESSION['mon0t']=$mon0t;
$_SESSION['mon1t']=$mon1t;
$_SESSION['mon2t']=$mon2t;
$_SESSION['mon3t']=$mon3t;
$_SESSION['mon4t']=$mon4t;
$_SESSION['mon5t']=$mon5t;
$_SESSION['mon6t']=$mon6t;
$_SESSION['mon7t']=$mon7t;
$_SESSION['mon8t']=$mon8t;
$_SESSION['mon9t']=$mon9t;
$_SESSION['mon10t']=$mon10t;
$_SESSION['mon11t']=$mon11t;
$_SESSION['mon12t']=$mon12t;
$_SESSION['mon13t']=$mon13t;
$_SESSION['mon14t']=$mon14t;
$_SESSION['mon15t']=$mon15t;
$_SESSION['mon16t']=$mon16t;
$_SESSION['mon17t']=$mon17t;
$_SESSION['mon18t']=$mon18t;
$_SESSION['mon19t']=$mon19t;
$_SESSION['mon20t']=$mon20t;
$_SESSION['mon21t']=$mon21t;
$_SESSION['mon22t']=$mon22t;
$_SESSION['mon23t']=$mon23t;


header("Location: table.php");
//die();
?>