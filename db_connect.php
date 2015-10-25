<?php
$mysqli = new mysqli('localhost', 'root', 'Jade7369!', 'ju655443');  

<<<<<<< HEAD
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
=======
mysql_select_db("ju655443",$con);
>>>>>>> parent of 550560d... pagination working
?>