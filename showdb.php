<?php

  $con = mysql_connect("127.0.0.1","root","manju");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

   $db_select = mysql_select_db("website_database",$con);
  if (!$db_select) {
  die("Database selection also failed miserably: " . mysql_error());
  }
 
 
    $result = mysql_query("SELECT * FROM user", $con);
 if (!$result) {
 die("Database query failed: " . mysql_error());
 }
//Step4
 while ($row = mysql_fetch_array($result)) {
 echo $row[0]." ".$row[1]." <br />";
 }


mysql_close($db);
  ?>