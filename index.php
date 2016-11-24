<?php
  /*session_start();
  if(isset($_SESSION['id'])) unset($_SESSION['id']);
  session_destroy(); */

  require_once('system/data.php');
  require_once('system/security.php');

  $error = false;
  $error_msg = "";
  $success = false;
  $success_msg = "";

  /*function get_db_connection()
  {
    $db = mysqli_connect('localhost', '861288_1_1', 'u7wqnSfU6Hy3', '861288_1_1')
      or die('Fehler beim Verbinden mit dem Datenbankserver.');
    mysqli_set_charset($db, "utf8");
    return $db;
  }*/


  /*if(isset($_POST['login-submit'])){
    echo $_POST['email'];
  }*/

 if(isset($_POST['login-submit'])){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email = filter_data($_POST['email']);
      $password = filter_data($_POST['password']);

    /*  $db = get_db_connection();
      $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password';"; */

      $result = login($email, $password);

    /*  mysqli_close($db); */

      $row_count = mysqli_num_rows($result);


      if($row_count == 1){
        $user = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['id'] = $user['user_id'];
        header("Location:optionen.php");
      }else {
        $error = true;
        $error_msg .= "Leider konnten wir BLA BLA.<br/>";
      }
    }else {
      $error = true;
      $error_msg .= "Bitte füllen sie bla bla aus. <br/>";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>wissenstransfer - Login</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
  </head>

  <body>
<!--http://bootsnipp.com/snippets/featured/login-and-register-tabbed-form-->
    <div class="container">
	<div class="row">

<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>HTW Wissenstransfer</h1>
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>

    <form id="login-form" action="index.php" method="post" role="form" style="display: block;">
      <div class="input-container">
        <input type="email" name="email" id="email" tabindex="1" autocomplete="off" class="form-control" required="required"/>
        <label for="email">E-Mail</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" name="password" tabindex="2" id="Password" autocomplete="off" class="form-control" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Login">
      </div>

    </form>


  </div>
</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
      $(function() {

        $('#login-form-link').click(function(e) {
      		$("#login-form").delay(100).fadeIn(100);
       		$("#register-form").fadeOut(100);
      		$('#register-form-link').removeClass('active');
      		$(this).addClass('active');
      		e.preventDefault();
      	});

      	$('#register-form-link').click(function(e) {
      		$("#register-form").delay(100).fadeIn(100);
       		$("#login-form").fadeOut(100);
      		$('#login-form-link').removeClass('active');
      		$(this).addClass('active');
      		e.preventDefault();
      	});

      });
    </script>

  </body>
</html>
