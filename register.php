

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
  	account   : <input type="text" name="account"><br>
  	password  : <input type="text" name="password"><br>
  	name      : <input type="text" name="name"><br>
  	phone     : <input type="text" name="phone"><br>
  	email     : <input type="text" name="email"><br>
  	birthday  : <input type="text" name="birthday"><br>
    skype     : <input type="text" name="skype"><br>
    graduation: <input type="text" name="graduation"><br><br>
    sport(radio):<br>
    <input  type="radio" name="sport" value="baseball">baseball
    <input  type="radio" name="sport" value="swimming">swimming
    <input  type="radio" name="sport" value="tennis">tennis<p><br>
    checkbox:<br>
    <input  type="checkbox"  name="fb" value="1">FB
    <input  type="checkbox"  name="line1" value="1">LINE<p>
    <input type="submit" value="註冊" name="submit1" id="submit">
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


var aa=document.register.sport;
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

       // var bb=document.register.con2;

       // var fff=false;

       // for(var j=0;j<bb.length;j++){

       //     if(bb[j].checked){

       //         fff=true;

       //      }

       // }
       // if(!fff){
       //     alert("多选框没有选择，请选择");
       //     return false;
       // }   

   return( true );
}
//-->
</script>

<!-- <script language="javascript">
function checkform(obj)
{
for(i=0;i<obj.sport.length;i++){
          if(obj.sport.checked==true)return true;}
alert("請選擇")
return false;       
}
</script> -->








</body>


</html>