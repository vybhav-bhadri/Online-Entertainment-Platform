<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Music</title>
	<link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Headland+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/9d035b3fae.js" crossorigin="anonymous"></script>
	<style type="text/css">
		.main{
				align-self: center;
				background-color: rgba(255,255,255,0.2);
				box-shadow: 10px 10px 10px 10px rgba(0,0,0,0.6);
				margin-top: 20px;
		}
		.container{
			background-color: rgba(210,210,210,0.5);
			text-align: center;
			padding-top: 10px;
			font-family: 'Calistoga', cursive;
			font-size: 20px;
			padding-bottom: 10px;
			width: 576px;
			border-radius: 4px;
			box-shadow: 0 0 20px 0 rgba(0,0,0,0.8);
			border: 2px solid black;
			display: inline-block;
			margin-top: 40px;
			margin-left: 5px;
		}
		.card{
			background-color: rgba(150,150,150,0.85);
			height: 195px;
			width: 160px;
			margin-left: 10px;
			margin-right: 10px;
			margin-top: 10px;
			margin-bottom: 5px;
			border-radius: 3px;
			overflow: hidden;
			box-shadow: 0 10px 10px 0 rgba(0,0,0,0.4);
			border: 1px solid black;
			display: inline-block;
			transition:0.3s;
			color: black;
		}
		.card:hover{
			height: 200px;
			width: 170px;
			transition: 0.3s;
			background-color: rgba(130,130,130,0.9);
			box-shadow: 0 10px 10px 0 rgba(250,250,250,0.95);
			margin-top: 0px;

			color: white;

		}
		.head{
			font-family: 'Headland One', serif;
			display: block;
			color:black;
		}
		.cardimg{
			margin-left: 2px;
			margin-right: 2px;
			margin-top:5px;
			width: 150px;
			height: 155px;
			border-radius: 3px;
			border:1px solid gold;
			cursor: pointer;
		}
		.title{
			color: white;
			font-size: 50px;
			font-family: 'Headland One', serif;
			display: cover;
			margin-top: 20px;
			width: 600px;
			background:rgba(0,0,0,0.85);
			border-radius: 4px;
			background-size: cover;
			box-shadow: 0 10px 10px 0 rgba(0,0,0,0.6);
		}
		nav{
			background:rgba(0,0,0,0.7);
			margin-top: 15px;
			overflow: hidden;
			border-radius: 4px;
			box-shadow: 0 10px 10px 0 rgba(0,0,0,0.6);
		}
		nav a{
			float: left;
			display: block;
			color:white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size:17px;
			border-radius: 4px;

		}
		nav a:hover{
			background-color: #ddd;
			color: black;
			transition: 0.4	s;

		}
		nav a.active{
			background-color: #2196F3;
			color: white;
		}

	body{
		background: url("Backgrounds\\canvas.png");
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
	.movtitle{
		color: black;font-family: 'Open Sans', sans-serif;
	}
	</style>
</head>
<body>
	<nav>

			<a href="index.php" ><i class="fas fa-home"></i> Home
			<a  href="Movies.php" ><i class="fas fa-video"></i> Movies</a>
			<a href="Music.php" class="active" ><i class="fas fa-music"></i> Music</a>
			<a  href="Audiobooks.php" ><i class="fas fa-book"></i> Audiobooks</a>
			<a  href="E-books.php" ><i class="fas fa-book-reader"></i> e-books</a>
			<a href="#" style="float: right;background-color: red;">
				<?php  if (isset($_SESSION['username'])) : ?>
                <strong><?php echo $_SESSION['username']; ?></strong>
                <?php endif ?>
            </a>

	</nav>
	<center>
<div class="title">Music</div></center>
<div class="main">

	<div class="container">
		<!-- <div class="head" ><strong>Action</strong></div> -->
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\a.png" ><a>
			<!-- <strong class="movtitle">Oliver Twist</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\b.png" ><a>
			<!-- <strong class="movtitle"> book2</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\c.png" ><a>
			<!-- <strong class="movtitle">book3</strong> -->
		</div>
	</div>
	<div class="container" style="margin-left: 50px;">
		<!-- <div class="head"><strong>Romantic</strong></div> -->
    <div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\d.jpg" ><a>
			<!-- <strong class="movtitle">Oliver Twist</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\e.jpg" ><a>
			<!-- <strong class="movtitle"> book2</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\f.jpg" ><a>
			<!-- <strong class="movtitle">book3</strong> -->
		</div>
	</div>
	<div class="container">
		<!-- <div class="head"><strong>Thriller</strong></div> -->
    <div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\g.jpg" ><a>
			<!-- <strong class="movtitle">Oliver Twist</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\a.png" ><a>
			<!-- <strong class="movtitle"> book2</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\e.jpg" ><a>
			<!-- <strong class="movtitle">book3</strong> -->
		</div>
	</div>
	<div class="container" style="margin-left: 50px;">
		<!-- <div class="head"><strong>Horror</strong></div> -->
    <div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\b.png" ><a>
			<!-- <strong class="movtitle">Oliver Twist</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\d.jpg" ><a>
			<!-- <strong class="movtitle"> book2</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\c.png" ><a>
			<!-- <strong class="movtitle">book3</strong> -->
		</div>
	</div>
  <div class="container">
		<!-- <div class="head"><strong>Thriller</strong></div> -->
    <div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\e.jpg" ><a>
			<!-- <strong class="movtitle">Oliver Twist</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\a.png" ><a>
			<!-- <strong class="movtitle"> book2</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\8.jpg" ><a>
			<!-- <strong class="movtitle">book3</strong> -->
		</div>
	</div>

	<div class="container" style="margin-left: 50px;">
		<!-- <div class="head"><strong>Comedy</strong></div> -->
    <div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\g.jpg" ><a>
			<!-- <strong class="movtitle">Oliver Twist</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\e.jpg" ><a>
			<!-- <strong class="movtitle"> book2</strong> -->
		</div>
		<div class="card">
			<a href="Media\\fables_01_00_aesop_64kb.mp3"><img class="cardimg" src="MovieThumbs\\a.png" ><a>
			<!-- <strong class="movtitle">book3</strong> -->
		</div>
	</div>
</div>
</body>
</html>
