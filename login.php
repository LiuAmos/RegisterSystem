
<?php
	session_start();

	$_SESSION['account']="a";
	$_SESSION['password']="b";
?>



<html>

<head>
<title>Login</title>
</head>

<body>

	<?php

	echo $_SESSION['account'];
	echo '<br>';  
 	echo $_SESSION['password'];

 	?> 

	<form action="membership.php" method="get">
  	account   : <input type="text" name="account"><br>
  	password  : <input type="text" name="password"><br>
  	<input type="submit" value="登入" name="submit" >
	</form>

<?php

	

	if (isset($_GET['submit'])) { 
	$_SESSION['account'] = $_GET['account'];
	$_SESSION['password'] = $_GET['password'];

	echo $_SESSION['account'];
	echo '<br>'; 
 	echo $_SESSION['password'];
 	} 
?> 

</body>


</html>