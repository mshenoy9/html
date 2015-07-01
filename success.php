<?php

  $con = mysql_connect("127.0.0.1","root","manju");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

   $db_select = mysql_select_db("bhagavat_database",$con);
  if (!$db_select) {
  die("Database selection also failed miserably: " . mysql_error());
  }
 
 if ( isset( $_GET['submit'] ) ) { 
  $chapter_no = $_GET['chapterno'];
  $shloka_no = $_GET['shlokano'];
 $shloka = $_GET['shloka'];
  
 if ($chapter_no && $shloka_no )
  {
    mysql_query("INSERT INTO `chapter1` (`chapterno`,`shlokano`,`shloka`) VALUES ('$chapter_no','$shloka_no','$shloka')"); 
    


    echo "Succesfully Registered!\r\n";





}
mysql_close($con);
  ?>
