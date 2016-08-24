<?php
include("constants.php");

function isNotType($type) {
	return	!(($type[0] == "E" || $type[0] == "I") &&
			($type[1] == "N" || $type[1] == "S") &&
			($type[2] == "F" || $type[2] == "T") &&
			($type[3] == "J" || $type[3] == "P"));
}
?>

<h1>Thank you!</h1>
<br><br>
<?php
//input names: name, gender, age, type, comp, min, max
$user = array(	$_POST["name"],
				$_POST["gender"],
				$_POST["age"],
				$_POST["type"],
				$_POST["comp"],
				$_POST["min"],
				$_POST["max"]);
if ($user[$MIN] >= $user[$MAX]) die("dont be naughty, give a valid age range");
if (isNotType($user[$TYPE])) die("look i don't like keirsey either but u gotta");

$entry = implode(",", $user);

try {
	file_put_contents(__DIR__."/../singles.txt", "\n".$entry, FILE_APPEND);
?>
	<p>Welcome to NerdLuv, <?= $user[$NAME] ?></p>
<?php } catch (Exception $e) { ?>
	<p>no database fer u u jerk</p>
<?php } ?>

<br><br>
Now <a href="matches.php">log in to see your matches!</a>