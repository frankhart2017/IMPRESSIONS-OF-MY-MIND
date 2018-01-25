<?php

	$link = mysqli_connect("shareddb1d.hosting.stackcp.net","mypics-31370ce6","qVk8rbpex/XZ","mypics-31370ce6");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" /> 
<meta name="description" content="">
<meta name="author" content="">
<title>GALLERY</title>
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

		.gal_img {

			width: 25%; 
			height: 25%;
			margin-right: 10px;

		}

		.gal_img:hover {

			box-shadow: 10px 10px 5px #888888;

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

				text-align: center;

			}

			.gal_img {

				width: 100%; 
				height: 50%;

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

		.pages {

			background-color: #F9F9F9;
			border: none;
			font-weight: bold;
			color: blue;

		}

		.pages:hover {

			text-decoration: underline;

		}
		
	</style>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		</button>
		<a class="navbar-brand page-scroll" href="index.php">
		IMPRESSIONS OF MY MIND </a>
		<div id="mobile">

			<br>
			&nbsp;<a href="index.php">Home</a> &nbsp;
			<a href="#">Gallery</a>

		</div>
        
	</div>
	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="laptop">
		<ul class="nav navbar-nav">
			<li>
			<a href="index.php">Home</a>
			</li>
			<li>
			<a href="#">Gallery</a>
			</li>
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>

<section id="portfolio">
<h2 style="text-align: center; margin-top: 130px;">GALLERY</h2>
<div class="gallery" style='text-align: center;'>
    <?php

        $query = "SELECT * FROM `pictures` ORDER BY id DESC";

        $num = mysqli_num_rows(mysqli_query($link, $query));

		$pages = ceil($num/12);
		
		echo "Pages: ";

		for($i = 0; $i < $pages; $i++) {

			echo "<button value='$i' class='pages'>".$i."</button> ";

		}

		echo "<br>";

        if($result = mysqli_query($link, $query)) {

			$i = 1;

			$j = 0;

            while($row = mysqli_fetch_array($result)) {

                $photo = "uploads/".$row['photo'];

				$link = "picture.php?id=".$row['id'];

				if($i<12) {
					
					if($i==1 && $j==0) {

						echo "<div id=$j>";

					} else if($i==1) {

						echo "<div id=$j>";

					}

					echo "<a href='$link'><img src=$photo class='gal_img' style='margin: 10px;'></a>";

				} else if($i==12) {

					echo "<a href='$link'><img src=$photo class='gal_img' style='margin: 10px;'></a>";

					echo "</div>";

					$i = 0;

					$j++;

				}

				$i++;

            }

        }

    ?>

	<script>

		for(var i=1;i<=<?php echo $pages; ?>;i++) {

			$("#"+i).hide();

		}

		$(".pages").click(function() {

			for(var i=0;i<=<?php echo $pages; ?>;i++) {

				if($(this).val()==i) {

					$("#"+i).show();

				} else {

					$("#"+i).hide();

				}

			}

		})

	</script>
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

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>