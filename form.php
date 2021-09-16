<html>
<head>
<link rel="stylesheet" href="\task-1\style.css">
</head>
<?php
$nameerr = $emailerr= $numbererr="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
	$name=filter_var($_REQUEST['name'], FILTER_SANITIZE_STRING);
	$email=$_REQUEST['email'];
	$number=$_REQUEST['number'];
	if(empty($name)){
		$nameerr= "Enter name first";
	}
	if(!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
		$nameerr = "Only letters and white space allowed";
	}
	if(empty($email)){
	 $emailerr="Please Enter The Email";
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailerr="Email is not valid!";
	}
	if(empty($number)){
	$numbererr="please enter the number!";
	}
	if(!preg_match("/^[0][0-9]{10,11}\z/", $number)){
		$numbererr="Number is not valid";
	}

	if(empty($nameerr)&&empty($numbererr)&&empty($emailerr)){
		echo "<h1>Welcome $name! </h1>";
	}
	
}
?>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<label for="name" id="label">Name</label>	<span>* <?php echo $nameerr; ?></span>
<br>
<input type="text" name="name">
<br>
<label for="email">Email</label> <span>*<?php echo $emailerr;?></span>
<br>
<input type="text" name="email">
<br>
<label for="number">Ph No.</label><span>* <?php echo $numbererr; ?></span>
<br>
<input type="text" name="number">
<button type="submit">Submit
</button>
</form>
</body>
</html>