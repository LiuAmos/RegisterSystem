

<html>

<head>
<meta charset="UTF-8">
<title>Register</title>
<!-- <script type="text/javascript" language="javascript" src="JavaScript/jquery-1.6.1.min.js" ></script>
<script type="text/javascript" language="javascript">
      $(function(){
          $("#submit").click(function(){
              var val=$('input:radio[name="sport"]:checked').val();
              if(val== null){
                 alert("請選一個選項!");
                 return false;
              }
              else{
                  alert(val);
              }           
          });
      });
  </script> -->
  
</head>

<body>

	<form action="login.php" method="get" name="register" onsubmit="return(validate());">
  	account      : <input type="text" name="account"><br>
  	password     : <input type="text" name="password" id="password"><br>
    checkpassword: <input type="text" name="checkpassword" id="checkpassword" onblur="ShowName()"><br>
  	name         : <input type="text" name="name"><br>
  	phone        : <input type="text" name="phone"><br>
  	email        : <input type="text" name="email"><br>
  	birthday     : <input type="text" name="birthday"><br>
    skype        : <input type="text" name="skype"><br>
    graduation: <input type="text" name="graduation"><br><br>
    sport(radio):<br>
    <input  type="radio" name="sport" value="baseball">baseball
    <input  type="radio" name="sport" value="swimming">swimming
    <input  type="radio" name="sport" value="tennis">tennis<p><br>
    checkbox:<br>
    <input  type="checkbox"  name="web[]" value="fb">FB
    <input  type="checkbox"  name="web[]" value="line" >LINE<p>
    <input type="submit" value="註冊" name="submit1" id="btnSubmit">
	</form>

<script language="javascript">
function ShowName(){
    alert('讚讚讚!!');
}
</script>


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


var aa=document.register.sport;
//document.write(aa.length);

　　var flag=false;       
　　for(var i=0;i<aa.length;i++){               
　　　　if(aa[i].checked){
                      flag=true;
                      break;
                 }         
　　　}        
　　if(!flag) {
             alert("單選按鈕沒選擇!");
             return false;
       }

 

   //return( true );
}

</script>



<script type="text/javascript" language="javascript">
  // $(function(){
  //        $("#btnSubmit").click(function(){
  //           var val=$('input:checkbox[name="web[]"]:checked').val();
  //           if(val==null){
  //               alert("複選按鈕沒選擇!");
  //               return false;
  //           }
             
  //        });
  //    });
</script>








</body>


</html>