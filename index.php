<?php

	$link = mysqli_connect("shareddb1d.hosting.stackcp.net","mypics-31370ce6","qVk8rbpex/XZ","mypics-31370ce6");

	if(isset($_POST['submit'])) {

		if($_POST['name']!='' AND $_POST['email']!='' AND $_POST['message']!='') {

			$to = "ashutoshpsg@gmail.com";
			$subject = "Feedback from viewer";
			$message = '
Someone has sent feedback on your site:-

Name:- '.$_POST['name'].'
Email:- '.$_POST['email'].'
Message:- '.$_POST['message'].'

This is a system generated mail. Do not reply. 
			';
			$headers = 'From:noreply@myclicks.com' . "\r\n"; 
			mail($to, $subject, $message, $headers); 

			echo "<script> alert('Message sent successfully!'); </script>"; 

		} else {

			echo "<script> alert('Complete the form!'); </script>";
			echo "<script> location.href='index.php#contact'; </script>";

		}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>IMPRESSIONS OF MY MIND</title>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/theme.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="fancy/fancybox/jquery.fancybox-1.3.4.pack.js"></script>

<link rel="stylesheet" href="fancy/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style type="text/css">

		.feedback {

			margin-left: 10px;
			border-top: none;
			border-left: none;
			border-right: none;
			outline: none;
			background-color: #F9F9F9;
			border-bottom: 2px solid black;
			-webkit-transition: border 2s;
			transition: border 2s;

		}

		.feedback:focus {

			border: 2px solid black;

		}

		#message {

			height: 100px;
			width: 200px;

		}

		#fb {

			width: 6%;
			height: 6%;

		}

		#insta {

			width: 4%;
			height: 4%;

		}

		.img {
			position: relative;
			float: left;
			width:  300px;
			height: 300px;
			background-position: 50% 50%;
			background-repeat:   no-repeat;
			background-size:     cover;
		}

		.gallery {

			margin-left: 230px;

		}

		#mobile {

			display: none;

		}

		@media screen and (max-width: 480px) {

			#fb {

				width: 20%;
				height: 20%;

			}

			#insta {

				width: 13%;
				height: 13%;

			}

			.gallery {

				margin-left: 0;

			}

			.img {

				width: 100%;

			}

			.phone {

				display: none;

			}

			#mobile { 

				display: block;

			}

			#laptop {

				display: none;

			}

		}

		.submit {

			border: 2px solid black;
			background-color: #F9F9F9;
			padding: 10px;
			font-size: 120%;
			font-weight: bold;

		}

		.submit:hover {

			background-color: black;
			color: white;

		}
		
	</style>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		</button>
		<a class="navbar-brand page-scroll" href="index.php">
		IMPRESSIONS OF MY MIND </a>
		<div id="mobile">

			<br>
			&nbsp;<a href="#">Home</a> &nbsp;
			<a href="gallery.php">Gallery</a>

		</div>
        
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="laptop">
		<ul class="nav navbar-nav">
			<li>
			<a href="#">Home</a>
			</li>
			<li>
			<a href="gallery.php">Gallery</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Intro Header -->
<header class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="brand-heading">MOMENTS CAPTURED</h1>
				<p class="intro-text" style="font-family: Sacramento, cursive; font-size: 250%;">
					Ashutosh Singh
				</p>
				<a href="#about" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</header>
<!-- About Section -->
<section id="about">
<div class="container content-section text-center">
	<div class="row">
		<h2>LIL' ABOUT ME</h2>
		<div class="col-lg-8 col-lg-offset-2">
			<p>
				Hello there! I am Ashutosh Singh. I am pursuing Medicine. Photography is my passion. I like to capture the moments to show the world the real pulchritude of nature.
				I love macro photography. I was brought up in a place (Arunachal Pradesh, India) where I had the opportunity to play in the arms of nature which inspired me a lot.  	
			</p>
		</div>
	</div>
</div>
</section>

<section id="portfolio">
<h2 style="text-align: center;">GLIMPSES OF MY ART</h2>
<div class="gallery">
	<?php

		$query = "SELECT * FROM `pictures`";

		$i=1;

		if($result = mysqli_query($link, $query)) {

			while($row = mysqli_fetch_array($result)) {

				$image = "uploads/".$row['photo'];

				if($i<=4) {

					echo "<a href=$image class='image'><div class='img' style='background-image:url($image);'></div></a>";

				} else if($i>4 AND $i<=12) {

					echo "<a href=$image class='image'><div class='img phone' style='background-image:url($image);'></div></a>";

				} else {

					break;

				}

				$i++;

			}

		}

	?>

</div>
</section>

<!-- Contact Section -->
<section id="contact">
<div class="container content-section text-center">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<h2>Photographer's Message</h2>
			<p>
				If you love my wonderful photography. You can submit your feedback here. It will help me with further posts.
			</p>
			<form method="post" id="contact">
			<span class='feedText'>Name: </span><input type="text" class='feedback' name="name"><br><br>
			<span class='feedText'>Email: </span><input type="text" class='feedback' name="email"><br><br>
			<span class='feedText'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Message: </span>
			<textarea class='feedback' id="message" name="message"></textarea>
			<ul class="list-inline banner-social-buttons">
				<br><button class="submit" name="submit">SUBMIT</button>
				</li>
			</ul>
			</form>
		</div>
	</div>
</div>

</section>

<!-- Footer -->
<footer>
<div class="container text-center">
	<p class="credits">
		Copyright &copy; Ashutosh Singh 2017<br><br>
		<a href="https://www.facebook.com/profile.php?id=100005143148545" target="_blank">
		<img src="img/fb.png" id='fb'></a><a href="https://www.instagram.com/_13_ashu/" target="_blank"><img src="img/insta.png" id='insta'></a>
	</p>
</div>
</footer>

<script>

$(document).ready(function() {
	
	$("a.image").fancybox();
	
});

</script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>