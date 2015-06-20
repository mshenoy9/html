<html>
                
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
	    
	<body>
<h1 align="center"> BHAGAVAT-GITA</h1>
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
 
    $result = mysql_query("SELECT * FROM doc_test", $con);
 if (!$result) {
 die("Database query failed: " . mysql_error());

 }
echo '<font size="6"'."face='chandas'>";
//Step4
//	<font face="chandas" color="green">This is some text!</font>
 while ($row = mysql_fetch_array($result)) {


 echo $row[0]." ".$row[1]."<br>";  
 }


mysql_close($con);
  ?>

		
        </body>
</html>
