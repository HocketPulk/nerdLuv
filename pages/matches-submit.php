<!DOCTYPE html>
<html lang="en">

<!-- lists romantic matches for user given from matches.php -->
<!-- do not try running, the php is not purposefully not functional currently -->

<head>
<title>NerdLuv - Matches Submitted</title>
<link href="nerdluv.css" rel="stylesheet" >
<meta charset="utf-8" >
</head>
<body>
<!-- add header -->
	
<div id="main">

<?php
//buyer beware ur in 4 a psuedocode scare
$name = $_GET["name"];
echo "<h1>Matches for ".$name."</h1>";

//query sql, "SELECT * FROM ".$table." WHERE name = \"".$name.;


//switch this stuff out w sql stuff later
try {
	$possMatches = fopen(__DIR__ ."../singles.txt", "r"); //will be in sql format 
	while (!feof($possMatches)) {
		$possMatch = explode(",", fgets($possMatches));
		//0		1		2		3		4		5		6
		//name	gender	age		type	comp	min		max
		if ($possMatch[0] != $name &&	//possMatch isn't user
			$possMatch[1] != $gender &&	//possMatch is diff gender
			$possMatch[2] >= $min &&	//possMatch is old enough
			$possMatch[2] <= $max &&	//possMatch is young enough
			$possMatch[3] == $comp &&	//possMatch uses same OS
			$age >= possMatch[5] &&		//user is old enough
			$age <= possMatch[6]) {		//user is young enough
				
			printMatch($possMatch);
		}
	}
} catch (Exception $e) {
	echo "<p>fix ur goddang didly darn singles.txt<p>";
}

function printMatch($match) { //to change if we add user.jpg or smth
	echo "<div class=\"match\">";
	
	echo "<h2>".$match[0]."</h2>";
	
	echo "<ul>"
	echo "<li>gender: ".$match[1]."</li>";
	echo "<li>age: ".$match[2]."</li>";
	echo "<li>type: ".$match[3]."</li>";
	echo "<li>OS: ".$match[4]."</li>";
	echo "</ul>"
	
	echo "</div>"
}

?>

</div>

<!-- add footer -->
</body>
</html>
