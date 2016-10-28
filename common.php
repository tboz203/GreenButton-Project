<?php
/**
 * Created by PhpStorm.
 * User: Ben F
 * Date: 10/22/2016
 * Time: 11:56 PM
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


            $sql2 = "SELECT *";
            $sql2.= "FROM schoolbuildings";

            $i = 0;

            foreach($db->query($sql2) as $row){
                echo "<tr><td class=\"name\">";
                echo $row['name'];
                echo "</td><td class=\"total\">";
                echo $row['total'];
                echo "</td><td class=\"maxday\">";
                echo $row['maxday'];
                echo "</td><td class=\"maxhour\">"; 
                echo $row['maxhour'];
                echo "</td></tr>";
                $i++;
            }

            $dbh = null;
            ?>

</table>