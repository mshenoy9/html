<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<head>
<style>
body {
    background-color:orange;
    }
    .boxed {
      border: 3px solid gray ;
      background-color: lightgray;
      width: 40%;
    }
    @media screen and (max-width: 1000px) {
        body {background-color: white;}
             .boxed{width:100%;}
    }
</style>
</head>
<body>

    <?php
        $chapterno=$_GET['chapterno'] ; $shlokano=$_GET['shlokano'] ;
        session_start();
        $_SESSION["chapter_id"] = $chapterno; 
        $_SESSION["shloka_id"] = $shlokano; 
    ?>
    <div class="boxed">
    <table>
    <form NAME ="form1" METHOD ="GET" ACTION = "success.php">
    <TR>
        <TD>Enter the shloka: </TD>
        <TD><textarea name="shloka"value="shloka" cols="30" rows="12"></textarea></TD>
    </TR>
    </table>
    <center><P><INPUT TYPE="SUBMIT" style="color:RED" VALUE="submit" NAME="submit"></P></center><br>
    <p>chapter no and shloka no :</p>
 <?php echo $chapterno ." ".$shlokano;?>
 <hr>
</form>
  <?php
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
 //   else    {
        /* Displaying debug message*/     
 //       echo "Database Succesfully Selected!<br/>";
 //   }
        
        /* check shlokano and chapterno clicked*/   
 	if ($chapterno && $shlokano )     {
        $id=(($chapterno-1)*100+$shlokano);
       // echo"id= $id<br/>";
    }             	
    else    { 
        /* Displaying debug message*/ 
        echo "please select chapterno and shlokano!<br/>";        	
    }
        
        /* displaying  shloka corresponding to chapterno and shlokano if alredy exist*/
        $result = mysql_query("SELECT * FROM bhagavat where id=$id", $con);
    if ($result)   {
        echo "This chapter number and shloka number contain a shloka:<br/>";
        echo "The shloka already entered is:<br/>";
        while($data = mysql_fetch_object($result))
            echo $data->shloka;
        mysqli_free_result($result);
    }
    else    {
        /* Displaying debug message*/     
        echo "Enter the shloka";	
    }  
    
        /* php ends here */
    mysql_close($con);    
?>  
    <hr>
    <h1> How we can store shloka into database</h1>
    <p>1.select corresponding chapter number, shloka number and type shloka in the given link 
    <a href="http://www.lexilogos.com/keyboard/sanskrit_devanagari.htm"style="text-decoration:none">http://www.lexilogos.com/keyboard/sanskrit_devanagari.htm  &nbsp; &nbsp;</a> <br></p>
    <p>2.copy these shloka and paste it into 
    <a href="http://www.endmemo.com/unicode/unicodeconverter.php"style="text-decoration:none">http://www.endmemo.com/unicode/unicodeconverter.php  &nbsp; &nbsp;</a> <br></p>
    <p>3.please copy hexadecimal value and paste it into our website <a href="databaseenter.php"style="text-decoration:none">databaseenter.php  &nbsp; &nbsp;</a> <br></p>
</div>
</body>
</html>
