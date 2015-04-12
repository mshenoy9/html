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
 
 if ( isset( $_GET['SUBMIT'] ) ) { 
  $users_fname = $_GET['fname'];
  $users_lname = $_GET['lname'];

 if ($users_fname && $users_lname)
  {
    mysql_query("INSERT INTO `user` (`fname`,`lname`) VALUES ('$users_fname','$users_lname')"); 
    echo "Succesfully Registered!\r\n";
  }


}
mysql_close($db);
  ?>
  <html>
 <head>
 <title>Step 2</title>
 </head>
 <body>
 <br><br> <a href="insertdb.html" style="color:blue"font size="10"style="text-decoration:none">HOME</a>
 <a href="showdb.php" style="color:blue"font size="10"style="text-decoration:none">Show Database </a>
</body>
</html>
