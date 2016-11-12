
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

foreach ($xml->xpath('root:entry/root:content/espi:IntervalBlock') as $interval_block) {
	/* echo "I found <pre>" . htmlspecialchars($interval_block->asXML()) . "</pre><br>"; */
	$interval_block->registerXPathNamespace("espi", "http://naesb.org/espi");
	$total = 0;
	foreach ($interval_block->xpath('espi:IntervalReading/espi:value') as $value) {
		/* echo htmlspecialchars($value) . "<br>"; */
		$total = $total + $value;
		$maintotal= $maintotal + $total;
		
		
	}
	$count=$count+1;
	
	$daytotal=$total;
	if ($count==1){
		$montotal=$montotal+$total;
		$moncount=$moncount+1;
	}
	elseif ($count==2){
		$tuetotal=$tuetotal+$total;
		$tuecount=$tuecount+1;
	}
	elseif ($count==3){
		$wedtotal=$wedtotal+$total;
		$wedcount=$wedcount+1;
	}
	elseif ($count==4){
		$thutotal=$thutotal+$total;
		$thucount=$thucount+1;
	}
	elseif ($count==5){
		$fritotal=$fritotal+$total;
		$fricount=$fricount+1;
	}
	elseif ($count==6){
		$sattotal=$sattotal+$total;
		$satcount=$satcount+1;
	}
	else{
		$suntotal=$suntotal+$total;
		$suncount=$suncount+1;
		$count=0;
		$weekcounter = $weekcounter + 1;
	}
	echo "got total $total!<br>";
}
echo "Main total is $maintotal<br>";
$KWH= $maintotal/1000/60;
$cost=($KWH*.08);
echo "KW/H is $KWH<br>";
echo "Cost is $cost";

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


header("Location: table.php");
//die();
?>