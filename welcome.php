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
 $users_password = $_GET['password'];
  $users_gender = $_GET['gender'];
  $users_email = $_GET['email'];
 $users_comments = $_GET['comments'];

 if ($users_fname && $users_lname)
  {
    mysql_query("INSERT INTO `user` (`fname`,`lname`,`passwd`,`gender`,`email`,`comments`) VALUES ('$users_fname','$users_lname','$users_password','$users_gender','$users_email','$users_comments')"); 
    //mysql_query("INSERT INTO `user` (`fname`,`lname`) VALUES ('$users_fname','$users_lname')");


    echo "Succesfully Registered!\r\n";





}
mysql_close($con);
  ?>
  <html>
 <head>
 <title></title>
 </head>
 <body>
 <b><br> <a href="project3.html" style="color:blue" font size="20px">HOME</a>
<center><button><p> <a href="showdb.php" style="color:blue" font size="10px" style="text-decoration:none">show database</p></button></center>
</body>
</html>
