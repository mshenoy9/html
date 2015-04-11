 <html>
<head>
<title>A BASIC HTML FORM</title>
<?PHP

$username = $_GET['username'];
print ($username);

?>
</head>
<body>

<FORM NAME ="form1" METHOD =" " ACTION = "">

<INPUT TYPE = "TEXT" VALUE ="username"NAME = "username">
<INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Login">

</FORM>

</body>
</html>