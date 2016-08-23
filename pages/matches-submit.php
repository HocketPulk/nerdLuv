<?php
include("top.html");
include("constants.php");

function isMatch($possMatch, $user) {
	return	$possMatch[$NAME] != $user[$NAME] &&		//possMatch isn't user
			$possMatch[$GENDER] != $user[$GENDER] &&	//possMatch is diff gender
			$possMatch[$AGE] >= $user[$MIN] &&			//possMatch is old enough
			$possMatch[$AGE] <= $user[$MAX] &&			//possMatch is young enough
			strcmp($possMatch[$TYPE], $user[$TYPE]) &&	//possMatch has partial type compatibility
			$possMatch[$COMP] == $user[$COMP] &&		//possMatch uses same OS
			$age >= possMatch[$MIN] &&					//user is old enough
			$age <= possMatch[$MAX];					//user is young enough
}

function printMatch($match) { //to change if we add user.jpg or smth
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
<?php } ?>

<!-- lists romantic matches for user given from matches.php -->
<!-- do not run, not functional: $user not created -->
<div id="main">

<?php $name = $_GET["name"];
$user = array(); //query file
?>
<h1>Matches for <?= $name ?> </h1>
<?php
try {
	$possMatches = fopen(__DIR__ ."/../singles.txt", "r");
	while (!feof($possMatches)) {
		$possMatch = explode(",", fgets($possMatches));

		if (isMatch($possMatch, $user) {				
			printMatch($possMatch);
		}
	}
} catch (Exception $e) { ?>
	<p>fix ur goddang didly darn singles.txt<p>
<?php } ?>

</div>
<?php include("bottom.html"); ?>
