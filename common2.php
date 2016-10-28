<?php
/**
 * Created by PhpStorm.
 * User: Ben F
 * Date: 10/23/2016
 * Time: 1:46 PM
 * 
 */

$user = 'greenbutton';
$pass = 'greenbutton';
$db = new PDO('mysql:host=localhost;dbname=greenbutton', $user, $pass);
?>
    <table>
        <tr>
            <td class="name"><strong>Building Name</strong></td>
            <td class="total"><strong>Total Monthly Usage</strong></td>
            <td class="maxday"><strong>Max Day</strong></td>
            <td class="maxhour"><strong>Max Hour</strong></td>
        </tr>
<?php


$sql2 = "SELECT name";
$sql2.= "FROM schoolbuildings";

$i = 0;
