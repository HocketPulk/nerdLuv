<!DOCTYPE html>
<html lang="en">

<!-- signup page for site -->

<head>
<title>NerdLuv - Signup</title>
<link href="nerdluv.css" rel="stylesheet" >
<meta charset="utf-8" >
</head>
<body>
<!-- include header -->
	
<div id="main">
<form action="signup-submit.php" method="post">
Name:
<input name="name" type="text" size="16">
<br>
Gender (Sorry this is a hetero sight):
<input type="radio" name="gender" value="male" checked>Male
<input type="radio" name="gender" value="female">Female
<br>
Age:
<input type="number" name="age" min="18" max="150">
<br>
Personality type:
<input type="text" name="keirsey" size="6" maxlength="4">
(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
<br>
Favorite OS:
<select name="comp">
	<option value="windows" selected>Windows</option>
	<option value="mac">Mac OS X</option>
	<option value="linux">Linux</option>
</select>
<br>
Seeking age:
<input name="minage" type="number" min="18" max="150">
 to <input name="maxage" type="number" min="18" max="150">
<br>
<input type="submit" value="Sign Up" >
</form>
</div>

<!-- include footer -->
</body>
</html>
