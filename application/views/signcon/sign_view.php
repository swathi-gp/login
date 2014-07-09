<!DOCTYPE html PUBLIC "-//W3C//DTD/ XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional-dtd">
<html xmlns="http://www.w3.org/1999/xhtml"></html>
	<head>
		<title>LOGIN FORM</title>
	</head>
	<body>
		<h3>Create your account</h3>
		<form action='prof' method="post" name="prof">
		<table><tr><td>
			Name:</td><td>
				<input type="text" name="name" id="name"></td></tr><tr><td>
		<label for="email">Email:</label></td><td>
		<input type="text" size="20" id="email" name="email"/>
		</td></tr><tr><td>
		<label for="password">Password:</label></td><td>
		<input type="password" size="20" id="password" name="password"/>
		</td></tr><tr><td>
		<label for="password">Confirming Password:</label></td><td>
		<input type="password" size="20" id="cword" name="cword"/>
		</td></tr><tr><td>
		Gender:</td><td>
		
		Female:<input type="radio" name="gender" id="gender" value="Female"/>
		Male:<input type="radio" name="gender" id="gender" value="Male"/>
		</td></tr><tr><td>
		<label for="mobile">Mobile:</label></td><td>
		<input type="text" size="20" id="mobile" name="mobile"/></td>
		</tr><tr><td>
		Country:</td><td>
		<select id="country" name="country"> 
			<option value="India">India</option>
			<option value="USA" >USA</option>
			<option value="japan">Japan</option></select>
		</td></tr></table><br/>
		<input type="submit" value="SUBMIT"/>
		<input type="reset" value="Reset"><br/>
		</form>
		<br/>
		
	</body>
</html>