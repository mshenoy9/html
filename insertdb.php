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

 
  mysql_query("INSERT INTO `user` (`fname`,`lname`) VALUES ('$users_fname','$users_lname')"); 
  
  echo "Succesfully Registered!";
}
  ?>

<html>
 <head>
 <title>Step 2</title>
 </head>
 <body>

<form NAME ="form1" METHOD ="" ACTION = "">
	<h1>user form</h1>
 <TABLE BORDER="1">
  <TR>
    <TD>First name</TD>
    <TD>
      <INPUT TYPE="TEXT"VALUE =""  NAME="fname" SIZE="20">
    </TD>
  </TR>
  <TR>
    <TD>Last name</TD>
    <TD>
      <INPUT TYPE="TEXT"VALUE =""  NAME="lname" SIZE="20">
    </TD>
  </TR></TABLE>
<P><INPUT TYPE="SUBMIT" style="color:RED" VALUE="submit" NAME="SUBMIT"></P>

</FORM>

 </body>
</html>
<?php
//Step5
 mysql_close($db);
?>
 