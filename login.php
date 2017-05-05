<?php
   session_start();
   $_SESSION["login"] = false;
   include('.auth.php');

   $split = explode(':', $usrPassPair);
   $correctUsername = $split[0];
   $correctPassword = $split[1];

   if(isset($_POST['login_action'])){
      $enteredUsername = $_POST['username'];
      $enteredPassword = hash('sha512', $_POST['password']);

      if( ($enteredUsername == $correctUsername) && ($enteredPassword == $correctPassword) ){
         $feedback = "Login successful!";
         $_SESSION['login'] = true;
         header('Location: http://'. $_SERVER['HTTP_HOST']);
         die();
      }
      else{
         $_SESSION['login'] = false;
         $feedback = "Username or password is incorrect.";
      }
   }
   else{
      $feedback = "Please enter username and password";
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>LCD Virtual Assistant: Login</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
      <h1>Please Log In</h1>

      <p><?php if(isset($feedback)){ echo $feedback; }?></p>

      <form class="login-form" action="" method="post">

         <div class="input-wrapper">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="" placeholder="jon"/>
         </div>

         <div class="input-wrapper">
            <label for="password">Password:</label>
            <input type="password" name="password" value=""/>
         </div>

         <button type="submit" name="login_action">Log in</button>
      </form>
   </body>
</html>
