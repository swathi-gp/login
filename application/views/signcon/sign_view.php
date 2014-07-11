<!DOCTYPE html PUBLIC "-//W3C//DTD/ XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional-dtd">
<html xmlns="http://www.w3.org/1999/xhtml"></html>
	<head>
		<title>LOGIN FORM</title>
	</head>
	<body>
		<script type="text/javascript">
		function fun()
{
alert("Data submitted successfully");
}
function validate()
{
if(document.prof.name.value == "" )
   {
     alert( "Please provide your Name!" );
     document.prof.name.focus() ;
     return false;
   }
  var n=document.getElementById('name');
  var filter=/^([a-zA-z])+$/;
  if(!filter.test(n.value))
  {
  	alert('please provide valid name');
  	n.focus;
  	return false;
  }
   if( document.prof.email.value == "" )
   {
     alert( "Please provide your Email!" );
     document.prof.email.focus() ;
     return false;
   }
   var x = document.forms["prof"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
   if( document.prof.password.value == "")
   {
     alert( "Please provide your Password!" );
     document.prof.password.focus() ;
     return false;
   }
   if( document.prof.cword.value == "" )
   {
     alert( "Please provide confirming password!" );
     document.prof.cword.focus() ;
     return false;
   }
   var p=document.getElementById('password');
   var c=document.getElementById('cword');
   if(p.value!=c.value)
   {
   	alert("please enter tha same password");
   	return false;
   }
   if( document.prof.gender.value == "" )
   {
     alert( "Please enter the gender value!" );
     document.prof.gender.focus() ;
     return false;
   }
   if( document.prof.mobile.value == "" )
   {
     alert( "Please provide your Mobile number!" );
     document.prof.mobile.focus() ;
     return false;
   }
   if( document.prof.country.value == "" )
   {
     alert( "Please provide your Country!" );
     document.prof.country.focus() ;
     return false;
   }
   return true;
  }
  </script>
		<h3 style="color:blue;">Create your account</h3>
		<form action='prof' method="post" name="prof">
		<table><tr><td>
		Enter your Name:</td></tr><tr><td>
				<input type="text" name="name" id="name" placeholder="Name"></td></tr><tr><td>
		<label for="email">Email:</label></td></tr><tr><td>
		<input type="text" size="20" id="email" name="email"/>
		</td></tr><tr><td>
		<label for="password">Password:</label></td></tr><tr><td>
		<input type="password" size="20" id="password" name="password"/>
		</td></tr><tr><td>
		<label for="password">Confirming Password:</label></td></tr><tr><td>
		<input type="password" size="20" id="cword" name="cword"/>
		</td></tr><tr><td>
		Gender:</td></tr><tr><td>
		
		Female:<input type="radio" name="gender" id="gender" value="Female"/>
		Male:<input type="radio" name="gender" id="gender" value="Male"/>
		</td></tr><tr><td>
		<label for="mobile">Mobile:</label></td></tr><tr><td>
		<input type="text" size="20" id="mobile" name="mobile"/></td>
		</tr><tr><td>
		Country:</td></tr><tr><td>
		<select id="country" name="country"> 
			<option value="India">India</option>
			<option value="USA" >USA</option>
			<option value="japan">Japan</option></select>
		</td></tr></table><br/>
		
		<input type="submit" value="SUBMIT" onclick="return validate();" />
			<input type="reset" value="Reset"><br/>
		</form>
		
		<a href='logout' style="top:15%;left:70%; position:absolute;">LOGOUT</a>
		<br/>
	
	</body>
</html>