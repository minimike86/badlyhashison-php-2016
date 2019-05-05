<?php 
// Initialize the session.
session_start();
session_regenerate_id(true);
if ( !isset($_SESSION["username"]) || empty($_SESSION["username"]) ) { header('Location: ./index.php'); }

function getRandStarsign() {
	$rand = rand(1,12);
	switch ($rand) {
		case 1:
			return "Aries";
			break;
		case 2:
			return "Taurus";
			break;
		case 3:
			return "Gemini";
			break;
		case 4:
			return "Cancer";
			break;
		case 5:
			return "Leo";
			break;
		case 6:
			return "Virgo";
			break;
		case 7:
			return "Libra";
			break;
		case 8:
			return "Scorpio";
			break;
		case 9:
			return "Sagittarius";
			break;
		case 10:
			return "Capricorn";
			break;
		case 11:
			return "Aquarius";
			break;
		case 12:
			return "Pisces";
			break;
	}    
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <title>Badly Hashison® - Married Dating &amp; Discreet encounters - Have An Affair - Official Badly Hashison website</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <link rel="stylesheet" href="css/bootstrap.min.css">
	    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
	      <script src="../bower_components/respond/dest/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">BadlyHashison</a>
				</div>
				<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Manage Profile</a></li>
						<li><a href="list.php">Lists</a></li>
						<li><a href="#">Viewed Me <span class="badge"><?php echo rand(1,10000); ?></span></a></li>
						<li><a href="#">Mailbox <span class="badge"><?php echo rand(1,10); ?></span></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Buy Credits</a></li>
						<li><a href="logout.php">Log out</a></li>
					</ul>
				</div>
			</div>
		</nav>
	    <div class="container">
	    	<div class="row">
	    		<div class="col-xs-4">
	    			<div class="thumbnail">
						<img src="./images/default_avatar.jpg" alt="default avatar"></a>
						<div class="caption">
							<p>This user has no photos.</p>
						</div>
					</div>
					<p><span class="glyphicon glyphicon-eye-open"></span> <a href="#">Send a Wink</a></p>
					<p><span class="glyphicon glyphicon-heart"></span> <a href="#">Add to favorites</a></p>
	    		</div>
	    		<div class="col-xs-4">
	    			<h1 class="text-primary">
	    				<?php
	    				if ( isset($_GET["u"]) && !empty($_GET["u"]) ) {
	    					// magic quote set
	    					echo htmlspecialchars($_GET["u"]);
	    				} else if ( isset($_SESSION["username"]) && !empty($_SESSION["username"]) ) {
	    					// user logged in
							echo $_SESSION["username"];
	    				}
	    				?>
	    			</h1>
	    			<p class="text-muted"><em>"heeeeey"</em></p>
	    			<p><span class="text-muted">Age:</span> 
	    				<?php
	    				if ( isset($_GET["u"]) && !empty($_GET["u"]) ) {
	    					// magic quote set
	    					$age1 = rand(18,50);
	    					$age2 = rand(18,50);
	    					$age3 = rand(18,50);
	    					if ( $age1>$age2 && $age1>$age3 ) {
	    						echo $age1 . " (" . getRandStarsign() . ")";
	    					} else if ( $age2>$age1 && $age2>$age3 ) {
	    						echo $age2 . " (" . getRandStarsign() . ")";
	    					} else if ( $age3>$age1 && $age3>$age2 ) {
	    						echo $age3 . " (" . getRandStarsign() . ")";
	    					}
	    				} else if ( isset($_SESSION["username"]) && !empty($_SESSION["username"]) ) {
	    					// user logged in
							echo "43 (Capricorn)";
	    				}
	    				?></p>
	    			<p><span class="text-muted">Location:</span> United Kingdom</p>
	    			<p><span class="text-muted">Height:</span> <?php echo rand(4,6); ?>'<?php echo rand(0,11); ?>" (<?php echo rand(150,200); ?>cm)</p>
	    			<p><span class="text-muted">Weight:</span> <?php echo rand(80,260); ?> lbs (<?php echo rand(30,100); ?>kgs)</p>
	    			<p><span class="text-muted">Lanuages Spoken:</span> English</p>
	    			<p><span class="text-muted">My Limits are:</span> Cyber Affair / Erotic Chat</p>
	    			<p><span class="text-muted">Status:</span> Attached Female seeking Males</p>
	    			<p><span class="text-muted">Gender:</span> Female</p>
	    			<p><span class="text-muted">Ethnicity:</span> Caucasion (white)</p>
	    			<p><span class="text-muted">Smoking Habits:</span> Not specified</p>
	    		</div>
	    		<div class="col-xs-4">
	    			<p><?php if ( isset($_SESSION["username"]) ) { echo "<span class=\"label label-success\">I'm Online</span>"; } else { echo "<span class=\"label label-danger\">I'm Offline</span>"; }?></p>
	    			<a href="#" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-envelope"></span> Message Me</a>
	    			<a href="#" class="btn btn-default btn-lg btn-block"><span class="glyphicon glyphicon-gift"></span> Send Me A Gift</a>
	    			<a href="#" class="btn btn-default btn-lg btn-block disabled"><span class="glyphicon glyphicon-earphone"></span> Chat With Me</a>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-xs-12 well well-sm">
	    			<h5 class="text-info">Preferences and encounters I am open to:</h5>
	    			<p>NSFW, NSFW, NSFW, NSFW, NSFW, NSFW, NSFW, NSFW, NSFW, NSFW, NSFW, NSFW</p>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-xs-12 well well-sm">
	    			<h5 class="text-info">What really turns me on:</h5>
	    			<p>NSFW</p>
	    		</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-xs-12 well well-sm">
	    			<h5 class="text-info">Member Feedback: <a href="#">about member feedback[?]</a></h5>
	    			<div class="col-xs-2" style="text-align: center;">
	    				<p>(<?php echo rand(0,1000); ?>)</p>
	    				<p>gives good chat</p>
	    			</div>
	    			<div class="col-xs-2" style="text-align: center;">
	    				<p>(<?php echo rand(0,1000); ?>)</p>
	    				<p>pursues fantasies</p>
	    			</div>
	    			<div class="col-xs-2" style="text-align: center;">
	    				<p>(<?php echo rand(0,1000); ?>)</p>
	    				<p>worth the time</p>
	    			</div>
	    			<div class="col-xs-2" style="text-align: center;">
	    				<p>(<?php echo rand(0,1000); ?>)</p>
	    				<p>better in person</p>
	    			</div>
	    			<div class="col-xs-2" style="text-align: center;">
	    				<p>(<?php echo rand(0,1000); ?>)</p>
	    				<p>salacious</p>
	    			</div>
	    			<div class="col-xs-2" style="text-align: center;">
	    				<p>(<?php echo rand(0,1000); ?>)</p>
	    				<p>popular</p>
	    			</div>
	    		</div>
	    	</div>
	    </div>
	    <script src="./js/jquery.min.js"></script>
	    <script src="./js/bootstrap.min.js"></script>
	</body>
</html>