<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>NerdLuv</title>
    <meta charset="utf-8" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <link href="css/nerdluv.css" type="text/css" rel="stylesheet" />

    <script src="http://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js" type="text/javascript"></script>
    <script src="provided.js" type="text/javascript"></script>
	<script src="show.js" type="text/javascript"></script>
</head>
<body>
    <div id="cont">
        <div id="bannerarea">
            <h1>NerdLuv</h1>
            <img src="img/banner.png" /><br />
            <em>where meek geeks meet</em>
        </div>
        <div id="b1">
            <p>This page is for single nerds to meet and date each other!  Type in your personal information and wait for the nerdly luv to begin!  Thank you for using our site.</p>
        </div>
        <div class="main">
        	<?php
        	if(isset($_POST["name"])) {
        		include("pages/signup-submit.php");
        	}
        	else if(isset($_GET["name"])) {
        		include("pages/matches-submit.php");
        	}
        	else {
        	?>
            <div id="options">
                <ul id="opts">
                    <li id="register">
                        <a href="#" onclick="showSignup();">
                            <img src="img/registericon.png" onclick=""/>Sign up for a new account
                        </a>
                    </li>
                    <li id="match">
                        <a href="#" onclick="showMatches();">
                            <img src="img/hearticon.png" />Check your matches
                        </a>
                    </li>
                </ul>
            </div>
            <aside>
                <?php include("pages/signup.php"); ?>
				<?php include("pages/matches.php"); ?>
            </aside>
            <?php
            }
            ?>
        </div>
        <footer>
            <p> Results and page (C) Copyright NerdLuv Inc.</p>
            <!--<dl>
            <dd>
                <a href="index.php">
                    <img src="img/back.gif" /> Back to front page
                </a>
            </dd>
        </dl>-->
        </footer>
    </div>
</body>
</html>