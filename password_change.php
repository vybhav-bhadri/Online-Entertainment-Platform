<?php
include 'server.php';

        $username = $_POST['username'];
        $password = $_POST['password'];
        $newpassword = $_POST['newpassword'];
        $confirmnewpassword = $_POST['confirmnewpassword'];
        $result = mysqli_query($db,"SELECT password FROM users WHERE username='$username'");
        if(mysqli_num_rows($result)<1)
        {
        echo "The username you entered does not exist";
        }
        // else if($password != mysqli_fetch_row($result))
        // {
        //     echo mysql_result($result);
        //     echo "You entered an incorrect password";
        // }
        else
        if($newpassword==$confirmnewpassword)
        {
         $newpassword=md5($confirmnewpassword);
        $sql=mysqli_query($db,"UPDATE users SET password='$newpassword' where username='$username'");
        echo "Congratulations You have successfully changed your password";
        }
       else
        {
       echo "Passwords do not match";
       }
      ?>