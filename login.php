
<?php
session_start();
$_SESSION['account']="";
$_SESSION['password']="";
?>



<html>

<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<body>

	<?php
	//debug
	//echo $_SESSION['account'];
	//echo '<br>';  
 	//echo $_SESSION['password'];
	?> 



	<form action="membership.php" method="get">
		account   : <input type="text" name="account"><br>
		password  : <input type="text" name="password"><br>
		<input type="submit" value="登入" name="submit" >
	</form>



	<?php
	//註冊資料進資料庫

	if (isset($_GET['submit1'])) {

 		$reg_account=$_GET['account'];
 		$reg_password=$_GET['password'];
 		$reg_name=$_GET['name'];
 		$reg_phone=$_GET['phone'];
 		$reg_email=$_GET['email'];
 		$reg_birthday=$_GET['birthday'];
 		$reg_skype=$_GET['skype'];
 		$reg_graduation=$_GET['graduation'];
 		$reg_sport="";
 		$reg_fb="";
 		$reg_line1="";

 		if(isset($_GET['sport'])){
 			$reg_sport=$_GET['sport'];
 		}

 		if(isset($_GET['fb'])){
 			$reg_fb=$_GET['fb'];
 		}

 		if(isset($_GET['line1'])){
 			$reg_line1=$_GET['line1'];
 		}





		//debug
		//echo $reg_account;
		//echo $reg_password;
		//echo $reg_sport_baseball;

		//建立連線
  		$db_link = mysqli_connect('localhost','root','','registersystem') or die("could not connect".mysqli_error());
  		mysqli_set_charset($db_link,"utf8");

		//操作資料庫
 
 		mysqli_select_db($db_link,"registersystem");
		mysqli_query($db_link,"INSERT INTO student (account,password,name,phone,email,birthday,skype,graduation,sport,fb,line1) VALUES ('$reg_account','$reg_password','$reg_name','$reg_phone','$reg_email','$reg_birthday','$reg_skype','$reg_graduation','$reg_sport','$reg_fb','$reg_line1')");

 		mysqli_close($db_link);

	}
	?>


</body>


</html>