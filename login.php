<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style type="text/css">
    .title{
      padding: 2px;
      color: white;
      font-size: 30px;
      font-family: 'Headland One', serif;
      display: cover;

      background:rgba(25,0,0,0.75); 
      background-size: cover; 
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
      max-width: 1000px;
      margin-top:  50px;
      text-align: center;
      width: 400px;
      overflow: hidden;
      background-color: rgba(250,250,250,0.8);
      border-radius: 15px;

    }
    #label{
      font-family: 'Josefin Sans', sans-serif;
      font-size: 30px;
    }
    #inp{
      border-radius: 6px;
      border-color: rgba(250,250,250,0.6);
      font-family: 'Josefin Sans', sans-serif;
      font-size: 25px;

    }
    #btn{
    margin-top: 5px;
    color:red;padding:10px;
      font-size: 20px;
      background-color: black;
      border: 2px solid gold;
      padding-left: 20px;
      padding-right: 20px;
      border-radius: 20px;
      color:white;
        cursor: pointer;
      box-shadow: 5px 5px 5px 5px rgba(0,0,0,0.35);
    }
  #btn:hover{
    border: 2px solid black;
    background-color:transparent;
    color:black; 
    transition:0.4s;
    }
   #btn:focus{
    outline: none;
   }
   #btn:action{
    transform:scale(0.95);
   }
       nav{
      background:rgba(0,0,0,0.7);
      margin-top: 15px;
      overflow: hidden;
      border-radius: 4px;
      box-shadow: 0 5px 5px 0 rgba(0,0,0,0.6);
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
      transition: 0.4 s;

    }
    nav a.active{
      background-color: #2196F3;
      color: white;
    }
   </style>
</head>
<center>
<body style="background-image: url(Backgrounds\\bgo.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" >
   <nav>
    <a href="#">OEP</a>
      <a href="about.html" >About</a>
      <a href="#" >Help?</a>
      <a href="#" style="float: right;">           </a>
      <a href="Sign Up.php" style="float: right;background-color: green;">Sign Up</a>
      </nav>
<div class="card">
  <div class="title">Sign In</div>
  <form method="post" action="login.php">
  	 <h4 style="color: red;font-size: 18 px;"> <?php include('errors.php'); ?></h4>
  		<label id="label">Username</label><br>
  		<input type="text" id="inp" placeholder="Your username" name="username" ><br><br><br>
  		<label id="label">Password</label><br>
  		<input type="password" id="inp" placeholder="Password" name="password"><br><br>
  		<button type="submit" id="btn" name="login_user">Login</button>
  	<p>
  		Not yet a member? <a href="Sign Up.php">Sign up</a>
  	</p>
  </form>
</body>
</center>
</html>