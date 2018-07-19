

<html>

<head>
<title>membership</title>
</head>

<body>

<?php

//驗證帳密  

  if (isset($_GET['submit'])) { 

  $_SESSION['account'] = $_GET['account'];
  $_SESSION['password'] = $_GET['password'];
	//debug
	//echo $_SESSION['account'];
	//echo '<br>';  
 	//echo $_SESSION['password'];

  //建立連線
 $db_link = mysqli_connect('localhost','root','','registersystem') or die("could not connect".mysqli_error());
 mysqli_set_charset($db_link,"utf8");

//操作資料庫
mysqli_select_db($db_link,"registersystem");
$result= mysqli_query($db_link, "SELECT account,password FROM student WHERE account ='b12345' ");
$row = mysqli_fetch_row($result);//變成array

//debug
//echo $row[0];
//echo $row[1];
if($_SESSION['account']==$row[0] AND  $_SESSION['password']==$row[1]){
echo "login success";
echo  "<table style='width:100%'>

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
    <td>2</td>
    <td>2</td> 
    <td>2</td>
    <td>2</td>
    <td>2</td>
    <td>2</td>
    <td>2</td>
    <td>2</td>
  </tr>

   <tr>
   <td>2</td>
   <td>2</td> 
   <td>2</td>
   <td>2</td>
   <td>2</td>
   <td>2</td>
   <td>2</td>
   <td>2</td>
   </tr>

</table>";


}
else{echo "false";} 
}
?> 




</body>


</html>