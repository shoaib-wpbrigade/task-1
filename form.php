<html>
<?php
$nameerr="";
function validate($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=validate($_REQUEST['name']);
	if(empty($name)){
		$nameerr= "Enter name first";
	}
	else{
		
	echo "<h1>Your name is $name</h1>";
	}
echo preg_match("/shoaib/", $name);
}

?>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="name">Name</label>	<span>* <?php echo $nameerr; ?></span>
<input type="text" name="name">
<input type="submit">
</form>


</body>

</html>