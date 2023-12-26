<?php
$show = (isset($_GET['load']) && $_GET['load'] !='') ? $_GET['load'] : '';
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Gerogalin - Portfolio</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
	<div id="header">
		<div id="Title">
			<div id="name-box"><h1 id="name">JVN PORTFOLIO</h1></div>
		</div>
		<div id="nav">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="index.php?load=css">CSS</a></li>
				<li><a href="index.php?load=svg">SVG</a></li>
                <li><a href="index.php?load=canvas">CANVAS</a></li>
					<div id="profile-box">
						<h2 id="line">|</h2>
						<div><a href="index.php?load=profile">AUTHOR</a></div>
					</div>
			</ul>
            
		</div>


        <div class="content">

		<?php

		switch ($show) {
			case 'profile':
				include_once 'profile.php';
				break;
			case 'canvas':
				include_once 'canvas.php';
				break;
			case 'css':
				include_once 'css.php';
				break;
			case 'svg':
				include_once 'svg.php';
				break;
			default:
				include_once 'home.php'; 
				break;
			}
		?>



        </div>


	

  
   
    <div class="footer">
        <p>University of St. La Salle Bacolod | ITL303 Portfolio</p>
        <p> by <span>JEVEN S. GEROGALIN </span>|  BSIT4B</p>
    </div>
</body>
	
</html>