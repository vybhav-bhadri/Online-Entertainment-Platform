<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
<head>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  background:rgba(0,0,0,0.7);
      margin-top: 15px;
      overflow: hidden;
      border-radius: 4px;
      box-shadow: 0 10px 10px 0 rgba(0,0,0,0.6);
}

.topnav a {
  float: left;
      display: block;
      color:white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size:17px;
      border-radius: 4px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
 background-color: #2196F3;
      color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
      background-color: green;
      display: block;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size:17px;
      border-radius: 4px;
      cursor: pointer;
}

.dropdown {

  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 16px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
      display: block;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size:17px;
      border-radius: 4px;
}
</style>
</head>

<body>

<div class="topnav">
  <a class="active" href="home.html">Home</a>
  <a href="contact.html">Contact</a>
  <a href="FAQ.html">FAQ</a>
  <a href="movie.html">Movie</a>
  <a href="music.html">Music</a>
  <a href="ebook.html">E-Book</a>
  <a href="abook.html">Audio-Book</a>
  <div class="dropdown" style="float: right;margin-right: 35px;">
  <button class="dropbtn"><?php  if (isset($_SESSION['username'])) : ?>
                <strong><?php echo $_SESSION['username']; ?></strong>
                <?php endif ?></button>
  <div class="dropdown-content">
  <?php  if (isset($_SESSION['username'])) : ?>
  <a  href="index.php?logout='1'">Sign Out</a>
  <?php endif ?>
  <br>
  <a href="#">Account</a>
  <br>
  <a href="#">Help</a>
  </div>
</div>
 
</div>
</body>
<style>
  body{
    background-image: url("Backgrounds\\abc.jpg");
  
    background-attachment: fixed;
    height: 100vh;

  }
  .m1 {
    background-color: rgba(250,250,250,0.8);
    width: 1300px;
    border-radius: 15px;
    margin-left: 20px;
    margin-top: 50px;
    border: 3px solid white;
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.95);
    height: 300px;
  }
  video:hover{
    width: 280px;
    height: 200px;
    transition: 0.4s; 
    box-shadow: 0 10px 10px 0 rgba(250,250,250,0.8); 

  }
  video{
    background-color: #140E0C;
    border:2px solid black;
    margin: 19px;
    border-radius: 6px;
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.7);
  }
  .m2 {
    background-color: rgba(250,250,250,0.8);
    border-radius: 8px;
    width: 1300px;
    margin: 20px;
    border:3px solid white;
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.95);
    height:200px;
  }

  audio{
    background-color: #140E0C;
    margin: 10px;
    border-radius: 10px;
    border:2px solid black;
  }
  .m3 {
    background-color: rgba(250,250,250,0.8);;
    border-radius: 8px;
    width: 1300px;
    margin: 20px;
    border:3px solid white;
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.95);
    height:300px;
  }
img:hover{
   width: 280px;
    height: 200px;
    transition: 0.4s;  
     box-shadow: 0 10px 10px 0 rgba(250,250,250,0.8); 
}

  img{
     background-color: #140E0C;
    margin: 19px;
    border-radius: 10px;
   box-shadow: 0 10px 10px 0 rgba(0,0,0,0.7);
   border:2px solid black;
  }
</style>

  <body>
<div class='m1'>
<center><h3>Movies</h3></strong></center>
<center>                                  <video id="vid1" style="text-align:center" onmouseover="Play()" onmouseout="Pause()" width="250" height="170" controls poster="MovieThumbs\\iblade.jpg">
  <source src="Media\\movie1.mp4" type="video/mp4">
</video>
                                          <video id="vid2" style="text-align:center" onmouseover="Play1()" onmouseout="Pause1()" width="250" height="170" controls poster="MovieThumbs\\ikgf.jpg">
  <source src="Media\\movie2.mp4" type="video/mp4">
</video>
                                          <video  id="vid3" style="text-align:center" onmouseover="Play2()" onmouseout="Pause2()" width="250" height="170" controls poster="MovieThumbs\\ialladin.jpg">
  <source src="Media\\movie3.mp4" type="video/mp4">
</video>
                                          <video id="vid4" style="text-align:center" onmouseover="Play3()" onmouseout="Pause3()" width="250" height="170" controls poster="MovieThumbs\\iharry.jpg">
  <source src="Media\\movie1.mp4" type="video/mp4">
</video></center>
</div>
<br>
<br>
<div class='m2'>
<center><h3>Music</h3></center>
<center>                      <audio width="250" height="170" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio>

                                          <audio width="250" height="170" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio>
                                          <audio width="250" height="170" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio>
                                 <audio width="250" height="170" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio></center>
<h2> &nbsp &nbsp music1 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp music2 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp music3 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp music4</h2>
</div>
<br>
<div class='m3'>
  <center><h3>E-Books</h3></center>
  <center>
    
<a href="https://www.w3schools.com">
<img border="0" alt="W3Schools" src="MovieThumbs\\chidambara.jpg" width="250" height="170">
</a>
<a href="https://www.w3schools.com">
<img border="0" alt="W3Schools" src="MovieThumbs\\relative.jpg" width="250" height="170">
</a>
<a href="https://www.w3schools.com">
<img border="0" alt="W3Schools" src="MovieThumbs\\name.jpg" width="250" height="170">
</a>
<a href="https://www.w3schools.com">
<img border="0" alt="W3Schools" src="MovieThumbs\\jungle.jpg" width="250" height="170">
</a>
  </center>
</div>
<br>
<div class='m2'>
<center><h3>Audio-Books</h3></center>
<center>                      <audio width="280" height="200" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio>
                                          <audio width="280" height="200" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio>
                                          <audio width="280" height="200" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio>
                                 <audio width="280" height="200" controls>
  <source src="Media\\blade.mp3" type="audio/mp3">
</audio></center>
<h2> &nbsp &nbsp music1 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp music2 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp music3 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp music4</h2>
</div>
<br>
<script type="text/javascript"> 
var myVideo=document.getElementById("vid1"); 

function Play()
{
  myVideo.play();    
} 

function Pause()
{ 
  //myVideo.currentTime = 0;
  myVideo.pause(); 
  myVideo.load();
}
   
var myVideo1=document.getElementById("vid2"); 

function Play1()
{
  myVideo1.play();    
} 

function Pause1()
{ 
  //myVideo.currentTime = 0;
  myVideo1.pause(); 
  myVideo1.load();
}
    
var myVideo2=document.getElementById("vid3"); 

function Play2()
{
  myVideo2.play();    
} 

function Pause2()
{ 
  //myVideo.currentTime = 0;
  myVideo2.pause(); 
  myVideo2.load();
}

var myVideo3=document.getElementById("vid4"); 

function Play3()
{
  myVideo3.play();    
} 

function Pause3()
{ 
  //myVideo.currentTime = 0;
  myVideo3.pause(); 
  myVideo3.load();
}

</script> 
  </body>
</html>
