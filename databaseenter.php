<!DOCTYPE html>
<html>

<head>
<style>
.boxed {
  border: 3px solid gray ;
  background-color: lightgray;
  width: 30%;

 
}

@media screen and (max-width: 1000px) {
    body {
        background-color: white;    
    }
	
         .boxed{
          width:100%;
}
}
</style>
</head>
<body>
<?php $chapterno=$_GET['chapterno'] ; $shlokano=$_GET['shlokano'] ;
	echo $chapterno ." ".$shlokano;?>


<div class="boxed">
<table>
<form NAME ="form1" METHOD ="GET" ACTION = "success.php">
<TR>
    <TD>Enter the shloka: </TD>
    <TD><textarea name="entershloka"value="shloka" cols="30" rows="12"></textarea></TD>
  </TR>
</table>
<center><P><INPUT TYPE="SUBMIT" style="color:RED" VALUE="submit" NAME="SUBMIT"></P><center><br>
<p>chapter no<p>
<?php echo $chapterno ." ".$shlokano;?>
</form>
</body>
</html>

