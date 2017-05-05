<?php
   include('.auth.php');
   $feedback = 'Enter your username and password to access this site.';

   if(isset($_POST['login_action'])){
      $split = explode(':', $usrPassPair);
      $username = split[0];
      $password = split[1];

      $enteredUsername = $_POST['username'];
      $enteredPassword = sha512($_POST['password']);

      if( ($enteredUsername == $correctUsername) && ($enteredPassword == $correctPassword) ){
         $_SESSION['login'] = true;
      }
      else{
         $_SESSION['login'] = false;
         $feedback;
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>LCD Virtual Assistant: Login</title>
      <link type="stylesheet/css" href="style.css"/>
   </head>
   <body>
      <h1>Login</h1>
      <form class="login-form" name="login_action" action="index.html" method="post">
         <div class="input-wrapper">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="" placeholder="jon"/>
         </div>
         <div class="input-wrapper">
            <label for="password">Password:</label>
            <input type="password" name="password" value=""/>
         </div>
         <button type="submit">Log in<button>
      </form>
   </body>
</html>
