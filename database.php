<?php
$connect=mysqli_connect('localhost', 'taywhit', 'greenbutton', 'greenbutton');

if (mysqli_connect_errno($connect))
{
	echo 'Failed to connect';
}
?>