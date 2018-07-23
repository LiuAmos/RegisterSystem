
<?php
session_start();
$_SESSION['c'];
?>

<html>

<head>
<title>DeleteData</title>
</head>

<body>

	<?php

	if(isset($_GET['c'])){
	//echo $_GET['a'];
	$_SESSION['c']=$_GET['c'];
	//echo $_SESSION['a'];
	}

	if (isset($_GET['delete'])) {
		//echo 'adjust success';
 		//echo $_GET['comfirmadjust'];
 		//echo $_SESSION['a'];
 		//echo $_a;
 		$session_account=$_SESSION['account'];
 		$_c=$_SESSION['c'];

		//建立連線
 		$db_link = mysqli_connect('localhost','root','','registersystem') or die("could not connect".mysqli_error());
  		mysqli_set_charset($db_link,"utf8");

		//操作資料庫
 
 		mysqli_select_db($db_link,"registersystem");

 		if($_c == '1'){
		mysqli_query($db_link,"UPDATE student SET account='' WHERE account='$session_account'");
		}

		if($_c == '2'){
		mysqli_query($db_link,"UPDATE student SET password='' WHERE account='$session_account'");
		}

		if($_c == '3'){
		mysqli_query($db_link,"UPDATE student SET name='' WHERE account='$session_account'");
		}

		if($_c == '4'){
		mysqli_query($db_link,"UPDATE student SET phone='' WHERE account='$session_account'");
		}

 		if($_c == '5'){
		mysqli_query($db_link,"UPDATE student SET email='' WHERE account='$session_account'");
		}

		if($_c == '6'){
		mysqli_query($db_link,"UPDATE student SET birthday='' WHERE account='$session_account'");
		}

		if($_c == '7'){
		mysqli_query($db_link,"UPDATE student SET skype='' WHERE account='$session_account'");
		}

		if($_c == '8'){
		mysqli_query($db_link,"UPDATE student SET graduation='' WHERE account='$session_account'");
		}

 		mysqli_close($db_link);

 		echo "<input type ='submit'  onclick=\"location.href='membership.php?b=1'\" value='查看更新結果'></input>";
 		exit;
 
    	//header("Location: http://localhost/membership.php"); 
		//確保重定向後，後續代碼不會被執行 
		//exit;
    }
	
	?>

	
 	<input type ='submit'  onclick="location.href='deletedata.php?delete=1'" value='確定刪除'></input>
 	<input type ='submit'  onclick="location.href='membership.php?b=1'" value='回到會員資料'></input>










</body>


</html>