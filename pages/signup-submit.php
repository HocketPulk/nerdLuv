<!DOCTYPE html>
<html lang="en">
<head>
<title>NerdLuv - Signup Submitted</title>
<link href="nerdluv.css" rel="stylesheet" >
<meta charset="utf-8" >
</head>
<body>
<!-- include header -->

<div id="main">
<h1>Thank you!</h1>
<br><br>
<?php
//input names: name, gender, age, type, comp, min, max
$name = $_POST["name"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$type = $_POST["type"];
$comp = $_POST["comp"];
$min = $_POST["min"];
$max = $_POST["max"];
if ($min >= $max) die("dont be naughty, give a valid age range");
//screw testing for kiersey type validity bc im stick my middle fingers up at these prep tests

//i'd sorta rather use a for loop but... ehhh
$user = $name.",".$gender.",".$age.",".$type.",".$comp.",".$min.",".$max;
try {
	file_put_contents("singles.txt", $user);
	echo "<p>Welcome to NerdLuv, ".$name."</p>";
} catch (Exception $e) {
	echo "<p>no database fer u u jerk</p>"
}
?>

<br><br>
Now <a href="matches.php">log in to see your matches!</a>

</div>

<!-- include footer -->
</html>
