
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
foreach ($xml->xpath('root:entry/root:content/espi:IntervalBlock') as $interval_block) {
	/* echo "I found <pre>" . htmlspecialchars($interval_block->asXML()) . "</pre><br>"; */
	$interval_block->registerXPathNamespace("espi", "http://naesb.org/espi");
	$total = 0;
	foreach ($interval_block->xpath('espi:IntervalReading/espi:value') as $value) {
		/* echo htmlspecialchars($value) . "<br>"; */
		$total = $total + $value;
		$maintotal= $maintotal + $total;
	}
	echo "got total $total!<br>";
}
echo "Main total is $maintotal<br>";
$KWH= $maintotal/1000/60;
$cost=($KWH*.08);
echo "KW/H is $KWH<br>";
echo "Cost is $cost";


$_POST['$cost'] = '$cost';


//header("Location: table.php");
//die();
?>