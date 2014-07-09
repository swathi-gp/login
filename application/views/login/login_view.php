<!DOCTYPE html PUBLIC "-//W3C//DTD/ XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional-dtd">
<html xmlns="http://www.w3.org/1999/xhtml"></html>
	<head>
		<title>LOGIN FORM</title>
	</head>
	<body>
		<h3>LOGIN FORM</h3>
		<form action='login/process' method="post" name="process">
		<label for="username">Username:</label>
		<input type="text" size="20" id="username" name="username"/>
		<br/><br/>
		<label for="password">Password:</label>
		<input type="password" size="20" id="password" name="password"/>
		<br/>
		<br/>
		<input type="submit" value="LOGIN"/>
		<input type="reset" value="Reset"><br/>
		<br/>
		</form>
		<form action='signcon/sign' method="post" name="sign">
		<input type="submit" value="SIGHNUP"/><br/>
		</form>
		<form action='login/admin' method="post" name="admin">
		<input type="submit" value="ADMIN"/><br/>
	    </form>
	</body>
</html>