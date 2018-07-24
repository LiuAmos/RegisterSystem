
<?php
session_start();
$_SESSION['a'];
?>

<html>

<head>
<meta charset="UTF-8">
<title>AdjustData</title>
</head>

<body>

	<?php

	if(isset($_GET['a'])){
	//echo $_GET['a'];
	$_SESSION['a']=$_GET['a'];
	//echo $_SESSION['a'];
	}

	if (isset($_GET['adjust'])) {
		//echo 'adjust success';
 		//echo $_GET['comfirmadjust'];
 		//echo $_SESSION['a'];
 		//echo $_a;
 		$_comfirmadjust=$_GET['comfirmadjust'];
 		$session_account=$_SESSION['account'];
 		$_a=$_SESSION['a'];

		//建立連線
 		$db_link = mysqli_connect('localhost','root','','registersystem') or die("could not connect".mysqli_error());
  		mysqli_set_charset($db_link,"utf8");

		//操作資料庫
 
 		mysqli_select_db($db_link,"registersystem");

 		if($_a == '1'){
		mysqli_query($db_link,"UPDATE student SET account='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '2'){
		mysqli_query($db_link,"UPDATE student SET password='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '3'){
		mysqli_query($db_link,"UPDATE student SET name='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '4'){
		mysqli_query($db_link,"UPDATE student SET phone='$_comfirmadjust' WHERE account='$session_account'");
		}

 		if($_a == '5'){
		mysqli_query($db_link,"UPDATE student SET email='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '6'){
		mysqli_query($db_link,"UPDATE student SET birthday='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '7'){
		mysqli_query($db_link,"UPDATE student SET skype='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '8'){
		mysqli_query($db_link,"UPDATE student SET graduation='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '9'){
		mysqli_query($db_link,"UPDATE student SET sport='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '10'){
		mysqli_query($db_link,"UPDATE student SET fb='$_comfirmadjust' WHERE account='$session_account'");
		}

		if($_a == '11'){
		mysqli_query($db_link,"UPDATE student SET line1='$_comfirmadjust' WHERE account='$session_account'");
		}

 		mysqli_close($db_link);

 		echo "<input type ='submit'  onclick=\"location.href='membership.php?b=1'\" value='查看更新結果'></input>";
 		exit;
 
    	//header("Location: http://localhost/membership.php"); 
		//確保重定向後，後續代碼不會被執行 
		//exit;
    }
	
	?>

	
 	<form method="get">
    	Adjust  : <input type="text" name="comfirmadjust"><br>
    	<input type="submit" value="確定修改" name="adjust" >
 	</form>










</body>


</html>