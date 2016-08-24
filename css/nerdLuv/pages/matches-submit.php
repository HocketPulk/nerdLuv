<?php
include("constants.php");
//matches-submit lists romantic matches for user given from matches.php

function getUser($name) {	//bad style don't look
	global $USERS;
	global $NAME;
	try {
		$userFile = fopen(__DIR__ ."/../$USERS", "r");
		while (!feof($userFile)) {
			$possUser = explode(",", fgets($userFile));
			if ($possUser[$NAME] == $name) {
				fclose($userFile);
				return $possUser;
			}
		}
		fclose($userFile);
	} catch (Exception $e) { ?>
		<p>fix ur goddang didly darn singles.txt<p>
	<?php
	}
	return 0;
}

function isMatch($possMatch, $user) {
	global $NAME;
	global $GENDER;
	global $AGE;
	global $TYPE;
	global $COMP;
	global $MIN;
	global $MAX;
	
	return ($possMatch[$NAME] != $user[$NAME]) &&				//possMatch isn't user
			($possMatch[$GENDER] != $user[$GENDER]) &&			//possMatch is diff gender
			($possMatch[$AGE] >= $user[$MIN]) &&				//possMatch is old enough
			($possMatch[$AGE] <= $user[$MAX]) &&				//possMatch is young enough
			similar_text($possMatch[$TYPE], $user[$TYPE]) &&	//possMatch has a type similarity
			($possMatch[$COMP] == $user[$COMP]) &&				//possMatch uses same OS
			($user[$AGE] >= $possMatch[$MIN]) &&				//user is old enough
			($user[$AGE] <= $possMatch[$MAX]);					//user is young enough
}

function printMatch($match) { //to change if we add user.jpg or smth
	global $NAME;
	global $GENDER;
	global $AGE;
	global $TYPE;
	global $COMP;
?>
	<div class=\"match\">
	<h2><?= $match[$NAME] ?></h2>
	<ul>
		<li>gender: <?= $match[$GENDER] ?></li>
		<li>age: <?= $match[$AGE] ?></li>
		<li>type: <?= $match[$TYPE] ?></li>
		<li>OS: <?= $match[$COMP] ?></li>
	</ul>
	</div>
<?php
}

$name = $_GET["name"];
$user = getUser($name);
if ($user == 0) die("User not found.");
?>
<h1>Matches for <?= $name ?> </h1>
<?php
try {
	$possMatches = fopen(__DIR__ ."/../$USERS", "r");
	while (!feof($possMatches)) {
		$possMatch = explode(",", fgets($possMatches));

		if (isMatch($possMatch, $user)) {				
			printMatch($possMatch);
		}
	}
} catch (Exception $e) { ?>
	<p>fix ur goddang didly darn singles.txt<p>
<?php
} ?>