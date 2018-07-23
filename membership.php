<?php
session_start();
$_SESSION['account'];
$_SESSION['password'];
?>

<html>

<head>
<title>Membership</title>
</head>

<body>

  <?php

  //驗證帳密  
  if (isset($_GET['submit'])) { 

    $_SESSION['account'] = $_GET['account'];
    $_SESSION['password'] = $_GET['password'];
    $session_account=$_GET['account'];//用來辨識去資料庫撈哪組帳號
    //debug
    //echo $_SESSION['account'];
    //echo '<br>';  
 	  //echo $_SESSION['password'];

    //建立連線
    $db_link = mysqli_connect('localhost','root','','registersystem') or die("could not connect".mysqli_error());
    mysqli_set_charset($db_link,"utf8");

    //操作資料庫
    mysqli_select_db($db_link,"registersystem");
    $result= mysqli_query($db_link, "SELECT account,password FROM student WHERE account = '$session_account' ");
    $row = mysqli_fetch_row($result);//變成array

    //debug
    //echo $row[0];
    //echo $row[1];

    if($_SESSION['account']==$row[0] AND  $_SESSION['password']==$row[1])   {
      echo "login success";
      $result1= mysqli_query($db_link, "SELECT * FROM student WHERE account = '$session_account' ");
      $row1 = mysqli_fetch_row($result1);//變成array


      echo "
      	<table style='width:45%'>

      	<tr>
      	<th>Account</th>
      	<th>Password</th> 
      	<th>Name</th>
      	<th>Phone</th>
      	<th>Email</th>
      	<th>Birthday</th>
      	<th>Skype</th>
      	<th>Graduation</th>
      	</tr>

      	<tr>
      	<td>$row1[0]</td>
      	<td>$row1[1]</td> 
      	<td>$row1[2]</td>
      	<td>$row1[3]</td>
      	<td>$row1[4]</td>
      	<td>$row1[5]</td>
      	<td>$row1[6]</td>
      	<td>$row1[7]</td>
      	</tr>

      	</table>"
      	;
    }else{
		header("Location: http://localhost/login.php"); 
		//確保重定向後，後續代碼不會被執行 
		exit;
    }
    mysqli_close($db_link);
  }
  ?> 

  	<?php
	//調整資料

	if (isset($_GET['b'])) {
    //echo $_GET['b'];
		//echo 'adjust success';
 		//echo $_GET['comfirmadjust'];
    //echo $_GET['a'];

    //建立連線
    $db_link = mysqli_connect('localhost','root','','registersystem') or die("could not connect".mysqli_error());
    mysqli_set_charset($db_link,"utf8");

    //操作資料庫
    mysqli_select_db($db_link,"registersystem");
    $session_account=$_SESSION['account'];
    $result1= mysqli_query($db_link, "SELECT * FROM student WHERE account = '$session_account' ");
    $row1 = mysqli_fetch_row($result1);//變成array


    echo "
        <table style='width:50%'>

        <tr>
        <th>Account</th>
        <th>Password</th> 
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Skype</th>
        <th>Graduation</th>
        </tr>

        <tr>
        <td>$row1[0]</td>
        <td>$row1[1]</td> 
        <td>$row1[2]</td>
        <td>$row1[3]</td>
        <td>$row1[4]</td>
        <td>$row1[5]</td>
        <td>$row1[6]</td>
        <td>$row1[7]</td>
        </tr>

        </table>"
      ;

	}

	?>



	<table style='width:50%'>


      <tr>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=1'" value='修改' name='account'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=2'" value='修改' name='password'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=3'" value='修改' name='name'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=4'" value='修改' name='phone'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=5'" value='修改' name='email'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=6'" value='修改' name='birthday'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=7'" value='修改' name='skype'></input></td>
      <td><input type ='submit' onclick="location.href='adjustdata.php?a=8'" value='修改' name='graduation'></input></td>
      </tr>

	</table>

  <table style='width:50%'>


     <tr>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=1'" value='刪除' name='account'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=2'" value='刪除' name='password'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=3'" value='刪除' name='name'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=4'" value='刪除' name='phone'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=5'" value='刪除' name='email'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=6'" value='刪除' name='birthday'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=7'" value='刪除' name='skype'></input></td>
     <td><input type ='submit' onclick="location.href='deletedata.php?c=8'" value='刪除' name='graduation'></input></td>
     </tr>

  </table>

	<input type ='submit'  onclick="location.href='login.php'" value='登出'></input>




</body>


</html>