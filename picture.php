<?php

	$link = mysqli_connect("shareddb1d.hosting.stackcp.net","mypics-31370ce6","qVk8rbpex/XZ","mypics-31370ce6");

    $query = "SELECT * FROM `pictures` WHERE id='".mysqli_real_escape_string($link, $_GET['id'])."'";

    $row = mysqli_fetch_array(mysqli_query($link, $query));

	if(isset($_POST['submit'])) {

		if($_POST['name']!='' AND $_POST['comment']!='') {

			$query1 = "INSERT INTO `comment`(`pid`, `name`, `comment`) VALUES('".mysqli_real_escape_string($link, $row['id'])."', '".mysqli_real_escape_string($link, $_POST['name'])."'
			, '".mysqli_real_escape_string($link, $_POST['comment'])."')";

			mysqli_query($link, $query1);

			echo "<script> alert('Successfully posted comment'); </script>";

		} else {

			echo "<script> alert('Complete the form'); </script>";

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
<title><?php echo strtoupper($row['title']); ?></title>
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

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style type="text/css">

		#fb {

			width: 6%;
			height: 6%;

		}

		#insta {

			width: 4%;
			height: 4%;

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

			#mobile { 

				display: block;

			}

			#laptop {

				display: none;

			}

		}

        .navbar-custom {

            background-color: #000;

        }

		#submit {

			margin-top: 10px;
			border-radius: 10px;
			border: 2px black solid;
			background-color: #F9F9F9;
			text-transform: uppercase;
			font-weight: bold;

		}

		#submit:hover {

			border-radius: 20px;
			background-color: black;
			color: white;

		}

		#view {

			margin-bottom: 20px;
			border: none;
			background-color: #F9F9F9;
			color: blue;
			font-weight: bold;

		}

		#view:hover {

			text-decoration: underline;

		}

		#go_back {

			text-align: left;
			margin-left: 10px;
			font-size: 100%;
			-webkit-transition: font-size 1s;
			transition: font-size 1s;

		}

		#go_back:hover {

			font-size: 130%;

		}

		#one_img {

			width: 50%;

		} 

		@media screen and (max-width: 480px) {

			#one_img {

				width: 100%;

			}

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
			&nbsp;<a href="index.php">Home</a> &nbsp;
			<a href="gallery.php">Gallery</a>

		</div>
        
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="laptop">
		<ul class="nav navbar-nav">
			<li>
			<a href="index.php">Home</a>
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

<section id="portfolio">
<h2 style="text-align: center; margin-top: 130px;"><?php echo strtoupper($row['title']); ?></h2>
<a href="gallery.php" id="go_back"><i class="fa fa-backward" aria-hidden="true"></i>&nbsp;&nbsp;Go Back</a>
<div style='text-align: center;'>
<form method="post">
<?php

	$image = "uploads/".$row['photo'];

	echo "<img src=$image alt='".$row['title']."' id='one_img' style='margin: auto; display: block;'>";
	echo '<p>Location: <strong>'.$row['location'].'</strong>';
	echo '<br>Camera: <strong>'.$row['camera'].'</strong>';
	echo '<br>Mode: <strong>'.$row['mode'].'</strong>';
	echo '<br>Date and Time: <strong>'.$row['date'].' '.$row['time'].'</strong></p>';
	echo '<p><input type="text" placeholder="Enter your name" name="name">';
	echo '<br><textarea placeholder="Enter your comment" name="comment" style="margin-top: 10px;"></textarea>';
	echo '<br><input type="submit" name="submit" value="Submit" id="submit"></p>';

?>
<button type="button" id="view">View Comments</button>
<div style="margin-bottom: 20px; display: none;" id="comments">

<?php

	$query2 = "SELECT * FROM `comment` WHERE pid='".$_GET['id']."'";

	if($result = mysqli_query($link, $query2)) {

		while($row1 = mysqli_fetch_array($result)) {

			echo '<strong>'.$row1['name'].'</strong>: '.$row1['comment'].'<br>';

		}

	}

	if(mysqli_num_rows(mysqli_query($link, $query2))==0) {

		echo "No comments posted yet!";

	}

?>

</div>
</form>
</div>
</section>

<script>

	$("#view").click(function(){

		$("#comments").toggle();

	})

</script>

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

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>