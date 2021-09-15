<html>

<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
<label for="name">Name</label>	
<input type="text" name="name">
<input type="submit">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=$_REQUEST['name'];
	if(empty($name)){
		echo "Enter name first";
	}
	else{
	echo "<h1>Your name is $name</h1>";
	}
echo preg_match("/shoaib/", $name);
}

?>

</body>

</html>