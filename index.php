<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Secret Crushes</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<link href="css/vader/jquery-ui-1.10.1.custom.css" rel="stylesheet">
	<script src="js/jquery-1.9.1.js"></script>
	<script src="js/jquery-ui-1.10.1.custom.js"></script>
	<script>
	$(document).ready(function(){
			$("#and").hide();
			$("#main").hide();
			$("#submit").hide();
			
			$("#autocomplete").focus(function(){
					this.value="";
					$("#and").fadeIn("slow");
					$("#main").fadeIn("slow");
			});
			$("#main").focus(function(){
					this.value="";
					$("#submit").fadeIn("slow");
			});
		});	
	
	$(function() {
		
		$( "#accordion" ).accordion();
		

		
		var availableTags = [
			"Miami Dade College","Ohio State University-Main Campus","University of Florida","Arizona State University","University of Minnesota-Twin Cities","The University of Texas at Austin","University of Central Florida","Texas A ","City College of San Francisco","Michigan State University","University of South Florida","Houston Community College System","Pennsylvania State University-Main Campus","University of Illinois at Urbana-Champaign","New York University","University of Wisconsin-Madison","Northern Virginia Community College","University of Michigan-Ann Arbor","Florida State University","Purdue University","University of Washington-Seattle Campus","Lone Star College System","Indiana University-Bloomington","Florida International University","Tarrant County College District","College of Southern Nevada","University of California-Los Angeles","University of Arizona","California State University-Fullerton","California State University-Long Beach","University of Maryland-College Park","Strayer University","San Diego State University","California State University-Northridge","University of California-Berkeley","Excelsior College","Rutgers University-New Brunswick","University of North Texas","Temple University","University of Houston","Brigham Young University","University of Georgia","American River College","Santa Ana College","Austin Community College District","University of Southern California","Pima Community College","Valencia Community College","Kaplan University","University of Maryland-University College","Wayne State University","Boston University","San Jose State University","North Carolina State University at Raleigh","University of Colorado at Boulder","Broward College","Virginia Commonwealth University","Riverside Community College","George Mason University","San Francisco State University","The University of Tennessee","Virginia Polytechnic Institute and State University","Indiana University-Purdue University-Indianapolis","Mt San Antonio College","University of California-Davis","Walden University","University of Wisconsin-Milwaukee","University of Cincinnati-Main Campus","University of Iowa","Santa Monica College","Troy University","East Los Angeles College","California State University-Sacramento","Louisiana State University and Agricultural ","University of Kansas","The University of Texas at San Antonio","University of Missouri-Columbia","Texas Tech University","University of North Carolina at Chapel Hill","Texas State University-San Marcos","West Virginia University","University at Buffalo","University of Utah","University of Nevada-Las Vegas","Colorado State University","Nova Southeastern University","University of South Carolina-Columbia","Palomar College","Georgia State University","Liberty University","University of California-San Diego","University of Pittsburgh-Pittsburgh Campus","Pasadena City College","Central Michigan University","University of California-Irvine","National University","Florida Atlantic University","Iowa State University","University of Oklahoma Norman Campus","East Carolina University"
		];
		$( "#autocomplete" ).autocomplete({
			source: availableTags
		});
		
		$('input:text, input:password')
		  .tabs()
		  .css({
				  'font' : 'inherit',
				 'color' : 'inherit',
			'text-align' : 'left',
			   'outline' : 'none',
				'cursor' : 'text',
		   'padding-left': '10px',
		  'padding-right': '10px',
				  'width': '200px'
		  });
		
		$('#main')
		  .tabs()
		  .css({
				  'font' : 'inherit',
				 'color' : 'inherit',
			'text-align' : 'left',
			   'outline' : 'none',
				'cursor' : 'text',
		   'padding-left': '10px',
		  'padding-right': '10px',
		    'padding-top': '5px',
		  });
		
		
		
		$( "#submit" ).button();
		$( "#radioset" ).buttonset();
		
		
		
		$( "#tabs" ).tabs();
		

		
		$( "#dialog" ).dialog({
			autoOpen: false,
			width: 400,
			buttons: [
				{
					text: "Ok",
					click: function() {
						$( this ).dialog( "close" );
					}
				},
				{
					text: "Cancel",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
		});

		// Link to open the dialog
		$( "#dialog-link" ).click(function( event ) {
			$( "#dialog" ).dialog( "open" );
			event.preventDefault();
		});
		

		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		

		
		$( "#slider" ).slider({
			range: true,
			values: [ 17, 67 ]
		});
		

		
		$( "#progressbar" ).progressbar({
			value: 20
		});
		

		// Hover states on the static widgets
		$( "#dialog-link, #icons li" ).hover(
			function() {
				$( this ).addClass( "ui-state-hover" );
			},
			function() {
				$( this ).removeClass( "ui-state-hover" );
			}
		);
	});
	</script>
	
	<!--[if IE 7]>
		<link href="css/ie7.css" rel="stylesheet" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<a href="index.html"><img id="logo" src="images/logo2.png" alt=""></a>
				<!--ul class="navigation">
					<li>
						<a class="active" href="index.html">HOME</a>
					</li>
					<li>
						<a href="about.html">ABOUT</a>
					</li>
					<li>
						<a href="specs.html">SPECS</a>
					</li>
					<li>
						<a href="shop.html">SHOP</a>
					</li>
					<li>
						<a href="contact.html">CONTACT US</a>
					</li>
				</ul-->
			</div>
			<div id="body">
				<div class="featured">
					<div class="section"> <img src="images/header<?echo rand(1,6)?>.png" width="850"><!--height="439" alt=""-->
						<div>
							<h2> <a href="index.html">TELL THE WORLD ABOUT YOUR <span>SECRET CRUSH!</span></a> </h2>
							<p>
								<form action="createnew.php" method="POST" enctype="multipart/form-data"> 
										
										<p>I am at &nbsp;
										<input type="text" id="autocomplete" name="place" value="Purdue University">
										</p>
	
										<p id='and'>and this is my secret crush...</p>
										<textarea rows='4' cols='50' id="main" name="main">That girl with the brown bag from my MA166 class, who always sits in the 3rd row in Dr. Matsuki's class. I think you're really cute. I'm totally smitten... :)</textarea>
										<br>
										<input id="submit" type="submit" value="Tell the world!">
								</form>
							</p>
						</div>
					
					</div>
					<p> </p>
				</div>
				<br><br>
				<div id="content">
					<div class="header">
						<h2><a href="index.html">LATEST CRUSHES</a></h2>
					</div>
					<div class="section">
						<!--div class="sidebar">
							<ul>
								<li>
									<a href="index.html"><img src="images/energy-saver.jpg" width="128" height="112" alt=""></a>
								</li>
								<li>
									<a href="index.html"><img src="images/voice-recognition.jpg" width="128" height="112" alt=""></a>
								</li>
								<li>
									<a href="index.html"><img src="images/retina-display.jpg" width="128" height="112" alt=""></a>
								</li>
							</ul>
						</div-->
						<div class="content">
							<ul>
								<?php
	function DbToText($tmp) {
		$DbToText = trim($tmp);
		$pbreak = chr(13) . chr(10);
		$DbToText = str_replace("<br>", $pbreak, $DbToText);
		$DbToText = str_replace("\'", "'", $DbToText);
		$redo = "\\" . chr(34);
		$DbToText = str_replace($redo, chr(34), $DbToText);
		return $DbToText;
	}
	//$con=mysqli_connect("localhost","root","k9is1337!","secretCrush");
	$con = mysqli_connect("mysql2.000webhost.com","a1978490_root","k9is1337!","a1978490_home");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$sql="SELECT * FROM mainTable WHERE flags<5 ORDER BY time DESC LIMIT 30";
	
	$data = mysqli_query($con,$sql) or die ('Error: ' . mysqli_error());
	
	while($info = mysqli_fetch_array( $data )) { 
		$maintxt = DbToText ($info['main']);
		date_default_timezone_set('America/Indiana/Vincennes'); 
		$dt = date('l, M j, h:i A', strtotime($info['time'])); 
		echo "<li>
				<form method=\"post\" action=\"flagger.php\" id=\"form".$info['id']."\">
				<h2><a>".$info['place']."</a></h2>
				<p align=\"center\">
					".$maintxt."
				</p>
				<input name=\"id\" type=\"hidden\" value=\"".$info['id']."\">
				<a class='more'>".$dt."</a> <a class='more' href=\"javascript:{}\" onclick=\"document.getElementById('form".$info['id']."').submit(); return false;\">Flag</a>
				</form>
			</li>"; 
	} 
	
	mysqli_close($con);
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div>
					<!--p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat pretium turpis sit amet laoreet. Nulla tempor lectus vel arcu congue sit amet elementum nulla interdum. Suspendisse potenti. Curabitur pharetra pulvinar fermentum. Donec faucibus ornare aliquam. Morbi ipsum est, congue eget volutpat sagittis, suscipit sit amet augue. Integer ullamcorper eleifend quam quis feugiat. Donec eu nulla non lectus volutpat ornare sed a ipsum. Sed lacus dolor, tempor eu
					</p-->
				</div>
				<!--span id="footnote"> &copy; Copyright &copy; 2011. Company name all rights reserved </span>
				<ul class="connect">
					<li><a href="http://www.freewebsitetemplates.com/go/facebook/" class="facebook">&nbsp;</a></li>
					<li><a href="http://www.freewebsitetemplates.com/go/twitter/" class="twitter">&nbsp;</a></li>
					<li><a href="http://www.freewebsitetemplates.com/go/googleplus/" class="googleplus">&nbsp;</a></li>
				</ul-->
			</div>
		</div>
	</div>
</body>
</html>
