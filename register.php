

<html>

<head>
<title>Register</title>
</head>

<body>

	<form action="login.php" method="get" name="register" onsubmit="return(validate());">
  	account   : <input type="text" name="account"><br>
  	password  : <input type="text" name="password"><br>
  	name      : <input type="text" name="name"><br>
  	phone     : <input type="text" name="phone"><br>
  	email     : <input type="text" name="email"><br>
  	birthday  : <input type="text" name="birthday"><br>
    skype     : <input type="text" name="skype"><br>
    graduation: <input type="text" name="graduation"><br>
    <input type="submit" value="註冊" name="submit1">
	</form>

  <script type="text/javascript">
//<!--
// Form validation code will come here.
function validate()
{
 
   if( document.register.account.value == "" )
   {
     alert( "不可為空" );
     document.register.account.focus() ;
     return false;
   }

  if( document.register.password.value == "" )
   {
     alert( "不可為空" );
     document.register.password.focus() ;
     return false;
   }

  if( document.register.name.value == "" )
   {
     alert( "不可為空" );
     document.register.name.focus() ;
     return false;
   }

  if( document.register.phone.value == "" )
   {
     alert( "不可為空" );
     document.register.phone.focus() ;
     return false;
   }

  if( document.register.email.value == "" )
   {
     alert( "不可為空" );
     document.register.email.focus() ;
     return false;
   }

  if( document.register.birthday.value == "" )
   {
     alert( "不可為空" );
     document.register.birthday.focus() ;
     return false;
   }

  if( document.register.skype.value == "" )
   {
     alert( "不可為空" );
     document.register.skype.focus() ;
     return false;
   }

  if( document.register.graduation.value == "" )
   {
     alert( "不可為空" );
     document.register.graduation.focus() ;
     return false;
   }
   

   return( true );
}
//-->
</script>




</body>


</html>