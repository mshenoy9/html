

<?php
    /* Connecting to database */
    $con = mysql_connect("127.0.0.1","root","manju");

    /* Check if connected */ 
    if (!$con)	{
      	die('Could not connect: ' . mysql_error());
    } 
    
    /* Displaying connected message*/     
    echo "Succesfully Connected!<br/>";
    
    /* selecting database */
    $db_select = mysql_select_db("bhagavat_database",$con);
    
    /* check if database selected */
    if (!$db_select)	{
  	    die("Database selection also failed miserably: " . mysql_error());
    }
    else    {
        /* Displaying debug message*/     
        echo "Database Succesfully Selected!<br/>";
    }
    
     /* check if submit button clicked */
    if ( isset( $_GET['submit'] ) )	{ 
        /* $chapter_no = $_GET['chapterno'];
	    $shloka_no = $_GET['shlokano'];*/
        $shloka = $_GET['shloka'];
        /* Displaying debug message*/     
        echo "Submit Button recognized!<br/>";
    }
    else    {
         /* Displaying debug message*/     
        echo "Submit button not recognized!<br/>";   
    }

 	/*if ($chapter_no && $shloka_no )*/
    
    /* check if shloka entered */
    if ($shloka)  {
        /* inserting data into table(bhagavat) */
        mysql_query("INSERT INTO `bhagavat` (`shloka`) VALUES ('$shloka')"); 
        echo "Shloka = $shloka<br/>";
        /* mysql_query("INSERT INTO `chapter1` (`chapterno`,`shlokano`,`shloka`) VALUES ('$chapter_no','$shloka_no','$shloka')"); */
        echo "Succesfully Registered!<br/>";
    }
    else    {
     /* check successfully entered*/     
        echo "Not registered!<br/>";  
    }   
    /* php ends here */
    mysql_close($con);
?>
