<?php 
// Initialize the session.
session_start();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<!-- saved from url=(0031)https://www.ashleymadison.com/# -->
<html class="webkit safari chrome win">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Badly Hashison® - Married Dating &amp; Discreet encounters - Have An Affair - Official Badly Hashison website</title>
	    <meta name="description" content="Badly Hashison is the online personals &amp; dating destination for casual encounters, married dating, discreet encounters and extramarital affairs.">
		<meta name="keywords" content="married dating, affairs, married women, cheating, escorts, dating, extramarital affairs, secret encounters, cheating wives, adult encounters, unfaithful">
		<meta property="og:title" content="Badly Hashison">
		<meta property="og:description" content="Badly Hashison is the online personals &amp; dating destination for casual encounters, married dating, discreet encounters and extramarital affairs.">
		<meta property="og:type" content="website">
		<meta name="copyright" content="Badly Hashison, Limited. 2001-2016">
		<meta name="robots" content="index,follow">
		<meta name="distribution" content="global">
		<link rel="canonical" href="#">
		<link rel="stylesheet" href="./index_files/pure.min.ecb2a387.css">
		<link rel="stylesheet" href="./index_files/main.c119fd3d.css">  
		<link rel="stylesheet" href="./index_files/theme-landing.5aff87e0.css" media="screen">
		<link rel="stylesheet" href="./index_files/cent-embedded.css">
		<!--[if IE 7]>
		<link rel="stylesheet" href="https://static-cdn.ashleymadison.com/v4/fonts/fontello-edb56131/css/cent-ie7.css">
		<![endif]-->
	</head>
	<body class="lang-en_US country-GB date-02-25 ">
		<div class="jqmWindow slim-modal pure-g pure-u-1 is-hidden jqmID1" id="dialog" style="z-index: 3000; display: none;">
			<div class="slim-modal-content light-bg pure-u-1-3 box-pad">
				<small><a class="ashley jqmClose uppercase pull-right" id="close_login_modal" href="#">Close X</a></small>
				<h1 class="box-vmarg bold font-lg">Badly Hashison:</h1>
				<form class="pure-form-aligned" name="loginform" method="POST" action="login.php">
					<div class="pure-control-group">
						<label>Username</label>
						<input type="text" id="login_username_value" name="login_username_value" value="" size="20" class="amLoginInputHilite username">
					</div>  
					<div class="pure-control-group">
						<label>Password</label>
						<input type="password" id="login_password_value" name="login_password_value" autocomplete="off" size="20" class="amLoginInputHilite password">
					</div> 
					<div class="pure-controls box-hpad">
						<button class="pure-button button-ashley" type="submit">Login »</button>
						<small class="block neighbour-top">
							<a class="ashley" href="#">Lost Login?</a>
						</small>
					</div>
				</form>
			</div>      
		</div>
		<div class="content content-960">
			<div class="box-pad-sm text-right white" id="login">
				<?php
				if ( isset($_SESSION["username"]) ) {
					echo "<small>Logged In: </small><a href=\"profile.php\">" . $_SESSION["forename"] . " " . $_SESSION["surname"] . "</a><small> | <a href=\"logout.php\">Log Out</a></small>";
				} else {
					echo "<small><a id=\"open_login_modal\" href=\"#\">Members Login <span class=\"arrow-down inline\"></span></a></small>";
				}
				?>
			</div>
			<div class="light-bg box-pad-lg collapse-bottom">
				<div class="pure-g relative ">
					<img src="./index_files/FullSizeRender.jpg" width="922" height="468">
						<div id="heroForm" class="box-pad-lg collapse-top pure-u-11-24">
							<div class="light-bg text-center">
								<h1 class="collapse-margin"><img class="neighbour-top" alt="Official Badly Hashison website" src="./index_files/global_logo_large.3a5ab3f5.gif" width="322" height="113"></h1>
								<h2 id="tagline" class="tagline pure-u-5-6 text-right" style="font-size: small;">Passwords are short and insecure. Stay faithful.<sup>®</sup></h2>
								<div class="pure-form hero-form-bg">
									<form method="POST" id="registration" class="amForm pure-g box-center pure-form" action="<?php if ( isset($_SESSION["username"]) ) { echo "list.php"; } else { echo "index.php"; } ?>">
										<div class="pure-u-7-8 box-pad-lg collapse-top"> 
											<p class="pure-u-1">Get started by telling us your relationship status:</p>
											<span id="seeking">
												<select id="pinf_uio_app%2Fstructure%2Fpublic%2Findex_main__seeking_value" name="pinf_uio_app%2Fstructure%2Fpublic%2Findex_main__seeking_value" class="shortInputHilite seeking pure-input-1 fld-large" onchange="statusChange()" tabindex="1">
													<option value="0">Please Select</option>
													<option value="-1">-----</option>
													<option value="2">Attached Male seeking Females</option>
													<option value="1">Attached Female seeking Males</option>
													<option value="3">Single Male seeking Females</option>
													<option value="4">Single Female seeking Males</option>
													<option value="5">Male seeking Males</option>
													<option value="6">Female seeking Females</option>
												</select>
											</span>
											<button type="submit" class="pure-button button-ashley button-xlarge force-wrap pure-input-1 neighbour-top" name="pinf_action_c3RlcDE%3D_YXBwL3N0cnVjdHVyZS9wdWJsaWMvaW5kZXg%3D">See Your Matches »</button>
										</div>
									</form>
								</div>
							</div>
							<div id="membersCount" class="box-pad-lg text-center font-lg white">
								<b>38,811,934</b> <strike>anonymous</strike> leaked accounts!</div>
							</div> 
						</div>
					<div id="bottomContent" class="pure-g hero-footer box-pad-b ">
						<div class="onehundredpercent pure-u-1-8 text-center">
							<span class="block">100%</span>
							<span class="block box-hpad-lg">Like-minded People</span>
						</div>
						<div class="font-med pure-u-1-4  horizontal-spacing">
							<div class="box-hpad-sm">
								<strong class="ashley">As seen on:</strong>
								<span class="textOutlets">The Pirate Bay courtesy of The Impact Team</span>
							</div>
						</div>
						<div class="leading-site pure-u-1-5 horizontal-spacing">
							<h1 class="seo-style-reset collapse-margin box-hpad-sm font-med">
							<b>Badly Hashison</b> is the world's leading married dating service for <em>discreet</em> encounters        </h1>
						</div>
						<div class="secure-site pure-u font-med  horizontal-spacing">
							<img src="./index_files/new_badges_shield.111cc150.png" width="66" height="69">
							<div class="inline font-med">
								<br>Data Breach<br>
								<b>Guaranteed</b>
							</div>
						</div>
						<div class="secure-site pure-u horizontal-spacing">
							<img src="./index_files/landing_badge_ssl.df0b5612.png" width="66" height="69">
							<div class="inline bold font-med box-vmarg-sm">
								<strike><span>SSL</span><br>Secure<br>Site</strike>
							</div>
						</div>
					</div>
				</div>
			<div id="footer" class="white text-center footer-links relative">
				<p id="footer-nav"></p>
				<p>Badly Hashison is spoof website of the infamous infidelity website 'Ashley Madison' that in July 2015 was breached by a hacking team called 'The Impact Team' who subsequently released 38 million user accounts, passwords and credit card transactions online via The Pirate Bay torrenting website. It is intended as a user education tool to allow InfoSec students to login to a service using stolen credentials.</p>
				<p class="bold">
					<span class="memberFooterCopyright force-ltr"> &copy; 2018 Badly Hashison Security Education Inc.</span>
					<span class="memberFooterCopyright">  </span>
				</p>
				<h3 class="bold white font-sm">18+ <a href="#"> Adult Dating </a> means that all members must be 18 years or older</h3>
			</div>
			<small class="block"></small>
		</div>
		<script src="./js/jquery.min.js"></script>
		<script>
			$(function(){
				$('#open_login_modal').click(function () {
					$('#dialog').fadeIn("fast", function() {
						// Animation complete
					});
				});

				$('#close_login_modal').click(function () {
					$('#dialog').fadeOut("fast", function() {
						// Animation complete
					});
				});

				$('#seeking select').change(function () {
					$("form#registration").submit();
				});
			});
		</script>
	</body>
</html>