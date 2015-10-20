<?php
$con = mysql_connect("50.62.209.123","GoKnightsBitch","Knights4321!");
if (!$con) {
die("Can not Connect: " . mysql_error());
}

mysql_select_db("ju655443",$con);
?>