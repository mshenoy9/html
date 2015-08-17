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
      width: 60%;
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
   <center> <div class="boxed">
    <table>
    <form NAME ="form1" METHOD ="GET" ACTION = "success.php">
    <TR>
        <TD style = "color: blue">Enter the shloka: </TD>
        <TD><textarea name="shloka"value="shloka" cols="30" rows="12"></textarea></TD>
    </TR>
    </table>
    <center><P><INPUT TYPE="SUBMIT" style="color:RED" VALUE="submit" NAME="submit"></P></center><br>
    <p style = "color: blue">Chapter no and Shloka no</p>

<?php 
    echo $chapterno ." ". $shlokano
?>
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
    else    {
        /* Displaying debug message*/     
     // echo "Database Succesfully Selected!<br/>";
    }
        
        /* check shlokano and chapterno clicked*/   
 	if ($chapterno && $shlokano )     {
        $id=(($chapterno-1)*100+$shlokano);
      //  echo"id= $id<br/>";
    }             	
    else    { 
        /* Displaying debug message*/ 
        echo '<span style="color:red;text-align:center;">please select chapterno and shlokano!<br/></span>';        	
    }
  
        
        /* displaying  shloka corresponding to chapterno and shlokano if alredy exist*/
        $result = mysql_query("SELECT * FROM bhagavat where id=$id", $con);
    if ($result)   {
        while($data = mysql_fetch_object($result))
        if ($data->shloka != NULL && $data->shloka != " ")            {
            echo '<span style="color:red;text-align:center;">This chapter number and shloka number contain a shloka:<br/></span>';
            echo '<span style="color:red;text-align:center;">The shloka already entered is:<br/></span>';
            echo '<font size="3"'."face='chandas'>";
            echo $data->shloka;
        }
        else    {
            echo '<span style="color:red;text-align:center;">Shloka not entered , please enter the shloka!<br/></span>';
        }
        mysqli_free_result($result);
    }
    else    {
        /* Displaying debug message*/     
       // echo "Enter the shloka";
        	
    }  
    
        /* php ends here */
    mysql_close($con);    
?>  
    <hr>
    <h1> How we can store shloka into database</h1>
    <p style = "color: blue">make sure that there is no shloka in corresponding chapter number and shloka number you entered(you can check this by the message given just under where chapter no and shloka no is printed in databaseenter.php</p>
    <p>1.select corresponding chapter number, shloka number and type shloka in the given link 
    <a href="http://www.lexilogos.com/keyboard/sanskrit_devanagari.htm"style="text-decoration:none">http://www.lexilogos.com/keyboard/sanskrit_devanagari.htm  &nbsp; &nbsp;</a> <br></p>
    <p>2.copy these shloka and paste it into 
    <a href="http://www.endmemo.com/unicode/unicodeconverter.php"style="text-decoration:none">http://www.endmemo.com/unicode/unicodeconverter.php  &nbsp; &nbsp;</a> <br></p>
    <p>3.please copy hexadecimal value and paste it into our website databaseenter.php,just above the submit button  &nbsp; &nbsp;</a> <br></p>
</div></center>
</body>
</html>
