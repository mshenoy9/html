<html>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"> 
<body>
<?php
    session_start();
    echo "Chapter number is " . $_SESSION["chapter_id"] . ".<br>";
    echo "shloka number is " . $_SESSION["shloka_id"] . ".<br>";
    $chapter_no = $_SESSION["chapter_id"];
	$shloka_no = $_SESSION["shloka_id"];
    
        /* Connecting to database */
    $con = mysql_connect("127.0.0.1","root","manju");

        /* Check if connected */ 
    if (!$con)	{
      	die('Could not connect: ' . mysql_error());
    } 
    
        /* Displaying connected message*/     
    //echo "Succesfully Connected!<br/>";
    
        /* selecting database */
    $db_select = mysql_select_db("bhagavat_database",$con);
    
        /* check if database selected */
    if (!$db_select)	{
  	    die("Database selection also failed miserably: " . mysql_error());
    }
   // else    {
        /* Displaying debug message*/     
      //  echo "Database Succesfully Selected!<br/>";
   // }
    
        /* check if submit button clicked */
    if ( isset( $_GET['submit'] ) ) 	{ 
        $shloka = $_GET['shloka'];
        /* Displaying debug message*/     
      //  echo "Submit Button recognized!<br/>";
   }
   // else    {
        /* Displaying debug message*/     
     //   echo "Submit button not recognized!<br/>";   
   // }
       
        /* check shlokano and chapterno clicked*/   
 	if ($chapter_no && $shloka_no )     {
        $id=(($chapter_no-1)*100+$shloka_no);
        echo"id= $id<br>";
    }             	
    else    { 
        /* Displaying debug message*/ 
        echo "please select chapterno and shlokano!<br/>";        	
    }
     
     /* check if shloka entered */
    if ($shloka)  {
        /* inserting data into table(bhagavat) */
        mysql_query("UPDATE bhagavat SET chapterno = '$chapter_no' , shlokano = '$shloka_no' , shloka = '$shloka'  WHERE id = '$id';");
        //echo "Shloka = $shloka<br/>";
        echo "Succesfully Registered!<br/>";
    }
    else    {
        /* check successfully entered*/     
        echo "Not registered!<br/>";  
    } 
       
    $result = mysql_query("SELECT *  FROM bhagavat", $con);
    if (!$result) {
        die("Database query failed: " . mysql_error());
    }
        echo '<font size="6"'."face='chandas'>";
        echo "Shloka = $shloka<br/>";
    
        /* php ends here */
mysql_close($con);
?>
</body>
</html>
