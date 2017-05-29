<?php
session_start();
   include('.auth.php');
   $feedback = 'Enter your username and password to access this site.';
   $feedback_class = 'normal';
   $redirect = false;

   if(isset($_POST['login_action'])){
      $split = explode(':', $usr_pass_pair);
      $correct_username = $split[0];
      $correct_password = strtolower($split[1]);

      $entered_username = $_POST['username'];
      $entered_password = hash('sha512', $_POST['password']);

      if( ($entered_username == $correct_username) && ($entered_password == $correct_password) ){
         $_SESSION['login'] = true;
         $redirect = true;
         $feedback = 'Successfully logged in! You will be redirected shortly.';
         $feedback_class = 'success';
      }
      else{
         $_SESSION['login'] = false;
         $redirect = false;
         $feedback = 'Wrong username and password. Please try again.';
         $feedback_class = 'error';
      }
   }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <link rel="shortcut icon" href="images/favicon.png">
      <title>LCD Virtual Assistant: Login</title>
      <link rel="stylesheet" type="text/css" href="style.min.css"/>
      <link rel="stylesheet" type="text/css" href="login-style.css"/>
      <?php
         if($redirect){
            ?>
               <script>
                  console.log("printing myself");

                  setTimeout(function(){
                     window.location.replace("/");
                  }, 2500);
               </script>
            <?php
         }
      ?>
   </head>
   <body>

      <div class="login-wrapper">
         <h1>Please <span class="accented">Log In</span></h1>
         <p class="feedback <?php echo $feedback_class; ?>">
            <?php echo $feedback; ?>
         </p>
         <form class="login-form" action="" method="post">
            <div class="input-wrapper">
               <label for="username">Username:</label>
               <input autofocus="true" type="text" name="username" id="username" value="" placeholder="Enter your username"/>
            </div>
            <div class="input-wrapper">
               <label for="password">Password:</label>
               <input type="password" name="password" value="" placeholder="Enter your password"/>
            </div>
            <button name="login_action" type="submit">Log in</button>
         </form>
         <p><strong>I don't have a username or password:</strong> Contact <a href="mailto:acit-ww@accenture.com">The Accenture Center for IBM Technologies</a> to obtain credentials if you do not have one.</p>
      </div>
   </body>

</html>
