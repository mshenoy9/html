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
 echo $row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." ".$row[6]."<br />";
 }


mysql_close($con);
  ?>
  <html>
  <head>
  </head>
  <BODY><h1><a href="project3.html" style="color:blue"font size="10"style="text-decoration:none">HOME</a></h1>
  </BODY>
  </html>