<?php
$con = mysql_connect("sulley.cah.ucf.edu","ju655443","Jade7369!");
if (!$con) {
die("Can not Connect: " . mysql_error());
}

mysql_select_db("ju655443",$con);
?>