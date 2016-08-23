<?php include("top.html"); ?>
<!-- page to submit name so can view matches -->

<div id="main">
<h1>Returning User:</h1>
<form action="matches-submit.php" method="get">
Name:
<input name="name" type="text" size="16">
<br>
<input type="submit" value="View My Matches">
</form>
</div>

<?php include("bottom.html"); ?>
