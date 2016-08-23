<?php include("top.html"); ?>
<!-- signup page for site -->
	
<div id="main">
<form action="signup-submit.php" method="post">
<!--input names: name, gender, age, type, comp, min, max-->
Name:
<input name="name" type="text" size="16">
<br>
Gender (Sorry this is a hetero sight):
<input name="gender" type="radio" value="male" checked>Male
<input name="gender" type="radio" value="female">Female
<br>
Age:
<input name="age" type="number" min="18" max="150">
<br>
Personality type:
<input name="type" type="text" size="6" maxlength="4">
(<a href="http://www.humanmetrics.com/cgi-win/JTypes2.asp">Don't know your type?</a>)
<br>
Favorite OS:
<select name="comp"> <!-- snooty shit: who uses just one OS for coding though... -->
	<option value="windows" selected>Windows</option>
	<option value="mac">Mac OS X</option>
	<option value="linux">Linux</option>
</select>
<br>
Seeking age:
<input name="min" type="number" min="18" max="150">
 to <input name="max" type="number" min="18" max="150">
<br>
<input type="submit" value="Sign Up" >
</form>
</div>

<?php include("bottom.html"); ?>
