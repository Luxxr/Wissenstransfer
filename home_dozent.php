<?php
  session_start();
  if(!isset($_SESSION['id'])){
    header("Location:index.php");
  }else{
    $user_id = $_SESSION['id'];

  }

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The asbove 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Wissenstransfer - Home</title>

  <!-- Bootstrap -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link rel="stylesheet" href="css/home_dozent.css">

</head>
<body>
  <div class="container">
    <form id="contact" action="" method="post">
      <h3>Publikation erfassen</h3>
      <h4>test test test</h4>
      <fieldset>
        <select>
          <option value="Referat">Referat</option>
          <option value="Artikel">Artikel</option>
          <option value="Radiobeitrag">Radiobeitrag</option>
          <option value="Konferenz">Konferenz</option>
          <option value="Blogbeitrag">Blogbeitrag</option>
        </select>
      </fieldset>
      <fieldset>
        <input placeholder="Voller Name" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Erscheinungsdatum" type="text" tabindex="2" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
      </fieldset>
      <fieldset>
        <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
      </fieldset>

      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>

    </form>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
