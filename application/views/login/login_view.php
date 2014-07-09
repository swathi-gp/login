<!DOCTYPE html PUBLIC "-//W3C//DTD/ XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional-dtd">
<html xmlns="http://www.w3.org/1999/xhtml"></html>
	<head>
		<title>LOGIN FORM</title>
	</head>
	<body style="width:100%; height:100%;color:green;">
<script type="text/javascript">
function validate()
{
if(document.process.username.value == "" )
   {
     alert( "Please provide your Username!" );
     document.process.username.focus() ;
     return false;
   }
   
   if( document.process.password.value == "" )
   {
     alert( "Please provide your Password!" );
     document.process.password.focus() ;
     return false;
   }
   return true;
  }
  </script>
		
		<form  method="post" name="process"  action='login/process'>
		<div style="top:30%;left:40%;position:absolute;border:double;">
			<div>
				<h3>LOGIN FORM</h3>
		<label for="username">Username:</label>
		<input type="text" size="20" id="username" name="username"/>
		<br/><br/>
		<label for="password">Password:</label>
		<input type="password" size="20" id="password" name="password"/>
		<br/>
		<br/>
		<input type="submit" value="LOGIN" onclick="return validate();"/>
		<input type="reset" value="Reset"><br/>
		<br/>
		</form>
		<form action='signcon/sign' method="post" name="sign">
		<input type="submit" value="SIGHNUP"/><br/><br/>
		</form>
		<form action='login/admin' method="post" name="admin">
		<input type="submit" value="ADMIN"/><br/>
	    </form>
	   </div>
	  </div>
	</body>
</html>